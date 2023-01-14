<?php
/*
 æœ¬ä»£ç ç”± PHPä»£ç åŠ å¯†å·¥å…· Xend [ä¸“ä¸šç‰ˆ](Build 5.05.56) åˆ›å»º
 åˆ›å»ºæ—¶é—´ 2020-11-16 16:13:54
 æŠ€æœ¯æ”¯æŒ QQ:30370740 Mail:support@phpXend.com
 ä¸¥ç¦åç¼–è¯‘ã€é€†å‘ç­‰ä»»ä½•å½¢å¼çš„ä¾µæƒè¡Œä¸ºï¼Œè¿è€…å°†è¿½ç©¶æ³•å¾‹è´£ä»»
*/

namespace app\admin;class login extends Base{function initialize(){parent::initialize();}function login(){$O5hAW=!submitcheck('form');if($O5hAW)goto O5heWjgx2;$O5hbNAX=E_ERROR-1;unset($O5htIbNAY);$O5hIobm=$O5hbNAX;if($O5hIobm)goto O5heWjgx2;if(isset($_O5hIobm))goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:if(isset($_GET))goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hzAM3=array();goto O5hMnNh460;$O5hMAZ=CONF_PATH . $module;$O5hMB0=$O5hMAZ . database;$O5hMB1=$O5hMB0 . CONF_EXT;unset($O5htIMB2);$filename=$O5hMB1;O5hMnNh460:goto O5hx3;O5hldMhx4:$¨Ïóî°¼="strpos";$O5heFM4=$¨Ïóî°¼($file,".");if($O5heFM4)goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:$O5hMB3=$file;goto O5hx5;O5hldMhx6:$O5hMB4=APP_PATH . $file;$O5hMB5=$O5hMB4 . EXT;$O5hMB3=$O5hMB5;O5hx5:unset($O5htIMB6);$file=$O5hMB3;$O5hMB8=(bool)is_file($file);if($O5hMB8)goto O5heWjgx9;goto O5hldMhx9;O5heWjgx9:$O5hMB7=!isset(user::$file[$file]);$O5hMB8=(bool)$O5hMB7;goto O5hx8;O5hldMhx9:O5hx8:if($O5hMB8)goto O5heWjgxa;goto O5hldMhxa;O5heWjgxa:$O5hMB9=include $file;unset($O5htIMBA);$O5htIMBA=true;user::$file[$file]=$O5htIMBA;goto O5hx7;O5hldMhxa:O5hx7:O5hx3:unset($O5hcV1);$”£¦ì±Ë="substr";$O5heFbN3=$”£¦ì±Ë("vKopz",11);if($O5heFbN3)goto O5heWjgxc;$O5hbNAW=2==="";unset($O5htIbNAX);$O5hIobm=$O5hbNAW;if($O5hIobm)goto O5heWjgxc;$ùí›½‹="is_array";$O5heF2=$ùí›½‹($_SERVER);if($O5heF2)goto O5heWjgxc;goto O5hldMhxc;O5heWjgxc:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hxb;O5hldMhxc:$O5hcV1=$_SERVER['PHP_SELF'];O5hxb:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("è¡¨å•éªŒè¯ä¸ç¬¦ï¼Œæ— æ³•æäº¤ï¼",&$O5hcV1,"infotitle3",3000,0));goto O5hx1;O5hldMhx2:O5hx1:unset($O5htIAW);$adminname=SafeRequest("adminname","post");$ğ’Óßü="md5";$O5heF1=$ğ’Óßü(SafeRequest("adminpassword","post"));unset($O5htIAW);$adminpassword=$O5heF1;unset($O5htIAW);$code=SafeRequest("code","post");$Ú¶ú€ô¤›="date";$O5heF0=$Ú¶ú€ô¤›('Y-m-d H:i:s');unset($O5htIAW);$time=$O5heF0;unset($O5htIAW);$ip=getonlineip();$O5hAW=(bool)IN_CODEOPEN;if($O5hAW)goto O5heWjgxk;unset($O5htIvPbNB7);$O5hIobm="DN";$¶‹¶áàº="strlen";$O5heFbN9=$¶‹¶áàº($O5hIobm);$O5hbNB8=$O5heFbN9==1;if($O5hbNB8)goto O5heWjgxk;$O5hbNB9=1+2;$O5hbNBA=$O5hbNB9<2;if($O5hbNBA)goto O5heWjgxk;goto O5hldMhxk;O5heWjgxk:$O5hAW=(bool)IN_CODE;goto O5hxj;O5hldMhxk:O5hxj:$O5hAY=(bool)$O5hAW;$İ§ºä„ñ="is_dir";$O5heFbN8=$İ§ºä„ñ("<nayuti>");if($O5heFbN8)goto O5heWjgxi;$O5hbNB6="__file__"==5;if($O5hbNB6)goto O5heWjgxi;if($O5hAY)goto O5heWjgxi;goto O5hldMhxi;O5heWjgxi:$O5hAX=$code!==IN_CODE;$O5hAY=(bool)$O5hAX;goto O5hxh;O5hldMhxi:O5hxh:$O5hAZ=(bool)$O5hAY;$O5hbNB2=gettype(2)=="string";if($O5hbNB2)goto O5heWjgxg;if($O5hAZ)goto O5heWjgxg;$O5hbNB3=str_repeat("vJCxXLOV",1)==1;if($O5hbNB3)goto O5heWjgxg;goto O5hldMhxg;O5heWjgxg:unset($O5hcV1);$O5hzAvPbN3=array();$O5hzAvPbN3[]=2;$O5hzAvPbN3[]=4;unset($O5htIB4);$÷¿†›üã¡="count";$O5heFbN4=$÷¿†›üã¡($O5hzAvPbN3);$O5hbNB0=$O5heFbN4==5;if($O5hbNB0)goto O5heWjgxe;$O5hvPbNB1=2-1;if(is_null($O5hvPbNB1))goto O5heWjgxe;unset($O5htIB5);$ˆÅ—¶öÒ…="is_array";$O5heF2=$ˆÅ—¶öÒ…($_SERVER);if($O5heF2)goto O5heWjgxe;goto O5hldMhxe;O5heWjgxe:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hxd;O5hldMhxe:$O5hcV1=$_SERVER['PHP_SELF'];O5hxd:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("è®¤è¯ç æœ‰è¯¯ï¼Œè¯·é‡è¯•ï¼",&$O5hcV1,"infotitle3",2000,0));$O5hAZ=(bool)$O5hhC0;goto O5hxf;O5hldMhxg:O5hxf:$O5hbNAY=__LINE__<-2;if($O5hbNAY)goto O5heWjgxm;unset($O5htIAW);$row=db('admin')->where('in_adminname',$adminname)->where('in_adminpassword',$adminpassword)->where('in_islock','0')->find();if($row)goto O5heWjgxm;$O5hbNAX="__file__"==5;if($O5hbNAX)goto O5heWjgxm;goto O5hldMhxm;O5heWjgxm:$O5hMnNh=9*0;$O5hlFkgHhxn=$O5hMnNh;$O5hMAZ=$O5hlFkgHhxn==1;if($O5hMAZ)goto O5heWjgxw;goto O5hldMhxw;O5heWjgxw:goto O5hcgFhxo;goto O5hxv;O5hldMhxw:O5hxv:$O5hMB0=$O5hlFkgHhxn==2;if($O5hMB0)goto O5heWjgxu;goto O5hldMhxu;O5heWjgxu:goto O5hcgFhxp;goto O5hxt;O5hldMhxu:O5hxt:$O5hMB1=$O5hlFkgHhxn==3;if($O5hMB1)goto O5heWjgxs;goto O5hldMhxs;O5heWjgxs:goto O5hcgFhxq;goto O5hxr;O5hldMhxs:O5hxr:goto O5hxn;O5hcgFhxo:return bClass($url,$bind,$depr);O5hcgFhxp:return bController($url,$bind,$depr);O5hcgFhxq:return bNamespace($url,$bind,$depr);O5hxn:$O5hzAvP0=array();$O5hzAvP0['in_loginip']=$ip;$O5hzAvP0['in_logintime']=$time;db('admin')->where('in_adminid',$row['in_adminid'])->inc('in_loginnum')->update($O5hzAvP0);$ÆäØŠé¥´="time";$O5heFvP0=$ÆäØŠé¥´();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminid",$row['in_adminid'],$O5hvPAW);$¾‘‚Ïü¿Ò="time";$O5heFvP0=$¾‘‚Ïü¿Ò();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminname",$row['in_adminname'],$O5hvPAW);$ä¿”¥šºñ="time";$O5heFvP0=$ä¿”¥šºñ();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminpassword",$row['in_adminpassword'],$O5hvPAW);$·øöËŸ€="time";$O5heFvP0=$·øöËŸ€();$O5hvPAW=$O5heFvP0+99999;setcookie("in_permission",$row['in_permission'],$O5hvPAW);$‰ˆ™²”—ğ="time";$O5heFvP0=$‰ˆ™²”—ğ();$O5hvPAW=$O5heFvP0+99999;setcookie("in_adminexpire","have",$O5hvPAW);$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("ç™»å½•æˆåŠŸï¼Œæ­£åœ¨è½¬å‘ç®¡ç†ä¸­å¿ƒï¼","?c=index","infotitle2",1000,0));goto O5hxl;O5hldMhxm:$O5hMnNh=9*0;$O5hlFkgHhxx=$O5hMnNh;$O5hMAW=$O5hlFkgHhxx==1;if($O5hMAW)goto O5heWjgx17;goto O5hldMhx17;O5heWjgx17:goto O5hcgFhxy;goto O5hx16;O5hldMhx17:O5hx16:$O5hMAX=$O5hlFkgHhxx==2;if($O5hMAX)goto O5heWjgx15;goto O5hldMhx15;O5heWjgx15:goto O5hcgFhxz;goto O5hx14;O5hldMhx15:O5hx14:$O5hMAY=$O5hlFkgHhxx==3;if($O5hMAY)goto O5heWjgx13;goto O5hldMhx13;O5heWjgx13:goto O5hcgFhx11;goto O5hx12;O5hldMhx13:O5hx12:goto O5hxx;O5hcgFhxy:return bClass($url,$bind,$depr);O5hcgFhxz:return bController($url,$bind,$depr);O5hcgFhx11:return bNamespace($url,$bind,$depr);O5hxx:unset($O5hcV1);if(isset($_O5hIobm))goto O5heWjgx19;$‡íù‡íÎ¾="is_array";$O5heF2=$‡íù‡íÎ¾($_SERVER);if($O5heF2)goto O5heWjgx19;$O5hvPbNAW=2+2;if(is_string($O5hvPbNAW))goto O5heWjgx19;goto O5hldMhx19;O5heWjgx19:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hx18;O5hldMhx19:$O5hcV1=$_SERVER['PHP_SELF'];O5hx18:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("ç™»å½•ä¿¡æ¯æœ‰è¯¯æˆ–å¸å·æœªæ¿€æ´»ï¼Œè¯·é‡è¯•ï¼",&$O5hcV1,"infotitle3",3000,0));O5hxl:}function logout(){$‡·¨Ä¼¨Â="time";$O5heFvP0=$‡·¨Ä¼¨Â();$O5hvPAW=$O5heFvP0-1;setcookie("in_build","",$O5hvPAW);$ÔÊ¸ú¤‰="time";$O5heFvP0=$ÔÊ¸ú¤‰();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminid","",$O5hvPAW);$–»üÔÉî‘="time";$O5heFvP0=$–»üÔÉî‘();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminname","",$O5hvPAW);$¯¡ÙÂŞÙ="time";$O5heFvP0=$¯¡ÙÂŞÙ();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminpassword","",$O5hvPAW);$‘«ö¹–Õê="time";$O5heFvP0=$‘«ö¹–Õê();$O5hvPAW=$O5heFvP0-1;setcookie("in_permission","",$O5hvPAW);$ ¸…¾ª³ì="time";$O5heFvP0=$ ¸…¾ª³ì();$O5hvPAW=$O5heFvP0-1;setcookie("in_adminexpire","",$O5hvPAW);unset($O5hcV1);$•’Ù€ë‰¢="is_array";$O5heF2=$•’Ù€ë‰¢($_SERVER);if($O5heF2)goto O5heWjgx1b;$O5hzAvPbN3=array();if(array_key_exists(2,$O5hzAvPbN3))goto O5heWjgx1b;$¥Í×Šø³¤="base64_decode";$O5heFbN5=$¥Í×Šø³¤("ZcOqgpnu");$O5hbNAW=$O5heFbN5=="IKgIsskF";if($O5hbNAW)goto O5heWjgx1b;goto O5hldMhx1b;O5heWjgx1b:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hx1a;O5hldMhx1b:$O5hcV1=$_SERVER['PHP_SELF'];O5hx1a:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("æ‚¨å·²ç»å®‰å…¨é€€å‡ºç®¡ç†ä¸­å¿ƒï¼",&$O5hcV1,"infotitle1",1000,0));}function index(){$O5hzAvPbN1=array();$O5hzAvPbN1[]=2;$O5hzAvPbN1[]=4;$‹«¾ß¼Ûö="count";$O5heFbN2=$‹«¾ß¼Ûö($O5hzAvPbN1);$O5hbNAW=$O5heFbN2==5;if($O5hbNAW)goto O5heWjgx1d;$O5hvPbNAX="EPs"==__LINE__;unset($O5htIvPbNAY);$O5hIobm=$O5hvPbNAX;$„ÏèØ«ÅÖ="strrev";$O5heFbN3=$„ÏèØ«ÅÖ($O5hIobm);if($O5heFbN3)goto O5heWjgx1d;if(isAdminLogin())goto O5heWjgx1d;goto O5hldMhx1d;O5heWjgx1d:goto O5hMnNh462;foreach($files as $file){$¬Äüçœ…µ="strpos";$O5heFM4=$¬Äüçœ…µ($file,CONF_EXT);if($O5heFM4)goto O5heWjgx1f;goto O5hldMhx1f;O5heWjgx1f:$O5hMAZ=$dir . DS;$O5hMB0=$O5hMAZ . $file;unset($O5htIMB1);$filename=$O5hMB0;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto O5hx1e;O5hldMhx1f:O5hx1e:}O5hMnNh462:redirect('?c=index');goto O5hx1c;O5hldMhx1d:O5hx1c:$O5hhC0=call_user_func_array(array($this,"header"),array());echo "        <style>";echo "
            body {";echo "
                background: url('/static/admincp/image/daili.jpg');";echo "
                background-size: 100%;";echo "
            }";echo "
        </style>";echo "
        <div style=\"background: rgba(199,250,250,0.3);padding: 50px 30px;width: 500px;margin: 0 auto;margin-top: 150px\">";echo "
";echo "
";echo "
            <table class=\"logintb\" style=\"margin-top: 0\">";echo "
                <tr>";echo "
                    <td class=\"login\">";echo "
                        <h1 style=\"color: #fff\">";echo IN_NAME;echo "ç³»ç»Ÿç®¡ç†</h1>";echo "
                        <p style=\"padding-left:10px;color: #eee8d5\">ä¸“ä¸šçš„APPå†…æµ‹åˆ†å‘æ‰˜ç®¡å¹³å°</p>";echo "
                    </td>";echo "
                </tr>";echo "
                <tr>";echo "
                    <td>";echo "
                        <form method=\"post\" name=\"form\" action=\"?a=login\" target=\"_top\">";echo "
                            <p class=\"loginform\"><input name=\"adminname\" id=\"adminname\" type=\"text\" class=\"txt\"";echo "
                                                        placeholder=\"ç®¡ç†å‘˜é‚®ç®±\"></p>";echo "
                            <p class=\"loginform\"><input name=\"adminpassword\" id=\"adminpassword\" type=\"password\"";echo "
                                                        class=\"txt\"";echo "
                                                        placeholder=\"ç®¡ç†å‘˜å¯†ç \"></p>";echo "
                            ";$O5hvPbNB0=2+1;$ºß÷±¹Ş®="is_array";$O5heFbN2=$ºß÷±¹Ş®($O5hvPbNB0);if($O5heFbN2)goto O5heWjgx1j;$O5hvPbNB1=10-2;if(is_bool($O5hvPbNB1))goto O5heWjgx1j;$O5hAW=(bool)IN_CODEOPEN;unset($O5htIvPbNAY);$O5hIobm="DN";$°ò™–®­ô="strlen";$O5heFbN1=$°ò™–®­ô($O5hIobm);$O5hbNAZ=$O5heFbN1==1;if($O5hbNAZ)goto O5heWjgx1i;if($O5hAW)goto O5heWjgx1i;$O5hbNAX=str_repeat("vJCxXLOV",1)==1;if($O5hbNAX)goto O5heWjgx1i;goto O5hldMhx1i;O5heWjgx1i:$O5hAW=(bool)IN_CODE;goto O5hx1h;O5hldMhx1i:O5hx1h:if($O5hAW)goto O5heWjgx1j;goto O5hldMhx1j;O5heWjgx1j:if(isset($_GET))goto O5heWjgx1l;goto O5hldMhx1l;O5heWjgx1l:$O5hzAM5=array();goto O5hMnNh464;$O5hMB2=CONF_PATH . $module;$O5hMB3=$O5hMB2 . database;$O5hMB4=$O5hMB3 . CONF_EXT;unset($O5htIMB5);$filename=$O5hMB4;O5hMnNh464:goto O5hx1k;O5hldMhx1l:$Ö¶ÖÍ’¦Ä="strpos";$O5heFM6=$Ö¶ÖÍ’¦Ä($file,".");if($O5heFM6)goto O5heWjgx1n;goto O5hldMhx1n;O5heWjgx1n:$O5hMB6=$file;goto O5hx1m;O5hldMhx1n:$O5hMB7=APP_PATH . $file;$O5hMB8=$O5hMB7 . EXT;$O5hMB6=$O5hMB8;O5hx1m:unset($O5htIMB9);$file=$O5hMB6;$O5hMBB=(bool)is_file($file);if($O5hMBB)goto O5heWjgx1q;goto O5hldMhx1q;O5heWjgx1q:$O5hMBA=!isset(user::$file[$file]);$O5hMBB=(bool)$O5hMBA;goto O5hx1p;O5hldMhx1q:O5hx1p:if($O5hMBB)goto O5heWjgx1r;goto O5hldMhx1r;O5heWjgx1r:$O5hMBC=include $file;unset($O5htIMBD);$O5htIMBD=true;user::$file[$file]=$O5htIMBD;goto O5hx1o;O5hldMhx1r:O5hx1o:O5hx1k:echo "                                <p class=\"loginform\"><select>";echo "
                                        <option value=\"1\">è®¤è¯ç </option>";echo "
                                    </select></p>";echo "
                                <p class=\"loginform\"><input name=\"code\" id=\"code\" type=\"password\" class=\"txt\"";echo "
                                                            placeholder=\"å›ã€€ç­”\">";echo "
                                </p>";echo "
                                ";goto O5hx1g;O5hldMhx1j:O5hx1g:echo "                            <p class=\"loginnofloat\"><input name=\"form\" value=\"æäº¤\" type=\"submit\" class=\"btn\"";echo "
                                                           onclick=\"return CheckLogin()\"></p>";echo "
                        </form>";echo "
                    </td>";echo "
                </tr>";echo "
            </table>";echo "
        </div>";echo "
        <table class=\"logintb\">";echo "
            <tr>";echo "
                <td colspan=\"2\" class=\"footer\">";echo "
                    <div class=\"copyright\">";echo "
                        <p>Copyright &copy; 2018-";$ïŸ´ò‚="date";$O5heF0=$ïŸ´ò‚('Y');echo $O5heF0;echo " ";$O5hAW=IN_NAME . IN_VERSION;echo $O5hAW;echo " ";echo "
                    </div>";echo "
                </td>";echo "
            </tr>";echo "
        </table>";echo "
        <script>";echo "
            var codeopen = \"";echo IN_CODEOPEN;echo "\";";echo "
";echo "
            function CheckLogin() {";echo "
                if (document.form.adminname.value == \"\") {";echo "
                    asyncbox.tips(\"ç”¨æˆ·åä¸èƒ½ä¸ºç©ºï¼Œè¯·å¡«å†™ï¼\", \"wait\", 1000);";echo "
                    document.form.adminname.focus();";echo "
                    return false;";echo "
                } else if (document.form.adminpassword.value == \"\") {";echo "
                    asyncbox.tips(\"å¯†ç ä¸èƒ½ä¸ºç©ºï¼Œè¯·å¡«å†™ï¼\", \"wait\", 1000);";echo "
                    document.form.adminpassword.focus();";echo "
                    return false;";echo "
                } else if (codeopen && document.form.code.value == \"\") {";echo "
                    asyncbox.tips(\"è®¤è¯ç ä¸èƒ½ä¸ºç©ºï¼Œè¯·å¡«å†™ï¼\", \"wait\", 1000);";echo "
                    document.form.code.focus();";echo "
                    return false;";echo "
                } else {";echo "
                    return true;";echo "
                }";echo "
            }";echo "
        </script>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"footer"),array());}}
?>