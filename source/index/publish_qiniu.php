<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$E4wAC=!defined('IN_ROOT');if($E4wAC)goto E4weWjgx2;$E4wbNAE=11-11;if($E4wbNAE)goto E4weWjgx2;$E4wvPbNAD=11+2;$E4weFbN1=call_user_func_array("is_string",array(&$E4wvPbNAD));if($E4weFbN1)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:if(isset($config[0]))goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:goto D4vMIer2EF;if(is_array($rules))goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:Route::import($rules);goto E4wx5;E4wldMhx6:E4wx5:D4vMIer2EF:goto E4wx3;E4wldMhx4:goto D4vMIer2F1;$E4wMAF=$path . EXT;$E4weFM4=call_user_func_array("is_file",array(&$E4wMAF));if($E4weFM4)goto E4weWjgx8;goto E4wldMhx8;E4weWjgx8:$E4wMAG=$path . EXT;$E4wMAH=include $E4wMAG;goto E4wx7;E4wldMhx8:E4wx7:D4vMIer2F1:E4wx3:exit('Access denied');goto E4wx1;E4wldMhx2:E4wx1:echo "<link rel=\"stylesheet\" href=\"/static/index/css/fineuploader.css\"/>";echo "
<div class=\"release-app-wrap\">";echo "
    <div class=\"container\">";echo "
        <div class=\"release-app2 \">";echo "
            <div class=\"crumbs\">";echo "
                <a href=\"/index/apps/apps\">我的应用</a><span>/</span>上传应用";echo "
            </div>";echo "
            <div class=\"row clearfix\">";echo "
                ";$E4wAC=include 'left.php';echo "                <div class=\"col-sm-10\">";echo "
                    <div class=\"aside-right\">";echo "
                        <div class=\"release-app\">";echo "
                            <div class=\"upload-file\" style=\"padding-top:20px;\">";echo "
                                <div class=\"row tag-box tag-box-v5\" id=\"container\" style=\"height: 450px !important;\">";echo "
                                    <div class=\"span12\">";echo "
                                        <div id=\"bootstrapped-fine-uploader\">";echo "
                                        </div>";echo "
                                        <div class=\"qq-uploader-selector qq-uploader span12\">";echo "
                                            <div id=\"upprocess\" style=\"display: none;\">";echo "
												<span class=\"qq-drop-processing-selector qq-drop-processing\">";echo "
												<span class=\"qq-drop-processing-spinner-selector qq-drop-processing-spinner\"></span>";echo "
												</span>";echo "
                                                <div class=\"upload-app-icon\" id=\"loading\">";echo "
                                                    <img src=\"";echo IN_PATH;echo "static/index/image/loadicon.png\">";echo "
                                                </div>";echo "
                                                <div class=\"loadend\">";echo "
                                                </div>";echo "
                                                <ul class=\"qq-upload-list-selector qq-upload-list\">";echo "
                                                    <li>";echo "
                                                        <div style=\"margin-bottom:20px;\">";echo "
                                                            <span id=\"upload-app-name\">正在解析...</span>";echo "
                                                        </div>";echo "
                                                        <div style=\"margin-bottom:20px;\">";echo "
                                                            正在上传中，请不要关闭浏览器";echo "
                                                        </div>";echo "
                                                        <div class=\"qq-progress-bar-container-selector progress progress-striped active\">";echo "
                                                            <div class=\"growing qq-progress-bar-selector progress-bar progress-bar-warning\"";echo "
                                                                 role=\"progressbar\">";echo "
                                                            </div>";echo "
                                                        </div>";echo "
                                                        <span class=\"qq-upload-spinner-selector qq-upload-spinner alreadyup\"";echo "
                                                              style=\"width: auto;font-size: 14px\"></span>";echo "
                                                        <span class=\"qq-upload-file-selector qq-upload-file\"></span>";echo "
                                                        <span class=\"qq-upload-size-selector qq-upload-size tolsize\"";echo "
                                                              style=\"width: auto;font-size: 14px\"";echo "
                                                              id=\"speed-uploadify\"></span>";echo "
                                                        <br/>";echo "
                                                        <br/>";echo "
                                                        <a class=\"turbo-upload qq-upload-cancel-selector btn-u btn-u-default ms-btn ms-btn-default\"";echo "
                                                           href=\"javascript:;\" id=\"changest\"";echo "
                                                           style=\"display: none;\">暂停上传</a>";echo "
                                                        <span class=\"qq-upload-status-text-selector qq-upload-status-text\"></span>";echo "
                                                        <div id=\"retry\" style=\"display:none; margin-top:20px;\">";echo "
                                                            <a class=\"btn-u btn-u-default\" href=\"javascript:void(0);\"";echo "
                                                               onclick=\"javascript:retry();\">重新上传</a>";echo "
                                                        </div>";echo "
                                                    </li>";echo "
                                                </ul>";echo "
                                            </div>";echo "
                                            <div class=\"col-md-12\">";echo "
                                                <div class=\"qq-upload-button-selector\" style=\"width: auto;\" id=\"upbtn\">";echo "
                                                    <div>";echo "
                                                        <button class=\"ms-btn ms-btn-primary upload-btn\"";echo "
                                                                id=\"uploadstart\"";echo "
                                                                style=\"width: 240px; padding: 0; height: 60px; font-size: 18px; line-height: 58px;\">";echo "
                                                            <span class=\"iconfont icon-upload\"></span>";echo "
                                                            <span class=\"text\">立即上传</span>";echo "
                                                        </button>";echo "
                                                    </div>";echo "
                                                    <div style=\"margin-top:20px;\">";echo "
                                                    </div>";echo "
                                                    点击按钮选择应用的安装包，或拖拽文件到此区域";echo "
                                                    <br/>";echo "
                                                    （支持";$E4wAC=$this->action=='apps';if($E4wAC)goto E4weWjgxa;$E4weFbN1=call_user_func_array("stripos",array("JsPONoMX","11"));if($E4weFbN1)goto E4weWjgxa;$E4weFbN2=call_user_func_array("strnatcmp",array(11,11));if($E4weFbN2)goto E4weWjgxa;goto E4wldMhxa;E4weWjgxa:$E4wAD='.ipa 或 .apk 或 .mobileconfig';goto E4wx9;E4wldMhxa:$E4wAD='.ipa';E4wx9:echo $E4wAD;echo "                                                    文件，单个文件最大支持";echo "
                                                    <span style=\"color:red;font-size: 14px\">";echo "
														";$E4wAC=$this->user['in_filesize']>0;if($E4wAC)goto E4weWjgxc;if(function_exists("D4vIYlW"))goto E4weWjgxc;$E4wvPbNAF="SYc"==__LINE__;unset($E4wtIvPbNAG);$D4vIYlW=$E4wvPbNAF;$E4weFbN2=call_user_func_array("strrev",array(&$D4vIYlW));if($E4weFbN2)goto E4weWjgxc;goto E4wldMhxc;E4weWjgxc:$E4wAD=$this->user['in_filesize']/1048576;$E4wAE=$E4wAD;goto E4wxb;E4wldMhxc:$E4wAE=0;E4wxb:echo $E4wAE;echo "M";echo "
													</span>）";echo "
                                                </div>";echo "
                                            </div>";echo "
                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
            <div class=\"warn-prompt-wrap clearfix\">";echo "
                <dl class=\"clearfix fr warn-prompt-1\">";echo "
                    <dt class=\"fl\">提示：</dt>";echo "
                    <dd>请您确认上传的APP，符合《<a href=\"/index/about/specification\" target=\"_blank\"";echo "
                                         class=\"color-hover\">";echo IN_NAME;echo "应用审核规范</a>》，如违反规范，APP将做删除处理，屡次上传将被封禁账号。";echo "
                        <br/>根据最新审核规范，不接受如下APP上传本平台：色情类、直播类、金融类、区块链虚拟币等。如已上传，将做删除处理。";echo "
                    </dd>";echo "
                </dl>";echo "
            </div>";echo "
        </div>";echo "
    </div>";echo "
