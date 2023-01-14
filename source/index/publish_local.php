<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$E4weFbN3=call_user_func_array("strnatcmp",array(11,11));if($E4weFbN3)goto E4weWjgx2;$E4wAC=!defined('IN_ROOT');if($E4wAC)goto E4weWjgx2;$E4wzAvPbN1=array();$E4weFbN2=call_user_func_array("array_key_exists",array(11,&$E4wzAvPbN1));if($E4weFbN2)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:goto D4vMIer2EB;$E4wMAD=$R4vP4 . DS;unset($E4wtIMAE);$R4vP5=$E4wMAD;$E4wzAM4=array();unset($E4wtIMAF);$R4vA5=$E4wzAM4;unset($E4wtIMAG);$R4vA5[]=$request;unset($E4wtIMAH);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D4vMIer2EB:goto D4vMIer2ED;$E4wzAM6=array();unset($E4wtIMAI);$R4vA1=$E4wzAM6;unset($E4wtIMAJ);$E4wtIMAJ=&$dispatch;$R4vA1[]=&$E4wtIMAJ;$E4wzAM7=array();unset($E4wtIMAK);$R4vA2=$E4wzAM7;unset($E4wtIMAL);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D4vMIer2ED:exit('Access denied');goto E4wx1;E4wldMhx2:E4wx1:echo "<link rel=\"stylesheet\" href=\"/static/index/css/fineuploader.css\"/>";echo "
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
                                            <upload-card>";echo "
                                                <div class=\"col-md-12\" id=\"upbtn\">";echo "
                                                    <input type=\"file\" id=\"upload_app\" onchange=\"upload_app()\"";echo "
                                                           style=\"display:none\">";echo "
                                                    <div class=\"qq-upload-button-selector\" style=\"width: auto;\"";echo "
                                                         onclick=\"\$('#upload_app').click()\">";echo "
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
                                                        <div id=\"_drop1\">点击按钮选择应用的安装包，或拖拽文件到此区域</div>";echo "
                                                        <div id=\"_drop2\">";echo "
                                                            支持";$E4wAC=$this->action=='super';if($E4wAC)goto E4weWjgx4;$E4weFbN1=call_user_func_array("chr",array(11));$E4wbNAE=$E4weFbN1=="B";if($E4wbNAE)goto E4weWjgx4;$E4wbNAF=__LINE__<-11;if($E4wbNAF)goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:$E4wAD='{ipa}';goto E4wx3;E4wldMhx4:$E4wAD='{ipa,apk,mobileconfig}';E4wx3:echo $E4wAD;echo "                                                            文件，单个文件最大支持";echo "
                                                            <span style=\"color:red;font-size: 14px\">";echo "
														";$E4wAC=$this->user['in_filesize']>0;$E4wvPbNAF=11+1;$E4wvPbNAG=$E4wvPbNAF+11;$E4wzAvPbN2=array();$E4weFbN3=call_user_func_array("in_array",array(&$E4wvPbNAG,&$E4wzAvPbN2));if($E4weFbN3)goto E4weWjgx6;unset($E4wtIbNAH);$D4vIYlW=false;if($D4vIYlW)goto E4weWjgx6;if($E4wAC)goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:$E4wAD=$this->user['in_filesize']/1048576;$E4wAE=$E4wAD;goto E4wx5;E4wldMhx6:$E4wAE=0;E4wx5:echo $E4wAE;echo "M";echo "
													</span></div>";echo "
                                                    </div>";echo "
                                                </div>";echo "
                                            </upload-card>";echo "
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
<script src=\"";echo IN_PATH;echo "static/index/js/publish/app-info-parser.min.js\"></script>";echo "
<script src=\"";echo IN_PATH;echo "static/index/js/publish/uploadify.js\"></script>";echo "
<script src=\"";echo IN_PATH;echo "static/index/js/publish/profile.js\"></script>";echo "
<script>";echo "
    var in_path = '";echo IN_PATH;echo "';";echo "
    var in_time = '";$E4wAC=$this->userid . '-';$E4weF1=call_user_func_array("time",array());$E4wAD=$E4wAC . $E4weF1;echo $E4wAD;echo "';";echo "
    var in_upw = '";echo $this->user['in_userpassword'];echo "';";echo "
    var in_uid = ";echo $this->userid;echo ";";echo "
    var in_id = '";echo $id;echo "';";echo "
    var in_size = ";$E4weFvP0=call_user_func_array("ini_get",array('upload_max_filesize'));$E4weF1=call_user_func_array("intval",array(&$E4weFvP0));echo $E4weF1;echo ";";echo "
";echo "
    var allowsize = ";$E4wAC=$this->user['in_spacetotal']-$this->user['in_spaceuse'];echo $E4wAC;echo "; //存储空间剩余";echo "
    var singlesize = ";echo $this->user['in_filesize'];echo "; //单文件上传限制";echo "
    var iLocalId = \"";echo $id;echo "\";  //更新应用ID";echo "
    var mandatory = ";echo IN_VERIFY;echo ";  //强制认证状态";echo "
    var certification = ";echo $this->user['in_verify'];echo ";  //实名认证状态";echo "
    let bundleId = \"";echo $in_bid;echo "\";  //更新应用包名";echo "
    let ext = \"";echo $ext;echo "\";  //更新应用类型";echo "
</script>";
?>