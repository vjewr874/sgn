<?php

class iFile
{
	protected $Fp;
	protected $File;
	protected $OpenMode;
	function __construct($File, $Mode)
	{
		$this->File = $File;
		$this->OpenMode = $Mode;
		$this->OpenFile();
	}
	private function OpenFile()
	{
		$this->Fp = fopen($this->File, $this->OpenMode);
	}
	private function CloseFile()
	{
		fclose($this->Fp);
	}
	public function WriteFile($Data4Write, $Mode)
	{
		flock($this->Fp, $Mode);
		fwrite($this->Fp, $Data4Write);
		$this->CloseFile();
	}
}
spl_autoload_register("myautoload");
function downloadFile($filename, $rename = '')
{
	if (is_file($filename)) {
		$rename = $rename ?: basename($filename);
		$_var_0 = filesize($filename);
		$_var_1 = fopen($filename, "rb");
		header("Content-type: application/octet-stream");
		header("Accept-Ranges: bytes");
		header("Accept-Length: " . $_var_0);
		header("Content-Disposition: attachment; filename=" . $rename);
		echo fread($_var_1, $_var_0);
		fclose($_var_1);
	} else {
		header("HTTP/1.1 404 NOT FOUND");
		exit("file not exists");
	}
	exit;
}
function certMoveToNew($_var_2)
{
	$_var_3 = bees_encrypt($_var_2["iss"]) . "/" . $_var_2["iss"];
	@rename(IN_CERT_PATH . $_var_2["iss"], IN_CERT_PATH . bees_encrypt($_var_2["iss"]));
	foreach (["cer", "p8", "p12", "pem"] as $_var_4) {
		$_var_5 = getCert($_var_2["iss"], $_var_2["kid"], $_var_4);
		@rename(IN_CERT_PATH . $_var_3 . "." . $_var_4, IN_CERT_PATH . $_var_5);
	}
}
function getCert($iss, $kid, $type = 'p8')
{
	return bees_encrypt($iss) . "/" . bees_encrypt($kid) . "." . $type;
}
function get_user_in_filesize($_var_6, $_var_7 = false)
{
	$_var_6 = is_numeric($_var_6) ? db("user")->where("in_userid", $_var_6)->find() : $_var_6;
	$_var_8 = [IN_UPSIZE, IN_PVIPUPLOAD, IN_IVIPUPLOAD, IN_SVIPUPLOAD];
	$_var_6["in_filesize"] += $_var_8[$_var_6["in_svip"]] * 1048576;
	return $_var_7 ? formatsize($_var_6["in_filesize"]) : $_var_6["in_filesize"];
}
function get_user_in_spacetotal($user, $formatsize = false)
{
	$user = is_numeric($user) ? db("user")->where("in_userid", $user)->find() : $user;
	$_var_9 = [IN_REGSPACE, IN_PVIPCAPACITY, IN_IVIPCAPACITY, IN_SVIPCAPACITY];
	$user["in_spacetotal"] += $_var_9[$user["in_svip"]] * 1048576;
	return $formatsize ? formatsize($user["in_spacetotal"]) : $user["in_spacetotal"];
}
function app_file_exists($_var_10)
{
	if ($_var_10["in_form"] == "iOS" && $_var_10["in_sign_type"] == 1 && IN_SIGNMETHOD) {
		$_var_11 = db("sign")->where("in_aid", $_var_10["in_id"])->value("api_aid");
		if ($_var_11) {
			return $_var_11;
		}
		$_var_12 = http_build_query(["site" => $_SERVER["HTTP_HOST"], "secret" => IN_SECRET, "site_aid" => $_var_10["in_id"], "site_uid" => $_var_10["in_uid"]]);
		$_var_13 = IN_API . "/open/apps/get?" . $_var_12;
		$_var_14 = file_get_contents($_var_13);
		return $_var_14;
	}
	return is_file(IN_ATTACHMENT_PATH . $_var_10["in_app"]);
}
function getDeduct($_var_15, $_var_16 = false)
{
	$_var_17 = json_decode(IN_POINTSRULE, true);
	if ($_var_15 >= 1 && $_var_15 <= 52428800) {
		$_var_18 = $_var_17[0];
	} elseif ($_var_15 > 52428800 && $_var_15 <= 104857600) {
		$_var_18 = $_var_17[1];
	} elseif ($_var_15 > 104857600 && $_var_15 <= 314572800) {
		$_var_18 = $_var_17[2];
	} elseif ($_var_15 > 314572800 && $_var_15 <= 629145600) {
		$_var_18 = $_var_17[3];
	} elseif ($_var_15 > 629145600 && $_var_15 <= 1073741824) {
		$_var_18 = $_var_17[4];
	} elseif ($_var_15 > 1073741824 && $_var_15 <= 1.5 * 1024 * 1024 * 1024) {
		$_var_18 = $_var_17[5];
	} elseif ($_var_15 > 1.5 * 1024 * 1024 * 1024) {
		$_var_18 = $_var_17[6];
	}
	if ($_var_16) {
		$_var_18 = $_var_18 * IN_CDNPOINTS;
	}
	return $_var_18;
}
function isAJax()
{
	if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest") {
		return true;
	} else {
		return false;
	}
}
function aclog_save($_var_19, $_var_20, $_var_21, $_var_22, $_var_23 = '')
{
	$_var_23 = $_var_23 ? $_var_23 : "管理员" . ($_var_20 > $_var_21 ? "添加" : "扣除");
	$_var_24 = ["user_id" => $_var_19, "type" => $_var_22, "value" => $_var_20 - $_var_21, "after_value" => $_var_20, "before_value" => $_var_21, "note" => $_var_23, "create_time" => time()];
	if ($_var_20 - $_var_21 > 0) {
		db("user_recharge")->insert($_var_24);
	}
	return db("user_aclog")->insert($_var_24);
}
function changeAc($_var_25, $_var_26, $_var_27, $_var_28 = '')
{
	if ($_var_25 && $_var_26) {
		$_var_26 = is_numeric($_var_26) ? db("user")->where("in_userid", $_var_26)->find() : $_var_26;
		if ($_var_26[$_var_27] + $_var_25 >= 0) {
			$_var_28 = $_var_28 ?: "管理员" . ($_var_25 > 0 ? "添加" : "扣除");
			$_var_29 = ["user_id" => $_var_26["in_userid"], "type" => $_var_27, "before_value" => $_var_26[$_var_27], "value" => $_var_25, "after_value" => $_var_26[$_var_27] + $_var_25, "note" => $_var_28, "create_time" => time()];
			if ($_var_25 > 0) {
				db("user_recharge")->insert($_var_29);
			}
			$_var_30 = db("user_aclog")->insert($_var_29);
			return $_var_30 && db("user")->where("in_userid", $_var_26["in_userid"])->inc($_var_27, $_var_25)->update();
		}
	}
	return false;
}
function dump()
{
	echo "<pre>";
	var_dump(...func_get_args());
	echo "</pre>";
}
function halt()
{
	dump(...func_get_args());
	exit;
}
function get_site_url($_var_31 = '')
{
	$_var_32 = $_SERVER["HTTP_HOST"];
	$_var_33 = is_ssl() || $_var_31 == "s" ? "https://" : "http://";
	return $_var_33 . $_var_32;
}
function creatLink($id = 0)
{
	$_var_34 = Randomstr();
	$_var_35 = db("appid")->where("in_link", $_var_34)->where("in_id", "<>", $id)->count();
	if ($_var_35) {
		return creatLink($id);
	}
	return $_var_34;
}
function promote_code($_var_36 = 0)
{
	$_var_37 = Randomstr(8);
	$_var_38 = db("user")->where("promote_code", $_var_37)->where("in_userid", "<>", $_var_36)->count();
	if ($_var_38) {
		return promote_code($_var_36);
	}
	return $_var_37;
}
function Randomstr($length = 6, $type = 'string', $convert = -1)
{
	$_var_39 = array("number" => "1234567890", "letter" => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", "string" => "abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789", "all" => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890");
	if (!isset($_var_39[$type])) {
		$type = "string";
	}
	$_var_40 = $_var_39[$type];
	$_var_41 = "";
	$_var_42 = strlen($_var_40) - 1;
	for ($_var_43 = 0; $_var_43 < $length; $_var_43++) {
		$_var_41 .= $_var_40[mt_rand(0, $_var_42)];
	}
	if (!empty($convert)) {
		$_var_41 = $convert > 0 ? strtoupper($_var_41) : strtolower($_var_41);
	}
	return $_var_41;
}
function getTopDomainhuo()
{
	$_var_44 = $_SERVER["HTTP_HOST"];
	$_var_45 = explode(".", $_var_44);
	$_var_46 = count($_var_45);
	$_var_47 = true;
	$_var_48 = "com.cn,net.cn,org.cn,gov.cn";
	$_var_48 = explode(",", $_var_48);
	foreach ($_var_48 as $_var_49) {
		if (strpos($_var_44, $_var_49)) {
			$_var_47 = false;
		}
	}
	if ($_var_47 == true) {
		$_var_49 = $_var_45[$_var_46 - 2] . "." . $_var_45[$_var_46 - 1];
	} else {
		$_var_49 = $_var_45[$_var_46 - 3] . "." . $_var_45[$_var_46 - 2] . "." . $_var_45[$_var_46 - 1];
	}
	return $_var_49;
}
function base62($x)
{
	$_var_50 = "";
	while ($x > 0) {
		$_var_51 = $x % 62;
		if ($_var_51 > 35) {
			$_var_51 = chr($_var_51 + 61);
		} elseif ($_var_51 > 9 && $_var_51 <= 35) {
			$_var_51 = chr($_var_51 + 55);
		}
		$_var_50 .= $_var_51;
		$x = floor($x / 62);
	}
	return $_var_50;
}
function urlShort($url)
{
	$url = crc32($url);
	$_var_52 = sprintf("%u", $url);
	return base62($_var_52);
}
function getlink($id, $super = false)
{
	$_var_53 = db("appid")->where("in_id", $id)->find();
	if (!$_var_53["in_link"]) {
		$_var_54 = creatLink($id);
		!db("appid")->where("in_id", $id)->update(["in_link" => $_var_54]) && ($_var_54 = "");
	} else {
		$_var_54 = $_var_53["in_link"];
	}
	if (IN_CNAME && ($_var_55 = db("app_domain")->where("uid", $_var_53["in_uid"])->order("id desc")->value("domain"))) {
	} else {
		$_var_55 = IN_TZDOMAIN ?: $_SERVER["HTTP_HOST"];
	}
	$_var_56 = "http://" . $_var_55 . IN_PATH;
	$_var_54 = $super ? $_var_54 . "/s" : $_var_54;
	$_var_57 = IN_REWRITE && $_var_54 ? $_var_56 . $_var_54 : $_var_56 . auth_codes($id);
	return is_ssl() ? str_replace("http://", "https://", $_var_57) : $_var_57;
}
function geticon($file, $type = 'app')
{
	$file = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH . "data/image/" . $type . "/" . $file;
	return is_ssl() ? str_replace("http://", "https://", $file . "?v=" . time()) : $file . "?v=" . time();
}
function getapp($_var_58, $_var_59 = 0)
{
	$_var_60 = is_numeric($_var_58) ? db("appid")->field("in_id,remote,in_app,in_originalName")->where("in_id", $_var_58)->find() : $_var_58;
	if ($_var_59) {
		if (!$_var_60["remote"]) {
			$_var_61 = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH . "data/attachment/" . $_var_60["in_app"];
			$_var_61 = is_ssl() ? str_replace("http://", "https://", $_var_61) : $_var_61;
		} else {
			$_var_62 = $_var_60["in_form"] == "Android" ? "?attname=" . $_var_60["in_originalName"] : "";
			$_var_61 = getremoteurl($_var_60["in_app"] . $_var_62, $_var_60["remote"]);
		}
		return $_var_61;
	} else {
		return $_var_60["remote"] ? true : false;
	}
}
function getapp_history($id, $type = 0)
{
	$_var_63 = db("app")->field("in_id,remote,in_app,in_originalName")->where("in_id", $id)->find();
	if ($type) {
		if (!$_var_63["remote"]) {
			$_var_64 = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH . "download/app/" . bees_encrypt($_var_63["in_id"] . ".app." . time());
			$_var_64 = is_ssl() ? str_replace("http://", "https://", $_var_64) : $_var_64;
		} else {
			$_var_64 = getremoteurl($_var_63["in_app"] . "?attname=" . $_var_63["in_originalName"], $_var_63["remote"]);
		}
		return $_var_64;
	} else {
		return $_var_63["remote"] ? true : false;
	}
}
function getverify($_var_65, $_var_66, $_var_67 = 0)
{
	if ($_var_67) {
		$_var_68 = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH . "data/attachment/avatar/" . $_var_65 . "-" . $_var_66 . ".jpg?v=" . time();
		return is_ssl() ? str_replace("http://", "https://", $_var_68) : $_var_68;
	} else {
		return is_file(IN_ATTACHMENT_PATH . "avatar/" . $_var_65 . "-" . $_var_66 . ".jpg") ? true : false;
	}
}
function getavatar($_var_69)
{
	if (is_file(IN_ATTACHMENT_PATH . "avatar/" . $_var_69 . ".jpg")) {
		$_var_70 = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH . "data/attachment/avatar/" . $_var_69 . ".jpg?v=" . time();
	} else {
		$_var_70 = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH . "static/index/image/avatar.jpg";
	}
	return is_ssl() ? str_replace("http://", "https://", $_var_70) : $_var_70;
}
function formatsize($_var_71)
{
	$_var_72 = 3;
	$_var_71 = round(abs($_var_71));
	$_var_73 = array(0 => " B", 1 => " KB", 2 => " MB", 3 => " GB", 4 => " TB");
	if ($_var_71 == 0) {
		return str_repeat(" ", $_var_72) . "0" . $_var_73[0];
	}
	$_var_74 = min(4, floor(log($_var_71) / log(2) / 10));
	$_var_71 = $_var_71 * pow(2, -10 * $_var_74);
	$_var_75 = $_var_72 - 1 - floor(log($_var_71) / log(10));
	$_var_71 = round($_var_71 * pow(10, $_var_75)) * pow(10, -$_var_75);
	return $_var_71 . $_var_73[$_var_74];
}
function fileext($file)
{
	return strtolower(trim(substr(strrchr($file, "."), 1)));
}
function tname($name)
{
	return IN_DBTABLE . $name;
}
function convert_charset($_var_76, $_var_77 = 0)
{
	if ($_var_77 == 1) {
		return IN_CHARSET == "gbk" ? iconv("UTF-8", "GBK//IGNORE", $_var_76) : $_var_76;
	} else {
		return IN_CHARSET == "gbk" ? iconv("GBK", "UTF-8//IGNORE", $_var_76) : $_var_76;
	}
}
function set_chars()
{
	return IN_CHARSET == "gbk" ? "GB2312" : "UTF-8";
}
function SafeSql($value)
{
	return htmlspecialchars(str_replace("\\", "", $value), ENT_QUOTES, set_chars(), false);
}
function detect_encoding($str)
{
	$_var_78 = NULL;
	$_var_79 = array("GBK", "UTF-8");
	foreach ($_var_79 as $_var_80) {
		$_var_81 = mb_convert_encoding($str, $_var_80, $_var_80);
		if (md5($_var_81) == md5($str)) {
			$_var_78 = $_var_80;
		}
	}
	return strtolower($_var_78) !== IN_CHARSET ? iconv($_var_78, strtoupper(IN_CHARSET) . "//IGNORE", $str) : $str;
}
function is_utf8($_var_82)
{
	if (IN_CHARSET == "utf-8") {
		return detect_encoding($_var_82);
	} else {
		if (preg_match("%^(?:[\\x09\\x0A\\x0D\\x20-\\x7E] | [\\xC2-\\xDF][\\x80-\\xBF] | \\xE0[\\xA0-\\xBF][\\x80-\\xBF] | [\\xE1-\\xEC\\xEE\\xEF][\\x80-\\xBF]{2} | \\xED[\\x80-\\x9F][\\x80-\\xBF] | \\xF0[\\x90-\\xBF][\\x80-\\xBF]{2} | [\\xF1-\\xF3][\\x80-\\xBF]{3} | \\xF4[\\x80-\\x8F][\\x80-\\xBF]{2})*\$%xs", $_var_82)) {
			return iconv("UTF-8", "GBK//IGNORE", $_var_82);
		} else {
			return $_var_82;
		}
	}
}
function unescape($_var_83)
{
	$_var_84 = PHP_OS == "Linux" ? "UCS-2BE" : "UCS-2";
	$_var_83 = rawurldecode($_var_83);
	preg_match_all("/%u.{4}|&#x.{4};|&#d+;|.+/U", $_var_83, $_var_85);
	$_var_86 = $_var_85[0];
	foreach ($_var_86 as $_var_87 => $_var_88) {
		if (substr($_var_88, 0, 2) == "%u") {
			$_var_86[$_var_87] = iconv($_var_84, strtoupper(IN_CHARSET) . "//IGNORE", pack("H4", substr($_var_88, -4)));
		} elseif (substr($_var_88, 0, 3) == "&#x") {
			$_var_86[$_var_87] = iconv($_var_84, strtoupper(IN_CHARSET) . "//IGNORE", pack("H4", substr($_var_88, 3, -1)));
		} elseif (substr($_var_88, 0, 2) == "&#") {
			$_var_86[$_var_87] = iconv($_var_84, strtoupper(IN_CHARSET) . "//IGNORE", pack("H4", substr($_var_88, 2, -1)));
		}
	}
	return SafeSql(join("", $_var_86));
}
function SafeRequest($key, $mode = 'post', $type = 0)
{
	$_var_89 = [];
	switch ($mode) {
		case "post":
			$_var_89 = $_POST;
			break 1;
		case "get":
			$_var_89 = $_GET;
			break 1;
	}
	return isset($_var_89[$key]) ? SafeFilter($_var_89[$key], $type) : null;
}
function SafeFilter($var, $type = 0)
{
	if (is_array($var)) {
		foreach ($var as $_var_90 => $_var_91) {
			$var[$_var_90] = SafeFilter($_var_91);
		}
		return $var;
	} else {
		if ($type) {
			return $var;
		}
		$_var_92 = isset($var) ? addslashes(trim($var)) : NULL;
		return $type ? $_var_92 : htmlspecialchars(str_replace("\\" . "\\", "", $_var_92), ENT_QUOTES, set_chars(), false);
	}
}
function RequestBox($_var_93)
{
	$_var_94 = isset($_POST[$_var_93]) ? $_POST[$_var_93] : NULL;
	if (empty($_var_94)) {
		$_var_95 = 0;
	} else {
		for ($_var_96 = 0; $_var_96 < count($_var_94); $_var_96++) {
			$_var_97[] = intval($_var_94[$_var_96]);
		}
		$_var_95 = implode(",", $_var_97);
	}
	return $_var_95;
}
function creatdir($dir)
{
	if (!is_dir($dir)) {
		@mkdir($dir, 0777, true);
	}
}
function is_empty_dir($dir)
{
	if ($dir && is_dir($dir)) {
		$_var_98 = array_diff(scandir($dir), array("..", "."));
		return !count($_var_98);
	}
	return true;
}
function destroyDir($dir, $oc = 0)
{
	$_var_99 = DIRECTORY_SEPARATOR;
	$dir = substr($dir, -1) == $_var_99 ? substr($dir, 0, -1) : $dir;
	if (is_dir($dir) && ($_var_100 = opendir($dir))) {
		while ($_var_101 = readdir($_var_100)) {
			if ($_var_101 == "." || $_var_101 == "..") {
				continue 1;
			} elseif (is_dir($dir . $_var_99 . $_var_101)) {
				destroyDir($dir . $_var_99 . $_var_101);
			} else {
				unlink($dir . $_var_99 . $_var_101);
			}
		}
		closedir($_var_100);
		if (!$oc) {
			rmdir($dir);
		}
	}
}
function lightnum($_var_102, $_var_103 = true)
{
	$_var_103 = $_var_103 === true ? [$_var_102] : (is_array($_var_103) ? $_var_103 : [$_var_103]);
	foreach ($_var_103 as $_var_104) {
		$_var_102 = str_replace($_var_104, "<em class=\"lightnum\">" . $_var_104 . "</em>", $_var_102);
	}
	return $_var_102;
}
function path_info()
{
	$_var_105 = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : "";
	$_var_106 = explode("/", $_var_105);
	return [isset($_var_106[1]) ? $_var_106[1] : "index", isset($_var_106[2]) ? $_var_106[2] : "index", isset($_var_106[3]) ? $_var_106[3] : "index"];
}
function password($val)
{
	return substr(md5($val), 8, 16);
}
function mFile_put_contents($_var_107, $_var_108, $_var_109 = 0, $_var_110 = null)
{
	creatdir(dirname($_var_107));
	return file_put_contents($_var_107, $_var_108, $_var_109, $_var_110);
}
function characet($_var_111)
{
	if (!empty($_var_111)) {
		$_var_112 = mb_detect_encoding($_var_111, array("UTF-8", "GBK", "LATIN1", "BIG5"));
		if ($_var_112 != "UTF-8") {
			$_var_111 = mb_convert_encoding($_var_111, "utf-8", $_var_112);
		}
	}
	return $_var_111;
}
function isAdminLogin()
{
	return !(empty($_COOKIE["in_adminid"]) || empty($_COOKIE["in_adminname"]) || empty($_COOKIE["in_adminpassword"]) || empty($_COOKIE["in_permission"]) || empty($_COOKIE["in_adminexpire"]) || !db("admin")->where("in_adminid", intval($_COOKIE["in_adminid"]))->where("in_adminpassword", $_COOKIE["in_adminpassword"])->count());
}
function isEmail($email)
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function isPhone($_var_113)
{
	if (strlen($_var_113) != 11 || !preg_match("/^1[3-9][0-9]\\d{4,8}\$/", $_var_113)) {
		return false;
	} else {
		return true;
	}
}
function redirect($url = '/', $code = '')
{
	if ($code == 301) {
		header("HTTP/1.1 301 Moved Permanently");
	}
	exit(header("location:" . $url));
}
function image_crop($_var_114, $_var_115, $_var_116, $_var_117)
{
	list($_var_118, $_var_119, $_var_120) = getimagesize($_var_116);
	switch ($_var_120) {
		case IMAGETYPE_GIF:
			$_var_121 = imagecreatefromgif($_var_116);
			break 1;
		case IMAGETYPE_JPEG:
			$_var_121 = imagecreatefromjpeg($_var_116);
			break 1;
		default:
			$_var_121 = imagecreatefrompng($_var_116);
			break 1;
	}
	$_var_122 = imagecreatetruecolor($_var_114, $_var_115);
	$_var_123 = imagecolorallocatealpha($_var_122, 255, 255, 255, 0);
	imagefill($_var_122, 0, 0, $_var_123);
	imagecolortransparent($_var_122, $_var_123);
	$_var_124 = 1.0 * $_var_114 / $_var_118;
	$_var_125 = 1.0 * $_var_115 / $_var_119;
	$_var_126 = $_var_124 < $_var_125 ? $_var_125 : $_var_124;
	$_var_127 = (int) ($_var_114 / $_var_126);
	$_var_128 = (int) ($_var_115 / $_var_126);
	$_var_129 = imagecreatetruecolor($_var_127, $_var_128);
	$_var_130 = imagecolorallocate($_var_129, 255, 255, 255);
	imagecolortransparent($_var_129, $_var_130);
	imagefill($_var_129, 0, 0, $_var_130);
	$_var_131 = (int) (($_var_118 - $_var_127) / 2);
	$_var_132 = (int) (($_var_119 - $_var_128) / 2);
	imagecopy($_var_129, $_var_121, 0, 0, $_var_131, $_var_132, $_var_127, $_var_128);
	imagecopyresampled($_var_122, $_var_129, 0, 0, 0, 0, $_var_114, $_var_115, $_var_127, $_var_128);
	imagedestroy($_var_129);
	imagesavealpha($_var_122, true);
	imagepng($_var_122, $_var_117);
	imagedestroy($_var_121);
	imagedestroy($_var_122);
}
function checkmobile()
{
	$_var_133 = array("iphone", "ipad", "ipod", "android", "phone", "mobile", "wap", "netfront", "java", "opera mobi", "opera mini", "ucweb", "windows ce", "symbian", "series", "webos", "sony", "blackberry", "dopod", "nokia", "samsung", "palmsource", "xda", "pieplus", "meizu", "midp", "cldc", "motorola", "foma", "docomo", "up.browser", "up.link", "blazer", "helio", "hosin", "huawei", "novarra", "coolpad", "webos", "techfaith", "palmsource", "alcatel", "amoi", "ktouch", "nexian", "ericsson", "philips", "sagem", "wellcom", "bunjalloo", "maui", "smartphone", "iemobile", "spice", "bird", "zte-", "longcos", "pantech", "gionee", "portalmmm", "jig browser", "hiptop", "benq", "haier", "^lct", "320x320", "240x320", "176x220", "windows phone");
	$_var_134 = array("cect", "compal", "ctl", "lg", "nec", "tcl", "alcatel", "ericsson", "bird", "daxian", "dbtel", "eastcom", "pantech", "dopod", "philips", "haier", "konka", "kejian", "lenovo", "benq", "mot", "soutec", "nokia", "sagem", "sgh", "sed", "capitel", "panasonic", "sonyericsson", "sharp", "amoi", "panda", "zte");
	$_var_135 = array("micromessenger");
	if (dstrpos($_SERVER["HTTP_USER_AGENT"], $_var_133)) {
		return true;
	} elseif (dstrpos($_SERVER["HTTP_USER_AGENT"], $_var_134)) {
		return true;
	} elseif (dstrpos($_SERVER["HTTP_USER_AGENT"], $_var_135)) {
		return true;
	} else {
		return false;
	}
}
function dstrpos($string, $arr)
{
	if (!empty($string)) {
		foreach ((array) $arr as $_var_136) {
			if (strpos(strtolower($string), $_var_136) !== false) {
				return true;
			}
		}
	}
	return false;
}
function html_message($_var_137, $_var_138, $_var_139 = '')
{
	return "<html lang=\"\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=" . IN_CHARSET . "\" /><title>站点提示</title></head><body bgcolor=\"#FFFFFF\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"850\" align=\"center\" height=\"85%\"><tr align=\"center\" valign=\"middle\"><td><table cellpadding=\"20\" cellspacing=\"0\" border=\"0\" width=\"80%\" align=\"center\" style=\"font-family: Verdana, Tahoma; color: #666666; font-size: 12px\"><tr><td valign=\"middle\" align=\"center\" bgcolor=\"#EBEBEB\"><b style=\"font-size: 16px\">" . $_var_137 . "</b><br /><br /><p style=\"text-align:left;\">" . $_var_138 . "</p><br /><br /></td></tr></table></td></tr></table>" . $_var_139 . "</body></html>";
}
function iframe_message($msg)
{
	return "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=" . IN_CHARSET . "\" /><table style=\"border:1px solid #09C\" align=\"center\"><tr><td><div style=\"text-align:center;color:#09C\">" . $msg . "</div></td></tr></table>";
}
function close_browse($_var_140 = 'Access denied')
{
	if (empty($_SERVER["HTTP_REFERER"])) {
		exit($_var_140);
	} elseif (!preg_match("/^(https?:\\/\\/" . $_SERVER["HTTP_HOST"] . ")/i", $_SERVER["HTTP_REFERER"])) {
		exit($_var_140);
	}
}
function core_entry($read)
{
	if (is_file($read)) {
		include_once $read;
	} else {
		redirect();
	}
}
function ergodic_array($str, $key)
{
	if (!empty($str)) {
		$_var_141 = explode(",", $str);
		for ($_var_142 = 0; $_var_142 < count($_var_141); $_var_142++) {
			if ($_var_141[$_var_142] == $key) {
				return true;
			}
		}
	}
	return false;
}
function is_ssl()
{
	if (isset($_SERVER["HTTPS"]) && ("1" == $_SERVER["HTTPS"] || "on" == strtolower($_SERVER["HTTPS"]))) {
		return true;
	} elseif (isset($_SERVER["SERVER_PORT"]) && "443" == $_SERVER["SERVER_PORT"]) {
		return true;
	} elseif (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") {
		return true;
	}
	return false;
}
function submitcheck($var, $token = 0)
{
	if ($token < 0) {
		return empty($_GET[$var]) || $_GET[$var] !== $_COOKIE["in_adminpassword"] ? false : true;
	} elseif (!empty($_POST[$var]) && $_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_SERVER["HTTP_REFERER"]) || preg_replace("/https?:\\/\\/([^\\:\\/]+).*/i", "\\1", $_SERVER["HTTP_REFERER"]) == preg_replace("/([^\\:]+).*/", "\\1", $_SERVER["HTTP_HOST"])) {
			return $token ? $_POST[$var] !== $_COOKIE["in_adminpassword"] ? false : true : true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
function getonlineip()
{
	if (isset($_SERVER["REMOTE_ADDR"]) && $_SERVER["REMOTE_ADDR"] && strcasecmp($_SERVER["REMOTE_ADDR"], "unknown")) {
		$_var_143 = $_SERVER["REMOTE_ADDR"];
	} elseif (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
		$_var_143 = getenv("HTTP_CLIENT_IP");
	} elseif (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
		$_var_143 = getenv("HTTP_X_FORWARDED_FOR");
	} elseif (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
		$_var_143 = getenv("REMOTE_ADDR");
	}
	preg_match("/[\\d\\.]{7,15}/", isset($_var_143) ? $_var_143 : NULL, $_var_144);
	return isset($_var_144[0]) ? $_var_144[0] : "unknown";
}
function auth_codes($str, $mode = 'en', $key = '')
{
	if (empty($key)) {
		return $mode == "de" ? base64_decode($str) : base64_encode($str);
	} else {
		return $mode == "de" ? base64_decode(str_replace(md5($key), "", $str)) : md5($key) . base64_encode($str);
	}
}
function convert_utf8($str, $charset)
{
	if ($charset !== IN_CHARSET) {
		return IN_CHARSET == "gbk" ? iconv("UTF-8", "GBK//IGNORE", auth_codes(preg_replace("/\\s/", "+", $str), "de")) : iconv("GBK", "UTF-8//IGNORE", auth_codes($str, "de"));
	} else {
		return $charset == "gbk" ? auth_codes($str, "de") : auth_codes(preg_replace("/\\s/", "+", $str), "de");
	}
}
function hideStar($_var_145)
{
	if (strpos($_var_145, "@")) {
		$_var_146 = explode("@", $_var_145);
		$_var_147 = strlen($_var_146[0]) < 4 ? "" : substr($_var_145, 0, 3);
		$_var_148 = 0;
		$_var_145 = preg_replace("/([\\d\\w+_-]{0,100})@/", "***@", $_var_145, -1, $_var_148);
		$_var_149 = $_var_147 . $_var_145;
	} else {
		$_var_150 = "/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/i";
		if (preg_match($_var_150, $_var_145)) {
			$_var_149 = preg_replace($_var_150, "\$1****\$2", $_var_145);
		} else {
			$_var_149 = substr($_var_145, 0, 3) . "***" . substr($_var_145, -1);
		}
	}
	return $_var_149;
}
function dataDesensitization($_var_151, $_var_152 = 0, $_var_153 = 0, $_var_154 = '*')
{
	if (empty($_var_151)) {
		return false;
	}
	$_var_155 = array();
	$_var_156 = mb_strlen($_var_151);
	while ($_var_156) {
		$_var_155[] = mb_substr($_var_151, 0, 1, "utf8");
		$_var_151 = mb_substr($_var_151, 1, $_var_156, "utf8");
		$_var_156 = mb_strlen($_var_151);
	}
	$_var_157 = count($_var_155);
	$_var_158 = $_var_152 >= 0 ? $_var_152 : $_var_157 - abs($_var_152);
	$_var_159 = $_var_160 = $_var_157 - 1;
	if ($_var_153 > 0) {
		$_var_159 = $_var_158 + $_var_153 - 1;
	} elseif ($_var_153 < 0) {
		$_var_159 -= abs($_var_153);
	}
	for ($_var_161 = $_var_158; $_var_161 <= $_var_159; $_var_161++) {
		$_var_155[$_var_161] = $_var_154;
	}
	if ($_var_158 >= $_var_159 || $_var_158 >= $_var_160 || $_var_159 > $_var_160) {
		return false;
	}
	return implode("", $_var_155);
}
function create_order_no($uid)
{
	$_var_162 = date("YmdHis") . $uid . substr(time(), 3) . rand(1000, 9999);
	return $_var_162;
}
function getremoteurl($app, $remote)
{
	return $remote == 1 ? gettimestamp($app) : ($remote == 2 ? getaliosslink($app) : "http://" . $_SERVER["HTTP_HOST"] . "/data/attachment/" . $app);
}
function getaliosslink($_var_163)
{
	$_var_164 = IN_ALIYUNOSS_CDN ? IN_ALIYUNOSS_CDN : IN_ALIYUNOSS_EP;
	$_var_165 = "http://" . IN_ALIYUNOSS_BK . "." . $_var_164 . "/" . $_var_163;
	$_var_165 = is_ssl() ? str_replace("http://", "https://", $_var_165) : $_var_165;
	return $_var_165;
}
function gettimestamp($url)
{
	$url = IN_REMOTEDK . $url;
	try {
		$_var_166 = parse_url($url);
		$_var_167 = time() + 3600;
		$_var_168 = dechex($_var_167);
		$_var_169 = IN_MAINKEY;
		$_var_170 = $_var_169 . $_var_166["path"] . $_var_168;
		$_var_171 = strtolower(md5($_var_170));
		if (isset($_var_166["query"])) {
			$url = $url . "&sign=" . $_var_171 . "&t=" . $_var_168;
		} else {
			$url = $url . "?sign=" . $_var_171 . "&t=" . $_var_168;
		}
		return $url;
	} catch (\Exception $_var_172) {
		echo $_var_172->getMessage();
	}
}
function bees_encrypt($_var_173 = '', $_var_174 = 'zhifengkeji')
{
	$_var_175 = str_split(base64_encode($_var_173));
	$_var_176 = count($_var_175);
	foreach (str_split($_var_174) as $_var_177 => $_var_178) {
		$_var_177 < $_var_176 && ($_var_175[$_var_177] .= $_var_178);
	}
	return str_replace(array("=", "+", "/"), array("O0O0O", "o000o", "oo00o"), join("", $_var_175));
}
function bees_decrypt($_var_179 = '', $_var_180 = 'zhifengkeji')
{
	if (!$_var_179) {
		return $_var_179;
	}
	$_var_181 = str_split(str_replace(array("O0O0O", "o000o", "oo00o"), array("=", "+", "/"), $_var_179), 2);
	$_var_182 = count($_var_181);
	foreach (str_split($_var_180) as $_var_183 => $_var_184) {
		$_var_183 <= $_var_182 && isset($_var_181[$_var_183]) && $_var_181[$_var_183][1] === $_var_184 && ($_var_181[$_var_183] = $_var_181[$_var_183][0]);
	}
	return base64_decode(join("", $_var_181));
}
function rand_code($_var_185 = 6)
{
	$_var_186 = "1234567890";
	$_var_187 = "";
	$_var_188 = strlen($_var_186);
	for ($_var_189 = 0; $_var_189 < $_var_185; $_var_189++) {
		$_var_187 .= $_var_186[mt_rand(0, $_var_188 - 1)];
	}
	return $_var_187;
}
function send_sms($_var_190, $_var_191)
{
	$_var_192 = "http://api.smsbao.com/";
	$_var_193 = IN_SMSUSER;
	$_var_194 = md5(IN_SMSPWD);
	$_var_195 = "【" . IN_SMSSIGN . "】" . $_var_191;
	$_var_196 = $_var_190;
	$_var_197 = $_var_192 . "sms?u=" . $_var_193 . "&p=" . $_var_194 . "&m=" . $_var_196 . "&c=" . urlencode($_var_195);
	$_var_198 = file_get_contents($_var_197);
	if ($_var_198 == 0) {
		return true;
	} else {
		return false;
	}
}
function send_email($_var_199, $_var_200, $_var_201)
{
	$_var_202 = IN_MAILSMTP;
	if (IN_PORT == 465) {
		$_var_202 = "ssl://" . str_replace("ssl://", "", IN_MAILSMTP);
	}
	$_var_203 = new \PHPMailer\PHPMailer\PHPMailer();
	$_var_203->IsSMTP();
	$_var_203->CharSet = "utf-8";
	$_var_203->SMTPAuth = true;
	$_var_203->Host = $_var_202;
	$_var_203->Port = IN_PORT;
	$_var_203->Username = IN_MAIL;
	$_var_203->Password = IN_MAILPW;
	$_var_203->From = IN_MAIL;
	$_var_203->FromName = convert_charset(IN_NAME);
	$_var_203->Subject = convert_charset($_var_200);
	$_var_203->AddAddress($_var_199, $_var_199);
	$_var_203->MsgHTML(convert_charset($_var_201));
	$_var_203->IsHTML(true);
	if (!$_var_203->Send()) {
		return false;
	} else {
		return true;
	}
}
function send_mailcode($_var_204, $_var_205 = '', $_var_206 = 0)
{
	$_var_205 = $_var_205 ?: rand_code();
	$_var_207 = is_ssl() ? "https://" : "http://";
	if ($_var_206) {
		$_var_208 = convert_charset(IN_NAME . "[" . $_var_204 . "]操作密码【验证码】");
		$_var_209 = "您的操作验证码是：" . $_var_205 . "<br />为了保证您的账户安全,请勿向任何人提供此验证码。<br />如非本人操作，请忽略此邮件！<br />本邮件由系统自动发送，请勿直接回复。<br />官方网址：" . $_var_207 . $_SERVER["HTTP_HOST"] . IN_PATH;
	} else {
		$_var_208 = convert_charset(IN_NAME . "[" . $_var_204 . "]账号注册【验证码】");
		$_var_209 = "您的注册验证码是：" . $_var_205 . "<br />为了保证您的账户安全,请勿向任何人提供此验证码。<br />如非本人操作，请忽略此邮件！<br />本邮件由系统自动发送，请勿直接回复。<br />官方网址：" . $_var_207 . $_SERVER["HTTP_HOST"] . IN_PATH;
	}
	$_var_210 = send_email($_var_204, $_var_208, $_var_209);
	if ($_var_210) {
		$_var_211 = array("in_uid" => $_var_206 ?: 0, "in_mail" => $_var_204, "in_code" => $_var_205, "in_addtime" => date("Y-m-d H:i:s"));
		$_var_210 = db("mail")->insert($_var_211);
		return $_var_210;
	}
	return null;
}
function check_mailcode($mail, $code, $uid = null)
{
	$_var_212 = [];
	$uid && ($_var_212[] = ["in_uid", "=", $uid]);
	return db("mail")->where($_var_212)->where("in_mail", $mail)->where("in_code", $code)->order("in_id desc")->value("in_id");
}
function udid_mobileconfig($_var_213 = '', $_var_214 = '获取设备ID', $_var_215 = '')
{
	$_var_213 = $_var_213 ?: get_site_url("s") . "/index/udid/get";
	$_var_216 = "获取设备ID";
	$_var_217 = "本文件仅用来获取设备ID";
	if (is_array($_var_214)) {
		$_var_216 = $_var_214["in_name"] ?: $_var_216;
		$_var_217 = $_var_214["template_language"] == "en" ? "This document is only used to obtain the device ID" : "本文件仅用来获取设备ID";
	}
	$_var_218 = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">\r\n<plist version=\"1.0\">\r\n    <dict>\r\n        <key>PayloadContent</key>\r\n        <dict>\r\n            <key>URL</key>\r\n            <string>" . $_var_213 . "</string>\r\n            <key>DeviceAttributes</key>\r\n            <array>\r\n                <string>UDID</string>\r\n                <string>IMEI</string>\r\n                <string>ICCID</string>\r\n                <string>VERSION</string>\r\n                <string>PRODUCT</string>\r\n            </array>\r\n        </dict>\r\n        <key>PayloadOrganization</key>\r\n        <string>" . $_SERVER["HTTP_HOST"] . "</string>\r\n        <key>PayloadDisplayName</key>\r\n        <string>" . $_var_216 . "</string>\r\n        <key>PayloadVersion</key>\r\n        <integer>1</integer>\r\n        <key>PayloadUUID</key>\r\n        <string>3C4DC7D2-E475-3375-489C-0BB8D732A655</string>\r\n        <key>PayloadIdentifier</key>\r\n        <string>dev.zhifeng.profile-service</string>\r\n        <key>PayloadDescription</key>\r\n        <string>" . $_var_217 . "</string>\r\n        <key>PayloadType</key>\r\n        <string>Profile Service</string>\r\n    </dict>\r\n</plist>";
	creatdir(IN_TMP_PATH . "");
	file_put_contents(IN_TMP_PATH . "udid" . $_var_215 . ".mobileconfig", $_var_218);
	$_var_219 = IN_CERT_PATH;
	$_var_220 = "openssl smime -sign -in " . IN_TMP_PATH . "udid" . $_var_215 . ".mobileconfig   -out " . IN_TMP_PATH . "udid_sign_" . $_var_215 . ".mobileconfig -signer " . $_var_219 . "public/5cando.pem -inkey " . $_var_219 . "public/5cando.key -certfile " . $_var_219 . "public/5cando.pem -outform der -nodetach 2";
	exec($_var_220, $_var_221, $_var_222);
	return "/data/tmp/udid_sign_" . $_var_215 . ".mobileconfig";
}
function get_udid()
{
	$_var_223 = file_get_contents("php://input");
	$_var_224 = "<?xml version=\"1.0\"";
	$_var_225 = "</plist>";
	$_var_226 = strpos($_var_223, $_var_224);
	$_var_227 = strpos($_var_223, $_var_225);
	$_var_228 = substr($_var_223, $_var_226, $_var_227 - $_var_226);
	$_var_229 = xml_parser_create();
	xml_parse_into_struct($_var_229, $_var_228, $_var_230);
	xml_parser_free($_var_229);
	$_var_231 = "";
	$_var_232 = "";
	$_var_233 = "";
	$_var_234 = "";
	$_var_235 = "";
	$_var_236 = 0;
	$_var_237 = array();
	foreach ($_var_230 as $_var_238) {
		if ($_var_238["level"] == 3 && $_var_238["type"] == "complete") {
			$_var_237[] = $_var_238;
		}
		$_var_236++;
	}
	$_var_223 = "";
	$_var_236 = 0;
	foreach ($_var_237 as $_var_239) {
		$_var_223 .= "\n==" . $_var_239["tag"] . " -> " . $_var_239["value"] . "<br/>";
		switch ($_var_239["value"]) {
			case "CHALLENGE":
				$_var_232 = $_var_237[$_var_236 + 1]["value"];
				break 1;
			case "DEVICE_NAME":
				$_var_233 = $_var_237[$_var_236 + 1]["value"];
				break 1;
			case "PRODUCT":
				$_var_234 = $_var_237[$_var_236 + 1]["value"];
				break 1;
			case "UDID":
				$_var_231 = $_var_237[$_var_236 + 1]["value"];
				break 1;
			case "VERSION":
				$_var_235 = $_var_237[$_var_236 + 1]["value"];
				break 1;
		}
		$_var_236++;
	}
	return $_var_231;
}
function Chk_authkey()
{
	
}
function curl_get_contents($url, $timeout = 1)
{
	$_var_244 = curl_init();
	curl_setopt($_var_244, CURLOPT_URL, $url);
	curl_setopt($_var_244, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($_var_244, CURLOPT_TIMEOUT, $timeout);
	$_var_245 = curl_exec($_var_244);
	curl_close($_var_244);
	$_var_245 = json_decode($_var_245, true);
	return $_var_245;
}
function saveRemoteFile($_var_246 = '', $_var_247 = '', $_var_248 = '', $_var_249 = 1)
{
	if (trim($_var_246) == "") {
		return false;
	}
	if (trim($_var_247) == "") {
		$_var_247 = "./";
	}
	if (0 !== strrpos($_var_247, "/")) {
		$_var_247 .= "/";
	}
	if (!is_dir($_var_247) && !mkdir($_var_247, 0777, true)) {
		return false;
	}
	$_var_250 = fopen($_var_246, "r");
	$_var_251 = 1024 * $_var_249;
	$_var_252 = "";
	ob_start();
	while (!feof($_var_250)) {
		$_var_253 = fread($_var_250, $_var_251);
		file_put_contents($_var_247 . $_var_248, $_var_253, FILE_APPEND);
		ob_flush();
		flush();
	}
	ob_end_clean();
	fclose($_var_250);
	return array("file_name" => $_var_248, "save_path" => $_var_247 . $_var_248, "size" => filesize($_var_247 . $_var_248));
}
function getRender($res, $page = 1)
{
	$_var_254 = $res->render();
	$_var_255 = $res->total();
	$_var_256 = $page ? str_replace("&page=" . $page, "", $_SERVER["REQUEST_URI"]) : $_SERVER["REQUEST_URI"];
	return str_replace(["/?page=", "<ul class=\"pagination\">"], [$_var_256 . "&page=", "<ul class=\"pagination\"><li class=\"disabled\">总计（" . $_var_255 . "）</li>"], $_var_254);
}
function TextToArray($_var_257 = '')
{
	$_var_258 = explode("|", $_var_257);
	foreach ($_var_258 as $_var_259 => $_var_260) {
		$_var_260 = explode(":", $_var_260);
		if (count($_var_260) > 1) {
			$_var_258[$_var_260[0]] = $_var_260[1];
			unset($_var_258[$_var_259]);
		}
	}
	return $_var_258;
}
function getTemplateData($lang = 'zh')
{
	return require IN_ROOT . "source/pack/lang/" . $lang . "/template.php";
}
function isJson($_var_261 = '', $_var_262 = false)
{
	$_var_261 = json_decode($_var_261, $_var_262);
	if ($_var_261 && is_object($_var_261) || is_array($_var_261) && !empty($_var_261)) {
		return $_var_261;
	}
	return false;
}
function isCashDate()
{
	if (IN_CASH_DATE) {
		$_var_263 = explode("|", IN_CASH_DATE);
		$_var_264 = [];
		foreach ($_var_263 as $_var_265 => $_var_266) {
			$_var_266 = explode("-", $_var_266);
			if (count($_var_266) > 1) {
				$_var_264 = array_merge($_var_264, range($_var_266[0], $_var_266[1]));
			} else {
				if (is_numeric($_var_266[0]) && $_var_266[0] != 0) {
					$_var_264 = array_merge($_var_264, $_var_266);
				}
			}
		}
		return in_array(date("d"), $_var_264);
	}
	return true;
}
function imgToBase64($img_file)
{
	$_var_267 = "";
	if (is_file($img_file)) {
		$_var_268 = $img_file;
		$_var_269 = getimagesize($_var_268);
		$_var_270 = fopen($_var_268, "r");
		if ($_var_270) {
			$_var_271 = filesize($_var_268);
			if ($_var_271 > 5242880) {
				die("pic size < 5M !");
			}
			$_var_272 = fread($_var_270, $_var_271);
			$_var_273 = chunk_split(base64_encode($_var_272));
			switch ($_var_269[2]) {
				case 1:
					$_var_274 = "gif";
					break 1;
				case 2:
					$_var_274 = "jpg";
					break 1;
				case 3:
					$_var_274 = "png";
					break 1;
			}
			$_var_267 = "data:image/" . $_var_274 . ";base64," . $_var_273;
		}
		fclose($_var_270);
	}
	return $_var_267;
}
function loadClass($_var_275 = 'index', $_var_276 = 'index', $_var_277 = 'index', $_var_278 = [])
{
	$_var_279 = "\\app\\" . $_var_275 . "\\" . $_var_276;
	if (class_exists($_var_279)) {
		$_var_280 = new $_var_279();
		$_var_280->info = $_var_275;
		$_var_280->module = $_var_276;
		$_var_280->action = $_var_277;
		if (method_exists($_var_280, "initialize")) {
			$_var_280->initialize();
		}
		if (method_exists($_var_280, $_var_277)) {
			$_var_280->{$_var_277}(...$_var_278);
		} else {
			if (method_exists($_var_280, "index")) {
				$_var_280->index(...$_var_278);
			} else {
				exit("Access denied");
			}
		}
	}
}
function myautoload($class_name = '')
{
	$class_name = str_replace("\\", "/", $class_name);
	$class_file = findClassFile($class_name);
	if ($class_file) {
		include_once $class_file;
	}
}
function findClassFile($class_name)
{
	$_var_281 = IN_ROOT . $class_name . ".php";
	if (is_file($_var_281)) {
		return $_var_281;
	}
	$_var_281 = str_replace("app/", "source/", $_var_281);
	if (is_file($_var_281)) {
		return $_var_281;
	}
	$_var_281 = str_replace("source/admin/", "source/admincp/module/", $_var_281);
	if (is_file($_var_281)) {
		return $_var_281;
	}
	$_var_281 = str_replace("source/", "source/pack/", $_var_281);
	if (is_file($_var_281)) {
		return $_var_281;
	}
	return null;
}
function reJSON($_var_282 = [], $_var_283 = 0, $_var_284 = '')
{
	if (is_numeric($_var_282)) {
		$_var_282 = ["code" => $_var_282, "data" => $_var_282, "msg" => $_var_284];
	} elseif (is_string($_var_282)) {
		$_var_282 = ["code" => $_var_283, "data" => "", "msg" => $_var_282];
	} else {
		$_var_282 = ["code" => $_var_283, "data" => $_var_282, "msg" => $_var_284];
	}
	$_var_282["time"] = time();
	exit(json($_var_282));
}
function json($data = [])
{
	return json_encode($data);
}
function make_password($length = 8)
{
	$_var_285 = array_merge(range("a", "z"), range("A", "Z"), range("0", "9"));
	$_var_286 = array_rand($_var_285, $length);
	$_var_287 = "";
	foreach ($_var_286 as $_var_288) {
		$_var_287 .= $_var_285[$_var_288];
	}
	return $_var_287;
}
function check_diswords($_var_289 = '')
{
	if (IN_PUBCHECK) {
		return true;
	}
	$_var_290 = [];
	if (IN_DISWORDS && $_var_289) {
		$_var_291 = explode(",", IN_DISWORDS);
		foreach ($_var_291 as $_var_292) {
			if (strstr($_var_289, $_var_292)) {
				$_var_290[] = $_var_292;
			}
		}
	}
	if (db("report")->where("appname", "like", "%" . $_var_289 . "%")->count()) {
		$_var_290[] = $_var_289;
	}
	return count($_var_290) ? $_var_290 : null;
}
function get_device_type()
{
	$_var_293 = strtolower($_SERVER["HTTP_USER_AGENT"]);
	if (strpos($_var_293, "iphone")) {
		$_var_294 = "iphone";
	} elseif (strpos($_var_293, "ipad")) {
		$_var_294 = "ipad";
	} elseif (strpos($_var_293, "android")) {
		$_var_294 = "android";
	} else {
		$_var_294 = "other";
	}
	return $_var_294;
}
function is_android()
{
	return get_device_type() == "android";
}
function is_ios()
{
	return is_iphone() or is_ipad();
}
function is_iphone()
{
	return get_device_type() == "iphone";
}
function is_ipad()
{
	return get_device_type() == "ipad";
}
function is_mobile()
{
	if (isset($_SERVER["HTTP_USER_AGENT"])) {
		$_var_295 = strtolower($_SERVER["HTTP_USER_AGENT"]);
		$_var_296 = array("nokia", "sony", "ericsson", "mot", "samsung", "htc", "sgh", "lg", "sharp", "sie-", "philips", "panasonic", "alcatel", "lenovo", "iphone", "ipod", "blackberry", "meizu", "android", "netfront", "symbian", "ucweb", "windowsce", "palm", "operamini", "operamobi", "opera mobi", "openwave", "nexusone", "cldc", "midp", "wap", "mobile", "ipad");
		if (preg_match("/(" . implode("|", $_var_296) . ")/i", $_var_295)) {
			return true;
		}
	}
	return false;
}
function is_safari()
{
	$_var_297 = strtolower($_SERVER["HTTP_USER_AGENT"]);
	if (strpos($_var_297, "safari") !== false) {
		if (strpos($_var_297, "chrome") !== false) {
			return false;
		}
		return true;
	} else {
		return false;
	}
}