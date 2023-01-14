<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class template extends BaseUser{function index(){if(isset($_SERVER['PATH_INFO']))goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:$O5hvPAW=$_SERVER['PATH_INFO'];goto O5hx1;O5hldMhx2:$O5hvPAW=NULL;O5hx1:$��ֈ�="explode";$O5heF2=$��ֈ�('/',$O5hvPAW);unset($O5htIAX);$infopath=$O5heF2;if(isset($infopath[3]))goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hvPAW=SafeSql($infopath[3]);goto O5hx3;O5hldMhx4:$O5hvPAW=NULL;O5hx3:$�����="trim";$O5heF3=$�����($O5hvPAW);unset($O5htIAX);$appid=$O5heF3;if(isset($infopath[4]))goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:$O5hvPAW=SafeSql($infopath[4]);goto O5hx5;O5hldMhx6:$O5hvPAW=NULL;O5hx5:$�������="trim";$O5heF3=$�������($O5hvPAW);unset($O5htIAX);$tmp=$O5heF3;unset($O5htIAW);$id=bees_decrypt($appid);if(is_numeric($id))goto O5heWjgx8;goto O5hldMhx8;O5heWjgx8:unset($O5htIAW);$row=db('appid')->where('in_id',$id)->find();goto O5hx7;O5hldMhx8:O5hx7:$O5hAW=!$row;$O5hAY=(bool)$O5hAW;$O5hAZ=!$O5hAY;if($O5hAZ)goto O5heWjgxb;goto O5hldMhxb;O5heWjgxb:$O5hAX=!$tmp;$O5hAY=(bool)$O5hAX;goto O5hxa;O5hldMhxb:O5hxa:if($O5hAY)goto O5heWjgxc;goto O5hldMhxc;O5heWjgxc:redirect();goto O5hx9;O5hldMhxc:O5hx9:$�������="substr";$O5heF0=$�������($tmp,3);unset($O5htIAW);$tmpid=$O5heF0;$O5hAW=$tmpid==7;if($O5hAW)goto O5heWjgxe;goto O5hldMhxe;O5heWjgxe:unset($O5htIAW);$ssid=0;if(isset($row['template_language']))goto O5heWjgxg;goto O5hldMhxg;O5heWjgxg:$O5hvPAW=$row['template_language'];goto O5hxf;O5hldMhxg:$O5hvPAW='zh';O5hxf:unset($O5htIAX);$this->template_note=getTemplateData($O5hvPAW);$O5hAW=include 'source/template/7.php';exit($O5hAW);goto O5hxd;O5hldMhxe:O5hxd:echo "        <!doctype html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\"";echo "
                  content=\"width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>";echo "
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>";echo "
            <meta name=\"renderer\" content=\"webkit\">";echo "
            <meta itemprop=\"name\" content=\"";echo IN_NAME;echo "\"/>";echo "
            <meta itemprop=\"image\"";echo "
                  content=\"//";echo $_SERVER['HTTP_HOST'];echo geticon($row['in_icon']);echo "\"/>";echo "
            <meta name=\"description\" itemprop=\"description\" content=\"";echo IN_DESCRIPTION;echo "\">";echo "
            <link rel=\"stylesheet\" href=\"/static/pack/bootstrap-3.3.7-dist/css/bootstrap.min.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/style.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/custom.css\">";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/appstyle.css\">";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/swiper.min.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"//at.alicdn.com/t/font_780494_9oilb5iic5f.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/base.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/main.css\"/>";echo "
            <link rel=\"stylesheet\" href=\"/static/index/css/h5.css\"/>";echo "
            <link rel=\"shortcut icon\" href=\"//";echo $_SERVER['HTTP_HOST'];echo "/favicon.ico\" type=\"image/x-icon\"/>";echo "
            <script>";echo "
                var www_domain = \"https://";echo $_SERVER['HTTP_HOST'];echo "/\";";echo "
            </script>";echo "
            <title></title>";echo "
        </head>";echo "
        <body>";echo "
        <input name=\"url\" value=\"";echo $row['in_link'];echo "\" type=\"hidden\">";echo "
        <script type=\"text/template\" id=\"title\">";echo "
            <title>{{app_name}}</title>";echo "
        </script>";echo "
        <script language=\"text/template\" id=\"meta\">";echo "
            <meta charset=\"utf-8\"/>";echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>";echo "
            <meta name=\"keywords\" content=\"{{keywords}}\">";echo "
            <meta name=\"description\" content=\"{{desciption}}\">";echo "
            <link rel=\"shortcut icon\" href=\"//";echo $_SERVER['HTTP_HOST'];echo "/favicon.ico\" type=\"image/x-icon\"/>";echo "
            <meta name=\"baidu-site-verification\" content=\"ukBKOPYfE2\"/>";echo "
            <meta name=\"baidu-site-verification\" content=\"xSBa81fLpH\"/>";echo "
            <meta name=\"author\" content=\"";echo $_SERVER['HTTP_HOST'];echo "\">";echo "
            <meta property=\"og:type\" content=\"webpage\">";echo "
            <meta property=\"og:url\" content=\"{{web_url}}\">";echo "
            <meta property=\"og:title\" content=\"{{app_name}}\">";echo "
            <meta property=\"og:description\" content=\"{{app_name}}\">";echo "
            <meta itemprop=\"name\" content=\"{{app_name}}\"/>";echo "
            <meta itemprop=\"image\" content=\"{{icon_300}}\"/>";echo "
            <meta name=\"description\" itemprop=\"description\" content=\"版本：{{version}}.{{version_code}}, 大小：{{app_size}}\">";echo "
            <meta name=\"apple-mobile-web-app-title\" content=\"{{web_url}}\">";echo "
            <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">";echo "
        </script>";echo "
        ";$O5hAW=$tmpid==1;if($O5hAW)goto O5heWjgxi;goto O5hldMhxi;O5heWjgxi:echo "            <script language=\"text/template\" id=\"content\">";echo "
                {{if checked}}";echo "
                <div class=\"template-1 template-wrap\">";echo "
                    {{else}}";echo "
                    <div class=\"template-1 template-wrap passwords\">";echo "
                        {{/if}}";echo "
                        <div class=\"t-bg-1\"></div>";echo "
                        <div class=\"container\">";echo "
                            <div class=\"content clearfix\">";echo "
                                <div class=\"c-left fl\">";echo "
                                    <div class=\"template-common\">";echo "
                                        <div class=\"t-icon\">";echo "
                                            <img src=\"{{icon}}\" class=\"img-responsive\">";echo "
                                        </div>";echo "
                                        <div class=\"visible-xs\">";echo "
                                            <div class=\"t-name\">";echo "
                                                <div class=\"tit\">{{app_name}}</div>";echo "
                                                <div class=\"pc-pwd name-info\">";echo "
                                    <span>";echo "
                                        {{VERSION}} {{version}}";echo "
                                        {{if version_code}}";echo "
                                    （Build {{version_code}}）";echo "
                                    {{/if}}";echo "
                                    </span>";echo "
                                                    <span>{{SIZE}} {{app_size}}</span><span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                        {{if checked}}";echo "
                                        <div id=\"showtext\" style=\"text-align: center;margin-top:30px;display: none;\">";echo "
                                            <div style=\"color: #1abc9c\">{{VIEW_IN_DESKTOP}}</div>";echo "
                                            <div class=\"loading\"></div>";echo "
                                        </div>";echo "
                                        <div class=\"template-btn-wrap\">";echo "
                                            <a href=\"{{downurl}}\" type=\"ios\"";echo "
                                               class=\"ms-btn template-btn clearfix pc-pwd down_load\">";echo "
                                                <span class=\"icon-36 iconfont fl\"></span>";echo "
                                                <span class=\"fl\">{{DOWNLOAD_INSTALL}}</span>";echo "
                                            </a>";echo "
                                        </div>";echo "
                                        <div class=\"t-apply pc-pwd\">";echo "
                                            {{if support|equals>3}}";echo "
                                            {{FOR_IOS_AND_ANDROID}}";echo "
                                            {{else}}";echo "
                                            {{if support|equals>2}}";echo "
                                            {{FOR_ANDROID}}";echo "
                                            {{else}}";echo "
                                            {{FOR_IOS}}";echo "
                                            {{/if}}";echo "
                                            {{/if}}";echo "
                                        </div>";echo "
                                        {{/if}}";echo "
";echo "
                                        <div class=\"t-code phone-pwd\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div class=\"c-right fl\">";echo "
                                    <div class=\"template-common\">";echo "
                                        <div class=\"t-name hidden-xs\">";echo "
                                            <div class=\"tit\">{{app_name}}</div>";echo "
                                            <div class=\"name-info\">";echo "
                                <span>";echo "
                                    {{VERSION}} {{version}}";echo "
                                    {{if version_code}}";echo "
                                    （Build {{version_code}}）";echo "
                                    {{/if}}";echo "
                                </span>";echo "
                                                <span>{{SIZE}} {{app_size}}</span>";echo "
                                                <span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                        <!--密码框-->";echo "
";echo "
                                        {{if checked|false}}";echo "
                                        <div class=\"template-pwd\">";echo "
                                            <div class=\"form-group\">";echo "
                                                <label>{{REQUIRE_PWD}}</label>";echo "
                                                <input type=\"password\" id=\"password\" name=\"pwd\" class=\"form-control\">";echo "
                                            </div>";echo "
                                            <div class=\"top-pwd hidden-xs\">";echo "
                                                <span class=\"iconfont icon-mima\"></span>";echo "
                                            </div>";echo "
                                            <button type=\"button\" class=\"ms-btn decoding\" onclick=\"DAFU.submitPwd()\">";echo "
                                                {{DOWNLOAD_ENTER}}";echo "
                                            </button>";echo "
                                            <div class=\"t-code visible-xs\">";echo "
                                                <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                     class=\"img-responsive\">";echo "
                                                <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                        {{/if}}";echo "
                                        <!--/密码框-->";echo "
                                        <hr class=\"pc-pwd\">";echo "
                                        {{if app_intro}}";echo "
                                        <div class=\"t-introduce pc-pwd\">";echo "
                                            <div class=\"tit\">{{APP_DESCRIPTION}}</div>";echo "
                                            <p>{{app_intro}}</p>";echo "
                                        </div>";echo "
                                        {{/if}}";echo "
";echo "
                                        {{if remark}}";echo "
                                        <div class=\"t-introduce pc-pwd\">";echo "
                                            <div class=\"tit\">{{APP_REMARK}}</div>";echo "
                                            <p>{{remark}}</p>";echo "
                                        </div>";echo "
                                        {{/if}}";echo "
                                        {{if qq}}";echo "
                                        <div class=\"t-contact pc-pwd\">";echo "
                                            <div class=\"tit\">{{APP_CONTACT}}</div>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd class=\"fl\">{{qq}}</dd>";echo "
                                            </dl>";echo "
                                        </div>";echo "
                                        {{/if}}";echo "
";echo "
                                        {{if screenshots}}";echo "
                                        <div class=\"app-screen pc-pwd\">";echo "
                                            <div class=\"tit\">{{APP_SCREENSHOTS}}</div>";echo "
                                            <div class=\"s-responsive\">";echo "
                                                {{screenshots}}";echo "
                                            </div>";echo "
                                        </div>";echo "
                                        {{/if}}";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
";echo "
            </script>";echo "
        ";goto O5hxh;O5hldMhxi:$O5hAW=$tmpid==2;if($O5hAW)goto O5heWjgxj;goto O5hldMhxj;O5heWjgxj:echo "            <script language=\"text/template\" id=\"content\">";echo "
                {{if checked}}";echo "
                <div class=\"template-2 template-wrap\">";echo "
                    {{else}}";echo "
                    <div class=\"template-2 template-wrap passwords\">";echo "
                        {{/if}}";echo "
                        <div class=\"t-bg-2\"></div>";echo "
                        <div class=\"container\">";echo "
                            <div class=\"content\">";echo "
                                <div class=\"template-common\">";echo "
                                    <div class=\"t-icon\">";echo "
                                        <img src=\"{{icon}}\" class=\"img-responsive\">";echo "
                                    </div>";echo "
                                    <div class=\"t-name\">";echo "
                                        <div class=\"tit\">{{app_name}}</div>";echo "
                                        <div class=\"name-info pc-pwd\">";echo "
                                <span>{{VERSION}} {{version}}";echo "
                                        {{if version_code}}";echo "
                                    （Build {{version_code}}）";echo "
                                    {{/if}}";echo "
                                </span>";echo "
                                            <span>{{SIZE}} {{app_size}}</span><span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{if checked|false}}";echo "
                                    <!--密码框-->";echo "
                                    <div class=\"template-pwd\">";echo "
                                        <div class=\"form-group\">";echo "
                                            <label>{{REQUIRE_PWD}}</label>";echo "
                                            <input type=\"password\" name=\"pwd\" class=\"form-control\">";echo "
                                        </div>";echo "
                                        <button type=\"button\" class=\"ms-btn decoding\" onclick=\"DAFU.submitPwd()\">";echo "
                                            {{DOWNLOAD_ENTER}}";echo "
                                        </button>";echo "
                                        <div class=\"t-code\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <!--/密码框-->";echo "
                                    {{/if}}";echo "
                                    {{if checked}}";echo "
                                    <div id=\"showtext\" style=\"text-align: center;margin-top:30px;display: none\">";echo "
                                        <div style=\"color: #1abc9c\">{{VIEW_IN_DESKTOP}}</div>";echo "
                                        <div class=\"loading\"></div>";echo "
                                    </div>";echo "
                                    <div class=\"template-btn-wrap\">";echo "
                                        <a href=\"{{downurl}}\" link=\"{{downurl}}\" type=\"ios\"";echo "
                                           class=\"ms-btn template-btn clearfix pc-pwd down_load\">";echo "
                                            <span class=\"icon-36 iconfont fl\"></span>";echo "
                                            <span class=\"fl\">";echo "
                                    {{DOWNLOAD_INSTALL}}";echo "
                                </span>";echo "
                                        </a>";echo "
                                    </div>";echo "
                                    <div class=\"t-apply pc-pwd\">";echo "
                                        {{if support|equals>3}}";echo "
                                        {{FOR_IOS_AND_ANDROID}}";echo "
                                        {{else}}";echo "
                                        {{if support|equals>2}}";echo "
                                        {{FOR_ANDROID}}";echo "
                                        {{else}}";echo "
                                        {{FOR_IOS}}";echo "
                                        {{/if}}";echo "
                                        {{/if}}";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    <div class=\"t-code pc-pwd\">";echo "
                                        <img src=\"/qrcode?link={{qrcode_url}}\" class=\"img-responsive\">";echo "
                                        <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                    </div>";echo "
                                    <hr class=\"pc-pwd\">";echo "
                                    {{if app_intro}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_DESCRIPTION}}</div>";echo "
                                        <p>{{app_intro}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if remark}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_REMARK}}</div>";echo "
                                        <p>{{remark}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if qq}}";echo "
                                    <div class=\"t-contact pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_CONTACT}}</div>";echo "
                                        <dl class=\"clearfix\">";echo "
                                            <dd class=\"fl\">{{qq}}</dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if screenshots}}";echo "
                                    <div class=\"app-screen pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_SCREENSHOTS}}</div>";echo "
                                        <div class=\"s-responsive\">";echo "
                                            {{screenshots}}";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
            </script>";echo "
        ";goto O5hxh;O5hldMhxj:$O5hAW=$tmpid==3;if($O5hAW)goto O5heWjgxk;goto O5hldMhxk;O5heWjgxk:echo "            <script language=\"text/template\" id=\"content\">";echo "
                {{if checked}}";echo "
                <div class=\"template-3 template-wrap\">";echo "
                    {{else}}";echo "
                    <div class=\"template-3 template-wrap passwords\">";echo "
                        {{/if}}";echo "
                        <div class=\"t-bg-3\"></div>";echo "
                        <div class=\"container\">";echo "
                            <div class=\"content\">";echo "
                                <div class=\"template-common\">";echo "
                                    <div class=\"t-icon\"><img src=\"{{icon}}\" class=\"img-responsive\"></div>";echo "
                                    <div class=\"t-name\">";echo "
                                        <div class=\"tit\">{{app_name}}</div>";echo "
                                        <div class=\"name-info pc-pwd\">";echo "
                                <span> {{VERSION}} {{version}}";echo "
                                        {{if version_code}}";echo "
                                    （Build {{version_code}}）";echo "
                                    {{/if}}</span>";echo "
                                            <span>{{SIZE}} {{app_size}}</span><span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{if checked|false}}";echo "
                                    <!--密码框-->";echo "
                                    <div class=\"template-pwd\">";echo "
                                        <div class=\"form-group\">";echo "
                                            <label>{{REQUIRE_PWD}}</label>";echo "
                                            <input type=\"password\" name=\"pwd\" class=\"form-control\">";echo "
                                        </div>";echo "
                                        <button type=\"button\" class=\"ms-btn decoding\" onclick=\"DAFU.submitPwd()\">";echo "
                                            {{DOWNLOAD_ENTER}}";echo "
                                        </button>";echo "
                                        <div class=\"t-code\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <hr class=\"pc-pwd\">";echo "
                                    <!--/密码框-->";echo "
                                    {{/if}}";echo "
                                    {{if checked}}";echo "
                                    <div id=\"showtext\" style=\"text-align: center;margin-top:30px;display: none\">";echo "
                                        <div style=\"color: #1abc9c\">{{VIEW_IN_DESKTOP}}</div>";echo "
                                        <div class=\"loading\"></div>";echo "
                                    </div>";echo "
                                    <div class=\"template-btn-wrap\">";echo "
                                        <a href=\"{{downurl}}\" type=\"ios\"";echo "
                                           class=\"ms-btn template-btn clearfix pc-pwd down_load\">";echo "
                                            <span class=\"icon-36 iconfont fl\"></span>";echo "
                                            <span class=\"fl\">{{DOWNLOAD_INSTALL}}</span>";echo "
                                        </a>";echo "
                                    </div>";echo "
                                    <div class=\"t-apply pc-pwd\">";echo "
                                        {{if support|equals>3}}";echo "
                                        {{FOR_IOS_AND_ANDROID}}";echo "
                                        {{else}}";echo "
                                        {{if support|equals>2}}";echo "
                                        {{FOR_ANDROID}}";echo "
                                        {{else}}";echo "
                                        {{FOR_IOS}}";echo "
                                        {{/if}}";echo "
                                        {{/if}}";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    <div class=\"t-code pc-pwd\">";echo "
                                        <img src=\"/qrcode?link={{qrcode_url}}\" class=\"img-responsive\">";echo "
                                        <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                    </div>";echo "
                                    {{if app_intro}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_DESCRIPTION}}</div>";echo "
                                        <p>{{app_intro}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if remark}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_REMARK}}</div>";echo "
                                        <p>{{remark}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if qq}}";echo "
                                    <div class=\"t-contact pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_CONTACT}}</div>";echo "
                                        <dl class=\"clearfix\">";echo "
                                            <dd class=\"fl\">{{qq}}</dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if screenshots}}";echo "
                                    <div class=\"app-screen pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_SCREENSHOTS}}</div>";echo "
                                        <div class=\"s-responsive\">";echo "
                                            {{screenshots}}";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
            </script>";echo "
        ";goto O5hxh;O5hldMhxk:$O5hAW=$tmpid==4;if($O5hAW)goto O5heWjgxl;goto O5hldMhxl;O5heWjgxl:echo "            <script language=\"text/template\" id=\"content\">";echo "
                {{if checked}}";echo "
                <div class=\"template-4 template-wrap\">";echo "
                    {{else}}";echo "
                    <div class=\"template-4 template-wrap passwords\">";echo "
                        {{/if}}";echo "
                        <div class=\"t-bg-4 clearfix\">";echo "
                            <div class=\"container\">";echo "
                                <div class=\"content4 clearfix\">";echo "
                                    <div class=\"t-left fl\">";echo "
                                        <div class=\"template-common\">";echo "
                                            <div class=\"t-icon\">";echo "
                                                <img src=\"{{icon}}\" class=\"img-responsive\">";echo "
                                            </div>";echo "
                                            <div class=\"t-name\">";echo "
                                                <div class=\"tit\">{{app_name}}</div>";echo "
                                                <div class=\"name-info hidden-xs\">";echo "
                                       <span>{{VERSION}} {{version}}";echo "
                                        {{if version_code}}";echo "
                                    （Build {{version_code}}）";echo "
                                    {{/if}}</span>";echo "
                                                    <span>{{SIZE}} {{app_size}}</span><span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <div class=\"t-right fl\">";echo "
                                        <div class=\"template-common\">";echo "
                                            <div class=\"t-name visible-xs pc-pwd\">";echo "
                                                <div class=\"name-info\">";echo "
                                        <span>";echo "
                                            {{VERSION}} {{version}}";echo "
                                            {{if version_code}}";echo "
                                            （Build {{version_code}}）";echo "
                                            {{/if}}";echo "
                                        </span>";echo "
                                                    <span>{{SIZE}} {{app_size}}</span>";echo "
                                                    <span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                                </div>";echo "
                                            </div>";echo "
