<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class disclaimer extends Base{function index(){$�������="defined";$YudeF0=$�������('IN_ROOT');$YudZ3=!$YudeF0;$YudZ6=(bool)$YudZ3;unset($YudtIvPbNZA);$YudIWdu="wwSTD";$�������="strlen";$YudeFbN2=$�������($YudIWdu);$YudbNZB=!$YudeFbN2;if($YudbNZB)goto YudeWjgx5;$YudZ9=!$YudZ6;if($YudZ9)goto YudeWjgx5;if(strnatcmp(7,7))goto YudeWjgx5;goto YudldMhx5;YudeWjgx5:$YudZ4=$_SERVER['HTTP_HOST']!=IN_DOMAIN;$YudZ5=(bool)$YudZ4;$YudbNZ7=7+1;$YudbNZ8=E_STRICT==$YudbNZ7;if($YudbNZ8)goto YudeWjgx3;if(strspn("KRMKOTdJ","7"))goto YudeWjgx3;if($YudZ5)goto YudeWjgx3;goto YudldMhx3;YudeWjgx3:$YudZ5=(bool)IN_DOMAIN;goto Yudx2;YudldMhx3:Yudx2:$YudZ6=(bool)$YudZ5;goto Yudx4;YudldMhx5:Yudx4:if($YudZ6)goto YudeWjgx6;$YudvPbNZC=7+1;$暵Í��="is_array";$YudeFbN5=$暵Í��($YudvPbNZC);if($YudeFbN5)goto YudeWjgx6;if(is_null(__FILE__))goto YudeWjgx6;goto YudldMhx6;YudeWjgx6:unset($YudtIMZD);$YudMrtQ="login";$YudlFkgHhx7=$YudMrtQ;$YudMZE=$YudlFkgHhx7=="admin";if($YudMZE)goto YudeWjgxd;goto YudldMhxd;YudeWjgxd:goto YudcgFhx8;goto Yudxc;YudldMhxd:Yudxc:$YudMZH=$YudlFkgHhx7=="user";if($YudMZH)goto YudeWjgxb;goto YudldMhxb;YudeWjgxb:goto YudcgFhx9;goto Yudxa;YudldMhxb:Yudxa:goto Yudx7;YudcgFhx8:$�̆��×="str_replace";$YudeFM6=$�̆��×($depr,"|",$url);unset($YudtIMZF);$url=$YudeFM6;$�迆���="explode";$YudeFM7=$�迆���("|",$url,2);unset($YudtIMZG);$array=$YudeFM7;YudcgFhx9:unset($YudtIMZI);$info=parse_url($url);$��ϔ���="explode";$YudeFM9=$��ϔ���("/",$info["path"]);unset($YudtIMZJ);$path=$YudeFM9;Yudx7:exit('Access denied');goto Yudx1;YudldMhx6:Yudx1:echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>免责声明 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"container\">";echo "
            <div class=\"disclaimer\">";echo "
                <h1>免责声明</h1>";echo "
                <p>";echo "
                    ";echo IN_NAME;echo "平台为第三方应用提供应用反馈收集等服务。应用内容均来源于第三方产品，";echo IN_NAME;echo "                    仅为用户提供下载支持，不涉及任何人工编辑和整理，也不对任何来源于第三方的内容（包括但不限于安装包安全、信息描述、应用截图）承担责任，用户可根据描述场景谨慎选择下载试用。";echo "
                </p>";echo "
                <p>";echo "
                    任何公司、产品或者个人认为";echo IN_NAME;echo "                    平台涉嫌侵犯您的版权或应用权，您应该及时向我们提供举报声明、书面权利通知，并提供身份证明、权属证明及侵权情况等投诉材料。我们将依法进行处理。";echo "
                </p>";echo "
                <p>";echo "
                    应用下载者与应用上传者如发生纠纷，请自行与上传者协商处理，协商无果请到相关部门进行投诉，或者拨打110警方介入，本平台不承担责任。";echo "
                </p>";echo "
            </div>";echo "
        </div>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
        ";}}
?>