<?php

namespace CFPropertyList;

use \Iterator, \DOMDocument, \DOMException, DOMImplementation, DOMNode;

require_once(__DIR__ . '/IOException.php');
require_once(__DIR__ . '/PListException.php');
require_once(__DIR__ . '/CFType.php');
require_once(__DIR__ . '/CFBinaryPropertyList.php');
require_once(__DIR__ . '/CFTypeDetector.php');

class CFPropertyList extends CFBinaryPropertyList implements Iterator
{
    const FORMAT_BINARY = 1;
    const FORMAT_XML = 2;
    const FORMAT_AUTO = 0;
    protected $file = null;
    protected $detectedFormat = null;
    protected $format = null;
    protected $value = array();
    protected $iteratorPosition = 0;
    protected $iteratorKeys = null;
    protected static $types = array(
        'string' => 'CFString',
        'real' => 'CFNumber',
        'integer' => 'CFNumber',
        'date' => 'CFDate',
        'true' => 'CFBoolean',
        'false' => 'CFBoolean',
        'data' => 'CFData',
        'array' => 'CFArray',
        'dict' => 'CFDictionary'
    );

    public function __construct($file = null, $format = self::FORMAT_AUTO)
    {
        $this->file = $file;
        $this->format = $format;
        $this->detectedFormat = $format;
        if ($this->file) $this->load();
    }

    public function loadXML($file = null)
    {
        $this->load($file, CFPropertyList::FORMAT_XML);
    }

    public function loadXMLStream($stream)
    {
        if (($contents = stream_get_contents($stream)) === FALSE) throw IOException::notReadable('<stream>');
        $this->parse($contents, CFPropertyList::FORMAT_XML);
    }

    public function loadBinary($file = null)
    {
        $this->load($file, CFPropertyList::FORMAT_BINARY);
    }

    public function loadBinaryStream($stream)
    {
        if (($contents = stream_get_contents($stream)) === FALSE) throw IOException::notReadable('<stream>');
        $this->parse($contents, CFPropertyList::FORMAT_BINARY);
    }

    public function load($file = null, $format = null)
    {
        $file = $file ? $file : $this->file;
        $format = $format !== null ? $format : $this->format;
        $this->value = array();
        if (!is_readable($file)) throw IOException::notReadable($file);
        switch ($format) {
            case CFPropertyList::FORMAT_BINARY:
                $this->readBinary($file);
                break;
            case CFPropertyList::FORMAT_AUTO:
                $fd = fopen($file, "rb");
                if (($magic_number = fread($fd, 8)) === false) throw IOException::notReadable($file);
                fclose($fd);
                $filetype = substr($magic_number, 0, 6);
                $version = substr($magic_number, -2);
                if ($filetype == "bplist") {
                    if ($version != "00") throw new PListException("Wrong file format version! Expected 00, got $version!");
                    $this->detectedFormat = CFPropertyList::FORMAT_BINARY;
                    $this->readBinary($file);
                    break;
                }
                $this->detectedFormat = CFPropertyList::FORMAT_XML;
            case CFPropertyList::FORMAT_XML:
                $doc = new DOMDocument();
                if (!$doc->load($file)) throw new DOMException();
                $this->import($doc->documentElement, $this);
                break;
        }
    }

    public function parse($str = NULL, $format = NULL)
    {
        $format = $format !== null ? $format : $this->format;
        $str = $str !== null ? $str : $this->content;
        $this->value = array();
        switch ($format) {
            case CFPropertyList::FORMAT_BINARY:
                $this->parseBinary($str);
                break;
            case CFPropertyList::FORMAT_AUTO:
                if (($magic_number = substr($str, 0, 8)) === false) throw IOException::notReadable("<string>");
                $filetype = substr($magic_number, 0, 6);
                $version = substr($magic_number, -2);
                if ($filetype == "bplist") {
                    if ($version != "00") throw new PListException("Wrong file format version! Expected 00, got $version!");
                    $this->detectedFormat = CFPropertyList::FORMAT_BINARY;
                    $this->parseBinary($str);
                    break;
                }
                $this->detectedFormat = CFPropertyList::FORMAT_XML;
            case CFPropertyList::FORMAT_XML:
                $doc = new DOMDocument();
                if (!$doc->loadXML($str)) throw new DOMException();
                $this->import($doc->documentElement, $this);
                break;
        }
    }