";echo "
                                            {{if checked}}";echo "
                                            <div id=\"showtext\" style=\"text-align: center;margin-top:30px;display: none\">";echo "
                                                <div style=\"color: #1abc9c\">{{VIEW_IN_DESKTOP}}</div>";echo "
                                                <div class=\"loading\"></div>";echo "
                                            </div>";echo "
                                            <div class=\"template-btn-wrap\">";echo "
                                                <a href=\"{{downurl}}\" type=\"ios\"";echo "
                                                   class=\"ms-btn template-btn clearfix pc-pwd down_load\">";echo "
                                                    <span class=\"icon-36 iconfont fl\"></span>";echo "
                                                    <span class=\"fl\">";echo "
                                        {{DOWNLOAD_INSTALL}}";echo "
                                        </span>";echo "
                                                </a>";echo "
                                            </div>";echo "
                                            <div class=\"t-apply c-pwd\">";echo "
                                                {{if support|equals>3}}";echo "
                                                {{FOR_IOS_AND_ANDROID}}";echo "
                                                {{else}}";echo "
                                                {{if support|equals>2}}";echo "
                                                {{FOR_ANDROID}}";echo "
                                                {{else}}";echo "
                                                {{FOR_IOS}}";echo "
                                                {{/if}}";echo "
                                                {{/if}}";echo "
                                            </div>";echo "
