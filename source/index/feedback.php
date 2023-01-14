<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-31 21:57:37
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class feedback extends Base{function index(){echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>建议和反馈 - ";echo IN_NAME;echo " - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"bg-body\">";echo "
            <div class=\"container\">";echo "
                <div class=\"feedback-wrap\">";echo "
                    <div class=\"feedback\">";echo "
                        <div class=\"row clearfix\">";echo "
                            <div class=\"col-sm-10\">";echo "
                                <div class=\"tit\">";echo "
                                    我们珍视您的每个建议，您的建议是我们产品不断改进的动力！";echo "
                                </div>";echo "
                                <div class=\"form-group\">";echo "
                                    <label><span>*</span>产品类型</label>";echo "
                                    <ul class=\"clearfix type radio-round\">";echo "
                                        <li data-type=\"1\" class=\"active\"><span";echo "
                                                    class=\"icon icon-radio icon-radio-checked\"></span>企业签名";echo "
                                        </li>";echo "
                                        <li data-type=\"2\"><span class=\"icon icon-radio\"></span>封装APP</li>";echo "
                                        <li data-type=\"3\"><span class=\"icon icon-radio\"></span>分发下载</li>";echo "
                                        <li data-type=\"4\"><span class=\"icon icon-radio\"></span>其他</li>";echo "
                                    </ul>";echo "
                                </div>";echo "
                                <div class=\"form-group\">";echo "
                                    <label><span>*</span>问题反馈</label>";echo "
                                    <textarea class=\"form-control\" rows=\"5\" placeholder=\"请在这里描述您遇到的问题\"></textarea>";echo "
                                </div>";echo "
                                <div class=\"form-group\">";echo "
                                    <label>问题截图</label>";echo "
                                    <div class=\"feedback-img clearfix upload-img-more\">";echo "
                                        <div class=\"fl upload-img\">";echo "
                                            <input type=\"file\" class=\"upload\" name=\"\" value=\"\">";echo "
                                            <div class=\"text\">";echo "
                                                上传图片";echo "
                                            </div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div class=\"form-group\">";echo "
                                    <label><span>*</span>您的QQ</label>";echo "
                                    <input type=\"text\" class=\"form-control\" name=\"qq\"";echo "
                                           placeholder=\"请留下您的联系方式，我们可能与您联系，一起参与到我们的产品改进中。\">";echo "
                                </div>";echo "
                                <div class=\"text-center\">";echo "
                                    <button class=\"ms-btn ms-btn-primary submit\" type=\"button\">提交</button>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        <script>";echo "
            Layout.initUploadPics({";echo "
                imgLength: 6";echo "
            });";echo "
            tab.radioRound({";echo "
                el: \".radio-round li\",";echo "
                checkedClass: \"icon-radio-checked\"";echo "
            });";echo "
            \$(function () {";echo "
                \$(\".feedback\").find(\"button\").on('click', function () {";echo "
                    var type = \$(\".feedback .type li.active\").data('type');";echo "
                    var content = \$(\".feedback textarea\").val();";echo "
                    var screenshots = {};";echo "
                    \$(\".feedback .uploaded-img\").find(\"img\").each(function (index) {";echo "
                        screenshots[index] = \$(this).attr('src');";echo "
                    });";echo "
                    var qq = \$(\".feedback\").find(\"input[name='qq']\").val();";echo "
                    formData = new FormData();";echo "
                    formData.append('type', type);";echo "
                    formData.append('content', content);";echo "
                    formData.append('screenshots', JSON.stringify(screenshots));";echo "
                    formData.append('qq', qq);";echo "
                    \$.ajax({";echo "
                        url: '/index/ajax/feedback',";echo "
                        type: 'POST',";echo "
                        dataType: 'json',";echo "
                        cache: false,";echo "
                        data: formData,";echo "
                        processData: false,";echo "
                        contentType: false,";echo "
                        success: function (result) {";echo "
                            if (result.code == 200) {";echo "
                                alert('感谢您的反馈', function () {";echo "
                                    window.location.href = '/'";echo "
                                });";echo "
                            } else {";echo "
                                alert(result.msg);";echo "
                            }";echo "
                        }";echo "
                    });";echo "
                });";echo "
            })";echo "
        </script>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
        ";}}
?>