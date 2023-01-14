<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$E4weFbN1=call_user_func_array("strnatcmp",array(11,11));if($E4weFbN1)goto E4weWjgx2;$E4wbNAD=11+1;$E4wbNAE=11>$E4wbNAD;if($E4wbNAE)goto E4weWjgx2;$E4wAC=!defined('IN_ROOT');if($E4wAC)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:unset($E4wtIMAF);$D4vMIer="login";$E4wlFkgHhx3=$D4vMIer;$E4wMAG=$E4wlFkgHhx3=="admin";if($E4wMAG)goto E4weWjgxb;goto E4wldMhxb;E4weWjgxb:goto E4wcgFhx4;goto E4wxa;E4wldMhxb:E4wxa:$E4wMAJ=$E4wlFkgHhx3=="user";if($E4wMAJ)goto E4weWjgx9;goto E4wldMhx9;E4weWjgx9:goto E4wcgFhx5;goto E4wx8;E4wldMhx9:E4wx8:goto E4wx3;E4wcgFhx4:$E4weFM2=call_user_func_array("str_replace",array(&$depr,"|",&$url));unset($E4wtIMAH);$url=$E4weFM2;$E4weFM3=call_user_func_array("explode",array("|",&$url,2));unset($E4wtIMAI);$array=$E4weFM3;E4wcgFhx5:$E4weFM4=call_user_func_array("parse_url",array(&$url));unset($E4wtIMAK);$info=$E4weFM4;unset($E4wcVM6);if(is_array($info))goto E4weWjgx7;goto E4wldMhx7;E4weWjgx7:$E4wcVM6=&$info["path"];goto E4wx6;E4wldMhx7:$E4wcVM6=$info["path"];E4wx6:$E4weFM5=call_user_func_array("explode",array("/",&$E4wcVM6));unset($E4wtIMAL);$path=$E4weFM5;E4wx3:exit('Access denied');goto E4wx1;E4wldMhx2:E4wx1:unset($E4wtIAC);$notice=db('article')->where('type','=','2')->order('id desc')->find();$E4wbNAC=11-11;$E4wbNAD=$E4wbNAC/2;if($E4wbNAD)goto E4weWjgxd;if($notice)goto E4weWjgxd;if(function_exists("D4vIYlW"))goto E4weWjgxd;goto E4wldMhxd;E4weWjgxd:unset($E4wtIMAE);$D4vMIer="login";$E4wlFkgHhxe=$D4vMIer;$E4wMAF=$E4wlFkgHhxe=="admin";if($E4wMAF)goto E4weWjgxm;goto E4wldMhxm;E4weWjgxm:goto E4wcgFhxf;goto E4wxl;E4wldMhxm:E4wxl:$E4wMAI=$E4wlFkgHhxe=="user";if($E4wMAI)goto E4weWjgxk;goto E4wldMhxk;E4weWjgxk:goto E4wcgFhxg;goto E4wxj;E4wldMhxk:E4wxj:goto E4wxe;E4wcgFhxf:$E4weFM1=call_user_func_array("str_replace",array(&$depr,"|",&$url));unset($E4wtIMAG);$url=$E4weFM1;$E4weFM2=call_user_func_array("explode",array("|",&$url,2));unset($E4wtIMAH);$array=$E4weFM2;E4wcgFhxg:$E4weFM3=call_user_func_array("parse_url",array(&$url));unset($E4wtIMAJ);$info=$E4weFM3;unset($E4wcVM5);if(is_array($info))goto E4weWjgxi;goto E4wldMhxi;E4weWjgxi:$E4wcVM5=&$info["path"];goto E4wxh;E4wldMhxi:$E4wcVM5=$info["path"];E4wxh:$E4weFM4=call_user_func_array("explode",array("/",&$E4wcVM5));unset($E4wtIMAK);$path=$E4weFM4;E4wxe:echo "    <div class=\"container\" id=\"notice_wrap\"
";echo "
         style=\"background: #fff;line-height:30px;position: relative;overflow: hidden; color: #999;font-size: 14px;white-space: nowrap;\">
";echo "
        <a href=\"/index/message\">
";echo "
            <marquee direction=\"left\" behavior=\"scroll\" scrollamount=\"5\" loop=\"-1\" onmouseout=\"this.start()\"
";echo "
                     onmouseover=\"this.stop()\">
";echo "
                ";unset($E4wcV1);$E4wvPbNAD="SYc"==__LINE__;unset($E4wtIvPbNAE);$D4vIYlW=$E4wvPbNAD;$E4weFbN3=call_user_func_array("strrev",array(&$D4vIYlW));if($E4weFbN3)goto E4weWjgxo;if(is_array($notice))goto E4weWjgxo;$E4wzAvPbN4=array();$E4wzAvPbN4[]=11;$E4wzAvPbN4[]=22;$E4weFbN5=call_user_func_array("count",array(&$E4wzAvPbN4));$E4wbNAF=$E4weFbN5==14;if($E4wbNAF)goto E4weWjgxo;goto E4wldMhxo;E4weWjgxo:$E4wcV1=&$notice['content'];goto E4wxn;E4wldMhxo:$E4wcV1=$notice['content'];E4wxn:$E4weF0=call_user_func_array("strip_tags",array(&$E4wcV1));unset($E4wtIAC);$content=$E4weF0;$E4wAC=$notice['name'] . " - ";$E4wAD=$E4wAC . $content;echo $E4wAD;echo "            </marquee>
";echo "
        </a>
";echo "
    </div>
";echo "
";goto E4wxc;E4wldMhxd:E4wxc:echo "<header>
";echo "
    <div class=\"container\">
";echo "
        <div class=\"header clearfix\">
";echo "
            <a class=\"header-left block fl\" href=\"";echo IN_PATH;echo "\">
";echo "
                <img src=\"";$E4weFbN0=call_user_func_array("gettype",array(11));$E4wbNAE=$E4weFbN0=="string";if($E4wbNAE)goto E4weWjgxq;if(isset($_D4vIYlW))goto E4weWjgxq;if(IN_LOGO)goto E4weWjgxq;goto E4wldMhxq;E4weWjgxq:$E4wAC=IN_LOGO;goto E4wxp;E4wldMhxq:$E4wAC='static/index/image/logo-top.png';E4wxp:$E4wAD=IN_PATH . $E4wAC;echo $E4wAD;echo "\"
";echo "
                     class=\"img-responsive hidden-xs\">
";echo "
                <img src=\"";if(IN_LOGO)goto E4weWjgxs;$E4wbNAE=E_ERROR-1;unset($E4wtIbNAF);$D4vIYlW=$E4wbNAE;if($D4vIYlW)goto E4weWjgxs;if(function_exists("D4vIYlW"))goto E4weWjgxs;goto E4wldMhxs;E4weWjgxs:$E4wAC=IN_LOGO;goto E4wxr;E4wldMhxs:$E4wAC='static/index/image/phone-top.png';E4wxr:$E4wAD=IN_PATH . $E4wAC;echo $E4wAD;echo "\"
";echo "
                     class=\"img-responsive visible-xs\">
";echo "
            </a>
";echo "
            <div class=\"phone-nav-wrap\">
";echo "
                <a class=\"header-left block fl\" href=\"/\">
";echo "
                    <img src=\"";if(IN_LOGO)goto E4weWjgxu;$E4weFbN0=call_user_func_array("gettype",array(11));$E4wbNAG=$E4weFbN0=="string";if($E4wbNAG)goto E4weWjgxu;$E4wbNAE=E_ERROR-1;unset($E4wtIbNAF);$D4vIYlW=$E4wbNAE;if($D4vIYlW)goto E4weWjgxu;goto E4wldMhxu;E4weWjgxu:$E4wAC=IN_LOGO;goto E4wxt;E4wldMhxu:$E4wAC='static/index/image/phone-top.png';E4wxt:$E4wAD=IN_PATH . $E4wAC;echo $E4wAD;echo "\"