";echo "
                                            {{/if}}";echo "
";echo "
                                            <div class=\"t-code phone-pwd\">";echo "
                                                <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                     class=\"img-responsive\">";echo "
                                                <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                        <div class=\"container\">";echo "
                            <div class=\"content\">";echo "
                                <div class=\"template-common\">";echo "
";echo "
                                    {{if checked|false}}";echo "
                                    <!--密码框-->";echo "
                                    <div class=\"template-pwd\">";echo "
                                        <div class=\"form-group\">";echo "
                                            <label>{{REQUIRE_PWD}}</label>";echo "
                                            <input type=\"password\" name=\"pwd\" class=\"form-control\">";echo "
                                        </div>";echo "
                                        <button type=\"button\" class=\"ms-btn decoding\" onclick=\"DAFU.submitPwd()\">";echo "
                                            {{DOWNLOAD_ENTER}}";echo "
                                        </button>";echo "
                                        <div class=\"t-code visible-xs\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <!--/密码框-->";echo "
                                    {{/if}}";echo "
";echo "
                                    <hr class=\"pc-pwd\">";echo "
                                    {{if app_intro}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_DESCRIPTION}}</div>";echo "
                                        <p>{{app_intro}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if remark}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_REMARK}}</div>";echo "
                                        <p>{{remark}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if qq}}";echo "
                                    <div class=\"t-contact pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_CONTACT}}</div>";echo "
                                        <dl class=\"clearfix\">";echo "
                                            <dd class=\"fl\">{{qq}}</dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if screenshots}}";echo "
                                    <div class=\"app-screen pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_SCREENSHOTS}}</div>";echo "
                                        <div class=\"s-responsive\">";echo "
                                            {{screenshots}}";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
            </script>";echo "
        ";goto O5hxh;O5hldMhxl:$O5hAW=$tmpid==5;if($O5hAW)goto O5heWjgxm;goto O5hldMhxm;O5heWjgxm:echo "            <script language=\"text/template\" id=\"content\">";echo "
                {{if checked}}";echo "
                <div class=\"template-5 template-wrap\">";echo "
                    {{else}}";echo "
                    <div class=\"template-5 template-wrap passwords\">";echo "
                        {{/if}}";echo "
                        <div class=\"left-bg\"></div>";echo "
                        <div class=\"right-bg\"></div>";echo "
                        <div class=\"container\">";echo "
                            <div class=\"content\">";echo "
                                <div class=\"template-common\">";echo "
                                    <div class=\"t-icon\">";echo "
                                        <img src=\"{{icon}}\" class=\"img-responsive\">";echo "
                                        <div class=\"bg-shadow hidden-xs\"></div>";echo "
                                        <div class=\"t-icon code hidden-xs\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <div class=\"t-name-wrap\">";echo "
                                        <div class=\"t-name\">";echo "
                                            <div class=\"tit\">{{app_name}}</div>";echo "
                                            <div class=\"name-info\">";echo "
                                    <span>";echo "
                                            {{VERSION}} {{version}}";echo "
                                            {{if version_code}}";echo "
                                            （Build {{version_code}}）";echo "
                                            {{/if}}";echo "
                                        </span>";echo "
                                                <span>{{SIZE}} {{app_size}}</span>";echo "
                                                <br/>";echo "
                                                <span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                            </div>";echo "
                                        </div>";echo "
