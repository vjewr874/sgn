<?php

namespace CFPropertyList;
abstract class CFBinaryPropertyList
{
    protected $content = NULL;
    protected $pos = 0;
    protected $uniqueTable = Array();
    protected $countObjects = 0;
    protected $stringSize = 0;
    protected $intSize = 0;
    protected $miscSize = 0;
    protected $objectRefs = 0;
    protected $writtenObjectCount = 0;
    protected $objectTable = Array();
    protected $objectRefSize = 0;
    protected $offsets = Array();

    protected function readBinaryNullType($length)
    {
        switch ($length) {
            case 0:
                return 0;
            case 8:
                return new CFBoolean(false);
            case 9:
                return new CFBoolean(true);
            case 15:
                return 15;
        }
        throw new PListException("unknown null type: $length");
    }

    protected static function make64Int($hi, $lo)
    {
        if (PHP_INT_SIZE > 4) return (((int)$hi) << 32) | ((int)$lo);
        $lo = sprintf("%u", $lo);
        if (function_exists("gmp_mul")) return gmp_strval(gmp_add(gmp_mul($hi, "4294967296"), $lo));
        if (function_exists("bcmul")) return bcadd(bcmul($hi, "4294967296"), $lo);
        if (class_exists('Math_BigInteger')) {
            $bi = new \Math_BigInteger($hi);
            return $bi->multiply(new \Math_BigInteger("4294967296"))->add(new \Math_BigInteger($lo))->toString();
        }
        throw new PListException("either gmp or bc has to be installed, or the Math_BigInteger has to be available!");
    }

    protected function readBinaryInt($length)
    {
        if ($length > 3) throw new PListException("Integer greater than 8 bytes: $length");
        $nbytes = 1 << $length;
        $val = null;
        if (strlen($buff = substr($this->content, $this->pos, $nbytes)) != $nbytes) throw IOException::readError("");
        $this->pos += $nbytes;
        switch ($length) {
            case 0:
                $val = unpack("C", $buff);
                $val = $val[1];
                break;
            case 1:
                $val = unpack("n", $buff);
                $val = $val[1];
                break;
            case 2:
                $val = unpack("N", $buff);
                $val = $val[1];
                break;
            case 3:
                $words = unpack("Nhighword/Nlowword", $buff);
                $val = self::make64Int($words['highword'], $words['lowword']);
                break;
        }
        return new CFNumber($val);
    }

    protected function readBinaryReal($length)
    {
        if ($length > 3) throw new PListException("Real greater than 8 bytes: $length");
        $nbytes = 1 << $length;
        $val = null;
        if (strlen($buff = substr($this->content, $this->pos, $nbytes)) != $nbytes) throw IOException::readError("");
        $this->pos += $nbytes;
        switch ($length) {
            case 0:
            case 1:
                $x = $length + 1;
                throw new PListException("got {$x} byte float, must be an error!");
            case 2:
                $val = unpack("f", strrev($buff));
                $val = $val[1];
                break;
            case 3:
                $val = unpack("d", strrev($buff));
                $val = $val[1];
                break;
        }
        return new CFNumber($val);
    }

    protected function readBinaryDate($length)
    {
        if ($length > 3) throw new PListException("Date greater than 8 bytes: $length");
        $nbytes = 1 << $length;
        $val = null;
        if (strlen($buff = substr($this->content, $this->pos, $nbytes)) != $nbytes) throw IOException::readError("");
        $this->pos += $nbytes;
        switch ($length) {
            case 0:
            case 1:
                $x = $length + 1;
                throw new PListException("{$x} byte CFdate, error");
            case 2:
                $val = unpack("f", strrev($buff));
                $val = $val[1];
                break;
            case 3:
                $val = unpack("d", strrev($buff));
                $val = $val[1];
                break;
        }
        return new CFDate($val, CFDate::TIMESTAMP_APPLE);
    }