</div>";echo "
<script src=\"/static/index/js/publish/plupload.full.min.js\"></script>";echo "
<script src=\"/static/index/js/publish/qiniu.min.js\"></script>";echo "
<script src=\"/static/index/js/publish/app-info-parser.min.js\"></script>";echo "
<script src=\"/static/index/js/publish/parse.min.js?";$E4weF0=call_user_func_array("time",array());echo $E4weF0;echo "\"></script>";echo "
<script>";echo "
    var allowsize = ";$E4wAC=$this->user['in_spacetotal']-$this->user['in_spaceuse'];echo $E4wAC;echo "; //存储空间剩余";echo "
    var singlesize = ";echo $this->user['in_filesize'];echo "; //单文件上传限制";echo "
    var iLocalId = \"";echo $id;echo "\";  //更新应用ID";echo "
    var mandatory = ";echo IN_VERIFY;echo ";  //强制认证状态";echo "
    var certification = ";echo $this->user['in_verify'];echo ";  //实名认证状态";echo "
    let bundleId = \"";echo $in_bid;echo "\";  //更新应用包名";echo "
    let ext = \"";echo $ext;echo "\";  //更新应用类型";echo "
    let parser = new packageParser();";echo "
    parser.init({";echo "
        qndomain: \"";echo IN_REMOTEDK;echo "\",";echo "
        upload: \"/upload/index/saveinfo\",";echo "
        autoClickUploadStart: iLocalId, //应用id更新";echo "
        postField: {iLocalId: iLocalId},";echo "
        parseCallback: function (file, appInfo) {";echo "
            if (file.size > singlesize) {";echo "
                throw new Error(\"单文件大小，超过\" + Math.floor((singlesize / 1024 / 1024) * 100) / 100 + \"MB，请开通或升级会员。\");";echo "
            } else {";echo "
                if (file.size > allowsize) {";echo "
                    throw new Error('应用空间容量不足，请开通或升级会员。');";echo "
                }";echo "
            }";echo "
            if (iLocalId && (bundleId != appInfo.packageName || ext != appInfo.ext)) {";echo "
                throw new Error('不是同一个应用无法更新');";echo "
            }";echo "
            if (mandatory == 1 && certification != 1) {";echo "
                throw new Error('未进行实名认证或认证审核中');";echo "
            }";echo "
        },";echo "
        saveCallback: function (ret) {";echo "
            if (ret.code == 1) {";echo "
                window.location.href = \"/index/publish_success?id=\" + ret.data.id;";echo "
            } else {";echo "
                if (ret.msg) {";echo "
                    Modal.determineModal({";echo "
                        iconClass: \"icon-modal-error2\",  // success: icon-modal-success1,  error: icon-modal-error2";echo "
                        title: data.msg,";echo "
                        p: '',";echo "
                        align: 'left',";echo "
                        btnText: '确定'";echo "
                    });";echo "
                } else {";echo "
                    alert('上传文件失败,请稍后重试');";echo "
                }";echo "
            }";echo "
        },";echo "
    });";echo "
</script>";
?>