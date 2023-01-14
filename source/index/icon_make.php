<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class icon_make extends Base{function index(){echo "        <!doctype html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>APP图标在线制作 - 工具箱 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/font.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/spectrum.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/bootstrap.min.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/base.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/main.css\"/>";echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/h5.css\"/>";echo "
            <script src=\"/static/index/js/jquery.min.js\"></script>";echo "
            <script src=\"/static/index/js/bootstrap.min.js\"></script>";echo "
            <script src=\"/static/index/js/vue.js\"></script>";echo "
            <script src=\"/static/index/js/js.js\"></script>";echo "
            <script src=\"/static/index/js/spectrum.js\"></script>";echo "
            <script src=\"/static/index/js/jquery.lazyload.js\"></script>";echo "
            <script>";echo "
                isHideFooter = false;";echo "
            </script>";echo "
        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <span class=\"icon-menu iconfont phone-menu visible-xs\"></span>";echo "
        <div class=\"phone-shadow\"></div>";echo "
        <script src=\"/static/index/js/html2canvas.js\"></script>";echo "
        <script src=\"/static/index/js/canvas2image.js\"></script>";echo "
        <div class=\"toolkit-common-wrap\">";echo "
            <div class=\"container\">";echo "
";echo "
                <div class=\"crumbs\"><a href=\"/index/utils\">工具箱</a><span>/</span>图标制作</div>";echo "
";echo "
                <div class=\"toolkit-make-icon\">";echo "
                    <div class=\"make-icon\">";echo "
                        <div class=\"clearfix row\">";echo "
                            <div class=\"col-sm-3\">";echo "
                                <div class=\"m-left\">";echo "
                                    <div class=\"m-tit\">预览效果</div>";echo "
                                    <div id=\"iconPreview\" class=\"m-icon\"";echo "
                                         style=\"background-image: url(/static/index/image/make/m-0.png);\">";echo "
                                        <div class=\"m-icon-con\">";echo "
                                            <div class=\"i-name1\"></div>";echo "
                                            <img src=\"/static/index/image/make/0.png\">";echo "
                                            <div class=\"i-name2\"></div>";echo "
                                        </div>";echo "
                                        <div class=\"m-name\"></div>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                            <div class=\"col-sm-9\">";echo "
                                <div class=\"m-right\">";echo "
                                    <div class=\"m-tit\">图标背景色</div>";echo "
                                    <div class=\"icon-bg\">";echo "
                                        <dl class=\"clearfix m-icon-bg1\">";echo "
                                            <dt class=\"fl\">背景图色值</dt>";echo "
                                            <dd class=\"fl\">";echo "
                                                <input type=\"text\" id=\"colorPicker6\">";echo "
                                            </dd>";echo "
                                        </dl>";echo "
                                        <dl class=\"clearfix m-icon-bg2\">";echo "
                                            <dt class=\"fl\">背景图效果</dt>";echo "
                                            <dd class=\"fl\">";echo "
                                                <ul class=\"clearfix small-bg-list\">";echo "
                                                    <li class=\"active\" data-bg=\"0\" data-container=\"body\"";echo "
                                                        data-toggle=\"popover\"";echo "
                                                        data-placement=\"bottom\" data-content=\"纯色\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\">";echo "
                                                            <img src=\"/static/index/image/make/m-0.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"1\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"top\" data-content=\"菱形\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\">";echo "
                                                            <img src=\"/static/index/image/make/m-1.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"2\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"bottom\" data-content=\"不规则\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\">";echo "
                                                            <img src=\"/static/index/image/make/m-2.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"3\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"top\" data-content=\"同心圆\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\"><img";echo "
                                                                    src=\"/static/index/image/make/m-3.png\"";echo "
                                                                    class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"4\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"bottom\" data-content=\"斜线\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\"><img";echo "
                                                                    src=\"/static/index/image/make/m-4.png\"";echo "
                                                                    class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"5\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"top\" data-content=\"六边形\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\"><img";echo "
                                                                    src=\"/static/index/image/make/m-5.png\"";echo "
                                                                    class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"6\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"bottom\" data-content=\"箭头\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\"><img";echo "
                                                                    src=\"/static/index/image/make/m-6.png\"";echo "
                                                                    class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"7\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"top\" data-content=\"五角星\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\"><img";echo "
                                                                    src=\"/static/index/image/make/m-7.png\"";echo "
                                                                    class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"8\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"bottom\" data-content=\"旋转\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\"><img";echo "
                                                                    src=\"/static/index/image/make/m-8.png\"";echo "
                                                                    class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                    <li data-bg=\"9\" data-container=\"body\" data-toggle=\"popover\"";echo "
                                                        data-placement=\"top\" data-content=\"对角线\" data-trigger=\"hover\">";echo "
                                                        <div class=\"small-bg\">";echo "
                                                            <img src=\"/static/index/image/make/m-9.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                        <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                    </li>";echo "
                                                </ul>";echo "
                                            </dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    <div class=\"foreground-map\">";echo "
                                        <div class=\"m-tit\">前景图</div>";echo "
                                        <div class=\"f-tab\">";echo "
                                            <ul class=\"tab clearfix\">";echo "
                                                <li class=\"active\">使用图形</li>";echo "
                                                <li>使用文字</li>";echo "
                                            </ul>";echo "
                                            <div class=\"tab-con\">";echo "
                                                <div class=\"tab1\" style=\"display: block;\">";echo "
                                                    <div class=\"form-horizontal\">";echo "
                                                        <div class=\"form-group\">";echo "
                                                            <label class=\"col-sm-2 control-label\">选择图形</label>";echo "
                                                            <div class=\"col-sm-10\">";echo "
                                                                <div>";echo "
";echo "
                                                                    <ul class=\"clearfix icons-ul\">";echo "
                                                                        <li data-icon=\"0\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/0.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"1\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/1.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"2\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/2.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"3\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/3.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"4\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/4.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"5\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/5.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"6\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/6.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"7\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/7.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"8\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/8.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"9\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/9.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"10\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/10.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"11\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/11.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"12\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/12.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"13\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/13.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"14\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/14.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"15\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/15.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"16\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/16.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"17\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/17.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"18\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/18.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"19\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/19.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"20\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/20.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"21\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/21.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"22\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/22.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"23\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/23.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"24\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/24.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"25\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/25.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"26\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/26.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"27\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/27.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"28\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/28.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"29\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/29.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"30\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/30.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"31\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/31.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"32\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/32.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"33\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/33.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"34\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/34.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"35\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/35.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"36\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/36.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"37\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/37.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"38\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/38.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"39\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/39.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"40\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/40.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"41\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/41.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"42\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/42.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"43\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/43.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"44\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/44.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"45\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/45.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"46\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/46.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"47\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/47.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"48\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/48.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"49\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/49.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"50\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/50.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"51\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/51.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"52\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/52.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"53\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/53.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"54\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/54.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"55\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/55.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"56\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/56.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"57\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/57.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"58\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/58.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"59\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/59.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"60\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/60.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"61\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/61.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"62\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/62.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"63\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/63.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"64\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/64.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"65\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/65.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"66\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/66.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"67\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/67.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"68\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/68.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"69\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/69.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"70\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/70.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"71\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/71.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"72\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/72.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"73\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/73.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"74\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/74.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"75\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/75.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"76\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/76.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"77\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/77.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"78\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/78.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"79\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/79.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"80\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/80.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"81\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/81.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"82\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/82.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"83\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/83.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"84\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/84.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"85\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/85.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"86\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/86.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"87\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/87.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"88\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/88.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"89\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/89.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"90\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/90.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"91\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/91.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"92\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/92.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"93\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/93.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"94\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/94.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"95\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/95.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"96\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/96.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"97\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/97.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"98\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/98.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                        <li data-icon=\"99\">";echo "
                                                                            <div class=\"t-con\">";echo "
                                                                                <img src=\"/static/index/image/make/loading.gif\"";echo "
                                                                                     data-original=\"/static/index/image/make/99.png\"";echo "
                                                                                     class=\"img-responsive\">";echo "
                                                                                <span class=\"icon icon-checkbox-small\"></span>";echo "
                                                                            </div>";echo "
                                                                        </li>";echo "
                                                                    </ul>";echo "
                                                                </div>";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                        <div class=\"form-group\">";echo "
                                                            <label class=\"col-sm-2 control-label\">前景图位置</label>";echo "
                                                            <div class=\"col-sm-10\">";echo "
                                                                <ul class=\"prospects\">";echo "
                                                                    <li data-p=\"0\"><span";echo "
                                                                                class=\"icon icon-radio icon-radio-checked\"></span>居中";echo "
                                                                    </li>";echo "
                                                                    <li data-p=\"1\"><span class=\"icon icon-radio\"></span>居上";echo "
                                                                    </li>";echo "
                                                                    <li data-p=\"2\"><span class=\"icon icon-radio\"></span>居下";echo "
                                                                    </li>";echo "
                                                                </ul>";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                        <div class=\"form-group written-content\">";echo "
                                                            <label class=\"col-sm-2 control-label\">文字内容</label>";echo "
                                                            <div class=\"col-sm-10\">";echo "
                                                                <input type=\"text\" class=\"form-control\"";echo "
                                                                       placeholder=\"最多支持5个字以内的中文字，或者10个以内的字母/数字\">";echo "
                                                            </div>";echo "
                                                            <div class=\"error col-sm-10 col-sm-push-2\">";echo "
                                                                最多支持5个字以内的中文字，或者10个以内的字母/数字";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                        <div class=\"form-group text-color\">";echo "
                                                            <label class=\"col-sm-2 control-label\">文字颜色</label>";echo "
                                                            <div class=\"col-sm-10\">";echo "
                                                                <input type=\"text\" id=\"colorPicker8\">";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                    </div>";echo "
                                                </div>";echo "
                                                <div class=\"tab2\">";echo "
                                                    <div class=\"form-horizontal\">";echo "
                                                        <div class=\"form-group edit-text\">";echo "
                                                            <label class=\"control-label col-sm-2\">编辑文字</label>";echo "
                                                            <div class=\"col-sm-6\">";echo "
                                                                <input type=\"text\" name=\"editText\" class=\"form-control\"";echo "
                                                                       placeholder=\"请输入1-12个字符，支持英文/字母/数字\">";echo "
                                                                <div class=\"error\">输入1个或2个字符，支持中文/字母/数字</div>";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                        <div class=\"form-group set-text-color\">";echo "
                                                            <label class=\"control-label col-sm-2\">文字颜色</label>";echo "
                                                            <div class=\"col-sm-6\">";echo "
                                                                <input type=\"text\" id=\"colorPicker7\">";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                    </div>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                        <div class=\"m-tit\">形状选择</div>";echo "
                                        <ul class=\"m-icon-radio clearfix shape-choose\">";echo "
                                            <li class=\"active\">方角图标<span class=\"icon-checkbox-small icon\"></span></li>";echo "
                                            <li>圆角图标<span class=\"icon-checkbox-small icon\"></span></li>";echo "
                                        </ul>";echo "
                                        <div class=\"m-tit\">格式选择</div>";echo "
                                        <ul class=\"m-icon-radio clearfix format-choose\">";echo "
                                            <li data-value=\"jpg\">JPG格式<span class=\"icon-checkbox-small icon\"></span>";echo "
                                            </li>";echo "
                                            <li class=\"active\" data-value=\"png\">PNG格式<span";echo "
                                                        class=\"icon-checkbox-small icon\"></span></li>";echo "
                                        </ul>";echo "
                                        <div class=\"m-tit img-size-tit\">选择下方图片尺寸，点击下载</div>";echo "
                                        <dl class=\"clearfix img-size\" style=\"margin-top: 5px;\">";echo "
";echo "
                                            <dd data-value=\"16\"><span";echo "
                                                        class=\"iconfont icon-download font20 color-hover\"></span>16*16";echo "
                                            </dd>";echo "
                                            <dd data-value=\"44\"><span";echo "
                                                        class=\"iconfont icon-download font20  color-hover\"></span>44*44";echo "
                                            </dd>";echo "
                                            <dd data-value=\"66\"><span";echo "
                                                        class=\"iconfont icon-download font20 color-hover\"></span>66*66";echo "
                                            </dd>";echo "
                                            <dd data-value=\"114\"><span";echo "
                                                        class=\"iconfont icon-download font20 color-hover\"></span>114*114";echo "
                                            </dd>";echo "
                                            <dd data-value=\"180\"><span";echo "
                                                        class=\"iconfont icon-download font20 color-hover\"></span>180*180";echo "
                                            </dd>";echo "
                                            <dd data-value=\"1024\"><span";echo "
                                                        class=\"iconfont icon-download font20 color-hover\"></span>1024*1024";echo "
                                            </dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    <div class=\"text-center\">";echo "
                                        <input type=\"hidden\" name=\"image-content\">";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        <div id=\"view\"></div>";echo "
        <script>";echo "
            \$(function () {";echo "
                Layout.initToolkit();";echo "
            });";echo "
            var canvasWidth = 360;";echo "
            var canvasHeight = 360;";echo "
            \$(\".toolkit-common-wrap .icon-download\").parent().on('click', function () {";echo "
                main.init();";echo "
                canvasWidth = \$(this).data('value');";echo "
                canvasHeight = \$(this).data('value');";echo "
            });";echo "
";echo "
            var main = {";echo "
                init: function () {";echo "
                    main.setListener();";echo "
                },";echo "
                //設置監聽事件";echo "
                setListener: function () {";echo "
                    main.html2Canvas();";echo "
                },";echo "
                //獲取像素密度";echo "
                getPixelRatio: function (context) {";echo "
                    var backingStore = context.backingStorePixelRatio ||";echo "
                        context.webkitBackingStorePixelRatio ||";echo "
                        context.mozBackingStorePixelRatio ||";echo "
                        context.msBackingStorePixelRatio ||";echo "
                        context.oBackingStorePixelRatio ||";echo "
                        context.backingStorePixelRatio || 1;";echo "
                    return (window.devicePixelRatio || 1) / backingStore;";echo "
                },";echo "
                //繪製dom 元素，生成截圖canvas";echo "
                html2Canvas: function () {";echo "
                    var shareContent = document.getElementById(\"iconPreview\");// 需要繪製的部分的 (原生）dom 對象 ，注意容器的寬度不要使用百分比，使用固定寬度，避免縮放問題";echo "
                    var width = shareContent.offsetWidth;  // 獲取(原生）dom 寬度";echo "
                    var height = shareContent.offsetHeight; // 獲取(原生）dom 高";echo "
                    var offsetTop = shareContent.offsetTop + 999;  //元素距離頂部的偏移量";echo "
";echo "
                    var canvas = document.createElement('canvas');  //創建canvas 對象";echo "
                    var context = canvas.getContext('2d');";echo "
                    var scaleBy = main.getPixelRatio(context);  //獲取像素密度的方法 (也可以採用自定義縮放比例)";echo "
                    canvas.width = width * scaleBy + 999;   //這裏 由於繪製的dom 為固定寬度，居中，所以沒有偏移";echo "
                    canvas.height = (height + offsetTop) * scaleBy;  // 注意高度問題，由於頂部有個距離所以要加上頂部的距離，解決圖像高度偏移問題";echo "
                    context.scale(scaleBy, scaleBy);";echo "
";echo "
                    var opts = {";echo "
                        // 允許加載跨域的圖片";echo "
                        useCORS: true,";echo "
                        tainttest: true, //檢測每張圖片都已經加載完成";echo "
                        scale: scaleBy, // 添加的scale 參數";echo "
                        canvas: canvas, //自定義 canvas";echo "
                        logging: false, //日誌開關，發佈的時候記得改成false";echo "
                        width: width, //dom 原始寬度";echo "
                        height: height //dom 原始高度";echo "
                    };";echo "
                    html2canvas(shareContent, opts).then(function (canvas) {";echo "
                        var type = \$(\".format-choose li.active\").data('value');";echo "
                        console.info(type);";echo "
                        Canvas2Image.saveAsImage(canvas, canvasWidth, canvasHeight, type, canvasWidth + 'x' + canvasHeight);";echo "
                    });";echo "
                }";echo "
            };";echo "
";echo "
        </script>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>