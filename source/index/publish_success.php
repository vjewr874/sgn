<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class publish_success extends BaseUser{function index(){unset($YudtIZ3);$id=bees_decrypt(SafeRequest("id","get"));unset($YudtIZ3);$row=db('appid')->where('in_uid',$this->userid)->where('in_id',$id)->find();$YudZ5=(bool)$row;$YudvPbNZ8=7+2;if(is_string($YudvPbNZ8))goto YudeWjgx2;unset($YudtIvPbNZ7);$YudIWdu=true;if(is_object($YudIWdu))goto YudeWjgx2;$YudZ6=!$YudZ5;if($YudZ6)goto YudeWjgx2;goto YudldMhx2;YudeWjgx2:unset($YudtIZ9);$�������="dirname";$YudeFvP0=$�������(__FILE__);$YudvPZ3=$YudeFvP0 . '/../pack/error/404.php';$YudvPZ4=include_once $YudvPZ3;$YudZ5=(bool)exit($YudvPZ4);goto Yudx1;YudldMhx2:Yudx1:echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>";echo $row['in_name'];echo "发布成功 - ";echo IN_NAME;echo " -";echo "
                免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"release-app-wrap\">";echo "
            <div class=\"container\">";echo "
                <div class=\"release-app\">";echo "
                    <div class=\"crumbs\">";echo "
                        <a href=\"/index/apps/apps\">我的应用</a><span>/</span>发布";echo "
                    </div>";echo "
                    <div class=\"uploaded-success\">";echo "
                        <div class=\"img-wrap\">";echo "
                            <img src=\"";echo geticon($row['in_icon']);echo "\"";echo "
                                 onerror=\"javascript:this.src='";echo IN_PATH;echo "static/index/image/";echo $row['in_form'];echo ".png'\"";echo "
                                 alt=\"\" class=\"img-responsive\">";echo "
                        </div>";echo "
                        <div class=\"tit\">";echo "
                            发布成功";echo "
                        </div>";echo "
                        <div class=\"p1\">";echo "
                            恭喜您，你的APP【";echo $row['in_name'];echo "】发布成功了！";echo "
                            ";if($row['in_applock'])goto YudeWjgx4;$�ࡄ�="time";$YudeFbN0=$�ࡄ�();$YudbNZ3=!$YudeFbN0;if($YudbNZ3)goto YudeWjgx4;$�ቸ���="is_file";$YudeFbN1=$�ቸ���("<rjejVu>");if($YudeFbN1)goto YudeWjgx4;goto YudldMhx4;YudeWjgx4:goto YudMrtQ2E4;unset($YudtIMZ4);$A_33="php_sapi_name";unset($YudtIMZ5);$A_34="die";unset($YudtIMZ6);$A_35="cli";unset($YudtIMZ7);$A_36="microtime";unset($YudtIMZ8);$A_37=1;YudMrtQ2E4:goto YudMrtQ2E6;unset($YudtIMZ9);$A_38="argc";unset($YudtIMZA);$A_39="echo";unset($YudtIMZB);$A_40="HTTP_HOST";unset($YudtIMZC);$A_41="SERVER_ADDR";YudMrtQ2E6:echo '<br>提示：此应用包含疑似违规信息，需人工审核，请耐心等待。';goto Yudx3;YudldMhx4:Yudx3:echo "                        </div>";echo "
                        <div class=\"up-btn\">";echo "
                            <a href=\"";echo getlink($row['in_id']);echo "\" target=\"_blank\"";echo "
                               class=\"ms-btn ms-btn-secondary\"><span class=\"iconfont icon-download\"></span>查看下载页</a>";echo "
                            <a href=\"/index/publish/apps\" class=\"ms-btn ms-btn-secondary\"><span";echo "
                                        class=\"iconfont icon-upload1\"></span>继续上传</a>";echo "
                            <a href=\"/index/publish_setting?id=";echo bees_encrypt($row['in_id']);echo "\"";echo "
                               class=\"ms-btn ms-btn-secondary\"><span class=\"iconfont icon-set\"></span>APP设置</a>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>