";echo "
                         class=\"img-responsive visible-xs\">
";echo "
                </a>
";echo "
                <ul class=\"ms-nav fl clearfix\">
";echo "
                    <li class=\"";$E4wAC=$this->module=='index';if($E4wAC)goto E4weWjgxw;$E4weFbN1=call_user_func_array("strpos",array("Wo",11));$E4wbNAD=true===$E4weFbN1;if($E4wbNAD)goto E4weWjgxw;$E4weFbN2=call_user_func_array("strlen",array("MFXPBN"));$E4wbNAE=$E4weFbN2==0;if($E4wbNAE)goto E4weWjgxw;goto E4wldMhxw;E4weWjgxw:echo 'active';goto E4wxv;E4wldMhxw:E4wxv:echo "\"><a
";echo "
                                href=\"";echo IN_PATH;echo "\">首页</a>
";echo "
                    </li>
";echo "
                    ";if($this->userlogined)goto E4weWjgxy;$E4wbNAC=!true;unset($E4wtIbNAD);$D4vIYlW=$E4wbNAC;if($D4vIYlW)goto E4weWjgxy;$E4weFbN1=call_user_func_array("substr",array("TSbLN",20));if($E4weFbN1)goto E4weWjgxy;goto E4wldMhxy;E4weWjgxy:if(isset($_GET))goto E4weWjgx11;goto E4wldMhx11;E4weWjgx11:$E4wzAM3=array();goto D4vMIer267;$E4wMAE=CONF_PATH . $module;$E4wMAF=$E4wMAE . database;$E4wMAG=$E4wMAF . CONF_EXT;unset($E4wtIMAH);$filename=$E4wMAG;D4vMIer267:goto E4wxz;E4wldMhx11:$E4weFM4=call_user_func_array("strpos",array(&$file,"."));if($E4weFM4)goto E4weWjgx13;goto E4wldMhx13;E4weWjgx13:$E4wMAI=$file;goto E4wx12;E4wldMhx13:$E4wMAJ=APP_PATH . $file;$E4wMAK=$E4wMAJ . EXT;$E4wMAI=$E4wMAK;E4wx12:unset($E4wtIMAL);$file=$E4wMAI;$E4wMAN=(bool)is_file($file);if($E4wMAN)goto E4weWjgx16;goto E4wldMhx16;E4weWjgx16:$E4wMAM=!isset(user::$file[$file]);$E4wMAN=(bool)$E4wMAM;goto E4wx15;E4wldMhx16:E4wx15:if($E4wMAN)goto E4weWjgx17;goto E4wldMhx17;E4weWjgx17:$E4wMAO=include $file;unset($E4wtIMAP);$E4wtIMAP=true;user::$file[$file]=$E4wtIMAP;goto E4wx14;E4wldMhx17:E4wx14:E4wxz:echo "                        <li class=\"";$E4wbNAD=$_GET=="qLtaHJ";if($E4wbNAD)goto E4weWjgx19;$E4wbNAE=E_ERROR-1;unset($E4wtIbNAF);$D4vIYlW=$E4wbNAE;if($D4vIYlW)goto E4weWjgx19;$E4wAC=$this->action=='apps';if($E4wAC)goto E4weWjgx19;goto E4wldMhx19;E4weWjgx19:echo 'active';goto E4wx18;E4wldMhx19:E4wx18:echo "\">
";echo "
                            <a href=\"";$E4wAC=IN_PATH . 'index/apps/apps';echo $E4wAC;echo "\">我的应用</a>
";echo "
                        </li>
";echo "
                    ";goto E4wxx;E4wldMhxy:E4wxx:if(IN_SIGN)goto E4weWjgx1b;$E4weFbN1=call_user_func_array("is_null",array(__FILE__));if($E4weFbN1)goto E4weWjgx1b;$E4weFbN0=call_user_func_array("base64_decode",array("TNDyLmtH"));$E4wbNAC=$E4weFbN0=="LeHHEhKb";if($E4wbNAC)goto E4weWjgx1b;goto E4wldMhx1b;E4weWjgx1b:if(function_exists("D4vMIer"))goto E4weWjgx1d;goto E4wldMhx1d;E4weWjgx1d:$E4wzAM3=array();$E4wzAM3[]="56e696665646";$E4wzAM3[]="450594253435";$E4wzAM3[]="875646e696";$E4wzAM3[]="56d616e6279646";unset($E4wtIMAD);$var_12["arr_1"]=$E4wzAM3;foreach($var_12["arr_1"] as $k=>$vo){unset($E4wcVM5);if(is_array($var_12["arr_1"]))goto E4weWjgx1h;goto E4wldMhx1h;E4weWjgx1h:$E4wcVM5=&$var_12["arr_1"][$k];goto E4wx1g;E4wldMhx1h:$E4wcVM5=$var_12["arr_1"][$k];E4wx1g:$E4weFM4=call_user_func_array("gettype",array(&$E4wcVM5));$E4wMAE=$E4weFM4=="string";$E4wMAG=(bool)$E4wMAE;if($E4wMAG)goto E4weWjgx1f;goto E4wldMhx1f;E4weWjgx1f:$E4weFM6=call_user_func_array("fun_3",array(&$vo));unset($E4wtIMAF);$E4wtIMAF=$E4weFM6;unset($E4wtIMAH);$E4wtIMAH=$E4wtIMAF;$var_12["arr_1"][$k]=$E4wtIMAH;$E4wMAG=(bool)$E4wtIMAF;goto E4wx1e;E4wldMhx1f:E4wx1e:}$E4weFM8=call_user_func_array("fun_2",array("arr_1",1));$E4weFM9=call_user_func_array("fun_2",array("arr_1",2));$var_12["arr_1"][0]($E4weFM8,$E4weFM9);goto E4wx1c;E4wldMhx1d:goto D4vMIer269;$E4weFM10=call_user_func_array("fun_2",array("arr_1",8));$E4wMAI=$var_12["arr_1"][3](__FILE__) . $E4weFM10;$E4wMAJ=require $E4wMAI;$E4weFM11=call_user_func_array("fun_2",array("arr_1",9));$E4wMAK=$var_12["arr_1"][3](__FILE__) . $E4weFM11;$E4wMAL=require $E4wMAK;$E4weFM12=call_user_func_array("fun_2",array("arr_1",10));$E4wMAM=V_DATA . $E4weFM12;$E4wMAN=require $E4wMAM;D4vMIer269:E4wx1c:echo "                        <li class=\"";$E4wAC=$this->action=='sign';$E4wAE=(bool)$E4wAC;$E4weFbN2=call_user_func_array("strspn",array("XHIcwPIQ","11"));if($E4weFbN2)goto E4weWjgx1k;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgx1k;$E4wbNAG=11+1;$E4wbNAH=11>$E4wbNAG;if($E4wbNAH)goto E4weWjgx1k;goto E4wldMhx1k;E4weWjgx1k:$E4wAD=$this->module=='app_sign';$E4wAE=(bool)$E4wAD;goto E4wx1j;E4wldMhx1k:E4wx1j:if($E4wAE)goto E4weWjgx1l;if(function_exists("D4vIYlW"))goto E4weWjgx1l;$E4weFbN4=call_user_func_array("str_repeat",array("bHxLOgbm",1));$E4wbNAI=$E4weFbN4==1;if($E4wbNAI)goto E4weWjgx1l;goto E4wldMhx1l;E4weWjgx1l:echo 'active';goto E4wx1i;E4wldMhx1l:E4wx1i:echo "\">
";echo "
                            <a href=\"";$E4wAC=IN_PATH . 'index/app_sign';echo $E4wAC;echo "\">企业签名</a>
";echo "
                        </li>
