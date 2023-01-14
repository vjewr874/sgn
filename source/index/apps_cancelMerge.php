<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class apps_cancelMerge extends BaseUser{function index(){unset($E4wtIAC);$id=bees_decrypt(SafeRequest("id","get"));unset($E4wtIAC);$row=db('appid')->where('in_uid',$this->userid)->where('in_id',$id)->find();$E4wAE=(bool)$row;if(is_object(null))goto E4weWjgx2;$�˱�ޗ�="base64_decode";$E4weFbN2=$�˱�ޗ�("TNDyLmtH");$E4wbNAG=$E4weFbN2=="LeHHEhKb";if($E4wbNAG)goto E4weWjgx2;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:unset($E4wtIAH);$����ڊ�="dirname";$E4weFvP0=$����ڊ�(__FILE__);$E4wvPAC=$E4weFvP0 . '/../pack/error/404.php';$E4wvPAD=include_once $E4wvPAC;$E4wAE=(bool)exit($E4wvPAD);goto E4wx1;E4wldMhx2:E4wx1:unset($E4wtIAC);$result=db('appid')->where('in_uid',$this->userid)->where('in_form','<>',$row['in_form'])->where('in_id',$row['in_kid'])->find();echo "        <div class=\"col-md-5 text-center\">";echo "
            <div class=\"funny-boxes-img\">";echo "
                <a href=\"";echo getlink($row['in_id']);echo "\" target=\"_blank\">";echo "
                    <img src=\"";echo geticon($row['in_icon']);echo "\"";echo "
                         onerror=\"javascript:this.src='";echo IN_PATH;echo "static/index/image/";echo $row['in_form'];echo ".png'\"";echo "
                         class=\"appicon\" style=\"margin-top:0px;margin-bottom:14px;\">";echo "
                </a>";echo "
                <p class=\"text-center app-name\">";echo "
                    <a href=\"";echo getlink($row['in_id']);echo "\" target=\"_blank\">";echo $row['in_name'];echo "</a>";echo "
                </p>";echo "
                <p class=\"text-center app-name\">";echo "
                    <span class=\"ios\">";echo $row['in_form'];echo "</span>";echo "
                </p>";echo "
            </div>";echo "
        </div>";echo "
        <div class=\"col-md-2 text-center\">";echo "
            <span aria-hidden=\"true\" class=\"icon-link\" style=\"line-height:118px;font-size:30px;\"></span>";echo "
        </div>";echo "
        <div class=\"col-md-5 text-center\">";echo "
            <div class=\"funny-boxes-img\">";echo "
                <a href=\"";echo getlink($result['in_id']);echo "\" target=\"_blank\">";echo "
                    <img src=\"";echo geticon($result['in_icon']);echo "\"";echo "
                         onerror=\"javascript:this.src='";echo IN_PATH;echo "static/index/image/";echo $result['in_form'];echo ".png'\"";echo "
                         class=\"appicon\" style=\"margin-top:0px;margin-bottom:14px;\">";echo "
                </a>";echo "
                <p class=\"text-center app-name\">";echo "
                    <a href=\"";echo getlink($result['in_id']);echo "\"";echo "
                       target=\"_blank\">";echo $result['in_name'];echo "</a>";echo "
                </p>";echo "
                <p class=\"text-center app-name\">";echo "
                    <span class=\"ios\">";echo $result['in_form'];echo "</span>";echo "
                </p>";echo "
            </div>";echo "
        </div>";echo "
        <div class=\"row\" style=\"padding:20px 50px 50px 50px;\">";echo "
            <div class=\"col-md-10 col-md-offset-1\">";echo "
                <p>温馨提示：</p>";echo "
                <p>合并后的两个应用，进入任一个应用的单页，扫描二维码，会根据你的手机系统自动帮你下载相应的版本。</p>";echo "
            </div>";echo "
        </div>";echo "
        ";}}
?>