    protected function readBinaryData($length)
    {
        if ($length == 0) $buff = "";
        else {
            $buff = substr($this->content, $this->pos, $length);
            if (strlen($buff) != $length) throw IOException::readError("");
            $this->pos += $length;
        }
        return new CFData($buff, false);
    }

    protected function readBinaryString($length)
    {
        if ($length == 0) $buff = "";
        else {
            if (strlen($buff = substr($this->content, $this->pos, $length)) != $length) throw IOException::readError("");
            $this->pos += $length;
        }
        if (!isset($this->uniqueTable[$buff])) $this->uniqueTable[$buff] = true;
        return new CFString($buff);
    }

    public static function convertCharset($string, $fromCharset, $toCharset = 'UTF-8')
    {
        if (function_exists('mb_convert_encoding')) return mb_convert_encoding($string, $toCharset, $fromCharset);
        if (function_exists('iconv')) return iconv($fromCharset, $toCharset, $string);
        if (function_exists('recode_string')) return recode_string($fromCharset . '..' . $toCharset, $string);
        throw new PListException('neither iconv nor mbstring supported. how are we supposed to work on strings here?');
    }

    public static function charsetStrlen($string, $charset = "UTF-8")
    {
        if (function_exists('mb_strlen')) return mb_strlen($string, $charset);
        if (function_exists('iconv_strlen')) return iconv_strlen($string, $charset);
        throw new PListException('neither iconv nor mbstring supported. how are we supposed to work on strings here?');
    }

    protected function readBinaryUnicodeString($length)
    {
        if (strlen($buff = substr($this->content, $this->pos, 2 * $length)) != 2 * $length) throw IOException::readError("");
        $this->pos += 2 * $length;
        if (!isset($this->uniqueTable[$buff])) $this->uniqueTable[$buff] = true;
        return new CFString(self::convertCharset($buff, "UTF-16BE", "UTF-8"));
    }

    protected function readBinaryArray($length)
    {
        $ary = new CFArray();
        if ($length != 0) {
            if (strlen($buff = substr($this->content, $this->pos, $length * $this->objectRefSize)) != $length * $this->objectRefSize) throw IOException::readError("");
            $this->pos += $length * $this->objectRefSize;
            $objects = self::unpackWithSize($this->objectRefSize, $buff);
            for ($i = 0; $i < $length; ++$i) {
                $object = $this->readBinaryObjectAt($objects[$i + 1] + 1);
                $ary->add($object);
            }
        }
        return $ary;
    }

    protected function readBinaryDict($length)
    {
        $dict = new CFDictionary();
        if ($length != 0) {
            if (strlen($buff = substr($this->content, $this->pos, $length * $this->objectRefSize)) != $length * $this->objectRefSize) throw IOException::readError("");
            $this->pos += $length * $this->objectRefSize;
            $keys = self::unpackWithSize($this->objectRefSize, $buff);
            if (strlen($buff = substr($this->content, $this->pos, $length * $this->objectRefSize)) != $length * $this->objectRefSize) throw IOException::readError("");
            $this->pos += $length * $this->objectRefSize;
            $objects = self::unpackWithSize($this->objectRefSize, $buff);
            for ($i = 0; $i < $length; ++$i) {
                $key = $this->readBinaryObjectAt($keys[$i + 1] + 1);
                $object = $this->readBinaryObjectAt($objects[$i + 1] + 1);
                $dict->add($key->getValue(), $object);
            }
        }
        return $dict;
    }