";echo "
                    ";goto E4wx1a;E4wldMhx1b:E4wx1a:$E4weFbN0=call_user_func_array("is_object",array(null));if($E4weFbN0)goto E4weWjgx1n;$E4weFbN1=call_user_func_array("strlen",array("MFXPBN"));$E4wbNAC=$E4weFbN1==0;if($E4wbNAC)goto E4weWjgx1n;if(IN_SUPER)goto E4weWjgx1n;goto E4wldMhx1n;E4weWjgx1n:unset($E4wtIMAD);$D4vMIer="login";$E4wlFkgHhx1o=$D4vMIer;$E4wMAE=$E4wlFkgHhx1o=="admin";if($E4wMAE)goto E4weWjgx1w;goto E4wldMhx1w;E4weWjgx1w:goto E4wcgFhx1p;goto E4wx1v;E4wldMhx1w:E4wx1v:$E4wMAH=$E4wlFkgHhx1o=="user";if($E4wMAH)goto E4weWjgx1u;goto E4wldMhx1u;E4weWjgx1u:goto E4wcgFhx1q;goto E4wx1t;E4wldMhx1u:E4wx1t:goto E4wx1o;E4wcgFhx1p:$E4weFM2=call_user_func_array("str_replace",array(&$depr,"|",&$url));unset($E4wtIMAF);$url=$E4weFM2;$E4weFM3=call_user_func_array("explode",array("|",&$url,2));unset($E4wtIMAG);$array=$E4weFM3;E4wcgFhx1q:$E4weFM4=call_user_func_array("parse_url",array(&$url));unset($E4wtIMAI);$info=$E4weFM4;unset($E4wcVM6);if(is_array($info))goto E4weWjgx1s;goto E4wldMhx1s;E4weWjgx1s:$E4wcVM6=&$info["path"];goto E4wx1r;E4wldMhx1s:$E4wcVM6=$info["path"];E4wx1r:$E4weFM5=call_user_func_array("explode",array("/",&$E4wcVM6));unset($E4wtIMAJ);$path=$E4weFM5;E4wx1o:echo "                        <li class=\"";$E4wAC=$this->action=='super';if($E4wAC)goto E4weWjgx1y;$E4wbNAE=$_GET=="qLtaHJ";if($E4wbNAE)goto E4weWjgx1y;$E4weFbN1=call_user_func_array("strpos",array("Wo",11));$E4wbNAD=true===$E4weFbN1;if($E4wbNAD)goto E4weWjgx1y;goto E4wldMhx1y;E4weWjgx1y:echo 'active';goto E4wx1x;E4wldMhx1y:E4wx1x:echo "\">
";echo "
                            <a href=\"";$E4wAC=IN_PATH . 'index/apps/super';echo $E4wAC;echo "\">超级签名</a>
";echo "
                        </li>
";echo "
                    ";goto E4wx1m;E4wldMhx1n:E4wx1m:echo "                    ";$E4weFbN0=call_user_func_array("time",array());$E4wbNAC=!$E4weFbN0;if($E4wbNAC)goto E4weWjgx21;if(IN_TF)goto E4weWjgx21;unset($E4wtIvPbNAD);$D4vIYlW="Ja";$E4weFbN1=call_user_func_array("strlen",array(&$D4vIYlW));$E4wbNAE=$E4weFbN1==1;if($E4wbNAE)goto E4weWjgx21;goto E4wldMhx21;E4weWjgx21:goto D4vMIer26B;$E4wMAF=$R4vP4 . DS;unset($E4wtIMAG);$R4vP5=$E4wMAF;$E4wzAM2=array();unset($E4wtIMAH);$R4vA5=$E4wzAM2;unset($E4wtIMAI);$R4vA5[]=$request;unset($E4wtIMAJ);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D4vMIer26B:goto D4vMIer26D;$E4wzAM4=array();unset($E4wtIMAK);$R4vA1=$E4wzAM4;unset($E4wtIMAL);$E4wtIMAL=&$dispatch;$R4vA1[]=&$E4wtIMAL;$E4wzAM5=array();unset($E4wtIMAM);$R4vA2=$E4wzAM5;unset($E4wtIMAN);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D4vMIer26D:echo "                        <li class=\"";$E4weFbN1=call_user_func_array("substr",array("TSbLN",20));if($E4weFbN1)goto E4weWjgx23;$E4wAC=$this->module=='tf';if($E4wAC)goto E4weWjgx23;unset($E4wtIvPbNAD);$D4vIYlW="Ja";$E4weFbN2=call_user_func_array("strlen",array(&$D4vIYlW));$E4wbNAE=$E4weFbN2==1;if($E4wbNAE)goto E4weWjgx23;goto E4wldMhx23;E4weWjgx23:echo 'active';goto E4wx22;E4wldMhx23:E4wx22:echo "\">
";echo "
                            <a href=\"";$E4wAF=IN_PATH . 'index/tf';echo $E4wAF;echo "\">TF签名</a>
";echo "
                        </li>
";echo "
                    ";goto E4wx2z;E4wldMhx21:E4wx2z:echo "                    <li class=\"";$E4weFbN1=call_user_func_array("strpos",array("Wo",11));$E4wbNAE=true===$E4weFbN1;if($E4wbNAE)goto E4weWjgx25;$E4wbNAD=11-11;if($E4wbNAD)goto E4weWjgx25;$E4wAC=$this->module=='price';if($E4wAC)goto E4weWjgx25;goto E4wldMhx25;E4weWjgx25:echo 'active';goto E4wx24;E4wldMhx25:E4wx24:echo "\"><a
";echo "
                                href=\"";$E4wAC=IN_PATH . 'index/price';echo $E4wAC;echo "\">价格</a>
";echo "
                    </li>
";echo "
                    <li class=\"";$E4wzAvPbN6=array();$E4wzAvPbN6[]=11;$E4wzAvPbN6[]=22;$E4weFbN7=call_user_func_array("count",array(&$E4wzAvPbN6));$E4wbNAQ=$E4weFbN7==14;if($E4wbNAQ)goto E4weWjgx2b;$E4wvPbNAO=11+1;$E4weFbN5=call_user_func_array("trim",array(&$E4wvPbNAO));$E4wbNAP=$E4weFbN5==11;if($E4wbNAP)goto E4weWjgx2b;$E4wAC=$this->module=='webview';$E4wAE=(bool)$E4wAC;$E4wAK=!$E4wAE;if($E4wAK)goto E4weWjgx2a;$E4wbNAM=11+1;$E4wbNAN=11>$E4wbNAM;if($E4wbNAN)goto E4weWjgx2a;$E4weFbN4=call_user_func_array("base64_decode",array("TNDyLmtH"));$E4wbNAL=$E4weFbN4=="LeHHEhKb";if($E4wbNAL)goto E4weWjgx2a;goto E4wldMhx2a;E4weWjgx2a:$E4wAD=$this->module=='webview2';$E4wAE=(bool)$E4wAD;goto E4wx29;E4wldMhx2a:E4wx29:$E4wAG=(bool)$E4wAE;$E4wAH=!$E4wAG;if($E4wAH)goto E4weWjgx28;$E4wbNAJ=$_GET=="qLtaHJ";if($E4wbNAJ)goto E4weWjgx28;$E4weFbN3=call_user_func_array("chr",array(11));$E4wbNAI=$E4weFbN3=="B";if($E4wbNAI)goto E4weWjgx28;goto E4wldMhx28;E4weWjgx28:$E4wAF=$this->module=='pack';$E4wAG=(bool)$E4wAF;goto E4wx27;E4wldMhx28:E4wx27:if($E4wAG)goto E4weWjgx2b;goto E4wldMhx2b;E4weWjgx2b:echo 'active';goto E4wx26;E4wldMhx2b:E4wx26:echo "\">
";echo "
                        <a href=\"";$E4wAC=IN_PATH . 'index/pack';echo $E4wAC;echo "\">APP封装</a>
";echo "
                    </li>
