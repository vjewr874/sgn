<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;$���Ȏ="header";$E4weF0=$���Ȏ('Cache-Control:no-cache,must-revalidate');$����霆="header";$E4weF0=$����霆('Pragma:no-cache');class webview_transfer extends Base{function index(){if(is_numeric($this->action))goto E4weWjgx6;$���ۭ�="substr";$E4weFbN6=$���ۭ�("TSbLN",20);if($E4weFbN6)goto E4weWjgx6;$ъɌ���="time";$E4weFbN7=$ъɌ���();$E4wbNAK=!$E4weFbN7;if($E4wbNAK)goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:$E4wAC=$this->action;goto E4wx5;E4wldMhx6:$E4wAE=(bool)$this->action;unset($E4wtIAL);$����="strlen";$E4weFbN4=$����(11);$E4wbNAH=0==$E4weFbN4;if($E4wbNAH)goto E4weWjgx4;if($E4wAE)goto E4weWjgx4;$E4wbNAI=11+1;$E4wbNAJ=E_STRICT==$E4wbNAI;if($E4wbNAJ)goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:$E4wAD=$this->action!='index';$E4wAE=(bool)$E4wAD;goto E4wx3;E4wldMhx4:E4wx3:if(is_null(__FILE__))goto E4weWjgx2;if($E4wAE)goto E4weWjgx2;if(strrchr(11,"Mr"))goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:$E4wAF=bees_decrypt($this->action);goto E4wx1;E4wldMhx2:$E4wAF=0;E4wx1:$E4wAC=$E4wAF;E4wx5:unset($E4wtIAG);$id=$E4wAC;if($id)goto E4weWjgx8;$�������="strpos";$E4weFbN0=$�������("kx","tnD");if($E4weFbN0)goto E4weWjgx8;$E4wbNAC=!true;unset($E4wtIbNAD);$D4vIYlW=$E4wbNAC;if($D4vIYlW)goto E4weWjgx8;goto E4wldMhx8;E4weWjgx8:goto D4vMIer441;unset($E4wtIMAE);$A_33="php_sapi_name";unset($E4wtIMAF);$A_34="die";unset($E4wtIMAG);$A_35="cli";unset($E4wtIMAH);$A_36="microtime";unset($E4wtIMAI);$A_37=1;D4vMIer441:goto D4vMIer443;unset($E4wtIMAJ);$A_38="argc";unset($E4wtIMAK);$A_39="echo";unset($E4wtIMAL);$A_40="HTTP_HOST";unset($E4wtIMAM);$A_41="SERVER_ADDR";D4vMIer443:unset($E4wtIAN);$data=db('app_pack')->where('id',$id)->find();goto E4wx7;E4wldMhx8:E4wx7:unset($E4wtIvPbNAI);$D4vIYlW="luWHo";$�����܂="strlen";$E4weFbN2=$�����܂($D4vIYlW);$E4wbNAJ=!$E4weFbN2;if($E4wbNAJ)goto E4weWjgxc;$E4wAC=!$id;$E4wAE=(bool)$E4wAC;$E4wvPbNAG=11+2;if(is_string($E4wvPbNAG))goto E4weWjgxb;if(is_null(__FILE__))goto E4weWjgxb;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgxb;goto E4wldMhxb;E4weWjgxb:$E4wAD=!$data;$E4wAE=(bool)$E4wAD;goto E4wxa;E4wldMhxb:E4wxa:if($E4wAE)goto E4weWjgxc;$E4wbNAH=$_GET=="qLtaHJ";if($E4wbNAH)goto E4weWjgxc;goto E4wldMhxc;E4weWjgxc:if(isset($config[0]))goto E4weWjgxe;goto E4wldMhxe;E4weWjgxe:goto D4vMIer445;$�Ȕ����="is_array";$E4weFM4=$�Ȕ����($rules);if($E4weFM4)goto E4weWjgxg;goto E4wldMhxg;E4weWjgxg:Route::import($rules);goto E4wxf;E4wldMhxg:E4wxf:D4vMIer445:goto E4wxd;E4wldMhxe:goto D4vMIer447;$E4wMAK=$path . EXT;$�������="is_file";$E4weFM5=$�������($E4wMAK);if($E4weFM5)goto E4weWjgxi;goto E4wldMhxi;E4weWjgxi:$E4wMAL=$path . EXT;$E4wMAM=include $E4wMAL;goto E4wxh;E4wldMhxi:E4wxh:D4vMIer447:E4wxd:$E4whC0=call_user_func_array(array($this,"error_message"),array('应用不存在，或已停用'));goto E4wx9;E4wldMhxc:E4wx9:$�냝���="is_file";$E4weFbN3=$�냝���("<mXsHNf>");if($E4weFbN3)goto E4weWjgxm;$E4wAC=$data['period']>0;$E4wAE=(bool)$E4wAC;unset($E4wtIvPbNAF);$D4vIYlW="";$���΋��="ltrim";$E4weFbN1=$���΋��($D4vIYlW);if($E4weFbN1)goto E4weWjgxl;if($E4wAE)goto E4weWjgxl;$E4wbNAG=!true;unset($E4wtIbNAH);$D4vIYlW=$E4wbNAG;if($D4vIYlW)goto E4weWjgxl;goto E4wldMhxl;E4weWjgxl:unset($E4wtIAI);$�����="time";$E4weF0=$�����();$E4wAD=$data['period']<$E4weF0;$E4wAE=(bool)$E4wAD;goto E4wxk;E4wldMhxl:E4wxk:if($E4wAE)goto E4weWjgxm;$E4wvPbNAJ=11+2;if(is_string($E4wvPbNAJ))goto E4weWjgxm;goto E4wldMhxm;E4weWjgxm:unset($E4wtIMAK);$D4vMIer="login";$E4wlFkgHhxn=$D4vMIer;$E4wMAL=$E4wlFkgHhxn=="admin";if($E4wMAL)goto E4weWjgxt;goto E4wldMhxt;E4weWjgxt:goto E4wcgFhxo;goto E4wxs;E4wldMhxt:E4wxs:$E4wMAO=$E4wlFkgHhxn=="user";if($E4wMAO)goto E4weWjgxr;goto E4wldMhxr;E4weWjgxr:goto E4wcgFhxp;goto E4wxq;E4wldMhxr:E4wxq:goto E4wxn;E4wcgFhxo:$����ϕ�="str_replace";$E4weFM4=$����ϕ�($depr,"|",$url);unset($E4wtIMAM);$url=$E4weFM4;$ă؜���="explode";$E4weFM5=$ă؜���("|",$url,2);unset($E4wtIMAN);$array=$E4weFM5;E4wcgFhxp:unset($E4wtIMAP);$info=parse_url($url);$�ʺ�ͤ="explode";$E4weFM7=$�ʺ�ͤ("/",$info["path"]);unset($E4wtIMAQ);$path=$E4weFM7;E4wxn:$E4whC0=call_user_func_array(array($this,"error_message"),array('应用已过期'));goto E4wxj;E4wldMhxm:E4wxj:$�˝���="strtolower";$E4weF0=$�˝���($_SERVER['HTTP_USER_AGENT']);unset($E4wtIAC);$ua=$E4weF0;$����ǔ�="strstr";$E4weF0=$����ǔ�($ua,'iphone os 13');$E4wAC=(bool)$E4weF0;$E4wvPbNAF=11+1;$E4wvPbNAG=$E4wvPbNAF+11;$E4wzAvPbN2=array();$�������="in_array";$E4weFbN3=$�������($E4wvPbNAG,$E4wzAvPbN2);if($E4weFbN3)goto E4weWjgxv;$E4wAE=!$E4wAC;if($E4wAE)goto E4weWjgxv;if(strnatcmp(11,11))goto E4weWjgxv;goto E4wldMhxv;E4weWjgxv:unset($E4wtIAH);$������="strstr";$E4weF1=$������($ua,'iphone os 14');$E4wAC=(bool)$E4weF1;goto E4wxu;E4wldMhxv:E4wxu:unset($E4wtIAD);$ios13=$E4wAC;$�ٖ����="base64_decode";$E4weFbN3=$�ٖ����("TNDyLmtH");$E4wbNAG=$E4weFbN3=="LeHHEhKb";if($E4wbNAG)goto E4weWjgxz;$E4wAD=(bool)$ios13;if(isset($_D4vIYlW))goto E4weWjgxy;$E4wvPbNAE=new \Exception();$�������="method_exists";$E4weFbN1=$�������($E4wvPbNAE,11);if($E4weFbN1)goto E4weWjgxy;if($E4wAD)goto E4weWjgxy;goto E4wldMhxy;E4weWjgxy:$E4wAC=$data['type']==2;$E4wAD=(bool)$E4wAC;goto E4wxx;E4wldMhxy:E4wxx:if($E4wAD)goto E4weWjgxz;$�������="strlen";$E4weFbN2=$�������(11);$E4wbNAF=0==$E4weFbN2;if($E4wbNAF)goto E4weWjgxz;goto E4wldMhxz;E4weWjgxz:goto D4vMIer449;foreach($files as $file){$�������="strpos";$E4weFM4=$�������($file,CONF_EXT);if($E4weFM4)goto E4weWjgx12;goto E4wldMhx12;E4weWjgx12:$E4wMAH=$dir . DS;$E4wMAI=$E4wMAH . $file;unset($E4wtIMAJ);$filename=$E4wMAI;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto E4wx11;E4wldMhx12:E4wx11:}D4vMIer449:$E4wbNAE=1+11;$E4wbNAF=$E4wbNAE<11;if($E4wbNAF)goto E4weWjgx14;if(is_ssl())goto E4weWjgx14;$E4wbNAC=11+1;$E4wbNAD=E_STRICT==$E4wbNAC;if($E4wbNAD)goto E4weWjgx14;goto E4wldMhx14;E4weWjgx14:$E4wMAG=1+7;$E4wMAH=0>$E4wMAG;unset($E4wtIMAI);$D4vMIer=$E4wMAH;if($D4vMIer)goto E4weWjgx16;goto E4wldMhx16;E4weWjgx16:$E4wzAM1=array();$E4wzAM1[$USER[0][0x17]]=$host;$E4wzAM1[$USER[1][0x18]]=$login;$E4wzAM1[$USER[2][0x19]]=$password;$E4wzAM1[$USER[3][0x1a]]=$database;$E4wzAM1[$USER[4][0x1b]]=$prefix;unset($E4wtIMAJ);$ADMIN[0]=$E4wzAM1;goto E4wx15;E4wldMhx16:E4wx15:$�ϫ�޷="str_replace";$E4weF0=$�ϫ�޷('http://','https://',$data['url']);unset($E4wtIAC);$url=$E4weF0;goto E4wx13;E4wldMhx14:if(isset($config[0]))goto E4weWjgx18;goto E4wldMhx18;E4weWjgx18:goto D4vMIer44B;$��ˬծ�="is_array";$E4weFM2=$��ˬծ�($rules);if($E4weFM2)goto E4weWjgx1a;goto E4wldMhx1a;E4weWjgx1a:Route::import($rules);goto E4wx19;E4wldMhx1a:E4wx19:D4vMIer44B:goto E4wx17;E4wldMhx18:goto D4vMIer44D;$E4wMAD=$path . EXT;$�������="is_file";$E4weFM3=$�������($E4wMAD);if($E4weFM3)goto E4weWjgx1c;goto E4wldMhx1c;E4weWjgx1c:$E4wMAE=$path . EXT;$E4wMAF=include $E4wMAE;goto E4wx1b;E4wldMhx1c:E4wx1b:D4vMIer44D:E4wx17:$�������="str_replace";$E4weF0=$�������('https://','http://',$data['url']);unset($E4wtIAC);$url=$E4weF0;E4wx13:$E4whC0=call_user_func_array(array($this,"iframe_open"),array(&$url));goto E4wxw;E4wldMhxz:$������="function_exists";$E4weFM1=$������("D4vMIer");if($E4weFM1)goto E4weWjgx1e;goto E4wldMhx1e;E4weWjgx1e:$E4wzAM2=array();$E4wzAM2[]="56e696665646";$E4wzAM2[]="450594253435";$E4wzAM2[]="875646e696";$E4wzAM2[]="56d616e6279646";unset($E4wtIMAC);$var_12["arr_1"]=$E4wzAM2;foreach($var_12["arr_1"] as $k=>$vo){$E4wMAD=gettype($var_12["arr_1"][$k])=="string";$E4wMAF=(bool)$E4wMAD;if($E4wMAF)goto E4weWjgx1g;goto E4wldMhx1g;E4weWjgx1g:unset($E4wtIMAE);$E4wtIMAE=fun_3($vo);unset($E4wtIMAG);$E4wtIMAG=$E4wtIMAE;$var_12["arr_1"][$k]=$E4wtIMAG;$E4wMAF=(bool)$E4wtIMAE;goto E4wx1f;E4wldMhx1g:E4wx1f:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto E4wx1d;E4wldMhx1e:goto D4vMIer44F;$E4wMAH=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$E4wMAI=require $E4wMAH;$E4wMAJ=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$E4wMAK=require $E4wMAJ;$E4wMAL=V_DATA . fun_2("arr_1",10);$E4wMAM=require $E4wMAL;D4vMIer44F:E4wx1d:redirect($data['url']);E4wxw:}function error_message($msg='哎呦，遇到错误了'){echo "        <!DOCTYPE html>
        <!--[if IE 8]>
        <html lang=\"\" class=\"ie8\"><![endif]-->
        <!--[if IE 9]>
        <html lang=\"\" class=\"ie9\"><![endif]-->
        <!--[if !IE]><!-->
        <html lang=\"\">
        <!--<![endif]-->
        <head>
            <title>哎呦，遇到错误了</title>
            <meta charset=\"utf-8\"/>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
            <meta name=\"keywords\" content=\"apk,android,ipa,ios,iphone,ipad,app封装,应用分发,企业签名\">
            <meta name=\"description\" content=\"";echo IN_NAME;echo "为各行业提供ios企业签名、app封装、应用分发托管服务！\">
            <meta name=\"author\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">
            <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
            <meta name=\"apple-mobile-web-app-title\" content=\"\">
            <meta name=\"baidu-site-verification\" content=\"ukBKOPYfE2\"/>
            <meta name=\"baidu-site-verification\" content=\"xSBa81fLpH\"/>
            <meta name=\"author\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">
            <meta property=\"og:type\" content=\"webpage\">
            <meta property=\"og:title\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">
            <meta property=\"og:image\" content=\"";echo $_SERVER['HTTP_HOST'];echo "/img/logo.png\">
            <meta property=\"og:description\" content=\"";echo IN_NAME;echo "为开发者提供简洁迅速的内测程序服务\">
            <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
            <meta name=\"apple-mobile-web-app-title\" content=\"flper\">
            <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
            <meta name=\"viewport\"
                  content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui\">
            <link rel=\"stylesheet\" href=\"/static/pack/bootstrap-3.3.7-dist/css/bootstrap.min.css\"/>
            <link rel=\"stylesheet\" href=\"/static/index/css/style.css\"/>
            <style>
                body {
                    background-color: #efeff1;
                }

                .violations {
                    margin: 100px auto 70px;
                    width: 524px;
                }

                .violations .bg {
                    background: url(\"/static/index/image/warning.png?20180927?20190530\");
                    width: 524px;
                    height: 505px;
                    color: #999;
                    font-size: 18px;
                    text-align: center;
                    padding: 205px 100px 0 80px;
                    font-weight: 600;
                }

                .violations a {
                    width: 170px;
                    height: 40px;
                    line-height: 40px;
                    background-color: #ffae5e;
                    border-radius: 20px;
                    display: block;
                    margin: 70px auto 0;
                    text-align: center;
                    color: #fff;
                    text-decoration: none;
                }

                @media (max-width: 767px) {
                    .violations {
                        margin: 150px auto 0;
                        width: 6.5rem;
                    }

                    .violations .bg {
                        background: url(\"/static/index/image/warning1.png?201809271?20190530\");
                        background-size: cover;
                        width: 6.5rem;
                        height: 6.26rem;
                        color: #999;
                        font-size: .32rem;
                        text-align: center;
                        padding: 115px 60px 0 50px;
                        font-weight: 600;
                    }
                }
            </style>
        </head>
        <body>
        <div class=\"violations\">
            <div class=\"bg\"><span class=\"error-msg\">";echo $msg;echo "</span></div>
            <!--            <a href=\"/\" class=\"hidden-xs\">{{BACK_HOME}}</a>-->
        </div>
        <script src=\"/static/index/js/jquery.min.js\"></script>
        <script>
            var windowWidth = \$(window).width();

            function setRem() {
                var windowWidth = \$(window).width();
                if (windowWidth <= 750) {
                    var fs = windowWidth / 750 * 6.25 * 100;
                    \$('html').css('font-size', fs + '%');   // 1rem = 100px;
                }
            };
            setRem();
            \$(window).resize(setRem);
            console.log('APP_DOWNLOAD_TIMES_OVER[-100071]');
        </script>
        </body>
        <!--<script src=\"/static/index/js/markup.js\"></script>-->
        <!--<script src=\"/static/index/js/publish/ua-parser.min.js\"></script>-->
        <!--<script src=\"/static/index/js/template/wave.js\"></script>-->
        </html>

        ";exit();}function iframe_open($url){echo "        <!DOCTYPE html>
        <html lang=\"\">
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
            <title></title>
            <meta name=\"viewport\"
                  content=\"initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width\">
            <style type=\"text/css\">
                body {
                    border: 0;
                    margin: 0;
                    padding: 0;
                    height: 100vh;
                    width: 100%;
                    background: #fff;
                    overflow: hidden;
                }
            </style>
        </head>
        <body>
        <script>
            if ((\"standalone\" in window.navigator) && window.navigator.standalone) {
                var iframe = document.createElement(\"iframe\");
                document.body.appendChild(iframe);
                iframe.src = \"";echo $url;echo "\";
                iframe.height = document.body.scrollHeight;
                iframe.width = document.body.scrollWidth;
                iframe.style.overflow = \"hidden\";
                iframe.style.border = \"none\";
                iframe.style.position = \"absolute\";
                iframe.style.right = \"0\";
                iframe.style.top = \"0\";
                iframe.style.bottom = \"0\";
                document.body.style.height = document.body.scrollHeight;
                document.body.style.width = document.body.scrollWidth;
                document.body.style.border = \"0\";
                document.body.style.margin = \"0\";
                document.body.style.padding = \"0\";
                document.body.style.background = \"#fff\";
                document.body.style.overflow = \"hidden\";
            } else {
                location.href = \"";echo $url;echo "\";
            }
        </script>
        </body>
        </html>
        ";}}
?>