    protected function import(DOMNode $node, $parent)
    {
        if (!$node->childNodes->length) return;
        foreach ($node->childNodes as $n) {
            if (!isset(self::$types[$n->nodeName])) continue;
            $class = 'CFPropertyList\\' . self::$types[$n->nodeName];
            $key = null;
            $ps = $n->previousSibling;
            while ($ps && $ps->nodeName == '#text' && $ps->previousSibling) $ps = $ps->previousSibling;
            if ($ps && $ps->nodeName == 'key') $key = $ps->firstChild->nodeValue;
            switch ($n->nodeName) {
                case 'date':
                    $value = new $class(CFDate::dateValue($n->nodeValue));
                    break;
                case 'data':
                    $value = new $class($n->nodeValue, true);
                    break;
                case 'string':
                    $value = new $class($n->nodeValue);
                    break;
                case 'real':
                case 'integer':
                    $value = new $class($n->nodeName == 'real' ? floatval($n->nodeValue) : intval($n->nodeValue));
                    break;
                case 'true':
                case 'false':
                    $value = new $class($n->nodeName == 'true');
                    break;
                case 'array':
                case 'dict':
                    $value = new $class();
                    $this->import($n, $value);
                    if ($value instanceof CFDictionary) {
                        $hsh = $value->getValue();
                        if (isset($hsh['CF$UID']) && count($hsh) == 1) {
                            $value = new CFUid($hsh['CF$UID']->getValue());
                        }
                    }
                    break;
            }
            if ($parent instanceof CFDictionary) $parent->add($key, $value);
            else $parent->add($value);
        }
    }

    public function saveXML($file)
    {
        $this->save($file, CFPropertyList::FORMAT_XML);
    }

    public function saveBinary($file)
    {
        $this->save($file, CFPropertyList::FORMAT_BINARY);
    }

    public function save($file = null, $format = null)
    {
        $file = $file ? $file : $this->file;
        $format = $format ? $format : $this->format;
        if ($format == self::FORMAT_AUTO) $format = $this->detectedFormat;
        if (!in_array($format, array(self::FORMAT_BINARY, self::FORMAT_XML)))
            throw new PListException("format {$format} is not supported, use CFPropertyList::FORMAT_BINARY or CFPropertyList::FORMAT_XML");
        if (!file_exists($file)) {
            if (!is_writable(dirname($file))) throw IOException::notWritable($file);
        } else if (!is_writable($file)) throw IOException::notWritable($file);
        $content = $format == self::FORMAT_BINARY ? $this->toBinary() : $this->toXML();
        $fh = fopen($file, 'wb');
        fwrite($fh, $content);
        fclose($fh);
    }

    public function toXML($formatted = false)
    {
        $domimpl = new DOMImplementation();
        $dtd = $domimpl->createDocumentType('plist', '-//Apple//DTD PLIST 1.0//EN', 'http://www.apple.com/DTDs/PropertyList-1.0.dtd');
        $doc = $domimpl->createDocument(null, "plist", $dtd);
        $doc->encoding = "UTF-8";
        if ($formatted) {
            $doc->formatOutput = true;
            $doc->preserveWhiteSpace = true;
        }
        $plist = $doc->documentElement;
        $plist->setAttribute('version', '1.0');
        $plist->appendChild($this->getValue(true)->toXML($doc));
        return $doc->saveXML();
    }

    public function add(CFType $value = null)
    {
        if (!$value)
            $value = new CFString();
        $this->value[] = $value;
    }

    public function get($key)
    {
        if (isset($this->value[$key])) return $this->value[$key];
        return null;
    }

    public function __get($key)
    {
        return $this->get($key);
    }

    public function del($key)
    {
        if (isset($this->value[$key])) {
            $t = $this->value[$key];
            unset($this->value[$key]);
            return $t;
        }
        return null;
    }

    public function purge()
    {
        $t = $this->value;
        $this->value = array();
        return $t;
    }

    public function getValue($cftype = false)
    {
        if (count($this->value) === 1) {
            $t = array_values($this->value);
            return $t[0];
        }
        if ($cftype) {
            $t = new CFArray();
            foreach ($this->value as $value) {
                if ($value instanceof CFType) $t->add($value);
            }
            return $t;
        }
        return $this->value;
    }

    public static function guess($value, $options = array())
    {
        static $t = null;
        if ($t === null)
            $t = new CFTypeDetector($options);
        return $t->toCFType($value);
    }

    public function toArray()
    {
        $a = array();
        foreach ($this->value as $value) $a[] = $value->toArray();
        if (count($a) === 1) return $a[0];
        return $a;
    }

    public function rewind()
    {
        $this->iteratorPosition = 0;
        $this->iteratorKeys = array_keys($this->value);
    }

    public function current()
    {
        return $this->value[$this->iteratorKeys[$this->iteratorPosition]];
    }

    public function key()
    {
        return $this->iteratorKeys[$this->iteratorPosition];
    }

    public function next()
    {
        $this->iteratorPosition++;
    }

    public function valid()
    {
        return isset($this->iteratorKeys[$this->iteratorPosition]) && isset($this->value[$this->iteratorKeys[$this->iteratorPosition]]);
    }
}

?>