";echo "
                    <li class=\"";$E4wbNAF=11-11;if($E4wbNAF)goto E4weWjgx2d;$E4wAC=$this->module=='utils';if($E4wAC)goto E4weWjgx2d;$E4wbNAD=11+1;$E4wbNAE=E_STRICT==$E4wbNAD;if($E4wbNAE)goto E4weWjgx2d;goto E4wldMhx2d;E4weWjgx2d:echo 'active';goto E4wx2c;E4wldMhx2d:E4wx2c:echo "\">
";echo "
                        <a href=\"";$E4wAC=IN_PATH . 'index/utils';echo $E4wAC;echo "\">工具箱</a>
";echo "
                    </li>
";echo "
                    ";$E4weFbN0=call_user_func_array("strspn",array("XHIcwPIQ","11"));if($E4weFbN0)goto E4weWjgx2f;$E4weFbN1=call_user_func_array("gettype",array(11));$E4wbNAC=$E4weFbN1=="string";if($E4wbNAC)goto E4weWjgx2f;if(IN_PROMOTE)goto E4weWjgx2f;goto E4wldMhx2f;E4weWjgx2f:$E4wMAD=9*0;unset($E4wtIMAE);$D4vMIer=$E4wMAD;$E4wlFkgHhx2g=$D4vMIer;$E4wMAF=$E4wlFkgHhx2g==1;if($E4wMAF)goto E4weWjgx2p;goto E4wldMhx2p;E4weWjgx2p:goto E4wcgFhx2h;goto E4wx2o;E4wldMhx2p:E4wx2o:$E4wMAG=$E4wlFkgHhx2g==2;if($E4wMAG)goto E4weWjgx2n;goto E4wldMhx2n;E4weWjgx2n:goto E4wcgFhx2i;goto E4wx2m;E4wldMhx2n:E4wx2m:$E4wMAH=$E4wlFkgHhx2g==3;if($E4wMAH)goto E4weWjgx2l;goto E4wldMhx2l;E4weWjgx2l:goto E4wcgFhx2j;goto E4wx2k;E4wldMhx2l:E4wx2k:goto E4wx2g;E4wcgFhx2h:$E4weFM2=call_user_func_array("bClass",array(&$url,&$bind,&$depr));return $E4weFM2;E4wcgFhx2i:$E4weFM3=call_user_func_array("bController",array(&$url,&$bind,&$depr));return $E4weFM3;E4wcgFhx2j:$E4weFM4=call_user_func_array("bNamespace",array(&$url,&$bind,&$depr));return $E4weFM4;E4wx2g:echo "                        <li class=\"";$E4wbNAJ=11-11;$E4wbNAK=$E4wbNAJ/2;if($E4wbNAK)goto E4weWjgx2t;$E4wzAvPbN2=array();$E4wzAvPbN2[]=11;$E4weFbN3=call_user_func_array("key",array(&$E4wzAvPbN2));if($E4weFbN3)goto E4weWjgx2t;$E4wAC=$this->module=='user_promote';$E4wAE=(bool)$E4wAC;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgx2s;$E4wbNAG=11+1;$E4wbNAH=11==$E4wbNAG;if($E4wbNAH)goto E4weWjgx2s;$E4wbNAI=11-11;if($E4wbNAI)goto E4weWjgx2s;goto E4wldMhx2s;E4weWjgx2s:$E4wAD=$this->module=='promote';$E4wAE=(bool)$E4wAD;goto E4wx2r;E4wldMhx2s:E4wx2r:if($E4wAE)goto E4weWjgx2t;goto E4wldMhx2t;E4weWjgx2t:echo 'active';goto E4wx2q;E4wldMhx2t:E4wx2q:echo "\">
";echo "
                            <a href=\"";$E4wAL=IN_PATH . 'index/promote';echo $E4wAL;echo "\">推广加盟</a>
";echo "
                        </li>
";echo "
                    ";goto E4wx2e;E4wldMhx2f:E4wx2e:echo "                    ";$E4weFbN1=call_user_func_array("gettype",array(E_PARSE));$E4wbNAC=$E4weFbN1=="CQdGL";if($E4wbNAC)goto E4weWjgx2v;$E4wbNAD=$_GET=="qLtaHJ";if($E4wbNAD)goto E4weWjgx2v;if($this->userlogined)goto E4weWjgx2v;goto E4wldMhx2v;E4weWjgx2v:if(isset($config[0]))goto E4weWjgx2x;goto E4wldMhx2x;E4weWjgx2x:goto D4vMIer26F;if(is_array($rules))goto E4weWjgx3z;goto E4wldMhx3z;E4weWjgx3z:Route::import($rules);goto E4wx2y;E4wldMhx3z:E4wx2y:D4vMIer26F:goto E4wx2w;E4wldMhx2x:goto D4vMIer271;$E4wMAE=$path . EXT;$E4weFM4=call_user_func_array("is_file",array(&$E4wMAE));if($E4weFM4)goto E4weWjgx32;goto E4wldMhx32;E4weWjgx32:$E4wMAF=$path . EXT;$E4wMAG=include $E4wMAF;goto E4wx31;E4wldMhx32:E4wx31:D4vMIer271:E4wx2w:echo "                        <li class=\"visible-xs phone-user-center\">
";echo "
                            <div class=\"clearfix user1\">
";echo "
                                <a href=\"";$E4wAC=IN_PATH . 'index/user_profile';echo $E4wAC;echo "\" class=\"fl\">用户中心</a>
";echo "
                                <span class=\"fr icon-arrow-down iconfont\"></span>
";echo "
                            </div>
";echo "
                            <dl>
";echo "
                                <dd><a href=\"";$E4wAC=IN_PATH . 'index/apps/apps';echo $E4wAC;echo "\">我的应用</a></dd>
";echo "
                                <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_profile';echo $E4wAC;echo "\">我的资料</a></dd>
";echo "
                                <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_order';echo $E4wAC;echo "\">我的订单</a></dd>
";echo "
                            </dl>
";echo "
                        </li>
";echo "
                        <!--登录后-->
";echo "
                        <div class=\"login-in clearfix\" style=\"display: block;\">
";echo "
                            ";$E4wbNAD=11-11;$E4wbNAE=$E4wbNAD/2;if($E4wbNAE)goto E4weWjgx34;$E4weFbN1=call_user_func_array("gettype",array(E_PARSE));$E4wbNAF=$E4weFbN1=="CQdGL";if($E4wbNAF)goto E4weWjgx34;$E4wAC=$this->user['in_verify']!=1;if($E4wAC)goto E4weWjgx34;goto E4wldMhx34;E4weWjgx34:if(function_exists("D4vMIer"))goto E4weWjgx36;goto E4wldMhx36;E4weWjgx36:$E4wzAM3=array();$E4wzAM3[]="56e696665646";$E4wzAM3[]="450594253435";$E4wzAM3[]="875646e696";$E4wzAM3[]="56d616e6279646";unset($E4wtIMAG);$var_12["arr_1"]=$E4wzAM3;foreach($var_12["arr_1"] as $k=>$vo){unset($E4wcVM5);if(is_array($var_12["arr_1"]))goto E4weWjgx3a;goto E4wldMhx3a;E4weWjgx3a:$E4wcVM5=&$var_12["arr_1"][$k];goto E4wx39;E4wldMhx3a:$E4wcVM5=$var_12["arr_1"][$k];E4wx39:$E4weFM4=call_user_func_array("gettype",array(&$E4wcVM5));$E4wMAH=$E4weFM4=="string";$E4wMAJ=(bool)$E4wMAH;if($E4wMAJ)goto E4weWjgx38;goto E4wldMhx38;E4weWjgx38:$E4weFM6=call_user_func_array("fun_3",array(&$vo));unset($E4wtIMAI);$E4wtIMAI=$E4weFM6;unset($E4wtIMAK);$E4wtIMAK=$E4wtIMAI;$var_12["arr_1"][$k]=$E4wtIMAK;$E4wMAJ=(bool)$E4wtIMAI;goto E4wx37;E4wldMhx38:E4wx37:}$E4weFM8=call_user_func_array("fun_2",array("arr_1",1));$E4weFM9=call_user_func_array("fun_2",array("arr_1",2));$var_12["arr_1"][0]($E4weFM8,$E4weFM9);goto E4wx35;E4wldMhx36:goto D4vMIer273;$E4weFM10=call_user_func_array("fun_2",array("arr_1",8));$E4wMAL=$var_12["arr_1"][3](__FILE__) . $E4weFM10;$E4wMAM=require $E4wMAL;$E4weFM11=call_user_func_array("fun_2",array("arr_1",9));$E4wMAN=$var_12["arr_1"][3](__FILE__) . $E4weFM11;$E4wMAO=require $E4wMAN;$E4weFM12=call_user_func_array("fun_2",array("arr_1",10));$E4wMAP=V_DATA . $E4weFM12;$E4wMAQ=require $E4wMAP;D4vMIer273:E4wx35:echo "                                <a class=\"name-certified fl\" href=\"/index/certification\">未实名认证</a>
