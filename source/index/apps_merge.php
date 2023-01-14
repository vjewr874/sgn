<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class apps_merge extends BaseUser{function index(){unset($E4wtIAC);$id=bees_decrypt(SafeRequest("id","get"));unset($E4wtIAC);$row=db('appid')->where('in_uid',$this->userid)->where('in_id',$id)->find();$E4wAE=(bool)$row;$E4wbNAG=11+1;$E4wbNAH=11>$E4wbNAG;if($E4wbNAH)goto E4weWjgx2;$E4wAF=!$E4wAE;if($E4wAF)goto E4weWjgx2;$����Ξ�="stripos";$E4weFbN2=$����Ξ�("JsPONoMX","11");if($E4weFbN2)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:unset($E4wtIAI);$�������="dirname";$E4weFvP0=$�������(__FILE__);$E4wvPAC=$E4weFvP0 . '/../pack/error/404.php';$E4wvPAD=include_once $E4wvPAC;$E4wAE=(bool)exit($E4wvPAD);goto E4wx1;E4wldMhx2:E4wx1:unset($E4wtIAC);$result=db('appid')->where('in_uid',$this->userid)->where('in_form','<>',$row['in_form'])->where('in_kid',0)->order('in_addtime desc')->select();foreach($result as $key=>$value){echo "            <div class=\"col-lg-3 col-sm-4\">";echo "
                <div class=\"ibox\">";echo "
                    <div class=\"caption\">";echo "
			<span class=\"fa-stack fa-lg\">";echo "
			<i class=\"fa fa-check fa-lg\" style=\"font-size:50px;line-height:100px;\"></i>";echo "
			</span>";echo "
                        <input value=\"";echo bees_encrypt($value['in_id']);echo "\" type=\"hidden\">";echo "
                    </div>";echo "
                    <div class=\"ibox-content\">";echo "
                        <div class=\"text-center\">";echo "
                            <img src=\"";echo geticon($value['in_icon']);echo "\"";echo "
                                 onerror=\"javascript:this.src='";echo IN_PATH;echo "static/index/image/";echo $value['in_form'];echo ".png'\"";echo "
                                 class=\"appicon\" style=\"margin-top:0px;margin-bottom:14px;\">";echo "
                        </div>";echo "
                        <p style=\"word-break:keep-all; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;\"";echo "
                           class=\"text-center\">";echo $value['in_name'];echo "</p>";echo "
                        <p style=\"word-break:keep-all; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;\"";echo "
                           class=\"text-center\">";echo $value['in_bid'];echo "</p>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        ";}}}
?>