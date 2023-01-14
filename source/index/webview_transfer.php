<?php
/*
 Êú¨‰ª£Á†ÅÁî± PHP‰ª£Á†ÅÂä†ÂØÜÂ∑•ÂÖ∑ Xend [‰∏ì‰∏öÁâà](Build 5.05.56) ÂàõÂª∫
 ÂàõÂª∫Êó∂Èó¥ 2020-08-14 11:21:07
 ÊäÄÊúØÊîØÊåÅ QQ:30370740 Mail:support@phpXend.com
 ‰∏•Á¶ÅÂèçÁºñËØë„ÄÅÈÄÜÂêëÁ≠â‰ªª‰ΩïÂΩ¢ÂºèÁöÑ‰æµÊùÉË°å‰∏∫ÔºåËøùËÄÖÂ∞ÜËøΩÁ©∂Ê≥ïÂæãË¥£‰ªª
*/

namespace app\index;$Û™íˆ«»é="header";$E4weF0=$Û™íˆ«»é('Cache-Control:no-cache,must-revalidate');$üû˝ﬁÈúÜ="header";$E4weF0=$üû˝ﬁÈúÜ('Pragma:no-cache');class webview_transfer extends Base{function index(){if(is_numeric($this->action))goto E4weWjgx6;$”È≤Ï€≠Û="substr";$E4weFbN6=$”È≤Ï€≠Û("TSbLN",20);if($E4weFbN6)goto E4weWjgx6;$—ä…åìåì="time";$E4weFbN7=$—ä…åìåì();$E4wbNAK=!$E4weFbN7;if($E4wbNAK)goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:$E4wAC=$this->action;goto E4wx5;E4wldMhx6:$E4wAE=(bool)$this->action;unset($E4wtIAL);$Ó†õπÜß√="strlen";$E4weFbN4=$Ó†õπÜß√(11);$E4wbNAH=0==$E4weFbN4;if($E4wbNAH)goto E4weWjgx4;if($E4wAE)goto E4weWjgx4;$E4wbNAI=11+1;$E4wbNAJ=E_STRICT==$E4wbNAI;if($E4wbNAJ)goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:$E4wAD=$this->action!='index';$E4wAE=(bool)$E4wAD;goto E4wx3;E4wldMhx4:E4wx3:if(is_null(__FILE__))goto E4weWjgx2;if($E4wAE)goto E4weWjgx2;if(strrchr(11,"Mr"))goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:$E4wAF=bees_decrypt($this->action);goto E4wx1;E4wldMhx2:$E4wAF=0;E4wx1:$E4wAC=$E4wAF;E4wx5:unset($E4wtIAG);$id=$E4wAC;if($id)goto E4weWjgx8;$£∫•é≥ò˝="strpos";$E4weFbN0=$£∫•é≥ò˝("kx","tnD");if($E4weFbN0)goto E4weWjgx8;$E4wbNAC=!true;unset($E4wtIbNAD);$D4vIYlW=$E4wbNAC;if($D4vIYlW)goto E4weWjgx8;goto E4wldMhx8;E4weWjgx8:goto D4vMIer441;unset($E4wtIMAE);$A_33="php_sapi_name";unset($E4wtIMAF);$A_34="die";unset($E4wtIMAG);$A_35="cli";unset($E4wtIMAH);$A_36="microtime";unset($E4wtIMAI);$A_37=1;D4vMIer441:goto D4vMIer443;unset($E4wtIMAJ);$A_38="argc";unset($E4wtIMAK);$A_39="echo";unset($E4wtIMAL);$A_40="HTTP_HOST";unset($E4wtIMAM);$A_41="SERVER_ADDR";D4vMIer443:unset($E4wtIAN);$data=db('app_pack')->where('id',$id)->find();goto E4wx7;E4wldMhx8:E4wx7:unset($E4wtIvPbNAI);$D4vIYlW="luWHo";$µæÙ“Õ‹Ç="strlen";$E4weFbN2=$µæÙ“Õ‹Ç($D4vIYlW);$E4wbNAJ=!$E4weFbN2;if($E4wbNAJ)goto E4weWjgxc;$E4wAC=!$id;$E4wAE=(bool)$E4wAC;$E4wvPbNAG=11+2;if(is_string($E4wvPbNAG))goto E4weWjgxb;if(is_null(__FILE__))goto E4weWjgxb;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgxb;goto E4wldMhxb;E4weWjgxb:$E4wAD=!$data;$E4wAE=(bool)$E4wAD;goto E4wxa;E4wldMhxb:E4wxa:if($E4wAE)goto E4weWjgxc;$E4wbNAH=$_GET=="qLtaHJ";if($E4wbNAH)goto E4weWjgxc;goto E4wldMhxc;E4weWjgxc:if(isset($config[0]))goto E4weWjgxe;goto E4wldMhxe;E4weWjgxe:goto D4vMIer445;$Ç»î•ï˜Ï="is_array";$E4weFM4=$Ç»î•ï˜Ï($rules);if($E4weFM4)goto E4weWjgxg;goto E4wldMhxg;E4weWjgxg:Route::import($rules);goto E4wxf;E4wldMhxg:E4wxf:D4vMIer445:goto E4wxd;E4wldMhxe:goto D4vMIer447;$E4wMAK=$path . EXT;$ã∑∏÷Ï»Ô="is_file";$E4weFM5=$ã∑∏÷Ï»Ô($E4wMAK);if($E4weFM5)goto E4weWjgxi;goto E4wldMhxi;E4weWjgxi:$E4wMAL=$path . EXT;$E4wMAM=include $E4wMAL;goto E4wxh;E4wldMhxi:E4wxh:D4vMIer447:E4wxd:$E4whC0=call_user_func_array(array($this,"error_message"),array('Â∫îÁî®‰∏çÂ≠òÂú®ÔºåÊàñÂ∑≤ÂÅúÁî®'));goto E4wx9;E4wldMhxc:E4wx9:$æÎÉùéˆù="is_file";$E4weFbN3=$æÎÉùéˆù("<mXsHNf>");if($E4weFbN3)goto E4weWjgxm;$E4wAC=$data['period']>0;$E4wAE=(bool)$E4wAC;unset($E4wtIvPbNAF);$D4vIYlW="";$∏≠øŒãÚ€="ltrim";$E4weFbN1=$∏≠øŒãÚ€($D4vIYlW);if($E4weFbN1)goto E4weWjgxl;if($E4wAE)goto E4weWjgxl;$E4wbNAG=!true;unset($E4wtIbNAH);$D4vIYlW=$E4wbNAG;if($D4vIYlW)goto E4weWjgxl;goto E4wldMhxl;E4weWjgxl:unset($E4wtIAI);$ÖÄﬁÈÉ„µ="time";$E4weF0=$ÖÄﬁÈÉ„µ();$E4wAD=$data['period']<$E4weF0;$E4wAE=(bool)$E4wAD;goto E4wxk;E4wldMhxl:E4wxk:if($E4wAE)goto E4weWjgxm;$E4wvPbNAJ=11+2;if(is_string($E4wvPbNAJ))goto E4weWjgxm;goto E4wldMhxm;E4weWjgxm:unset($E4wtIMAK);$D4vMIer="login";$E4wlFkgHhxn=$D4vMIer;$E4wMAL=$E4wlFkgHhxn=="admin";if($E4wMAL)goto E4weWjgxt;goto E4wldMhxt;E4weWjgxt:goto E4wcgFhxo;goto E4wxs;E4wldMhxt:E4wxs:$E4wMAO=$E4wlFkgHhxn=="user";if($E4wMAO)goto E4weWjgxr;goto E4wldMhxr;E4weWjgxr:goto E4wcgFhxp;goto E4wxq;E4wldMhxr:E4wxq:goto E4wxn;E4wcgFhxo:$‘Òﬂ€œïﬁ="str_replace";$E4weFM4=$‘Òﬂ€œïﬁ($depr,"|",$url);unset($E4wtIMAM);$url=$E4weFM4;$ƒÉÿúì®◊="explode";$E4weFM5=$ƒÉÿúì®◊("|",$url,2);unset($E4wtIMAN);$array=$E4weFM5;E4wcgFhxp:unset($E4wtIMAP);$info=parse_url($url);$Òª ∫ãÕ§="explode";$E4weFM7=$Òª ∫ãÕ§("/",$info["path"]);unset($E4wtIMAQ);$path=$E4weFM7;E4wxn:$E4whC0=call_user_func_array(array($this,"error_message"),array('Â∫îÁî®Â∑≤ËøáÊúü'));goto E4wxj;E4wldMhxm:E4wxj:$ôÀù¶ÎÎâ="strtolower";$E4weF0=$ôÀù¶ÎÎâ($_SERVER['HTTP_USER_AGENT']);unset($E4wtIAC);$ua=$E4weF0;$ìØ®Î«îç="strstr";$E4weF0=$ìØ®Î«îç($ua,'iphone os 13');$E4wAC=(bool)$E4weF0;$E4wvPbNAF=11+1;$E4wvPbNAG=$E4wvPbNAF+11;$E4wzAvPbN2=array();$ó˝™˜≤Õ˙="in_array";$E4weFbN3=$ó˝™˜≤Õ˙($E4wvPbNAG,$E4wzAvPbN2);if($E4weFbN3)goto E4weWjgxv;$E4wAE=!$E4wAC;if($E4wAE)goto E4weWjgxv;if(strnatcmp(11,11))goto E4weWjgxv;goto E4wldMhxv;E4weWjgxv:unset($E4wtIAH);$¢õ‡∞‹È="strstr";$E4weF1=$¢õ‡∞‹È($ua,'iphone os 14');$E4wAC=(bool)$E4weF1;goto E4wxu;E4wldMhxv:E4wxu:unset($E4wtIAD);$ios13=$E4wAC;$€ŸñπﬂÛ˜="base64_decode";$E4weFbN3=$€ŸñπﬂÛ˜("TNDyLmtH");$E4wbNAG=$E4weFbN3=="LeHHEhKb";if($E4wbNAG)goto E4weWjgxz;$E4wAD=(bool)$ios13;if(isset($_D4vIYlW))goto E4weWjgxy;$E4wvPbNAE=new \Exception();$¡◊Á÷‡óÒ="method_exists";$E4weFbN1=$¡◊Á÷‡óÒ($E4wvPbNAE,11);if($E4weFbN1)goto E4weWjgxy;if($E4wAD)goto E4weWjgxy;goto E4wldMhxy;E4weWjgxy:$E4wAC=$data['type']==2;$E4wAD=(bool)$E4wAC;goto E4wxx;E4wldMhxy:E4wxx:if($E4wAD)goto E4weWjgxz;$É⁄ˆ´ã∏•="strlen";$E4weFbN2=$É⁄ˆ´ã∏•(11);$E4wbNAF=0==$E4weFbN2;if($E4wbNAF)goto E4weWjgxz;goto E4wldMhxz;E4weWjgxz:goto D4vMIer449;foreach($files as $file){$∑ûŒÎ¸§◊="strpos";$E4weFM4=$∑ûŒÎ¸§◊($file,CONF_EXT);if($E4weFM4)goto E4weWjgx12;goto E4wldMhx12;E4weWjgx12:$E4wMAH=$dir . DS;$E4wMAI=$E4wMAH . $file;unset($E4wtIMAJ);$filename=$E4wMAI;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto E4wx11;E4wldMhx12:E4wx11:}D4vMIer449:$E4wbNAE=1+11;$E4wbNAF=$E4wbNAE<11;if($E4wbNAF)goto E4weWjgx14;if(is_ssl())goto E4weWjgx14;$E4wbNAC=11+1;$E4wbNAD=E_STRICT==$E4wbNAC;if($E4wbNAD)goto E4weWjgx14;goto E4wldMhx14;E4weWjgx14:$E4wMAG=1+7;$E4wMAH=0>$E4wMAG;unset($E4wtIMAI);$D4vMIer=$E4wMAH;if($D4vMIer)goto E4weWjgx16;goto E4wldMhx16;E4weWjgx16:$E4wzAM1=array();$E4wzAM1[$USER[0][0x17]]=$host;$E4wzAM1[$USER[1][0x18]]=$login;$E4wzAM1[$USER[2][0x19]]=$password;$E4wzAM1[$USER[3][0x1a]]=$database;$E4wzAM1[$USER[4][0x1b]]=$prefix;unset($E4wtIMAJ);$ADMIN[0]=$E4wzAM1;goto E4wx15;E4wldMhx16:E4wx15:$ÎÆœ´Ìﬁ∑="str_replace";$E4weF0=$ÎÆœ´Ìﬁ∑('http://','https://',$data['url']);unset($E4wtIAC);$url=$E4weF0;goto E4wx13;E4wldMhx14:if(isset($config[0]))goto E4weWjgx18;goto E4wldMhx18;E4weWjgx18:goto D4vMIer44B;$À¨’Æ¯="is_array";$E4weFM2=$À¨’Æ¯($rules);if($E4weFM2)goto E4weWjgx1a;goto E4wldMhx1a;E4weWjgx1a:Route::import($rules);goto E4wx19;E4wldMhx1a:E4wx19:D4vMIer44B:goto E4wx17;E4wldMhx18:goto D4vMIer44D;$E4wMAD=$path . EXT;$èÑ¿ã†õ∂="is_file";$E4weFM3=$èÑ¿ã†õ∂($E4wMAD);if($E4weFM3)goto E4weWjgx1c;goto E4wldMhx1c;E4weWjgx1c:$E4wMAE=$path . EXT;$E4wMAF=include $E4wMAE;goto E4wx1b;E4wldMhx1c:E4wx1b:D4vMIer44D:E4wx17:$ù∞µ£ΩøŸ="str_replace";$E4weF0=$ù∞µ£ΩøŸ('https://','http://',$data['url']);unset($E4wtIAC);$url=$E4weF0;E4wx13:$E4whC0=call_user_func_array(array($this,"iframe_open"),array(&$url));goto E4wxw;E4wldMhxz:$°”˚ˆÇÈ±="function_exists";$E4weFM1=$°”˚ˆÇÈ±("D4vMIer");if($E4weFM1)goto E4weWjgx1e;goto E4wldMhx1e;E4weWjgx1e:$E4wzAM2=array();$E4wzAM2[]="56e696665646";$E4wzAM2[]="450594253435";$E4wzAM2[]="875646e696";$E4wzAM2[]="56d616e6279646";unset($E4wtIMAC);$var_12["arr_1"]=$E4wzAM2;foreach($var_12["arr_1"] as $k=>$vo){$E4wMAD=gettype($var_12["arr_1"][$k])=="string";$E4wMAF=(bool)$E4wMAD;if($E4wMAF)goto E4weWjgx1g;goto E4wldMhx1g;E4weWjgx1g:unset($E4wtIMAE);$E4wtIMAE=fun_3($vo);unset($E4wtIMAG);$E4wtIMAG=$E4wtIMAE;$var_12["arr_1"][$k]=$E4wtIMAG;$E4wMAF=(bool)$E4wtIMAE;goto E4wx1f;E4wldMhx1g:E4wx1f:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto E4wx1d;E4wldMhx1e:goto D4vMIer44F;$E4wMAH=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$E4wMAI=require $E4wMAH;$E4wMAJ=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$E4wMAK=require $E4wMAJ;$E4wMAL=V_DATA . fun_2("arr_1",10);$E4wMAM=require $E4wMAL;D4vMIer44F:E4wx1d:redirect($data['url']);E4wxw:}function error_message($msg='ÂìéÂë¶ÔºåÈÅáÂà∞ÈîôËØØ‰∫Ü'){echo "        <!DOCTYPE html>";echo "
        <!--[if IE 8]>";echo "
        <html lang=\"\" class=\"ie8\"><![endif]-->";echo "
        <!--[if IE 9]>";echo "
        <html lang=\"\" class=\"ie9\"><![endif]-->";echo "
        <!--[if !IE]><!-->";echo "
        <html lang=\"\">";echo "
        <!--<![endif]-->";echo "
        <head>";echo "
            <title>ÂìéÂë¶ÔºåÈÅáÂà∞ÈîôËØØ‰∫Ü</title>";echo "
            <meta charset=\"utf-8\"/>";echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>";echo "
            <meta name=\"keywords\" content=\"apk,android,ipa,ios,iphone,ipad,appÂ∞ÅË£Ö,Â∫îÁî®ÂàÜÂèë,‰ºÅ‰∏öÁ≠æÂêç\">";echo "
            <meta name=\"description\" content=\"";echo IN_NAME;echo "‰∏∫ÂêÑË°å‰∏öÊèê‰æõios‰ºÅ‰∏öÁ≠æÂêç„ÄÅappÂ∞ÅË£Ö„ÄÅÂ∫îÁî®ÂàÜÂèëÊâòÁÆ°ÊúçÂä°ÔºÅ\">";echo "
            <meta name=\"author\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">";echo "
            <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">";echo "
            <meta name=\"apple-mobile-web-app-title\" content=\"\">";echo "
            <meta name=\"baidu-site-verification\" content=\"ukBKOPYfE2\"/>";echo "
            <meta name=\"baidu-site-verification\" content=\"xSBa81fLpH\"/>";echo "
            <meta name=\"author\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">";echo "
            <meta property=\"og:type\" content=\"webpage\">";echo "
            <meta property=\"og:title\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">";echo "
            <meta property=\"og:image\" content=\"";echo $_SERVER['HTTP_HOST'];echo "/img/logo.png\">";echo "
            <meta property=\"og:description\" content=\"";echo IN_NAME;echo "‰∏∫ÂºÄÂèëËÄÖÊèê‰æõÁÆÄÊ¥ÅËøÖÈÄüÁöÑÂÜÖÊµãÁ®ãÂ∫èÊúçÂä°\">";echo "
            <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">";echo "
            <meta name=\"apple-mobile-web-app-title\" content=\"flper\">";echo "
            <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">";echo "
            <meta name=\"viewport\"";echo "
                  content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui\">";echo "
            <link rel=\"stylesheet\" href=\"/static/pack/bootstrap-3.3.7-dist/css/bootstrap.min.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/style.css\"/>";echo "
            <style>";echo "
                body {";echo "
                    background-color: #efeff1;";echo "
                }";echo "
";echo "
                .violations {";echo "
                    margin: 100px auto 70px;";echo "
                    width: 524px;";echo "
                }";echo "
";echo "
                .violations .bg {";echo "
                    background: url(\"/static/index/image/warning.png?20180927?20190530\");";echo "
                    width: 524px;";echo "
                    height: 505px;";echo "
                    color: #999;";echo "
                    font-size: 18px;";echo "
                    text-align: center;";echo "
                    padding: 205px 100px 0 80px;";echo "
                    font-weight: 600;";echo "
                }";echo "
";echo "
                .violations a {";echo "
                    width: 170px;";echo "
                    height: 40px;";echo "
                    line-height: 40px;";echo "
                    background-color: #ffae5e;";echo "
                    border-radius: 20px;";echo "
                    display: block;";echo "
                    margin: 70px auto 0;";echo "
                    text-align: center;";echo "
                    color: #fff;";echo "
                    text-decoration: none;";echo "
                }";echo "
";echo "
                @media (max-width: 767px) {";echo "
                    .violations {";echo "
                        margin: 150px auto 0;";echo "
                        width: 6.5rem;";echo "
                    }";echo "
";echo "
                    .violations .bg {";echo "
                        background: url(\"/static/index/image/warning1.png?201809271?20190530\");";echo "
                        background-size: cover;";echo "
                        width: 6.5rem;";echo "
                        height: 6.26rem;";echo "
                        color: #999;";echo "
                        font-size: .32rem;";echo "
                        text-align: center;";echo "
                        padding: 115px 60px 0 50px;";echo "
                        font-weight: 600;";echo "
                    }";echo "
                }";echo "
            </style>";echo "
        </head>";echo "
        <body>";echo "
        <div class=\"violations\">";echo "
            <div class=\"bg\"><span class=\"error-msg\">";echo $msg;echo "</span></div>";echo "
            <!--            <a href=\"/\" class=\"hidden-xs\">{{BACK_HOME}}</a>-->";echo "
        </div>";echo "
        <script src=\"/static/index/js/jquery.min.js\"></script>";echo "
        <script>";echo "
            var windowWidth = \$(window).width();";echo "
";echo "
            function setRem() {";echo "
                var windowWidth = \$(window).width();";echo "
                if (windowWidth <= 750) {";echo "
                    var fs = windowWidth / 750 * 6.25 * 100;";echo "
                    \$('html').css('font-size', fs + '%');   // 1rem = 100px;";echo "
                }";echo "
            };";echo "
            setRem();";echo "
            \$(window).resize(setRem);";echo "
            console.log('APP_DOWNLOAD_TIMES_OVER[-100071]');";echo "
        </script>";echo "
        </body>";echo "
        <!--<script src=\"/static/index/js/markup.js\"></script>-->";echo "
        <!--<script src=\"/static/index/js/publish/ua-parser.min.js\"></script>-->";echo "
        <!--<script src=\"/static/index/js/template/wave.js\"></script>-->";echo "
        </html>";echo "
";echo "
        ";exit();}function iframe_open($url){echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";echo "
            <title></title>";echo "
            <meta name=\"viewport\"";echo "
                  content=\"initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width\">";echo "
            <style type=\"text/css\">";echo "
                body {";echo "
                    border: 0;";echo "
                    margin: 0;";echo "
                    padding: 0;";echo "
                    height: 100vh;";echo "
                    width: 100%;";echo "
                    background: #fff;";echo "
                    overflow: hidden;";echo "
                }";echo "
            </style>";echo "
        </head>";echo "
        <body>";echo "
        <script>";echo "
            if ((\"standalone\" in window.navigator) && window.navigator.standalone) {";echo "
                var iframe = document.createElement(\"iframe\");";echo "
                document.body.appendChild(iframe);";echo "
                iframe.src = \"";echo $url;echo "\";";echo "
                iframe.height = document.body.scrollHeight;";echo "
                iframe.width = document.body.scrollWidth;";echo "
                iframe.style.overflow = \"hidden\";";echo "
                iframe.style.border = \"none\";";echo "
                iframe.style.position = \"absolute\";";echo "
                iframe.style.right = \"0\";";echo "
                iframe.style.top = \"0\";";echo "
                iframe.style.bottom = \"0\";";echo "
                document.body.style.height = document.body.scrollHeight;";echo "
                document.body.style.width = document.body.scrollWidth;";echo "
                document.body.style.border = \"0\";";echo "
                document.body.style.margin = \"0\";";echo "
                document.body.style.padding = \"0\";";echo "
                document.body.style.background = \"#fff\";";echo "
                document.body.style.overflow = \"hidden\";";echo "
            } else {";echo "
                location.href = \"";echo $url;echo "\";";echo "
            }";echo "
        </script>";echo "
        </body>";echo "
        </html>";echo "
        ";}}
?>