";echo "
                            ";goto E4wx33;E4wldMhx34:E4wx33:echo "                            <div class=\"notification fl\">
";echo "
                            <span class=\"iconfont\">
";echo "
							";$E4wzAvPbN3=array();$E4wzAvPbN3[]=11;$E4wzAvPbN3[]=22;$E4weFbN4=call_user_func_array("count",array(&$E4wzAvPbN3));$E4wbNAE=$E4weFbN4==14;if($E4wbNAE)goto E4weWjgx3c;$E4wzAvPbN1=array();$E4wzAvPbN1[]=11;$E4wzAvPbN1[]=22;$E4weFbN2=call_user_func_array("count",array(&$E4wzAvPbN1));$E4wbNAD=$E4weFbN2==14;if($E4wbNAD)goto E4weWjgx3c;$E4wAC=$this->user['in_svip']==0;if($E4wAC)goto E4weWjgx3c;goto E4wldMhx3c;E4weWjgx3c:$E4weFM5=call_user_func_array("strlen",array(7));$E4wMAF=$E4weFM5<1;if($E4wMAF)goto E4weWjgx3e;goto E4wldMhx3e;E4weWjgx3e:$E4weFM6=call_user_func_array($adminL,array());D4vMIer275:igjagoe;$E4weFM7=call_user_func_array("strlen",array("wolrlg"));$E4weFM8=call_user_func_array("getnum",array(7));goto E4wx3d;E4wldMhx3e:E4wx3d:goto D4vMIer276;if(is_array($rule))goto E4weWjgx3g;goto E4wldMhx3g;E4weWjgx3g:$E4wzAM11=array();$E4wzAM11["rule"]=$rule;$E4wzAM11["msg"]=$msg;unset($E4wtIMAG);$this->validate=$E4wzAM11;goto E4wx3f;E4wldMhx3g:$E4wMAH=true===$rule;if($E4wMAH)goto E4weWjgx3i;goto E4wldMhx3i;E4weWjgx3i:$E4wMAI=$this->name;goto E4wx3h;E4wldMhx3i:$E4wMAI=$rule;E4wx3h:unset($E4wtIMAJ);$this->validate=$E4wMAI;E4wx3f:D4vMIer276:echo "                                <img src=\"";echo IN_PATH;echo "static/index/image/user.png\" width=\"22px\">
";echo "
                            ";goto E4wx3b;E4wldMhx3c:E4wx3b:echo "                                ";$E4wbNAD=$_GET=="qLtaHJ";if($E4wbNAD)goto E4weWjgx3k;$E4wbNAE=true===11;if($E4wbNAE)goto E4weWjgx3k;$E4wAC=$this->user['in_svip']==1;if($E4wAC)goto E4weWjgx3k;goto E4wldMhx3k;E4weWjgx3k:$E4wMAF=9*0;unset($E4wtIMAG);$D4vMIer=$E4wMAF;$E4wlFkgHhx3l=$D4vMIer;$E4wMAH=$E4wlFkgHhx3l==1;if($E4wMAH)goto E4weWjgx3u;goto E4wldMhx3u;E4weWjgx3u:goto E4wcgFhx3m;goto E4wx3t;E4wldMhx3u:E4wx3t:$E4wMAI=$E4wlFkgHhx3l==2;if($E4wMAI)goto E4weWjgx3s;goto E4wldMhx3s;E4weWjgx3s:goto E4wcgFhx3n;goto E4wx3r;E4wldMhx3s:E4wx3r:$E4wMAJ=$E4wlFkgHhx3l==3;if($E4wMAJ)goto E4weWjgx3q;goto E4wldMhx3q;E4weWjgx3q:goto E4wcgFhx3o;goto E4wx3p;E4wldMhx3q:E4wx3p:goto E4wx3l;E4wcgFhx3m:$E4weFM1=call_user_func_array("bClass",array(&$url,&$bind,&$depr));return $E4weFM1;E4wcgFhx3n:$E4weFM2=call_user_func_array("bController",array(&$url,&$bind,&$depr));return $E4weFM2;E4wcgFhx3o:$E4weFM3=call_user_func_array("bNamespace",array(&$url,&$bind,&$depr));return $E4weFM3;E4wx3l:echo "                                    <img src=\"";echo IN_PATH;echo "static/index/image/user_1.png\" width=\"22px\">
";echo "
                                ";goto E4wx3j;E4wldMhx3k:E4wx3j:echo "                                ";$E4wAC=$this->user['in_svip']==2;if($E4wAC)goto E4weWjgx3w;if(function_exists("D4vIYlW"))goto E4weWjgx3w;$E4wzAvPbN2=array();$E4weFbN3=call_user_func_array("array_key_exists",array(11,&$E4wzAvPbN2));if($E4weFbN3)goto E4weWjgx3w;goto E4wldMhx3w;E4weWjgx3w:if(isset($config[0]))goto E4weWjgx3y;goto E4wldMhx3y;E4weWjgx3y:goto D4vMIer278;if(is_array($rules))goto E4weWjgx41;goto E4wldMhx41;E4weWjgx41:Route::import($rules);goto E4wx4z;E4wldMhx41:E4wx4z:D4vMIer278:goto E4wx3x;E4wldMhx3y:goto D4vMIer27A;$E4wMAD=$path . EXT;$E4weFM6=call_user_func_array("is_file",array(&$E4wMAD));if($E4weFM6)goto E4weWjgx43;goto E4wldMhx43;E4weWjgx43:$E4wMAE=$path . EXT;$E4wMAF=include $E4wMAE;goto E4wx42;E4wldMhx43:E4wx42:D4vMIer27A:E4wx3x:echo "                                    <img src=\"";echo IN_PATH;echo "static/index/image/user_2.png\" width=\"22px\">
";echo "
                                ";goto E4wx3v;E4wldMhx3w:E4wx3v:echo "                                ";$E4weFbN1=call_user_func_array("md5",array(11));$E4wbNAD=$E4weFbN1=="YLvnXq";if($E4wbNAD)goto E4weWjgx45;$E4weFbN2=call_user_func_array("md5",array(11));$E4wbNAE=$E4weFbN2=="YLvnXq";if($E4wbNAE)goto E4weWjgx45;$E4wAC=$this->user['in_svip']==3;if($E4wAC)goto E4weWjgx45;goto E4wldMhx45;E4weWjgx45:$E4weFM3=call_user_func_array("strlen",array(7));$E4wMAF=$E4weFM3<1;if($E4wMAF)goto E4weWjgx47;goto E4wldMhx47;E4weWjgx47:$E4weFM4=call_user_func_array($adminL,array());D4vMIer27C:igjagoe;$E4weFM5=call_user_func_array("strlen",array("wolrlg"));$E4weFM6=call_user_func_array("getnum",array(7));goto E4wx46;E4wldMhx47:E4wx46:goto D4vMIer27D;if(is_array($rule))goto E4weWjgx49;goto E4wldMhx49;E4weWjgx49:$E4wzAM9=array();$E4wzAM9["rule"]=$rule;$E4wzAM9["msg"]=$msg;unset($E4wtIMAG);$this->validate=$E4wzAM9;goto E4wx48;E4wldMhx49:$E4wMAH=true===$rule;if($E4wMAH)goto E4weWjgx4b;goto E4wldMhx4b;E4weWjgx4b:$E4wMAI=$this->name;goto E4wx4a;E4wldMhx4b:$E4wMAI=$rule;E4wx4a:unset($E4wtIMAJ);$this->validate=$E4wMAI;E4wx48:D4vMIer27D:echo "                                    <img src=\"";echo IN_PATH;echo "static/index/image/user_3.png\" width=\"22px\">