    function readBinaryObject()
    {
        if (strlen($buff = substr($this->content, $this->pos, 1)) != 1) throw IOException::readError("");
        $this->pos++;
        $object_length = unpack("C*", $buff);
        $object_length = $object_length[1] & 0xF;
        $buff = unpack("H*", $buff);
        $buff = $buff[1];
        $object_type = substr($buff, 0, 1);
        if ($object_type != "0" && $object_length == 15) {
            $object_length = $this->readBinaryObject($this->objectRefSize);
            $object_length = $object_length->getValue();
        }
        $retval = null;
        switch ($object_type) {
            case '0':
                $retval = $this->readBinaryNullType($object_length);
                break;
            case '1':
                $retval = $this->readBinaryInt($object_length);
                break;
            case '2':
                $retval = $this->readBinaryReal($object_length);
                break;
            case '3':
                $retval = $this->readBinaryDate($object_length);
                break;
            case '4':
                $retval = $this->readBinaryData($object_length);
                break;
            case '5':
                $retval = $this->readBinaryString($object_length);
                break;
            case '6':
                $retval = $this->readBinaryUnicodeString($object_length);
                break;
            case '8':
                $num = $this->readBinaryInt($object_length);
                $retval = new CFUid($num->getValue());
                break;
            case 'a':
                $retval = $this->readBinaryArray($object_length);
                break;
            case 'd':
                $retval = $this->readBinaryDict($object_length);
                break;
        }
        return $retval;
    }

    function readBinaryObjectAt($pos)
    {
        $this->pos = $this->offsets[$pos];
        return $this->readBinaryObject();
    }

    public function parseBinaryString()
    {
        $this->uniqueTable = Array();
        $this->countObjects = 0;
        $this->stringSize = 0;
        $this->intSize = 0;
        $this->miscSize = 0;
        $this->objectRefs = 0;
        $this->writtenObjectCount = 0;
        $this->objectTable = Array();
        $this->objectRefSize = 0;
        $this->offsets = Array();
        $buff = substr($this->content, -32);
        if (strlen($buff) < 32) {
            throw new PListException('Error in PList format: content is less than at least necessary 32 bytes!');
        }
        $infos = unpack("x6/Coffset_size/Cobject_ref_size/x4/Nnumber_of_objects/x4/Ntop_object/x4/Ntable_offset", $buff);
        $coded_offset_table = substr($this->content, $infos['table_offset'], $infos['number_of_objects'] * $infos['offset_size']);
        if (strlen($coded_offset_table) != $infos['number_of_objects'] * $infos['offset_size']) throw IOException::readError("");
        $this->countObjects = $infos['number_of_objects'];
        $formats = Array("", "C*", "n*", NULL, "N*");
        if ($infos['offset_size'] == 3) {# since PHP does not support parenthesis in pack/unpack expressions,
# "(H6)*"does not work and we have to work round this by repeating the
# expression as often as it fits in the string
            $this->offsets = array(NULL);
            while ($coded_offset_table) {
                $str = unpack("H6", $coded_offset_table);
                $this->offsets[] = hexdec($str[1]);
                $coded_offset_table = substr($coded_offset_table, 3);
            }
        } else $this->offsets = unpack($formats[$infos['offset_size']], $coded_offset_table);
        $this->uniqueTable = Array();
        $this->objectRefSize = $infos['object_ref_size'];
        $top = $this->readBinaryObjectAt($infos['top_object'] + 1);
        $this->add($top);
    }

    function readBinaryStream($stream)
    {
        if (($str = stream_get_contents($stream)) === false || empty($str)) {
            throw new PListException("Error reading stream!");
        }
        $this->parseBinary($str);
    }

    function parseBinary($content = NULL)
    {
        if ($content !== NULL) {
            $this->content = $content;
        }
        if (empty($this->content)) {
            throw new PListException("Content may not be empty!");
        }
        if (substr($this->content, 0, 8) != 'bplist00') {
            throw new PListException("Invalid binary string!");
        }
        $this->pos = 0;
        $this->parseBinaryString();
    }

    function readBinary($file)
    {
        if (!($fd = fopen($file, "rb"))) {
            throw new IOException("Could not open file {$file}!");
        }
        $this->readBinaryStream($fd);
        fclose($fd);
    }