";echo "
                                        {{if checked}}";echo "
                                        <div id=\"showtext\" style=\"text-align: center;margin-top:30px;display: none\">";echo "
                                            <div style=\"color: #1abc9c\">{{VIEW_IN_DESKTOP}}</div>";echo "
                                            <div class=\"loading\"></div>";echo "
                                        </div>";echo "
";echo "
                                        <div class=\"template-btn-wrap\">";echo "
                                            <a href=\"{{downurl}}\" type=\"ios\"";echo "
                                               class=\"ms-btn template-btn clearfix pc-pwd down_load\">";echo "
                                                <span class=\"icon-36 iconfont fl\"></span>";echo "
                                                <span class=\"fl\">{{DOWNLOAD_INSTALL}}</span>";echo "
                                            </a>";echo "
                                        </div>";echo "
                                        <div class=\"t-apply c-pwd\">";echo "
                                            {{if support|equals>3}}";echo "
                                            {{FOR_IOS_AND_ANDROID}}";echo "
                                            {{else}}";echo "
                                            {{if support|equals>2}}";echo "
                                            {{FOR_ANDROID}}";echo "
                                            {{else}}";echo "
                                            {{FOR_IOS}}";echo "
                                            {{/if}}";echo "
                                            {{/if}}";echo "
                                        </div>";echo "