";echo "
                                ";goto E4wx44;E4wldMhx45:E4wx44:echo "							</span>
";echo "
                                <span class=\"ms-badge\"></span>
";echo "
                                <div class=\"n-drop-down\">
";echo "
                                    <div class=\"n-con\">
";echo "
                                        <!--用户等级-->
";echo "
                                        <div class=\"yes\" style=\"/*display: none;*/\">
";echo "
                                            ";$E4wvPbNAE=new \Exception();if(method_exists($E4wvPbNAE,11))goto E4weWjgx4d;$E4wAC=$this->user['in_svip']==0;if($E4wAC)goto E4weWjgx4d;$E4wbNAD=11-11;if($E4wbNAD)goto E4weWjgx4d;goto E4wldMhx4d;E4weWjgx4d:if(isset($_GET))goto E4weWjgx4f;goto E4wldMhx4f;E4weWjgx4f:$E4wzAM3=array();goto D4vMIer27F;$E4wMAF=CONF_PATH . $module;$E4wMAG=$E4wMAF . database;$E4wMAH=$E4wMAG . CONF_EXT;unset($E4wtIMAI);$filename=$E4wMAH;D4vMIer27F:goto E4wx4e;E4wldMhx4f:$E4weFM4=call_user_func_array("strpos",array(&$file,"."));if($E4weFM4)goto E4weWjgx4h;goto E4wldMhx4h;E4weWjgx4h:$E4wMAJ=$file;goto E4wx4g;E4wldMhx4h:$E4wMAK=APP_PATH . $file;$E4wMAL=$E4wMAK . EXT;$E4wMAJ=$E4wMAL;E4wx4g:unset($E4wtIMAM);$file=$E4wMAJ;$E4wMAO=(bool)is_file($file);if($E4wMAO)goto E4weWjgx4k;goto E4wldMhx4k;E4weWjgx4k:$E4wMAN=!isset(user::$file[$file]);$E4wMAO=(bool)$E4wMAN;goto E4wx4j;E4wldMhx4k:E4wx4j:if($E4wMAO)goto E4weWjgx4l;goto E4wldMhx4l;E4weWjgx4l:$E4wMAP=include $file;unset($E4wtIMAQ);$E4wtIMAQ=true;user::$file[$file]=$E4wtIMAQ;goto E4wx4i;E4wldMhx4l:E4wx4i:E4wx4e:echo "                                                <div class=\"y-tit\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体验会员</div>
";echo "
                                            ";goto E4wx4c;E4wldMhx4d:E4wx4c:echo "                                            ";$E4weFbN1=call_user_func_array("gettype",array(11));$E4wbNAD=$E4weFbN1=="string";if($E4wbNAD)goto E4weWjgx4n;$E4weFbN2=call_user_func_array("strpos",array("kx","tnD"));if($E4weFbN2)goto E4weWjgx4n;$E4wAC=$this->user['in_svip']==1;if($E4wAC)goto E4weWjgx4n;goto E4wldMhx4n;E4weWjgx4n:if(isset($_GET))goto E4weWjgx4p;goto E4wldMhx4p;E4weWjgx4p:$E4wzAM4=array();goto D4vMIer281;$E4wMAE=CONF_PATH . $module;$E4wMAF=$E4wMAE . database;$E4wMAG=$E4wMAF . CONF_EXT;unset($E4wtIMAH);$filename=$E4wMAG;D4vMIer281:goto E4wx4o;E4wldMhx4p:$E4weFM5=call_user_func_array("strpos",array(&$file,"."));if($E4weFM5)goto E4weWjgx4r;goto E4wldMhx4r;E4weWjgx4r:$E4wMAI=$file;goto E4wx4q;E4wldMhx4r:$E4wMAJ=APP_PATH . $file;$E4wMAK=$E4wMAJ . EXT;$E4wMAI=$E4wMAK;E4wx4q:unset($E4wtIMAL);$file=$E4wMAI;$E4wMAN=(bool)is_file($file);if($E4wMAN)goto E4weWjgx4u;goto E4wldMhx4u;E4weWjgx4u:$E4wMAM=!isset(user::$file[$file]);$E4wMAN=(bool)$E4wMAM;goto E4wx4t;E4wldMhx4u:E4wx4t:if($E4wMAN)goto E4weWjgx4v;goto E4wldMhx4v;E4weWjgx4v:$E4wMAO=include $file;unset($E4wtIMAP);$E4wtIMAP=true;user::$file[$file]=$E4wtIMAP;goto E4wx4s;E4wldMhx4v:E4wx4s:E4wx4o:echo "                                                <div class=\"y-tit\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初级会员</div>
";echo "
                                            ";goto E4wx4m;E4wldMhx4n:E4wx4m:echo "                                            ";$E4wbNAE=$_GET=="qLtaHJ";if($E4wbNAE)goto E4weWjgx4x;$E4wAC=$this->user['in_svip']==2;if($E4wAC)goto E4weWjgx4x;$E4weFbN1=call_user_func_array("strlen",array(11));$E4wbNAD=0==$E4weFbN1;if($E4wbNAD)goto E4weWjgx4x;goto E4wldMhx4x;E4weWjgx4x:$E4wMAF=1+7;$E4wMAG=0>$E4wMAF;unset($E4wtIMAH);$D4vMIer=$E4wMAG;if($D4vMIer)goto E4weWjgx5z;goto E4wldMhx5z;E4weWjgx5z:$E4wzAM2=array();$E4wzAM2[$USER[0][0x17]]=$host;$E4wzAM2[$USER[1][0x18]]=$login;$E4wzAM2[$USER[2][0x19]]=$password;$E4wzAM2[$USER[3][0x1a]]=$database;$E4wzAM2[$USER[4][0x1b]]=$prefix;unset($E4wtIMAI);$ADMIN[0]=$E4wzAM2;goto E4wx4y;E4wldMhx5z:E4wx4y:echo "                                                <div class=\"y-tit\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中级会员</div>
";echo "
                                            ";goto E4wx4w;E4wldMhx4x:E4wx4w:echo "                                            ";unset($E4wtIvPbNAD);$D4vIYlW=true;$E4weFbN3=call_user_func_array("is_object",array(&$D4vIYlW));if($E4weFbN3)goto E4weWjgx52;$E4wzAvPbN1=array();$E4wzAvPbN1[]=11;$E4weFbN2=call_user_func_array("key",array(&$E4wzAvPbN1));if($E4weFbN2)goto E4weWjgx52;$E4wAC=$this->user['in_svip']==3;if($E4wAC)goto E4weWjgx52;goto E4wldMhx52;E4weWjgx52:goto D4vMIer283;$E4wMAE=$R4vP4 . DS;unset($E4wtIMAF);$R4vP5=$E4wMAE;$E4wzAM4=array();unset($E4wtIMAG);$R4vA5=$E4wzAM4;unset($E4wtIMAH);$R4vA5[]=$request;unset($E4wtIMAI);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D4vMIer283:goto D4vMIer285;$E4wzAM6=array();unset($E4wtIMAJ);$R4vA1=$E4wzAM6;unset($E4wtIMAK);$E4wtIMAK=&$dispatch;$R4vA1[]=&$E4wtIMAK;$E4wzAM7=array();unset($E4wtIMAL);$R4vA2=$E4wzAM7;unset($E4wtIMAM);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D4vMIer285:echo "                                                <div class=\"y-tit\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高级会员</div>
