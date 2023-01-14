<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\aliyunoss;class signature{function index(){$�������="date";$O5heFvPvP1=$�������('Y-m-d',strtotime('+1 day'));$O5hvPvPAW=$O5heFvPvP1 . "T12:00:00.000Z";$O5hzAvPvPvP2=array();$O5hzAvPvPvP2[]="content-length-range";$O5hzAvPvPvP2[]=0;$O5hzAvPvPvP2[]=1048576000;$O5hzAvPvP3=array();$O5hzAvPvP3[]=$O5hzAvPvPvP2;$O5hzAvP4=array();$O5hzAvP4["expiration"]=$O5hvPvPAW;$O5hzAvP4["conditions"]=$O5hzAvPvP3;unset($O5htIAX);$str=json_encode($O5hzAvP4);$�ǧ�ș�="base64_encode";$O5heF0=$�ǧ�ș�($str);unset($O5htIAW);$str=$O5heF0;unset($O5htIAW);$data['AccessKeyId']=IN_ALIYUNOSS_AKI;if(is_ssl())goto O5heWjgx2;$O5hbNB1=str_repeat("vJCxXLOV",1)==1;if($O5hbNB1)goto O5heWjgx2;$O5hbNB2=2-2;if($O5hbNB2)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:$O5hAW='https://';goto O5hx1;O5hldMhx2:$O5hAW='http://';O5hx1:$O5hAX=$O5hAW . IN_ALIYUNOSS_BK;$O5hAY=$O5hAX . '.';$O5hAZ=$O5hAY . IN_ALIYUNOSS_EP;unset($O5htIB0);$data['domain']=$O5hAZ;unset($O5htIAW);$data['policy']=$str;$��ޔ���="base64_encode";$O5heF1=$��ޔ���(hash_hmac("sha1",$str,IN_ALIYUNOSS_AKS,true));unset($O5htIAW);$data['signature']=$O5heF1;reJSON($data);}}
?>