";echo "
                                        {{/if}}";echo "
                                        <div class=\"t-code pc-pwd visible-xs\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
";echo "
                                    {{if checked|false}}";echo "
                                    <!--密码框-->";echo "
                                    <div class=\"template-pwd\">";echo "
                                        <div class=\"form-group\">";echo "
                                            <label>{{REQUIRE_PWD}}</label>";echo "
                                            <input type=\"password\" name=\"pwd\" class=\"form-control\">";echo "
                                        </div>";echo "
                                        <div class=\"top-pwd hidden-xs\"><span class=\"iconfont icon-mima\"></span></div>";echo "
                                        <button type=\"button\" class=\"ms-btn decoding\" onclick=\"DAFU.submitPwd()\">";echo "
                                            {{DOWNLOAD_ENTER}}";echo "
                                        </button>";echo "
                                        <div class=\"t-code visible-xs\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <!--/密码框-->";echo "
                                    {{/if}}";echo "
";echo "
";echo "
                                    <hr class=\"show pc-pwd\">";echo "
";echo "
                                    {{if app_intro}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_DESCRIPTION}}</div>";echo "
                                        <p>{{app_intro}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if remark}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_REMARK}}</div>";echo "
                                        <p>{{remark}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if qq}}";echo "
                                    <div class=\"t-contact pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_CONTACT}}</div>";echo "
                                        <dl class=\"clearfix\">";echo "
                                            <dd class=\"fl\">{{qq}}</dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if screenshots}}";echo "
                                    <div class=\"app-screen pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_SCREENSHOTS}}</div>";echo "
                                        <div class=\"s-responsive\">";echo "
                                            {{screenshots}}";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
            </script>";echo "
        ";goto O5hxh;O5hldMhxm:$O5hAW=$tmpid==6;if($O5hAW)goto O5heWjgxn;goto O5hldMhxn;O5heWjgxn:echo "            <script language=\"text/template\" id=\"content\">";echo "
                {{if checked}}";echo "
                <div class=\"template-6 template-wrap\">";echo "
                    {{else}}";echo "
                    <div class=\"template-6 template-wrap passwords\">";echo "
                        {{/if}}";echo "
                        <div class=\"t-bg-6 clearfix\">";echo "
                            <div class=\"container\">";echo "
                                <div class=\"t-top clearfix\">";echo "
                                    <div class=\"tit fl\">{{app_name}}</div>";echo "
                                    <div class=\"name-info fr\">";echo "
                            <span>";echo "
                                {{VERSION}} {{version}}";echo "
                                {{if version_code}}";echo "
                                （Build {{version_code}}）";echo "
                                {{/if}}";echo "
                            </span>";echo "
                                        <span>{{SIZE}} {{app_size}}</span>";echo "
                                        <span>{{UPDATE_TIME}} {{update_dt}}</span>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                        <div class=\"container\">";echo "
                            <div class=\"content\">";echo "
                                <div class=\"template-common\">";echo "
                                    <div class=\"t-icon\"><img src=\"{{icon}}\" class=\"img-responsive\"></div>";echo "
                                    {{if checked}}";echo "
                                    <hr class=\"show-hr pc-pwd\">";echo "
                                    <div class=\"template-btn-wrap\">";echo "
                                        <a href=\"{{downurl}}\" type=\"ios\"";echo "
                                           class=\"ms-btn template-btn clearfix pc-pwd down_load\">";echo "
                                            <span class=\"icon-36 iconfont fl\"></span>";echo "
                                            <span class=\"fl\">{{DOWNLOAD_INSTALL}}</span>";echo "
                                        </a>";echo "
                                    </div>";echo "
                                    <div class=\"t-apply pc-pwd\">";echo "
                                        {{if support|equals>3}}";echo "
                                        {{FOR_IOS_AND_ANDROID}}";echo "
                                        {{else}}";echo "
                                        {{if support|equals>2}}";echo "
                                        {{FOR_ANDROID}}";echo "
                                        {{else}}";echo "
                                        {{FOR_IOS}}";echo "
                                        {{/if}}";echo "
                                        {{/if}}";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if checked|false}}";echo "
                                    <!--密码框-->";echo "
                                    <div class=\"template-pwd\">";echo "
                                        <div class=\"form-group\">";echo "
                                            <label>{{REQUIRE_PWD}}</label>";echo "
                                            <input type=\"password\" name=\"pwd\" class=\"form-control\">";echo "
                                        </div>";echo "
                                        <button type=\"button\" class=\"ms-btn decoding\" onclick=\"DAFU.submitPwd()\">";echo "
                                            {{DOWNLOAD_ENTER}}";echo "
                                        </button>";echo "
                                        <div class=\"t-code visible-xs\">";echo "
                                            <img src=\"/qrcode?link={{qrcode_url}}\"";echo "
                                                 class=\"img-responsive\">";echo "
                                            <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    <!--/密码框-->";echo "