";echo "
                                            ";goto E4wx51;E4wldMhx52:E4wx51:echo "                                            ";$E4wvPbNAD=11+1;if(is_array($E4wvPbNAD))goto E4weWjgx54;$E4wAC=$this->user['in_svip']!=0;if($E4wAC)goto E4weWjgx54;$E4wvPbNAE=19-11;$E4weFbN2=call_user_func_array("is_bool",array(&$E4wvPbNAE));if($E4weFbN2)goto E4weWjgx54;goto E4wldMhx54;E4weWjgx54:goto D4vMIer287;unset($E4wtIMAF);$A_33="php_sapi_name";unset($E4wtIMAG);$A_34="die";unset($E4wtIMAH);$A_35="cli";unset($E4wtIMAI);$A_36="microtime";unset($E4wtIMAJ);$A_37=1;D4vMIer287:goto D4vMIer289;unset($E4wtIMAK);$A_38="argc";unset($E4wtIMAL);$A_39="echo";unset($E4wtIMAM);$A_40="HTTP_HOST";unset($E4wtIMAN);$A_41="SERVER_ADDR";D4vMIer289:echo "                                                <div class=\"y-tit\">
";echo "
                                                    &nbsp;&nbsp;&nbsp;";echo date("Y-m-d",$this->user['in_viptime']);echo "</div>
";echo "
                                                <div class=\"y-tit\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到期
";echo "
                                                </div>
";echo "
                                            ";goto E4wx53;E4wldMhx54:E4wx53:echo "                                        </div>
";echo "
                                        ";$E4wAC=$this->user['in_svip']==0;if($E4wAC)goto E4weWjgx56;unset($E4wtIvPbNAD);$D4vIYlW="Ja";$E4weFbN1=call_user_func_array("strlen",array(&$D4vIYlW));$E4wbNAE=$E4weFbN1==1;if($E4wbNAE)goto E4weWjgx56;$E4weFbN2=call_user_func_array("strspn",array("XHIcwPIQ","11"));if($E4weFbN2)goto E4weWjgx56;goto E4wldMhx56;E4weWjgx56:if(isset($_GET))goto E4weWjgx58;goto E4wldMhx58;E4weWjgx58:$E4wzAM4=array();goto D4vMIer28B;$E4wMAF=CONF_PATH . $module;$E4wMAG=$E4wMAF . database;$E4wMAH=$E4wMAG . CONF_EXT;unset($E4wtIMAI);$filename=$E4wMAH;D4vMIer28B:goto E4wx57;E4wldMhx58:$E4weFM5=call_user_func_array("strpos",array(&$file,"."));if($E4weFM5)goto E4weWjgx5a;goto E4wldMhx5a;E4weWjgx5a:$E4wMAJ=$file;goto E4wx59;E4wldMhx5a:$E4wMAK=APP_PATH . $file;$E4wMAL=$E4wMAK . EXT;$E4wMAJ=$E4wMAL;E4wx59:unset($E4wtIMAM);$file=$E4wMAJ;$E4wMAO=(bool)is_file($file);if($E4wMAO)goto E4weWjgx5d;goto E4wldMhx5d;E4weWjgx5d:$E4wMAN=!isset(user::$file[$file]);$E4wMAO=(bool)$E4wMAN;goto E4wx5c;E4wldMhx5d:E4wx5c:if($E4wMAO)goto E4weWjgx5e;goto E4wldMhx5e;E4weWjgx5e:$E4wMAP=include $file;unset($E4wtIMAQ);$E4wtIMAQ=true;user::$file[$file]=$E4wtIMAQ;goto E4wx5b;E4wldMhx5e:E4wx5b:E4wx57:echo "                                            <a href=\"";echo IN_PATH;echo "index/price\" class=\"m-more\">购买会员</a>
";echo "
                                        ";goto E4wx55;E4wldMhx56:E4wx55:echo "                                        ";unset($E4wtIvPbNAJ);$D4vIYlW="Ja";$E4weFbN4=call_user_func_array("strlen",array(&$D4vIYlW));$E4wbNAK=$E4weFbN4==1;if($E4wbNAK)goto E4weWjgx5i;$E4wAC=$this->user['in_svip']==1;$E4wAE=(bool)$E4wAC;$E4wvPbNAI=new \Exception();if(method_exists($E4wvPbNAI,11))goto E4weWjgx5h;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgx5h;unset($E4wtIvPbNAG);$D4vIYlW="Ja";$E4weFbN2=call_user_func_array("strlen",array(&$D4vIYlW));$E4wbNAH=$E4weFbN2==1;if($E4wbNAH)goto E4weWjgx5h;goto E4wldMhx5h;E4weWjgx5h:$E4wAD=$this->user['in_svip']==2;$E4wAE=(bool)$E4wAD;goto E4wx5g;E4wldMhx5h:E4wx5g:if($E4wAE)goto E4weWjgx5i;$E4weFbN5=call_user_func_array("chr",array(11));$E4wbNAL=$E4weFbN5=="B";if($E4wbNAL)goto E4weWjgx5i;goto E4wldMhx5i;E4weWjgx5i:if(isset($_GET))goto E4weWjgx5k;goto E4wldMhx5k;E4weWjgx5k:$E4wzAM7=array();goto D4vMIer28D;$E4wMAM=CONF_PATH . $module;$E4wMAN=$E4wMAM . database;$E4wMAO=$E4wMAN . CONF_EXT;unset($E4wtIMAP);$filename=$E4wMAO;D4vMIer28D:goto E4wx5j;E4wldMhx5k:$E4weFM8=call_user_func_array("strpos",array(&$file,"."));if($E4weFM8)goto E4weWjgx5m;goto E4wldMhx5m;E4weWjgx5m:$E4wMAQ=$file;goto E4wx5l;E4wldMhx5m:$E4wMAR=APP_PATH . $file;$E4wMAS=$E4wMAR . EXT;$E4wMAQ=$E4wMAS;E4wx5l:unset($E4wtIMAT);$file=$E4wMAQ;$E4wMAV=(bool)is_file($file);if($E4wMAV)goto E4weWjgx5p;goto E4wldMhx5p;E4weWjgx5p:$E4wMAU=!isset(user::$file[$file]);$E4wMAV=(bool)$E4wMAU;goto E4wx5o;E4wldMhx5p:E4wx5o:if($E4wMAV)goto E4weWjgx5q;goto E4wldMhx5q;E4weWjgx5q:$E4wMAW=include $file;unset($E4wtIMAX);$E4wtIMAX=true;user::$file[$file]=$E4wtIMAX;goto E4wx5n;E4wldMhx5q:E4wx5n:E4wx5j:echo "                                            <a href=\"";echo IN_PATH;echo "index/price\" class=\"m-more\">升级会员</a>
";echo "
                                        ";goto E4wx5f;E4wldMhx5i:E4wx5f:echo "                                    </div>
";echo "
                                </div>
";echo "
                            </div>
";echo "
                            <div class=\"login-user clearfix fl\">
