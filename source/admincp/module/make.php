<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\admin;class make extends Base{public function initialize(){parent::initialize();$O5hhC0=call_user_func_array(array($this,"Administrator"),array(3));}function index(){unset($O5htIAW);$tid=intval(SafeRequest("tid","get"));unset($O5htIAW);$num=intval(SafeRequest("num","get"));echo '<textarea rows="6" cols="50" style="width:100%;height:100%">';unset($O5htIAW);$n=0;unset($O5htIAW);$c=NULL;$厙陆蔟�="time";$O5heF0=$厙陆蔟�();unset($O5htIAW);$t=$O5heF0;$O5hAW=$tid>1;$O5hzAvPbN2=array();if(array_key_exists(2,$O5hzAvPbN2))goto O5heWjgx4;$O5hbNB2=2==="";unset($O5htIbNB3);$O5hIobm=$O5hbNB2;if($O5hIobm)goto O5heWjgx4;if($O5hAW)goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hAX=$tid>2;if(is_null(__FILE__))goto O5heWjgx2;if($O5hAX)goto O5heWjgx2;unset($O5htIB4);$轾茨飸�="chr";$O5heFbN0=$轾茨飸�(2);$O5hbNB1=$O5heFbN0=="P";if($O5hbNB1)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:$O5hAY='year-';goto O5hx1;O5hldMhx2:$O5hAY='quarter-';O5hx1:$O5hAZ=$O5hAY;goto O5hx3;O5hldMhx4:$O5hAZ='month-';O5hx3:unset($O5htIB0);$p=$O5hAZ;$i=1;O5hx5:$O5hAW=$num+1;$O5hAX=$i<$O5hAW;if($O5hAX)goto O5heWjgx9;$O5hbNAW=gettype(E_PARSE)=="EHMSO";if($O5hbNAW)goto O5heWjgx9;$O5hbNAX="__file__"==5;if($O5hbNAX)goto O5heWjgx9;goto O5hldMhx9;O5heWjgx9:goto O5hMnNh475;foreach($files as $file){$凃嚯壪�="strpos";$O5heFM1=$凃嚯壪�($file,CONF_EXT);if($O5heFM1)goto O5heWjgxb;goto O5hldMhxb;O5heWjgxb:$O5hMAY=$dir . DS;$O5hMAZ=$O5hMAY . $file;unset($O5htIMB0);$filename=$O5hMAZ;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto O5hxa;O5hldMhxb:O5hxa:}O5hMnNh475:$O5hAW=$n+1;unset($O5htIAX);$n=$O5hAW;$O5hnWAW=$n;$O5hvPAW=$_SERVER['HTTP_HOST'] . '_';$O5hvPAX=$O5hvPAW . $n;$O5hvPAY=$O5hvPAX . '_';$O5hvPAZ=$O5hvPAY . $t;unset($O5htIAW);$婐匝躜�="md5";$O5heF0=$婐匝躜�($O5hvPAZ);$O5hB0=$p . $O5heF0;unset($O5htIB1);unset($O5htIAW);$code=$O5hB0;$O5hzAvP0=array();$O5hzAvP0['in_tid']=$tid;$O5hzAvP0['in_code']=$code;$O5hzAvP0['in_state']=0;$O5hzAvP0['in_time']=$t;db('key')->insert($O5hzAvP0);$O5hAW=$code . "
";$O5hAW=$c . $O5hAW;unset($O5htIAX);$c=$O5hAW;$O5hnWAX=$c;O5hx6:$O5hoB1=$i;$O5hoB2=$i+1;$i=$O5hoB2;goto O5hx5;goto O5hx8;O5hldMhx9:O5hx8:O5hx7:$挣гポ�="trim";$O5heF0=$挣гポ�($c);echo $O5heF0;echo '</textarea>';}}
?>