";echo "
                                    {{/if}}";echo "
";echo "
";echo "
                                    <div class=\"t-code pc-pwd\">";echo "
                                        <img src=\"/qrcode?link={{qrcode_url}}\" class=\"img-responsive\">";echo "
                                        <div class=\"code-text\">{{SCAN_TIPS}}</div>";echo "
                                    </div>";echo "
                                    <hr class=\"pc-pwd\">";echo "
                                    {{if app_intro}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_DESCRIPTION}}</div>";echo "
                                        <p>{{app_intro}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
";echo "
                                    {{if remark}}";echo "
                                    <div class=\"t-introduce pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_REMARK}}</div>";echo "
                                        <p>{{remark}}</p>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if qq}}";echo "
                                    <div class=\"t-contact pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_CONTACT}}</div>";echo "
                                        <dl class=\"clearfix\">";echo "
                                            <dd class=\"fl\">{{qq}}</dd>";echo "
                                        </dl>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                    {{if screenshots}}";echo "
                                    <div class=\"app-screen pc-pwd\">";echo "
                                        <div class=\"tit\">{{APP_SCREENSHOTS}}</div>";echo "
                                        <div class=\"s-responsive\">";echo "
                                            {{screenshots}}";echo "
                                        </div>";echo "
                                    </div>";echo "
                                    {{/if}}";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
            </script>";echo "
        ";goto O5hxh;O5hldMhxn:O5hxh:echo "        <div class=\"modal fade ms-modal\" id=\"reportSuccess\" tabindex=\"-1\" role=\"dialog\">";echo "
            <div class=\"modal-dialog modal-sm\" role=\"document\">";echo "
                <div class=\"modal-content\">";echo "
                    <div class=\"modal-body\">";echo "
                        <div class=\"text-center\">";echo "
                            <div><span class=\"icon icon-modal-success2\"></span></div>";echo "
                            <p class=\"color-333 bold font16 mt5\">{{REPORT_THANKS}}</p>";echo "
                            <p class=\"color-333 mt5\">{{REPORT_MESSAGE}}</p>";echo "
                            <div class=\"mt15\">";echo "
                                <button type=\"button\" class=\"ms-btn ms-btn-default w90\" data-dismiss=\"modal\">";echo "
                                    {{BUTTON_OK}}";echo "
                                </button>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