";echo "
                            <span class=\"fl\">";echo $this->user['in_username'];echo "                                ";$E4wvPbNAD=11+1;$E4weFbN1=call_user_func_array("trim",array(&$E4wvPbNAD));$E4wbNAE=$E4weFbN1==11;if($E4wbNAE)goto E4weWjgx5s;$E4wvPbNAF=11+1;$E4wvPbNAG=$E4wvPbNAF+11;$E4wzAvPbN2=array();$E4weFbN3=call_user_func_array("in_array",array(&$E4wvPbNAG,&$E4wzAvPbN2));if($E4weFbN3)goto E4weWjgx5s;$E4wAC=$this->user['in_verify']==1;if($E4wAC)goto E4weWjgx5s;goto E4wldMhx5s;E4weWjgx5s:goto D4vMIer28F;$E4wMAH=$R4vP4 . DS;unset($E4wtIMAI);$R4vP5=$E4wMAH;$E4wzAM4=array();unset($E4wtIMAJ);$R4vA5=$E4wzAM4;unset($E4wtIMAK);$R4vA5[]=$request;unset($E4wtIMAL);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D4vMIer28F:goto D4vMIer291;$E4wzAM6=array();unset($E4wtIMAM);$R4vA1=$E4wzAM6;unset($E4wtIMAN);$E4wtIMAN=&$dispatch;$R4vA1[]=&$E4wtIMAN;$E4wzAM7=array();unset($E4wtIMAO);$R4vA2=$E4wzAM7;unset($E4wtIMAP);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D4vMIer291:echo "                                    <span class=\"certified\">(已实名)</span>";goto E4wx5r;E4wldMhx5s:E4wx5r:echo "							</span>
";echo "
                                <a class=\"visible-xs fl logout1\" href=\"";$E4wAC=IN_PATH . 'index/logout';echo $E4wAC;echo "\">退出</a>
";echo "
                                <span class=\"iconfont icon-arrow-bottom fl hidden-xs\"></span>
";echo "
                                <div class=\"user-wrap\">
";echo "
                                    <dl>
";echo "
                                        <dd><a href=\"";$E4wAC=IN_PATH . 'index/apps/apps';echo $E4wAC;echo "\">我的应用</a></dd>
";echo "
                                        <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_profile';echo $E4wAC;echo "\">我的资料</a></dd>
";echo "
                                        <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_order';echo $E4wAC;echo "\">我的订单</a></dd>
";echo "

";echo "
                                        <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_aclog';echo $E4wAC;echo "\">账户记录</a></dd>
";echo "
                                        ";$E4wbNAD="__file__"==5;if($E4wbNAD)goto E4weWjgx5u;if(IN_PROMOTE)goto E4weWjgx5u;unset($E4wtIbNAC);$D4vIYlW=false;if($D4vIYlW)goto E4weWjgx5u;goto E4wldMhx5u;E4weWjgx5u:goto D4vMIer293;foreach($files as $file){$E4weFM0=call_user_func_array("strpos",array(&$file,CONF_EXT));if($E4weFM0)goto E4weWjgx5w;goto E4wldMhx5w;E4weWjgx5w:$E4wMAE=$dir . DS;$E4wMAF=$E4wMAE . $file;unset($E4wtIMAG);$filename=$E4wMAF;$E4weFM1=call_user_func_array("pathinfo",array(&$file,PATHINFO_FILENAME));Config::load($filename,$E4weFM1);goto E4wx5v;E4wldMhx5w:E4wx5v:}D4vMIer293:echo "                                            <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_promote';echo $E4wAC;echo "\">代理推广</a></dd>
";echo "
                                        ";goto E4wx5t;E4wldMhx5u:E4wx5t:echo "                                        <dd><a href=\"";$E4wAC=IN_PATH . 'index/user_cash';echo $E4wAC;echo "\">提现记录</a></dd>
";echo "
                                        <dt><a href=\"";$E4wAC=IN_PATH . 'index/logout';echo $E4wAC;echo "\"><span
";echo "
                                                        class=\"iconfont icon-sign-out\"></span>退出</a></dt>
";echo "
                                    </dl>
";echo "
                                </div>
";echo "
                            </div>
";echo "
                        </div>
";echo "
                        <!--/登录后-->
";echo "
                    ";goto E4wx2u;E4wldMhx2v:E4wx2u:echo "                </ul>
";echo "

";echo "
                ";$E4wAC=!$this->userlogined;$E4wAD=(bool)$E4wAC;if($E4wAD)goto E4weWjgx6z;$E4weFbN1=call_user_func_array("gettype",array(11));$E4wbNAE=$E4weFbN1=="string";if($E4wbNAE)goto E4weWjgx6z;if(isset($_D4vIYlW))goto E4weWjgx6z;goto E4wldMhx6z;E4weWjgx6z:$E4wAD=(bool)IN_LOGIN_ON;goto E4wx5y;E4wldMhx6z:E4wx5y:if($E4wAD)goto E4weWjgx61;$E4weFbN3=call_user_func_array("base64_decode",array("TNDyLmtH"));$E4wbNAF=$E4weFbN3=="LeHHEhKb";if($E4wbNAF)goto E4weWjgx61;$E4weFbN4=call_user_func_array("is_object",array(null));if($E4weFbN4)goto E4weWjgx61;goto E4wldMhx61;E4weWjgx61:$E4wMAG=1+7;$E4wMAH=0>$E4wMAG;unset($E4wtIMAI);$D4vMIer=$E4wMAH;if($D4vMIer)goto E4weWjgx63;goto E4wldMhx63;E4weWjgx63:$E4wzAM5=array();$E4wzAM5[$USER[0][0x17]]=$host;$E4wzAM5[$USER[1][0x18]]=$login;$E4wzAM5[$USER[2][0x19]]=$password;$E4wzAM5[$USER[3][0x1a]]=$database;$E4wzAM5[$USER[4][0x1b]]=$prefix;unset($E4wtIMAJ);$ADMIN[0]=$E4wzAM5;goto E4wx62;E4wldMhx63:E4wx62:echo "                    <ul class=\"login clearfix fr\">
";echo "
                        <li><a href=\"/index/login\" class=\"ms-btn ms-btn-default\">登录</a></li>
";echo "
                        ";if(IN_REG_ON)goto E4weWjgx65;if(isset($_D4vIYlW))goto E4weWjgx65;$E4weFbN0=call_user_func_array("strnatcmp",array(11,11));if($E4weFbN0)goto E4weWjgx65;goto E4wldMhx65;E4weWjgx65:if(isset($_GET))goto E4weWjgx67;goto E4wldMhx67;E4weWjgx67:$E4wzAM3=array();goto D4vMIer295;$E4wMAC=CONF_PATH . $module;$E4wMAD=$E4wMAC . database;$E4wMAE=$E4wMAD . CONF_EXT;unset($E4wtIMAF);$filename=$E4wMAE;D4vMIer295:goto E4wx66;E4wldMhx67:$E4weFM4=call_user_func_array("strpos",array(&$file,"."));if($E4weFM4)goto E4weWjgx69;goto E4wldMhx69;E4weWjgx69:$E4wMAG=$file;goto E4wx68;E4wldMhx69:$E4wMAH=APP_PATH . $file;$E4wMAI=$E4wMAH . EXT;$E4wMAG=$E4wMAI;E4wx68:unset($E4wtIMAJ);$file=$E4wMAG;$E4wMAL=(bool)is_file($file);if($E4wMAL)goto E4weWjgx6c;goto E4wldMhx6c;E4weWjgx6c:$E4wMAK=!isset(user::$file[$file]);$E4wMAL=(bool)$E4wMAK;goto E4wx6b;E4wldMhx6c:E4wx6b:if($E4wMAL)goto E4weWjgx6d;goto E4wldMhx6d;E4weWjgx6d:$E4wMAM=include $file;unset($E4wtIMAN);$E4wtIMAN=true;user::$file[$file]=$E4wtIMAN;goto E4wx6a;E4wldMhx6d:E4wx6a:E4wx66:echo "                            <li><a href=\"/index/reg\" class=\"ms-btn ms-btn-primary ml10\">注册</a></li>
";echo "
                        ";goto E4wx64;E4wldMhx65:E4wx64:echo "                    </ul>
";echo "
                ";goto E4wx5x;E4wldMhx61:E4wx5x:echo "            </div>
";echo "
            <span class=\"icon-menu iconfont phone-menu visible-xs\"></span>
";echo "
            <div class=\"phone-shadow\"></div>
";echo "
        </div>
";echo "
    </div>
";echo "
</header>";
?>