    public static function bytesSizeInt($int)
    {
        $nbytes = 0;
        if ($int > 0xE) $nbytes += 2;
        if ($int > 0xFF) $nbytes += 1;
        if ($int > 0xFFFF) $nbytes += 2;
        return $nbytes;
    }

    public static function bytesInt($int)
    {
        $nbytes = 1;
        if ($int > 0xFF) $nbytes += 1;
        if ($int > 0xFFFF) $nbytes += 2;
        if ($int > 0xFFFFFFFF) $nbytes += 4;
        if ($int < 0) $nbytes += 7;
        return $nbytes + 1;
    }

    public static function packItWithSize($nbytes, $int)
    {
        $formats = Array("C", "n", "N", "N");
        $format = $formats[$nbytes - 1];
        if ($nbytes == 3) return substr(pack($format, $int), -3);
        return pack($format, $int);
    }

    public static function unpackWithSize($nbytes, $buff)
    {
        $formats = Array("C*", "n*", "N*", "N*");
        $format = $formats[$nbytes - 1];
        if ($nbytes == 3) $buff = "\0" . implode("\0", str_split($buff, 3));
        return unpack($format, $buff);
    }

    public static function bytesNeeded($count_objects)
    {
        $nbytes = 0;
        while ($count_objects >= 1) {
            $nbytes++;
            $count_objects /= 256;
        }
        return $nbytes;
    }

    public static function intBytes($int)
    {
        $intbytes = "";
        if ($int > 0xFFFF) $intbytes = "\x12" . pack("N", $int);
        elseif ($int > 0xFF) $intbytes = "\x11" . pack("n", $int);
        else $intbytes = "\x10" . pack("C", $int);
        return $intbytes;
    }

    public static function typeBytes($type, $type_len)
    {
        $optional_int = "";
        if ($type_len < 15) $type .= sprintf("%x", $type_len);
        else {
            $type .= "f";
            $optional_int = self::intBytes($type_len);
        }
        return pack("H*", $type) . $optional_int;
    }

    protected function uniqueAndCountValues($value)
    {
        if ($value instanceof CFNumber) {
            $val = $value->getValue();
            if (intval($val) == $val && !is_float($val) && strpos($val, '.') === false) $this->intSize += self::bytesInt($val);
            else $this->miscSize += 9;
            $this->countObjects++;
            return;
        } elseif ($value instanceof CFDate) {
            $this->miscSize += 9;
            $this->countObjects++;
            return;
        } elseif ($value instanceof CFBoolean) {
            $this->countObjects++;
            $this->miscSize += 1;
            return;
        } elseif ($value instanceof CFArray) {
            $cnt = 0;
            foreach ($value as $v) {
                ++$cnt;
                $this->uniqueAndCountValues($v);
                $this->objectRefs++;
            }
            $this->countObjects++;
            $this->intSize += self::bytesSizeInt($cnt);
            $this->miscSize++;
            return;
        } elseif ($value instanceof CFDictionary) {
            $cnt = 0;
            foreach ($value as $k => $v) {
                ++$cnt;
                if (!isset($this->uniqueTable[$k])) {
                    $this->uniqueTable[$k] = 0;
                    $len = self::binaryStrlen($k);
                    $this->stringSize += $len + 1;
                    $this->intSize += self::bytesSizeInt(self::charsetStrlen($k, 'UTF-8'));
                }
                $this->objectRefs += 2;
                $this->uniqueTable[$k]++;
                $this->uniqueAndCountValues($v);
            }
            $this->countObjects++;
            $this->miscSize++;
            $this->intSize += self::bytesSizeInt($cnt);
            return;
        } elseif ($value instanceOf CFData) {
            $val = $value->getValue();
            $len = strlen($val);
            $this->intSize += self::bytesSizeInt($len);
            $this->miscSize += $len + 1;
            $this->countObjects++;
            return;
        } else $val = $value->getValue();
        if (!isset($this->uniqueTable[$val])) {
            $this->uniqueTable[$val] = 0;
            $len = self::binaryStrlen($val);
            $this->stringSize += $len + 1;
            $this->intSize += self::bytesSizeInt(self::charsetStrlen($val, 'UTF-8'));
        }
        $this->uniqueTable[$val]++;
    }