";echo "
";echo "
        <div class=\"modal fade ms-modal auto-hide-modal\" id=\"autoHideTemplateModal\" tabindex=\"-1\" role=\"dialog\">";echo "
            <div class=\"modal-dialog modal-sm\" role=\"document\">";echo "
                <div class=\"modal-content\">";echo "
                    <div class=\"modal-body\">";echo "
                        <div class=\"text-center\">";echo "
                            <div class=\"auto-hide\">";echo "
                                <div class=\"mt5\">{{PASSWORD_WRONG}}</div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
";echo "
        <style>";echo "
            body {";echo "
                padding-bottom: 10px;";echo "
            }";echo "
        </style>";echo "
        <script language=\"text/template\" id=\"copyright\">";echo "
            <div class=\"template-footer\">";echo "
                <div class=\"container\">";echo "
                    <div class=\"t-footer\">";echo "
                        <a href=\"//";echo $_SERVER['HTTP_HOST'];echo "?source=down_page\" target=\"_blank\">{{DIBAQU}}</a>";echo "
                        |";echo "
                        <a target=\"_blank\"";echo "
                           href=\"//";echo $_SERVER['HTTP_HOST'];echo "/index/disclaimer?source=down_page\">{{DISCLAIMER}}</a>";echo "
                        |";echo "
                        <a href=\"javascript:;\" onclick=\"DAFU.reportApp()\">{{REPORT}}</a>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
            <div id=\"weixin_ios\" style=\"display:none\">";echo "
                <div class=\"click_opacity\"></div>";echo "
                <div class=\"to_btn\">";echo "
                    {{GO_OUT_WECHAT_IOS_TIP}}";echo "
                </div>";echo "
            </div>";echo "
            <div id=\"weixin_android\" style=\"display: none\">";echo "
                <div class=\"click_opacity\"></div>";echo "
                <div class=\"to_btn\">{{GO_OUT_WECHAT_TIP}}";echo "
                </div>";echo "
            </div>";echo "
