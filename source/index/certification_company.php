<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class certification_company extends BaseUser{function index(){$O5hAW=$this->user['in_type']==1;if($O5hAW)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:redirect('/index/certification_personal');goto O5hx1;O5hldMhx2:O5hx1:$O5hAX=(bool)isset($_GET['ac']);if($O5hAX)goto O5heWjgx5;goto O5hldMhx5;O5heWjgx5:$O5hAW=$_GET['ac']=='redo';$O5hAX=(bool)$O5hAW;goto O5hx4;O5hldMhx5:O5hx4:if($O5hAX)goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:unset($O5htIAW);$this->user['in_verify']=0;goto O5hx3;O5hldMhx6:O5hx3:echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>企业实名认证 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            ";$O5hhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"header"),array());echo "        <div id=\"app\">";echo "
            <div>";echo "
                <div class=\"real-name-wrap\">";echo "
                    <div class=\"container\">";echo "
                        <div class=\"crumbs\">";echo "
                            <a href=\"/\">首页</a><span>/</span><a href=\"/index/certification\">实名认证</a><span>/</span>企业认证";echo "
                        </div>";echo "
                        ";$O5hAW=$this->user['in_verify']==2;if($O5hAW)goto O5heWjgx8;goto O5hldMhx8;O5heWjgx8:echo "                            <div class=\"real-name real-name-error\">";echo "
                                <div class=\"top\">";echo "
                                    <ul class=\"clearfix\">";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">1</span>";echo "
                                            <span class=\"fl text\">选择身份</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">2</span>";echo "
                                            <span class=\"fl text\">填写资料</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix\">";echo "
                                            <span class=\"fl num\">3</span>";echo "
                                            <span class=\"fl text\">完成认证</span>";echo "
                                        </li>";echo "
                                    </ul>";echo "
                                </div>";echo "
                                <div class=\"con con3\">";echo "
                                    <div class=\"con3-top\">";echo "
                                        <div class=\"text-center\">";echo "
                                            <img src=\"";echo IN_PATH;echo "static/index/image/icon-11.png\">";echo "
                                        </div>";echo "
                                        <h3 class=\"text-center\">企业 实名认证已经提交!</h3>";echo "
                                        <h4 class=\"text-center\">一个工作日内完成认证</h4>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        ";goto O5hx7;O5hldMhx8:$O5hAW=$this->user['in_verify']==1;if($O5hAW)goto O5heWjgx9;goto O5hldMhx9;O5heWjgx9:echo "                            <div class=\"real-name real-name-error\">";echo "
                                <div class=\"top\">";echo "
                                    <ul class=\"clearfix\">";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">1</span>";echo "
                                            <span class=\"fl text\">选择身份</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">2</span>";echo "
                                            <span class=\"fl text\">填写资料</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">3</span>";echo "
                                            <span class=\"fl text\">完成认证</span>";echo "
                                        </li>";echo "
                                    </ul>";echo "
                                </div>";echo "
                                <div class=\"con con3\">";echo "
                                    <div class=\"con3-top\">";echo "
                                        <div class=\"text-center\">";echo "
                                            <img src=\"";echo IN_PATH;echo "static/index/image/icon-15.png\">";echo "
                                        </div>";echo "
                                        <h3 class=\"text-center\">恭喜您，企业 实名认证成功! </h3>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        ";goto O5hx7;O5hldMhx9:$O5hAW=$this->user['in_verify']==3;if($O5hAW)goto O5heWjgxa;goto O5hldMhxa;O5heWjgxa:echo "                            <div class=\"real-name real-name-error\">";echo "
                                <div class=\"top\">";echo "
                                    <ul class=\"clearfix\">";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">1</span>";echo "
                                            <span class=\"fl text\">选择身份</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">2</span>";echo "
                                            <span class=\"fl text\">填写资料</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix\">";echo "
                                            <span class=\"fl num\">3</span>";echo "
                                            <span class=\"fl text\">完成认证</span>";echo "
                                        </li>";echo "
                                    </ul>";echo "
                                </div>";echo "
                                <div class=\"con con3\">";echo "
                                    <div class=\"con3-top\">";echo "
                                        <div class=\"text-center\">";echo "
                                            <img src=\"";echo IN_PATH;echo "static/index/image/icon-16.png\">";echo "
                                        </div>";echo "
										<h3 class=\"text-center\">企业 实名认证失败!</h3>";echo "
										<h4 class=\"text-center\">失败原因：<b class=\"color-red\">";echo $this->user['in_info'];echo "</b></h4>";echo "
										<div class=\"text-center mt30\"><a href=\"/index/certification_company?ac=redo\" class=\"ms-btn ms-btn-primary\">重新提交认证</a></div>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        ";goto O5hx7;O5hldMhxa:echo "                            <div class=\"real-name\">";echo "
                                <div class=\"top\">";echo "
                                    <ul class=\"clearfix\">";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">1</span>";echo "
                                            <span class=\"fl text\">选择身份</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix active\">";echo "
                                            <span class=\"fl num\">2</span>";echo "
                                            <span class=\"fl text\">填写资料</span>";echo "
                                        </li>";echo "
                                        <li>";echo "
                                            <dl class=\"clearfix\">";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                                <dd></dd>";echo "
                                            </dl>";echo "
                                        </li>";echo "
                                        <li class=\"clearfix\">";echo "
                                            <span class=\"fl num\">3</span>";echo "
                                            <span class=\"fl text\">完成认证</span>";echo "
                                        </li>";echo "
                                    </ul>";echo "
                                </div>";echo "
                                <div class=\"con con2\">";echo "
                                    <form class=\"form-horizontal\" id=\"certificationForm\" role=\"form\" id=\"inputValid\"";echo "
                                          novalidate=\"novalidate\" method=\"post\">";echo "
                                        <div class=\"data-uploading\">";echo "
                                            <div class=\"warn-prompt mb40\">";echo "
                                                <span class=\"icon-warn iconfont\"></span>我们会严格保障您的个人信息安全。";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\"><span";echo "
                                                            class=\"mr10\">*</span>企业名称</label>";echo "
                                                <div class=\"col-sm-7\">";echo "
                                                    <input class=\"form-control\" type=\"text\" placeholder=\"请输入企业名称\"";echo "
                                                           name=\"real_name\" value=\"\">";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\"><span";echo "
                                                            class=\"mr10\">*</span>企业营业执照号码</label>";echo "
                                                <div class=\"col-sm-7\">";echo "
                                                    <input class=\"form-control\" type=\"text\" placeholder=\"请填写企业营业执照号码\"";echo "
                                                           name=\"idcard\" value=\"\">";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\"><span";echo "
                                                            class=\"mr10\">*</span>上传营业热照照片</label>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\"></label>";echo "
                                                <div class=\"col-sm-4\">";echo "
                                                    <div class=\"upload-img1 upload-license\">";echo "
                                                        <input type=\"file\" class=\"thumbnail\" name=\"card_enterprise\"";echo "
                                                               accept=\"image/jpeg, image/png, image/jpg\">";echo "
                                                        <div class=\"text\">";echo "
                                                            上传营业热照照片";echo "
                                                        </div>";echo "
                                                        <div class=\"reset\">";echo "
                                                            重新上传";echo "
                                                        </div>";echo "
                                                        <div class=\"water-mark\">";echo "
                                                            <img src=\"/static/index/image/watermark.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                    </div>";echo "
                                                </div>";echo "
                                                <div class=\"col-sm-5\">";echo "
                                                    <img src=\"/static/index/image/img-3.png\" class=\"img-responsive fr\">";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\"><span class=\"mr10\">*</span>联系人手机号码</label>";echo "
                                                <div class=\"col-sm-7\">";echo "
                                                    <input class=\"form-control\" type=\"text\"";echo "
                                                           placeholder=\"";echo $this->user['in_mobile'];echo "\"";echo "
                                                           disabled>";echo "
                                                </div>";echo "
                                                <div class=\"col-sm-2\">";echo "
                                                    <a href=\"/index/bind_mobile\" target=\"_blank\" type=\"button\"";echo "
                                                       class=\"ms-btn ms-btn-default\">绑定";echo "
                                                    </a>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\">";echo "
                                                    <span class=\"mr10\">*</span>邮箱地址</label>";echo "
                                                <div class=\"col-sm-7\">";echo "
                                                    <input class=\"form-control\" type=\"text\" placeholder=\"请填写邮箱地址\"";echo "
                                                           name=\"email\"";echo "
                                                           value=\"";echo $this->user['in_mail'];echo "\" disabled>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3 hidden-xs\"></label>";echo "
                                                <div class=\"col-sm-4\">";echo "
                                                    <input class=\"form-control\" type=\"text\" placeholder=\"请填写邮箱验证码\"";echo "
                                                           name=\"code\">";echo "
                                                </div>";echo "
                                                <div class=\"col-sm-3 text-right\">";echo "
                                                    <button type=\"button\" class=\"ms-btn ms-btn-primary w-block\"";echo "
                                                            id=\"sendcode\">";echo "
                                                        获取邮箱验证码";echo "
                                                    </button>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-3\"><span";echo "
                                                            class=\"mr10\">*</span>身份证图片</label>";echo "
                                                <div class=\"col-sm-9\">";echo "
                                                    <div class=\"color-danger font12 mt10\">";echo "
                                                        应监管部门要求，网上发布APP必须进行实名登记，我们采用了高于行业标准的要求来保障您的信息安全，为了进一步的保护您的个人信息，建议您在上传的实名信息中添加水印文字-仅供实名认证使用。";echo "
                                                    </div>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-2\"></label>";echo "
                                                <div class=\"col-sm-4\">";echo "
                                                    <div class=\"upload-img1\">";echo "
                                                        <input type=\"file\" class=\"thumbnail\" name=\"card_front\"";echo "
                                                               accept=\"image/jpeg, image/png, image/jpg\">";echo "
                                                        <div class=\"text\">";echo "
                                                            上传身份证正面照片";echo "
                                                        </div>";echo "
                                                        <div class=\"reset\">";echo "
                                                            重新上传";echo "
                                                        </div>";echo "
                                                        <div class=\"water-mark\">";echo "
                                                            <img src=\"/static/index/image/watermark.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                    </div>";echo "
                                                    <div class=\"upload-img1\">";echo "
                                                        <input type=\"file\" class=\"thumbnail\" name=\"card_back\"";echo "
                                                               accept=\"image/jpeg, image/png, image/jpg\">";echo "
                                                        <div class=\"text\">";echo "
                                                            上传身份证反面照片";echo "
                                                        </div>";echo "
                                                        <div class=\"reset\">";echo "
                                                            重新上传";echo "
                                                        </div>";echo "
                                                        <div class=\"water-mark\">";echo "
                                                            <img src=\"/static/index/image/watermark.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                    </div>";echo "
                                                    <div class=\"upload-img1\">";echo "
                                                        <input type=\"file\" class=\"thumbnail\" name=\"card_hand\"";echo "
                                                               accept=\"image/jpeg, image/png, image/jpg\">";echo "
                                                        <div class=\"text\">";echo "
                                                            上传手持身份证照片";echo "
                                                        </div>";echo "
                                                        <div class=\"reset\">";echo "
                                                            重新上传";echo "
                                                        </div>";echo "
                                                        <div class=\"water-mark\">";echo "
                                                            <img src=\"/static/index/image/watermark.png\"";echo "
                                                                 class=\"img-responsive\">";echo "
                                                        </div>";echo "
                                                    </div>";echo "
                                                </div>";echo "
                                                <div class=\"col-sm-5\">";echo "
                                                    <img src=\"/static/index/image/img-2.png\" class=\"img-responsive fr\">";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"form-group\">";echo "
                                                <label class=\"control-label col-sm-2\"></label>";echo "
                                                <div class=\"col-sm-9\">";echo "
                                                    <p class=\"color-danger\">";echo "
                                                        请上传3张身份证图片";echo "
                                                    </p>";echo "
                                                    <dl class=\"color-333 mt10\">";echo "
                                                        <dt>提示：</dt>";echo "
                                                        <dd class=\"lh28\">1. 请上传与手机号码身份信息一致的身份证照片，用于认证；</dd>";echo "
                                                        <dd class=\"lh28\">2. 单张照片大小不超过10M，支持PNG、JPG格式；</dd>";echo "
                                                        <dd class=\"lh28\">3. 所上传的图片，保证文字和图片、人像清晰可见</dd>";echo "
                                                    </dl>";echo "
                                                </div>";echo "
                                            </div>";echo "
                                            <div class=\"text-center\">";echo "
                                                <a href=\"JavaScript:history.go(-1)\" class=\"ms-btn color-hover\">上一步</a>";echo "
                                                <button type=\"button\" class=\"ms-btn ms-btn-primary submit ml10\"";echo "
                                                        id=\"btn_submit\">";echo "
                                                    提交";echo "
                                                </button>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                    </form>";echo "
                                </div>";echo "
                            </div>";echo "
                        ";O5hx7:echo "                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        <div class=\"modal fade ms-modal\" id=\"msModal2\" tabindex=\"-1\" role=\"dialog\">";echo "
            <div class=\"modal-dialog modal-sm\" role=\"document\">";echo "
                <div class=\"modal-content\">";echo "
                    <div class=\"modal-body\">";echo "
                        <div class=\"text-center\">";echo "
                            <div>";echo "
                                <span class=\"icon icon-modal-error2\"></span>";echo "
                            </div>";echo "
                            <p class=\"color-333 bold font16 mt5 modal-title-msg\">";echo "
                            </p>";echo "
                            <p class=\"color-333 mt5 modal-content-msg\">";echo "
                            </p>";echo "
                            <div class=\"mt15\">";echo "
                                <button type=\"button\" class=\"ms-btn ms-btn-default w90\" data-dismiss=\"modal\">确定</button>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        <script src=\"/static/index/js/jquery.form.js\"></script>";echo "
        <script src=\"/static/index/js/jquery.validate.min.js\"></script>";echo "
        <script src=\"/static/index/js/validate/message_zh.js\"></script>";echo "
        <script>";echo "
            // Layout.initUploadPic();";echo "
            var countdown = 60;";echo "
";echo "
            function set_time(dom) {";echo "
                if (countdown == 0) {";echo "
                    dom.attr('disabled', false);";echo "
                    dom.text('获取验证码');";echo "
                    countdown = 60;";echo "
                } else {";echo "
                    dom.attr('disabled', true);";echo "
                    dom.text('重新获取(' + countdown + ')');";echo "
                    countdown--;";echo "
                    setTimeout(function () {";echo "
                        set_time(dom)";echo "
                    }, 1000)";echo "
                }";echo "
            }";echo "
";echo "
            \$(function () {";echo "
                \$(\".form-horizontal\").on('click', '#sendcode', function () {";echo "
                    // 获取邮箱";echo "
                    _this = \$(this);";echo "
                    set_time(_this);";echo "
                    if (\$('input[name=\"email\"]').valid()) {";echo "
                        email = \$('input[name=\"email\"]').val();";echo "
                        \$.post('/index/ajax/send', {email: email}, function (result) {";echo "
                            if (result.code == 200) {";echo "
                            } else {";echo "
                                \$('#msModal2').find('.modal-content-msg').text(result.msg);";echo "
                                \$('#msModal2').modal('show');";echo "
                                _this.attr('disabled', false);";echo "
                                _this.text('获取验证码');";echo "
                                countdown = 0;";echo "
                            }";echo "
                        }, 'json')";echo "
                    }";echo "
                })";echo "
            });";echo "
";echo "
            Upload.img({";echo "
                el: \".thumbnail\",";echo "
                prefix: \"card\"";echo "
            });";echo "
";echo "
            \$(\"#btn_submit\").click(function () {";echo "
                if (Upload.isProcess()) {";echo "
                    return false;";echo "
                }";echo "
                var real_name = \$(\"input[name='real_name']\").val();";echo "
                if (!real_name) {";echo "
                    \$('#msModal2').find('.modal-content-msg').text('请填写企业名称');";echo "
                    \$('#msModal2').modal('show');";echo "
                    return false;";echo "
                }";echo "
                var idcard = \$(\"input[name='idcard']\").val();";echo "
                if (!idcard) {";echo "
                    \$('#msModal2').find('.modal-content-msg').text('请填写营业执照号码');";echo "
                    \$('#msModal2').modal('show');";echo "
                    return false;";echo "
                }";echo "
";echo "
                var card_enterprise = \$(\"input[name=card_enterprise]\").attr(\"data-key\");";echo "
";echo "
                var email = \$(\"input[name='email']\").val();";echo "
                if (!email) {";echo "
                    \$('#msModal2').find('.modal-content-msg').text('请填写邮箱');";echo "
                    \$('#msModal2').modal('show');";echo "
                    return false;";echo "
                }";echo "
                var code = \$(\"input[name='code']\").val();";echo "
                if (!code) {";echo "
                    \$('#msModal2').find('.modal-content-msg').text('请填写邮箱验证码');";echo "
                    \$('#msModal2').modal('show');";echo "
                    return false;";echo "
                }";echo "
";echo "
                var card_front = \$(\"input[name=card_front]\").attr(\"data-key\");";echo "
                var card_back = \$(\"input[name=card_back]\").attr(\"data-key\");";echo "
                var card_hand = \$(\"input[name=card_hand]\").attr(\"data-key\");";echo "
";echo "
                \$.ajax({";echo "
                    type: \"POST\",";echo "
                    url: \"/index/ajax_profile/send_verify_qiye\",";echo "
                    data: {";echo "
                        real_name: real_name,";echo "
                        idcard: idcard,";echo "
                        card_enterprise: card_enterprise,";echo "
                        email: email,";echo "
                        code: code,";echo "
                        card_front: card_front,";echo "
                        card_back: card_back,";echo "
                        card_hand: card_hand";echo "
                    },";echo "
                    dataType: \"json\",";echo "
                    success: function (res) {";echo "
                        if (res.code != 200) {";echo "
                            \$('#msModal2').find('.modal-content-msg').text(res.msg);";echo "
                            \$('#msModal2').modal('show');";echo "
                            return false;";echo "
                        } else {";echo "
                            alert('提交成功，请等待审核', function () {";echo "
                                window.location.reload();";echo "
                            });";echo "
                        }";echo "
                    }";echo "
                })";echo "
            });";echo "
        </script>";echo "
        ";$O5hhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
        ";}}
?>