    public function toBinary()
    {
        $this->uniqueTable = Array();
        $this->countObjects = 0;
        $this->stringSize = 0;
        $this->intSize = 0;
        $this->miscSize = 0;
        $this->objectRefs = 0;
        $this->writtenObjectCount = 0;
        $this->objectTable = Array();
        $this->objectRefSize = 0;
        $this->offsets = Array();
        $binary_str = "bplist00";
        $value = $this->getValue(true);
        $this->uniqueAndCountValues($value);
        $this->countObjects += count($this->uniqueTable);
        $this->objectRefSize = self::bytesNeeded($this->countObjects);
        $file_size = $this->stringSize + $this->intSize + $this->miscSize + $this->objectRefs * $this->objectRefSize + 40;
        $offset_size = self::bytesNeeded($file_size);
        $table_offset = $file_size - 32;
        $this->objectTable = Array();
        $this->writtenObjectCount = 0;
        $this->uniqueTable = Array();
        $value->toBinary($this);
        $object_offset = 8;
        $offsets = Array();
        for ($i = 0; $i < count($this->objectTable); ++$i) {
            $binary_str .= $this->objectTable[$i];
            $offsets[$i] = $object_offset;
            $object_offset += strlen($this->objectTable[$i]);
        }
        for ($i = 0; $i < count($offsets); ++$i) {
            $binary_str .= self::packItWithSize($offset_size, $offsets[$i]);
        }
        $binary_str .= pack("x6CC", $offset_size, $this->objectRefSize);
        $binary_str .= pack("x4N", $this->countObjects);
        $binary_str .= pack("x4N", 0);
        $binary_str .= pack("x4N", $table_offset);
        return $binary_str;
    }

    protected static function binaryStrlen($val)
    {
        for ($i = 0; $i < strlen($val); ++$i) {
            if (ord($val{$i}) >= 128) {
                $val = self::convertCharset($val, 'UTF-8', 'UTF-16BE');
                return strlen($val);
            }
        }
        return strlen($val);
    }

    public function stringToBinary($val)
    {
        $saved_object_count = -1;
        if (!isset($this->uniqueTable[$val])) {
            $saved_object_count = $this->writtenObjectCount++;
            $this->uniqueTable[$val] = $saved_object_count;
            $utf16 = false;
            for ($i = 0; $i < strlen($val); ++$i) {
                if (ord($val{$i}) >= 128) {
                    $utf16 = true;
                    break;
                }
            }
            if ($utf16) {
                $bdata = self::typeBytes("6", mb_strlen($val, 'UTF-8'));
                $val = self::convertCharset($val, 'UTF-8', 'UTF-16BE');
                $this->objectTable[$saved_object_count] = $bdata . $val;
            } else {
                $bdata = self::typeBytes("5", strlen($val));
                $this->objectTable[$saved_object_count] = $bdata . $val;
            }
        } else $saved_object_count = $this->uniqueTable[$val];
        return $saved_object_count;
    }

    protected function intToBinary($value)
    {
        $nbytes = 0;
        if ($value > 0xFF) $nbytes = 1;
        if ($value > 0xFFFF) $nbytes += 1;
        if ($value > 0xFFFFFFFF) $nbytes += 1;
        if ($value < 0) $nbytes = 3;
        $bdata = self::typeBytes("1", $nbytes);
        $buff = "";
        if ($nbytes < 3) {
            if ($nbytes == 0) $fmt = "C";
            elseif ($nbytes == 1) $fmt = "n";
            else $fmt = "N";
            $buff = pack($fmt, $value);
        } else {
            if (PHP_INT_SIZE > 4) {
                $high_word = $value >> 32;
                $low_word = $value & 0xFFFFFFFF;
            } else {
                if ($value < 0) $high_word = 0xFFFFFFFF;
                else $high_word = 0;
                $low_word = $value;
            }
            $buff = pack("N", $high_word) . pack("N", $low_word);
        }
        return $bdata . $buff;
    }