";echo "
";echo "
            <!--举报弹窗-->";echo "
            <div class=\"modal fade ms-modal\" id=\"reportModal\" tabindex=\"-1\" role=\"dialog\">";echo "
                <div class=\"modal-dialog\" role=\"document\">";echo "
                    <div class=\"modal-content\">";echo "
                        <div class=\"modal-body\">";echo "
                            <div class=\"report\">";echo "
                                <form action=\"\" method=\"post\">";echo "
                                    <div class=\"tit\">{{REPORT_TITLE}}</div>";echo "
                                    <p>";echo "
                                        {{REPORT_TIPS}}";echo "
                                    </p>";echo "
                                    <div class=\"form-group\">";echo "
                                        <label>{{REPORT_REASON_ERROR}}<span>*</span></label>";echo "
                                        <ul class=\"clearfix\">";echo "
                                            <li>";echo "
                                                <span class=\"icon icon-radio\"></span>{{REPORT_DB}}";echo "
                                                <input type=\"radio\" class=\"hidden\" value=\"0\">";echo "
                                            </li>";echo "
                                            <li>";echo "
                                                <span class=\"icon icon-radio\"></span>{{REPORT_HS}}";echo "
                                                <input type=\"radio\" class=\"hidden\" value=\"1\">";echo "
                                            </li>";echo "
                                            <li>";echo "
                                                <span class=\"icon icon-radio\"></span>{{REPORT_QZ}}";echo "
                                                <input type=\"radio\" class=\"hidden\" value=\"2\">";echo "
                                            </li>";echo "
                                            <li>";echo "
                                                <span class=\"icon icon-radio\"></span>{{REPORT_OTHER}}";echo "
                                                <input type=\"radio\" class=\"hidden\" value=\"3\">";echo "
                                            </li>";echo "
                                        </ul>";echo "
                                        <div class=\"error\">{{REPORT_REASON_ERROR}}</div>";echo "
                                    </div>";echo "
                                    <div class=\"form-group\">";echo "
                                        <label>{{REPORT_REASON}}<span>*</span></label>";echo "
                                        <textarea class=\"form-control\" rows=\"4\" id=\"report-content\"";echo "
                                                  placeholder=\"{{REPORT_CONTENT_PLACEHOLDER}}\"></textarea>";echo "
                                        <div class=\"error\">{{REPORT_CONTENT_ERROR}}</div>";echo "
                                    </div>";echo "
                                    <div class=\"form-group\">";echo "
                                        <label>{{REPORT_EMAIL_PLACEHOLDER}}<span>*</span></label>";echo "
                                        <input type=\"text\" class=\"form-control\" name=\"email\"";echo "
                                               placeholder=\"{{REPORT_EMAIL_PLACEHOLDER}}\" id=\"report-email\">";echo "
                                        <div class=\"error\">{{REPORT_EMAIL_ERROR}}</div>";echo "
                                    </div>";echo "
                                    <div class=\"btn-bottom\">";echo "
                                        <button data-dismiss=\"modal\" type=\"button\" class=\"ms-btn color-hover\">";echo "
                                            {{REPORT_RETUEN}}";echo "
                                        </button>";echo "
                                        <button type=\"button\" class=\"ms-btn ms-btn-primary save\">{{REPORT_BUTTON}}";echo "
                                        </button>";echo "
                                    </div>";echo "
                                </form>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </script>";echo "
        <script src=\"/static/index/js/jquery.min.js\"></script>";echo "
        <script src=\"/static/index/js/bootstrap.min.js\"></script>";echo "
        <script src=\"/static/index/js/clipboard.min.js\"></script>";echo "
        <script src=\"https://res.wx.qq.com/open/js/jweixin-1.0.0.js\"></script>";echo "
        <script src=\"/static/index/js/markup.js\"></script>";echo "
        <script src=\"/static/index/js/publish/ua-parser.min.js\"></script>";echo "
        <script src=\"/static/index/js/template/wave.js\"></script>";echo "
        <script src=\"/static/index/js/template.js\"></script>";echo "
        <script>";echo "
            function autoHideModal(obj1, time) {";echo "
                var autoHide = null;";echo "
                clearTimeout(autoHide);";echo "
                \$(obj1).modal('show');";echo "
                \$(\".modal-backdrop\").hide();";echo "
                autoHide = setTimeout(function () {";echo "
                    \$(obj1).modal(\"hide\");";echo "
                }, time);";echo "
            }";echo "
";echo "
            // autoHideModal('#pwdModal', 3000);";echo "
            var windowWidth = \$(window).width();";echo "
            if (windowWidth >= 768) {";echo "
                \$(\".template-btn\").click(function () {";echo "
                    \$(\"#autoHideTemplateModal\").find(\".modal-dialog\").removeClass(\"modal-sm\").find(\".auto-hide .mt5\").text(\"请在手机上使用浏览器打开本页面，或者手机扫描页面二维码，即可安装\");";echo "
                    autoHideModal('#autoHideTemplateModal', 3000);";echo "
                });";echo "
            }";echo "
        </script>";echo "
        </body>";echo "
        </html>";echo "
        ";}}
?>