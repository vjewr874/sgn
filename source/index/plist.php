<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class plist extends Base{function index(){echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <title>Plist文件在线制作 - 工具箱 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            <meta charset=\"utf-8\"/>";echo "
            <meta name=\"viewport\"";echo "
                  content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>";echo "
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>";echo "
            <meta name=\"renderer\" content=\"webkit\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/font.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/bootstrap.min.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/base.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/main.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/h5.css\"/>";echo "
            <script src=\"/static/index/js/jquery.min.js\"></script>";echo "
            <script src=\"/static/index/js/bootstrap.min.js\"></script>";echo "
            <script src=\"/static/index/js/vue.js\"></script>";echo "
            <script src=\"/static/index/js/js.js\"></script>";echo "
            <script>";echo "
                isHideFooter = false;";echo "
            </script>";echo "
        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"toolkit-common-wrap\">";echo "
            <div class=\"container\">";echo "
                <!--面包屑导航-->";echo "
                <div class=\"crumbs\"><a href=\"/index/utils\">工具箱</a><span>/</span>苹果Plist文件在线制作</div>";echo "
                <!--/面包屑导航-->";echo "
                <div class=\"toolkit-new\">";echo "
                    <div class=\"con\">";echo "
                        <div class=\"tit\">苹果Plist文件在线制作</div>";echo "
                        <form class=\"form-horizontal\" id=\"plist_form\" action=\"/index/ajax_utils/plist\" method=\"post\">";echo "
                            <div class=\"form-group\">";echo "
                                <label class=\"col-sm-3 control-label\"><span>*</span>APP名称</label>";echo "
                                <div class=\"col-sm-9\"><input type=\"text\" name=\"app\" class=\"form-control\"";echo "
                                                             placeholder=\"请输入您的APP名称\"></div>";echo "
                                <div class=\"error col-sm-9 col-sm-push-3\">请输入您的APP名称</div>";echo "
                            </div>";echo "
                            <div class=\"form-group\">";echo "
                                <label class=\"col-sm-3 control-label\"><span>*</span>包名（Bundle ID）</label>";echo "
                                <div class=\"col-sm-9\"><input type=\"text\" name=\"bundle\" class=\"form-control\"";echo "
                                                             placeholder=\"请输入所填写包的Bundle ID\"></div>";echo "
                                <div class=\"error col-sm-9 col-sm-push-3\">请输入所填写包的Bundle ID</div>";echo "
                            </div>";echo "
                            <div class=\"form-group\">";echo "
                                <label class=\"col-sm-3 control-label\"><span>*</span>IPA下载地址</label>";echo "
                                <div class=\"col-sm-9\"><input type=\"text\" name=\"downloadLink\" class=\"form-control\"";echo "
                                                             placeholder=\"请输入您的APP的下载链接，https://开头\"></div>";echo "
                                <div class=\"error col-sm-9 col-sm-push-3\">请输入您的APP的下载链接，https://开头</div>";echo "
                            </div>";echo "
                            <div class=\"form-group\">";echo "
                                <label class=\"col-sm-3 control-label\"><span>*</span>ICON链接地址</label>";echo "
                                <div class=\"col-sm-9\"><input type=\"text\" name=\"link\" class=\"form-control\"";echo "
                                                             placeholder=\"请输入APP ICON的链接地址\"></div>";echo "
                                <div class=\"error col-sm-9 col-sm-push-3\">请输入APP ICON的链接地址</div>";echo "
                            </div>";echo "
                            <div class=\"text-center\">";echo "
                                <button type=\"button\" id=\"submitButton\" class=\"ms-btn ms-btn-primary plist-submit\">";echo "
                                    生成文件";echo "
                                </button>";echo "
                            </div>";echo "
                        </form>";echo "
                    </div>";echo "
                    <div class=\"p1\">";echo "
                        <span class=\"bold\">什么是Plist文件？</span>通过Plist文件实现itms-services协议在线安装IPA，在iOS7以后，plist文件必须部署到HTTPS服务器上，才能下载IPA。";echo "
                    </div>";echo "
                </div>";echo "
                <div class=\"con\">";echo "
                    <div class=\"list-bottom-common\">";echo "
                        <div class=\"index-common\">";echo "
                            <div class=\"row clearfix\">";echo "
                                <div class=\"col-sm-4\">";echo "
                                    <div class=\"con\"";echo "
                                         onclick=\"window.open('http://wpa.qq.com/msgrd?v=3&uin=";echo IN_CONTACT;echo "&site=qq&menu=yes')\"";echo "
                                         style=\"cursor: pointer\">";echo "
                                        <img src=\"/static/index/image/icon-12.png\" class=\"img-responsive\" alt=\"\">";echo "
                                        <h4>iOS企业证书签名</h4>";echo "
                                        <p>";echo "
                                            使用企业证书可免提交AppStore，即可安装，不限制iOS设备，不限制下载次数，无限制安装。";echo "
                                        </p>";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div class=\"col-sm-4\">";echo "
                                    <div class=\"con\" onclick=\"window.open('/index/apps/apps')\" style=\"cursor: pointer\">";echo "
                                        <img src=\"/static/index/image/icon-13.png\" class=\"img-responsive\" alt=\"\">";echo "
                                        <h4>APP下载</h4>";echo "
                                        <p>";echo "
                                            提供App多套下载模板，提高用户下载转化率，自动判断设备类型区分安卓或者苹果，快速无广告急速下载。";echo "
                                        </p>";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div class=\"col-sm-4\">";echo "
                                    <div class=\"con\" onclick=\"window.open('/index/publish/apps')\"";echo "
                                         style=\"cursor: pointer\">";echo "
                                        <img src=\"/static/index/image/icon-14.png\" class=\"img-responsive\" alt=\"\">";echo "
                                        <h4>APP托管</h4>";echo "
                                        <p>";echo "
                                            一键上传App，迅速生成下载链接和二维码，立即上线，让您的App尽快与用户见面，为您提供免费、快捷的应用托管分发服务。";echo "
                                        </p>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
";echo "
        <script>";echo "
            \$(\".toolkit-new .plist-submit\").click(function () {";echo "
                var appName = \$(\"input[name=app]\").val();";echo "
                var bundle = \$(\"input[name=bundle]\").val();";echo "
                var ipaLink = \$(\"input[name=downloadLink]\").val();";echo "
                var iconLink = \$(\"input[name=link]\").val();";echo "
";echo "
                if (appName.length > 0) {";echo "
                    \$(\"input[name=app]\").parents(\".form-group\").removeClass(\"form-error\");";echo "
                } else {";echo "
                    \$(\"input[name=app]\").parents(\".form-group\").addClass(\"form-error\");";echo "
                }";echo "
";echo "
                if (verifyBundle(bundle)) {";echo "
                    \$(\"input[name=bundle]\").parents(\".form-group\").removeClass(\"form-error\");";echo "
                } else {";echo "
                    \$(\"input[name=bundle]\").parents(\".form-group\").addClass(\"form-error\");";echo "
                }";echo "
";echo "
                if (verifyUrl(ipaLink)) {";echo "
                    \$(\"input[name=downloadLink]\").parents(\".form-group\").removeClass(\"form-error\");";echo "
                } else {";echo "
                    \$(\"input[name=downloadLink]\").parents(\".form-group\").addClass(\"form-error\");";echo "
                }";echo "
";echo "
                if (verifyUrl(iconLink)) {";echo "
                    \$(\"input[name=link]\").parents(\".form-group\").removeClass(\"form-error\");";echo "
                } else {";echo "
                    \$(\"input[name=link]\").parents(\".form-group\").addClass(\"form-error\");";echo "
                }";echo "
";echo "
                var errorLength = \$(\".toolkit-new .form-error\").length;";echo "
                if (errorLength == 0) {";echo "
                    \$(\"form\").submit();";echo "
                }";echo "
            });";echo "
        </script>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
        ";}}
?>