    protected function realToBinary($val)
    {
        $bdata = self::typeBytes("2", 3);
        return $bdata . strrev(pack("d", (float)$val));
    }

    public function uidToBinary($value)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $val = "";
        $nbytes = 0;
        if ($value > 0xFF) $nbytes = 1;
        if ($value > 0xFFFF) $nbytes += 1;
        if ($value > 0xFFFFFFFF) $nbytes += 1;
        if ($value < 0) $nbytes = 3;
        $bdata = self::typeBytes("1000", $nbytes);
        $buff = "";
        if ($nbytes < 3) {
            if ($nbytes == 0) $fmt = "C";
            elseif ($nbytes == 1) $fmt = "n";
            else $fmt = "N";
            $buff = pack($fmt, $value);
        } else {
            if (PHP_INT_SIZE > 4) {
                $high_word = $value >> 32;
                $low_word = $value & 0xFFFFFFFF;
            } else {
                if ($value < 0) $high_word = 0xFFFFFFFF;
                else $high_word = 0;
                $low_word = $value;
            }
            $buff = pack("N", $high_word) . pack("N", $low_word);
        }
        $val = $bdata . $buff;
        $this->objectTable[$saved_object_count] = $val;
        return $saved_object_count;
    }

    public function numToBinary($value)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $val = "";
        if (intval($value) == $value && !is_float($value) && strpos($value, '.') === false) $val = $this->intToBinary($value);
        else $val = $this->realToBinary($value);
        $this->objectTable[$saved_object_count] = $val;
        return $saved_object_count;
    }

    public function dateToBinary($val)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $hour = gmdate("H", $val);
        $min = gmdate("i", $val);
        $sec = gmdate("s", $val);
        $mday = gmdate("j", $val);
        $mon = gmdate("n", $val);
        $year = gmdate("Y", $val);
        $val = gmmktime($hour, $min, $sec, $mon, $mday, $year) - CFDate::DATE_DIFF_APPLE_UNIX;
        $bdata = self::typeBytes("3", 3);
        $this->objectTable[$saved_object_count] = $bdata . strrev(pack("d", $val));
        return $saved_object_count;
    }

    public function boolToBinary($val)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $this->objectTable[$saved_object_count] = $val ? "\x9" : "\x8";
        return $saved_object_count;
    }

    public function dataToBinary($val)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $bdata = self::typeBytes("4", strlen($val));
        $this->objectTable[$saved_object_count] = $bdata . $val;
        return $saved_object_count;
    }

    public function arrayToBinary($val)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $bdata = self::typeBytes("a", count($val->getValue()));
        foreach ($val as $v) {
            $bval = $v->toBinary($this);
            $bdata .= self::packItWithSize($this->objectRefSize, $bval);
        }
        $this->objectTable[$saved_object_count] = $bdata;
        return $saved_object_count;
    }

    public function dictToBinary($val)
    {
        $saved_object_count = $this->writtenObjectCount++;
        $bdata = self::typeBytes("d", count($val->getValue()));
        foreach ($val as $k => $v) {
            $str = new CFString($k);
            $key = $str->toBinary($this);
            $bdata .= self::packItWithSize($this->objectRefSize, $key);
        }
        foreach ($val as $k => $v) {
            $bval = $v->toBinary($this);
            $bdata .= self::packItWithSize($this->objectRefSize, $bval);
        }
        $this->objectTable[$saved_object_count] = $bdata;
        return $saved_object_count;
    }
}

?>