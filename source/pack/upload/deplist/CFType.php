<?php

namespace CFPropertyList;

use \DOMDocument, \Iterator, \ArrayAccess;

abstract class CFType
{
    protected $value = null;

    public function __construct($value = null)
    {
        $this->setValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function toXML(DOMDocument $doc, $nodeName)
    {
        $node = $doc->createElement($nodeName);
        $text = $doc->createTextNode($this->value);
        $node->appendChild($text);
        return $node;
    }

    public abstract function toBinary(CFBinaryPropertyList &$bplist);

    public function toArray()
    {
        return $this->getValue();
    }
}

class CFString extends CFType
{
    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        return parent::toXML($doc, 'string');
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->stringToBinary($this->value);
    }
}

class CFUid extends CFType
{
    public
    function toXML(DOMDocument $doc, $nodeName = "")
    {
        $obj = new CFDictionary(array('CF$UID' => new CFNumber($this->value)));
        return $obj->toXml($doc);
    }

    public
    function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->uidToBinary($this->value);
    }
}

class CFNumber extends CFType
{
    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        $ret = 'real';
        if (intval($this->value) == $this->value && !is_float($this->value) && strpos($this->value, '.') === false) {
            $this->value = intval($this->value);
            $ret = 'integer';
        }
        return parent::toXML($doc, $ret);
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->numToBinary($this->value);
    }
}

class CFDate extends CFType
{
    const TIMESTAMP_APPLE = 0;
    const TIMESTAMP_UNIX = 1;
    const DATE_DIFF_APPLE_UNIX = 978307200;

    function __construct($value, $format = CFDate::TIMESTAMP_UNIX)
    {
        $this->setValue($value, $format);
    }

    function setValue($value, $format = CFDate::TIMESTAMP_UNIX)
    {
        if ($format == CFDate::TIMESTAMP_UNIX) $this->value = $value;
        else $this->value = $value + CFDate::DATE_DIFF_APPLE_UNIX;
    }

    function getValue($format = CFDate::TIMESTAMP_UNIX)
    {
        if ($format == CFDate::TIMESTAMP_UNIX) return $this->value;
        else return $this->value - CFDate::DATE_DIFF_APPLE_UNIX;
    }

    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        $text = $doc->createTextNode(gmdate("Y-m-d\TH:i:s\Z", $this->getValue()));
        $node = $doc->createElement("date");
        $node->appendChild($text);
        return $node;
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->dateToBinary($this->value);
    }

    public static function dateValue($val)
    {
        if (!preg_match('/^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2})Z/', $val, $matches)) throw new PListException("Unknown date format: $val");
        return gmmktime($matches[4], $matches[5], $matches[6], $matches[2], $matches[3], $matches[1]);
    }
}

class CFBoolean extends CFType
{
    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        return $doc->createElement($this->value ? 'true' : 'false');
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->boolToBinary($this->value);
    }
}

class CFData extends CFType
{
    public function __construct($value = null, $already_coded = false)
    {
        if ($already_coded) $this->value = $value;
        else $this->setValue($value);
    }

    public function setValue($value)
    {
        $this->value = base64_encode($value);
    }

    public function getCodedValue()
    {
        return $this->value;
    }

    public function getValue()
    {
        return base64_decode($this->value);
    }

    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        return parent::toXML($doc, 'data');
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->dataToBinary($this->getValue());
    }
}

class CFArray extends CFType implements Iterator, ArrayAccess
{
    protected $iteratorPosition = 0;

    public function __construct($value = array())
    {
        $this->value = $value;
    }

    public function setValue($value)
    {
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

    public function del($key)
    {
        if (isset($this->value[$key])) unset($this->value[$key]);
    }

    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        $node = $doc->createElement('array');
        foreach ($this->value as $value) $node->appendChild($value->toXML($doc));
        return $node;
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->arrayToBinary($this);
    }

    public function toArray()
    {
        $a = array();
        foreach ($this->value as $value) $a[] = $value->toArray();
        return $a;
    }

    public function rewind()
    {
        $this->iteratorPosition = 0;
    }

    public function current()
    {
        return $this->value[$this->iteratorPosition];
    }

    public function key()
    {
        return $this->iteratorPosition;
    }

    public function next()
    {
        $this->iteratorPosition++;
    }

    public function valid()
    {
        return isset($this->value[$this->iteratorPosition]);
    }

    public function offsetExists($key)
    {
        return isset($this->value[$key]);
    }

    public function offsetGet($key)
    {
        return $this->get($key);
    }

    public function offsetSet($key, $value)
    {
        return $this->setValue($value);
    }

    public function offsetUnset($key)
    {
    }
}

class CFDictionary extends CFType implements Iterator
{
    protected $iteratorPosition = 0;
    protected $iteratorKeys = null;

    public function __construct($value = array())
    {
        $this->value = $value;
    }

    public function setValue($value)
    {
    }

    public function add($key, CFType $value = null)
    {
        if (!$value)
            $value = new CFString();
        $this->value[$key] = $value;
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
        if (isset($this->value[$key])) unset($this->value[$key]);
    }

    public function toXML(DOMDocument $doc, $nodeName = "")
    {
        $node = $doc->createElement('dict');
        foreach ($this->value as $key => $value) {
            $node->appendChild($doc->createElement('key', $key));
            $node->appendChild($value->toXML($doc));
        }
        return $node;
    }

    public function toBinary(CFBinaryPropertyList &$bplist)
    {
        return $bplist->dictToBinary($this);
    }

    public function toArray()
    {
        $a = array();
        foreach ($this->value as $key => $value) $a[$key] = $value->toArray();
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