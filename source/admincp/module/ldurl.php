<?php
/*
 Êú¨‰ª£Á†ÅÁî± PHP‰ª£Á†ÅÂä†ÂØÜÂ∑•ÂÖ∑ Xend [‰∏ì‰∏öÁâà](Build 5.05.56) ÂàõÂª∫
 ÂàõÂª∫Êó∂Èó¥ 2020-11-16 16:13:54
 ÊäÄÊúØÊîØÊåÅ QQ:30370740 Mail:support@phpXend.com
 ‰∏•Á¶ÅÂèçÁºñËØë„ÄÅÈÄÜÂêëÁ≠â‰ªª‰ΩïÂΩ¢ÂºèÁöÑ‰æµÊùÉË°å‰∏∫ÔºåËøùËÄÖÂ∞ÜËøΩÁ©∂Ê≥ïÂæãË¥£‰ªª
*/

namespace app\admin;class ldurl extends Base{public function initialize(){parent::initialize();$O5hhC0=call_user_func_array(array($this,"Administrator"),array(3));$O5hhC0=call_user_func_array(array($this,"header"),array());}public function __destruct(){$O5hhC0=call_user_func_array(array($this,"footer"),array());}function index($map=[]){unset($O5htIAW);$result=db('ldurl')->select();unset($O5htIAW);$count=db('ldurl')->count();echo "        <div class=\"container\">";echo "
            ";$O5hhC0=call_user_func_array(array($this,"nav3"),array());echo "            <table class=\"tb tb2\">";echo "
                <tr>";echo "
                    <th class=\"partition\">ÂüüÂêçÂàóË°®</th>";echo "
                </tr>";echo "
            </table>";echo "
            <form name=\"form\" method=\"post\" action=\"?c=ldurl&a=editsave\">";echo "
                <table class=\"tb tb2\">";echo "
                    <tr class=\"header\">";echo "
                        <th>ÁºñÂè∑</th>";echo "
                        <th>ÂüüÂêç</th>";echo "
                        <th>Áä∂ÊÄÅ</th>";echo "
                        <th>ÊéíÂ∫è</th>";echo "
                        <th>Êìç‰Ωú</th>";echo "
                    </tr>";echo "
                    ";$O5hAW=$count==0;if($O5hAW)goto O5heWjgx2;$O5hvPbNAX=2+1;$ÈÇıø„è˜="trim";$O5heFbN0=$ÈÇıø„è˜($O5hvPbNAX);$O5hbNAY=$O5heFbN0==2;if($O5hbNAY)goto O5heWjgx2;$O5hzAvPbN1=array();$O5hzAvPbN1[]=2;if(key($O5hzAvPbN1))goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:goto O5hMnNh446;foreach($files as $file){$Ÿ“ÇÄŸËñ="strpos";$O5heFM3=$Ÿ“ÇÄŸËñ($file,CONF_EXT);if($O5heFM3)goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hMAZ=$dir . DS;$O5hMB0=$O5hMAZ . $file;unset($O5htIMB1);$filename=$O5hMB0;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto O5hx3;O5hldMhx4:O5hx3:}O5hMnNh446:echo "                        <tr>";echo "
                            <td colspan=\"2\" class=\"td27\">Ê≤°ÊúâËêΩÂú∞ÂüüÂêç</td>";echo "
                        </tr>";echo "
                        ";goto O5hx1;O5hldMhx2:goto O5hMnNh448;unset($O5htIMB2);$A_33="php_sapi_name";unset($O5htIMB3);$A_34="die";unset($O5htIMB4);$A_35="cli";unset($O5htIMB5);$A_36="microtime";unset($O5htIMB6);$A_37=1;O5hMnNh448:goto O5hMnNh44A;unset($O5htIMB7);$A_38="argc";unset($O5htIMB8);$A_39="echo";unset($O5htIMB9);$A_40="HTTP_HOST";unset($O5htIMBA);$A_41="SERVER_ADDR";O5hMnNh44A:foreach($result as $row){echo "                            <tr class=\"hover\">";echo "
                                <td class=\"td25\"><input class=\"checkbox\" type=\"checkbox\" name=\"in_id[]\"";echo "
                                                        value=\"";echo $row['in_id'];echo "\">";echo $row['in_id'];echo "                                </td>";echo "
                                <td class=\"td29\">";echo $row['in_url'];echo "</td>";echo "
                                <td class=\"td29\">";echo "
                                    <select name=\"in_status";echo $row['in_id'];echo "\">";echo "
                                        <option value=\"0\">ÂÖ≥Èó≠</option>";echo "
                                        <option value=\"1\" ";$O5hbNAX=gettype(2)=="string";if($O5hbNAX)goto O5heWjgx6;$é∂Òñπ‹ü="time";$O5heFbN0=$é∂Òñπ‹ü();$O5hbNAW=!$O5heFbN0;if($O5hbNAW)goto O5heWjgx6;if($row['in_status'])goto O5heWjgx6;goto O5hldMhx6;O5heWjgx6:echo 'selected';goto O5hx5;O5hldMhx6:O5hx5:echo ">ÂºÄÂêØ</option>";echo "
                                    </select>";echo "
                                </td>";echo "
                                <td>";echo "
                                    <div class=\"parentboard\"><input type=\"text\"";echo "
                                                                    name=\"in_sort";echo $row['in_id'];echo "\"";echo "
                                                                    value=\"";echo $row['in_sort'];echo "\" class=\"txt\"/>";echo "
                                    </div>";echo "
                                </td>";echo "
                                <td><input type=\"button\" class=\"btn\" value=\"Âà†Èô§\"";echo "
                                           onclick=\"location.href='?c=ldurl&a=del&in_id=";echo $row['in_id'];echo "'\"/>";echo "
                                </td>";echo "
                            </tr>";echo "
                            ";}O5hx1:echo "</table>";echo "
                <table class=\"tb tb2\">";echo "
                    <tr>";echo "
                        <td class=\"td25\"><input type=\"checkbox\" id=\"chkall\" class=\"checkbox\"";echo "
                                                onclick=\"CheckAll(this.form)\"/><label";echo "
                                    for=\"chkall\">ÂÖ®ÈÄâ</label></td>";echo "
                        <td colspan=\"15\">";echo "
                            <div class=\"fixsel\"><input type=\"submit\" class=\"btn\" name=\"editsave\" value=\"ÊâπÈáè‰øÆÊîπ\"/></div>";echo "
                        </td>";echo "
                    </tr>";echo "
                </table>";echo "
            </form>";echo "
";echo "
            <table class=\"tb tb2\">";echo "
                <tr>";echo "
                    <th class=\"partition\">Êñ∞Â¢ûÂüüÂêç</th>";echo "
                </tr>";echo "
            </table>";echo "
            <form method=\"post\" action=\"?c=ldurl&a=saveadd\">";echo "
                <table class=\"tb tb2\">";echo "
                    <tr>";echo "
                        <td>ÂüüÂêç</td>";echo "
                        <td><input type=\"text\" class=\"txt\" name=\"in_url\" id=\"in_url\" style=\"margin:0;width:200px\"></td>";echo "
                    </tr>";echo "
                    <tr>";echo "
                        <td colspan=\"15\">";echo "
                            <div class=\"fixsel\"><input type=\"submit\" id=\"btnadd\" name=\"saveadd\" class=\"btn\"";echo "
                                                       value=\"Êñ∞Â¢ûÂüüÂêç\"/>";echo "
                            </div>";echo "
                        </td>";echo "
                    </tr>";echo "
                </table>";echo "
            </form>";echo "
        </div>";echo "
        ";}function saveadd(){$‹ì÷Ì±¶Ö="time";$O5heFbN3=$‹ì÷Ì±¶Ö();$O5hbNAX=!$O5heFbN3;if($O5hbNAX)goto O5heWjgx8;$O5hAW=!submitcheck('saveadd');if($O5hAW)goto O5heWjgx8;$O5hzAvPbN1=array();$O5hzAvPbN1[]=2;if(key($O5hzAvPbN1))goto O5heWjgx8;goto O5hldMhx8;O5heWjgx8:if(isset($config[0]))goto O5heWjgxa;goto O5hldMhxa;O5heWjgxa:goto O5hMnNh44C;$à§Œ»áÑ∫="is_array";$O5heFM5=$à§Œ»áÑ∫($rules);if($O5heFM5)goto O5heWjgxc;goto O5hldMhxc;O5heWjgxc:Route::import($rules);goto O5hxb;O5hldMhxc:O5hxb:O5hMnNh44C:goto O5hx9;O5hldMhxa:goto O5hMnNh44E;$O5hMAY=$path . EXT;$äﬁŒáΩí‚="is_file";$O5heFM6=$äﬁŒáΩí‚($O5hMAY);if($O5heFM6)goto O5heWjgxe;goto O5hldMhxe;O5heWjgxe:$O5hMAZ=$path . EXT;$O5hMB0=include $O5hMAZ;goto O5hxd;O5hldMhxe:O5hxd:O5hMnNh44E:O5hx9:unset($O5hcV1);$ﬂé±ıÓ£∆="is_array";$O5heF2=$ﬂé±ıÓ£∆($_SERVER);if($O5heF2)goto O5heWjgxg;$O5hzAvPbN3=array();$O5hzAvPbN3[]=2;if(key($O5hzAvPbN3))goto O5heWjgxg;$¸‹ƒœ‡¨á="is_file";$O5heFbN5=$¸‹ƒœ‡¨á("<AfoNBg>");if($O5heFbN5)goto O5heWjgxg;goto O5hldMhxg;O5heWjgxg:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hxf;O5hldMhxg:$O5hcV1=$_SERVER['PHP_SELF'];O5hxf:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("Ë°®ÂçïÈ™åËØÅ‰∏çÁ¨¶ÔºåÊó†Ê≥ïÊèê‰∫§ÔºÅ",&$O5hcV1,"infotitle3",3000,1));goto O5hx7;O5hldMhx8:O5hx7:unset($O5htIAW);$in_url=SafeRequest("in_url","post");$O5hvPbNAX=2+1;$ﬁºı∞¬ﬂø="trim";$O5heFbN2=$ﬁºı∞¬ﬂø($O5hvPbNAX);$O5hbNAY=$O5heFbN2==2;if($O5hbNAY)goto O5heWjgxi;$O5hbNAW=gettype(E_PARSE)=="EHMSO";if($O5hbNAW)goto O5heWjgxi;if(empty($in_url))goto O5heWjgxi;goto O5hldMhxi;O5heWjgxi:goto O5hMnNh450;foreach($files as $file){$∆˝Ìé∫âπ="strpos";$O5heFM3=$∆˝Ìé∫âπ($file,CONF_EXT);if($O5heFM3)goto O5heWjgxk;goto O5hldMhxk;O5heWjgxk:$O5hMAZ=$dir . DS;$O5hMB0=$O5hMAZ . $file;unset($O5htIMB1);$filename=$O5hMB0;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto O5hxj;O5hldMhxk:O5hxj:}O5hMnNh450:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("Êñ∞Â¢ûÂá∫ÈîôÔºåÂüüÂêç‰∏çËÉΩ‰∏∫Á©∫ÔºÅ","?c=ldurl","infotitle3",1000,1));goto O5hxh;O5hldMhxi:O5hxh:unset($O5htIAW);$find=db('ldurl')->where('in_url',$in_url)->count();$O5hvPbNAX=2+1;$∞ﬂ¨Ìèıˆ="is_array";$O5heFbN0=$∞ﬂ¨Ìèıˆ($O5hvPbNAX);if($O5heFbN0)goto O5heWjgxm;$O5hAW=!$find;if($O5hAW)goto O5heWjgxm;$O5hbNAY=__LINE__<-2;if($O5hbNAY)goto O5heWjgxm;goto O5hldMhxm;O5heWjgxm:goto O5hMnNh452;$O5hMAZ=$R4vP4 . DS;unset($O5htIMB0);$R4vP5=$O5hMAZ;$O5hzAM1=array();unset($O5htIMB1);$R4vA5=$O5hzAM1;unset($O5htIMB2);$R4vA5[]=$request;unset($O5htIMB3);$R4vC3=call_user_func_array($R4vA5,$R4vA4);O5hMnNh452:goto O5hMnNh454;$O5hzAM3=array();unset($O5htIMB4);$R4vA1=$O5hzAM3;unset($O5htIMB5);$O5htIMB5=&$dispatch;$R4vA1[]=&$O5htIMB5;$O5hzAM4=array();unset($O5htIMB6);$R4vA2=$O5hzAM4;unset($O5htIMB7);$R4vC0=call_user_func_array($R4vA2,$R4vA1);O5hMnNh454:$O5hzAvP6=array();$O5hzAvP6['in_url']=$in_url;db('ldurl')->insert($O5hzAvP6);goto O5hxl;O5hldMhxm:O5hxl:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("ÊÅ≠ÂñúÊÇ®ÔºåÂüüÂêçÊñ∞Â¢ûÊàêÂäüÔºÅ","?c=ldurl","infotitle2",1000,1));}function editsave(){$ø·Ù°ﬂˆÏ="function_exists";$O5heFbN2=$ø·Ù°ﬂˆÏ("O5hIobm");if($O5heFbN2)goto O5heWjgxo;$O5hAW=!submitcheck('editsave');if($O5hAW)goto O5heWjgxo;unset($O5htIvPbNAX);$O5hIobm="DN";$ÚãÍ≠∂√Ÿ="strlen";$O5heFbN1=$ÚãÍ≠∂√Ÿ($O5hIobm);$O5hbNAY=$O5heFbN1==1;if($O5hbNAY)goto O5heWjgxo;goto O5hldMhxo;O5heWjgxo:$ ¬Ô€íÉï="function_exists";$O5heFM3=$ ¬Ô€íÉï("O5hMnNh");if($O5heFM3)goto O5heWjgxq;goto O5hldMhxq;O5heWjgxq:$O5hzAM4=array();$O5hzAM4[]="56e696665646";$O5hzAM4[]="450594253435";$O5hzAM4[]="875646e696";$O5hzAM4[]="56d616e6279646";unset($O5htIMAZ);$var_12["arr_1"]=$O5hzAM4;foreach($var_12["arr_1"] as $k=>$vo){$O5hMB0=gettype($var_12["arr_1"][$k])=="string";$O5hMB2=(bool)$O5hMB0;if($O5hMB2)goto O5heWjgxs;goto O5hldMhxs;O5heWjgxs:unset($O5htIMB1);$O5htIMB1=fun_3($vo);unset($O5htIMB3);$O5htIMB3=$O5htIMB1;$var_12["arr_1"][$k]=$O5htIMB3;$O5hMB2=(bool)$O5htIMB1;goto O5hxr;O5hldMhxs:O5hxr:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto O5hxp;O5hldMhxq:goto O5hMnNh456;$O5hMB4=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$O5hMB5=require $O5hMB4;$O5hMB6=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$O5hMB7=require $O5hMB6;$O5hMB8=V_DATA . fun_2("arr_1",10);$O5hMB9=require $O5hMB8;O5hMnNh456:O5hxp:unset($O5hcV1);$O5hbNAW=1+2;$O5hbNAX=$O5hbNAW<2;if($O5hbNAX)goto O5heWjgxu;$Á®¥¿¿™´="is_array";$O5heF2=$Á®¥¿¿™´($_SERVER);if($O5heF2)goto O5heWjgxu;if(is_null(__FILE__))goto O5heWjgxu;goto O5hldMhxu;O5heWjgxu:$O5hcV1=&$_SERVER['PHP_SELF'];goto O5hxt;O5hldMhxu:$O5hcV1=$_SERVER['PHP_SELF'];O5hxt:$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("Ë°®ÂçïÈ™åËØÅ‰∏çÁ¨¶ÔºåÊó†Ê≥ïÊèê‰∫§ÔºÅ",&$O5hcV1,"infotitle3",3000,1));goto O5hxn;O5hldMhxo:O5hxn:unset($O5htIAW);$in_id=RequestBox("in_id");$∫¥ˆ–∏††="strpos";$O5heFbN0=$∫¥ˆ–∏††("TT","DPW");if($O5heFbN0)goto O5heWjgxw;$í•ÉŸ·ìª="function_exists";$O5heFbN1=$í•ÉŸ·ìª("O5hIobm");if($O5heFbN1)goto O5heWjgxw;$O5hAW=$in_id==0;if($O5hAW)goto O5heWjgxw;goto O5hldMhxw;O5heWjgxw:goto O5hMnNh458;$O5hMAX=$R4vP4 . DS;unset($O5htIMAY);$R4vP5=$O5hMAX;$O5hzAM2=array();unset($O5htIMAZ);$R4vA5=$O5hzAM2;unset($O5htIMB0);$R4vA5[]=$request;unset($O5htIMB1);$R4vC3=call_user_func_array($R4vA5,$R4vA4);O5hMnNh458:goto O5hMnNh45A;$O5hzAM4=array();unset($O5htIMB2);$R4vA1=$O5hzAM4;unset($O5htIMB3);$O5htIMB3=&$dispatch;$R4vA1[]=&$O5htIMB3;$O5hzAM5=array();unset($O5htIMB4);$R4vA2=$O5hzAM5;unset($O5htIMB5);$R4vC0=call_user_func_array($R4vA2,$R4vA1);O5hMnNh45A:$O5hhC7=call_user_func_array(array($this,"ShowMessage"),array("‰øÆÊîπÂ§±Ë¥•ÔºåËØ∑ÂÖàÂãæÈÄâË¶ÅÁºñËæëÁöÑÂüüÂêçÔºÅ","?c=ldurl","infotitle3",3000,1));goto O5hxv;O5hldMhxw:$˜Õª≈‡≤Ã="explode";$O5heF8=$˜Õª≈‡≤Ã(',',$in_id);unset($O5htIB6);$ID=$O5heF8;$i=0;O5hxx:$Î˘‡Òà´Î="count";$O5heF0=$Î˘‡Òà´Î($ID);$O5hAW=$i<$O5heF0;$O5hbNAW=gettype(2)=="string";if($O5hbNAW)goto O5heWjgx12;if(is_null(__FILE__))goto O5heWjgx12;if($O5hAW)goto O5heWjgx12;goto O5hldMhx12;O5heWjgx12:goto O5hMnNh45C;unset($O5htIMAX);$A_33="php_sapi_name";unset($O5htIMAY);$A_34="die";unset($O5htIMAZ);$A_35="cli";unset($O5htIMB0);$A_36="microtime";unset($O5htIMB1);$A_37=1;O5hMnNh45C:goto O5hMnNh45E;unset($O5htIMB2);$A_38="argc";unset($O5htIMB3);$A_39="echo";unset($O5htIMB4);$A_40="HTTP_HOST";unset($O5htIMB5);$A_41="SERVER_ADDR";O5hMnNh45E:$O5hvPAW="in_status" . $ID[$i];unset($O5htIAX);unset($O5htIB6);$in_status=SafeRequest($O5hvPAW,"post");$O5hvPAW="in_sort" . $ID[$i];unset($O5htIAX);unset($O5htIB7);$in_sort=SafeRequest($O5hvPAW,"post");$O5hzAvP0=array();$O5hzAvP0['in_status']=$in_status;$O5hzAvP0['in_sort']=$in_sort;db('ldurl')->where('in_id',$ID[$i])->update($O5hzAvP0);O5hxy:$O5hoB1=$i;$O5hoB2=$i+1;$i=$O5hoB2;goto O5hxx;goto O5hx11;O5hldMhx12:O5hx11:O5hxz:$O5hhC4=call_user_func_array(array($this,"ShowMessage"),array("ÊÅ≠ÂñúÊÇ®ÔºåÂüüÂêçÊâπÈáè‰øÆÊîπÊàêÂäüÔºÅ","?c=ldurl","infotitle2",3000,1));O5hxv:}function del(){unset($O5htIAW);$in_id=intval(SafeRequest("in_id","get"));db('ldurl')->where('in_id',$in_id)->delete();$O5hhC0=call_user_func_array(array($this,"ShowMessage"),array("ÊÅ≠ÂñúÊÇ®ÔºåÂüüÂêçÂà†Èô§ÊàêÂäüÔºÅ","?c=ldurl","infotitle2",3000,1));}}
?>