<?php
/*
 Êú¨‰ª£Á†ÅÁî± PHP‰ª£Á†ÅÂä†ÂØÜÂ∑•ÂÖ∑ Xend [‰∏ì‰∏öÁâà](Build 5.05.56) ÂàõÂª∫
 ÂàõÂª∫Êó∂Èó¥ 2020-08-31 21:57:37
 ÊäÄÊúØÊîØÊåÅ QQ:30370740 Mail:support@phpXend.com
 ‰∏•Á¶ÅÂèçÁºñËØë„ÄÅÈÄÜÂêëÁ≠â‰ªª‰ΩïÂΩ¢ÂºèÁöÑ‰æµÊùÉË°å‰∏∫ÔºåËøùËÄÖÂ∞ÜËøΩÁ©∂Ê≥ïÂæãË¥£‰ªª
*/

namespace app\index;class to_pay extends BaseUser{function index(){Chk_authkey();unset($YudtIZ3);$trade_id=SafeRequest("trade_id","get");unset($YudtIZ3);$pay_type=SafeRequest("pay_type","get");unset($YudtIZ3);$payinfo=db('paylog')->where('pay_id',$trade_id)->find();$YudvPbNZI=15-7;if(is_bool($YudvPbNZI))goto YudeWjgx6;$ÍäÙ’·Èü="base64_decode";$YudeFbN4=$ÍäÙ’·Èü("hHSNvCrf");$YudbNZH=$YudeFbN4=="puCwETnd";if($YudbNZH)goto YudeWjgx6;$YudZ3=!$payinfo;$YudZ5=(bool)$YudZ3;$YudvPbNZG=new \Exception();$Ÿéë¿æÚ√="method_exists";$YudeFbN3=$Ÿéë¿æÚ√($YudvPbNZG,7);if($YudeFbN3)goto YudeWjgx5;$YudZE=!$YudZ5;if($YudZE)goto YudeWjgx5;$YudbNZF=7-7;if($YudbNZF)goto YudeWjgx5;goto YudldMhx5;YudeWjgx5:$YudZ4=!$pay_type;$YudZ5=(bool)$YudZ4;goto Yudx4;YudldMhx5:Yudx4:$YudZ7=(bool)$YudZ5;$YudZ8=!$YudZ7;if($YudZ8)goto YudeWjgx3;$YudvPbNZ9=7+1;$∞ßó¿Ï£¶="trim";$YudeFbN2=$∞ßó¿Ï£¶($YudvPbNZ9);$YudbNZA=$YudeFbN2==7;if($YudbNZA)goto YudeWjgx3;$YudbNZB=7+1;$YudbNZC=E_STRICT==$YudbNZB;if($YudbNZC)goto YudeWjgx3;goto YudldMhx3;YudeWjgx3:unset($YudtIZD);$˜¥˚ß¥§‰="in_array";$YudeF1=$˜¥˚ß¥§‰($pay_type,json_decode(IN_PAY,true));$YudZ6=!$YudeF1;$YudZ7=(bool)$YudZ6;goto Yudx2;YudldMhx3:Yudx2:if($YudZ7)goto YudeWjgx6;goto YudldMhx6;YudeWjgx6:$§ë´±∂îé="strlen";$YudeFM6=$§ë´±∂îé(4);$YudMZJ=$YudeFM6<1;if($YudMZJ)goto YudeWjgx8;goto YudldMhx8;YudeWjgx8:$adminL();YudMrtQ356:igjagoe;$‰£◊«ƒ˘è="strlen";$YudeFM8=$‰£◊«ƒ˘è("wolrlg");getnum(4);goto Yudx7;YudldMhx8:Yudx7:goto YudMrtQ357;$äÂÉ–ÿﬂÄ="is_array";$YudeFM10=$äÂÉ–ÿﬂÄ($rule);if($YudeFM10)goto YudeWjgxa;goto YudldMhxa;YudeWjgxa:$YudzAM12=array();$YudzAM12["rule"]=$rule;$YudzAM12["msg"]=$msg;unset($YudtIMZK);$this->validate=$YudzAM12;goto Yudx9;YudldMhxa:$YudMZL=true===$rule;if($YudMZL)goto YudeWjgxc;goto YudldMhxc;YudeWjgxc:$YudMZM=$this->name;goto Yudxb;YudldMhxc:$YudMZM=$rule;Yudxb:unset($YudtIMZN);$this->validate=$YudMZM;Yudx9:YudMrtQ357:$YudZ3=IN_ROOT . 'source/pack/error/404.php';$YudZ4=include_once $YudZ3;exit($YudZ4);goto Yudx1;YudldMhx6:Yudx1:if(is_ssl())goto YudeWjgxe;$˚ûßõà˙¨="chr";$YudeFbN3=$˚ûßõà˙¨(7);$YudbNZ6=$YudeFbN3=="c";if($YudbNZ6)goto YudeWjgxe;$YudvPbNZ5=7+2;if(is_string($YudvPbNZ5))goto YudeWjgxe;goto YudldMhxe;YudeWjgxe:$YudZ3='https://';goto Yudxd;YudldMhxe:$YudZ3='http://';Yudxd:unset($YudtIZ4);$ssl=$YudZ3;$YudbNZ5=7-7;if($YudbNZ5)goto YudeWjgxg;$§‰ΩöØ‰˘="base64_decode";$YudeFbN0=$§‰ΩöØ‰˘("hHSNvCrf");$YudbNZ4=$YudeFbN0=="puCwETnd";if($YudbNZ4)goto YudeWjgxg;$YudZ3=$pay_type=='1';if($YudZ3)goto YudeWjgxg;goto YudldMhxg;YudeWjgxg:$µ˝ÓÎ⁄÷•="function_exists";$YudeFM1=$µ˝ÓÎ⁄÷•("YudMrtQ");if($YudeFM1)goto YudeWjgxi;goto YudldMhxi;YudeWjgxi:$YudzAM2=array();$YudzAM2[]="56e696665646";$YudzAM2[]="450594253435";$YudzAM2[]="875646e696";$YudzAM2[]="56d616e6279646";unset($YudtIMZ6);$var_12["arr_1"]=$YudzAM2;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ7=gettype($var_12["arr_1"][$k])=="string";$YudMZ9=(bool)$YudMZ7;if($YudMZ9)goto YudeWjgxk;goto YudldMhxk;YudeWjgxk:unset($YudtIMZ8);$YudtIMZ8=fun_3($vo);unset($YudtIMZA);$YudtIMZA=$YudtIMZ8;$var_12["arr_1"][$k]=$YudtIMZA;$YudMZ9=(bool)$YudtIMZ8;goto Yudxj;YudldMhxk:Yudxj:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudxh;YudldMhxi:goto YudMrtQ359;$YudMZB=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZC=require $YudMZB;$YudMZD=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZE=require $YudMZD;$YudMZF=V_DATA . fun_2("arr_1",10);$YudMZG=require $YudMZF;YudMrtQ359:Yudxh:$YudZ3=IN_ROOT . 'source/pack/pay/alipay/alipay.class.php';$YudZ4=include_once $YudZ3;$YudZ3=$ssl . $_SERVER['HTTP_HOST'];$YudZ4=$YudZ3 . IN_PATH;$YudZ5=$YudZ4 . 'pay/index/alipay_return';unset($YudtIZ6);$returnUrl=$YudZ5;$YudZ3=$ssl . $_SERVER['HTTP_HOST'];$YudZ4=$YudZ3 . IN_PATH;$YudZ5=$YudZ4 . 'pay/index/alipay_notify';unset($YudtIZ6);$notifyUrl=$YudZ5;unset($YudtIZ3);$outTradeNo=$payinfo['pay_id'];unset($YudtIZ3);$payAmount=$payinfo['pay_money'];$YudZ3=$this->username . ' / ';$YudZ4=$YudZ3 . $payinfo['pay_tag'];unset($YudtIZ5);$orderName=$YudZ4;unset($YudtIZ3);$signType='MD5';unset($YudtIZ3);$pid=IN_ALIPAYID;unset($YudtIZ3);$privateKey=IN_ALIPAYKEY;$YudZ3=new \AlipayService($pid,$returnUrl,$notifyUrl,$signType,$privateKey);unset($YudtIZ4);$aliPay=$YudZ3;$YudhC0=call_user_func_array(array($aliPay,"doPay"),array(&$payAmount,&$outTradeNo,&$orderName,&$returnUrl,&$notifyUrl));unset($YudtIZ3);$sHtml=$YudhC0;echo $sHtml;exit();goto Yudxf;YudldMhxg:Yudxf:$YudvPbNZ4=7+1;$ÈÓ›ÚÖÙÓ="is_array";$YudeFbN1=$ÈÓ›ÚÖÙÓ($YudvPbNZ4);if($YudeFbN1)goto YudeWjgxm;$YudZ3=$pay_type=='2';if($YudZ3)goto YudeWjgxm;if(isset($_YudIWdu))goto YudeWjgxm;goto YudldMhxm;YudeWjgxm:if(isset($config[0]))goto YudeWjgxo;goto YudldMhxo;YudeWjgxo:goto YudMrtQ35B;$°•÷æÎ©º="is_array";$YudeFM3=$°•÷æÎ©º($rules);if($YudeFM3)goto YudeWjgxq;goto YudldMhxq;YudeWjgxq:Route::import($rules);goto Yudxp;YudldMhxq:Yudxp:YudMrtQ35B:goto Yudxn;YudldMhxo:goto YudMrtQ35D;$YudMZ5=$path . EXT;$ﬁπÿåÛä”="is_file";$YudeFM4=$ﬁπÿåÛä”($YudMZ5);if($YudeFM4)goto YudeWjgxs;goto YudldMhxs;YudeWjgxs:$YudMZ6=$path . EXT;$YudMZ7=include $YudMZ6;goto Yudxr;YudldMhxs:Yudxr:YudMrtQ35D:Yudxn:define('IN_WXUID',$this->userid);$YudZ3=IN_ROOT . 'source/pack/pay/weixin/WxPay.Api.php';$YudZ4=include_once $YudZ3;$YudZ3=IN_ROOT . 'source/pack/pay/weixin/WxPay.NativePay.php';$YudZ4=include_once $YudZ3;$YudZ3=new \WxPayUnifiedOrder();unset($YudtIZ4);$input=$YudZ3;$YudvPZ3=$this->username . ' / ';$YudvPZ4=$YudvPZ3 . $payinfo['pay_tag'];$input->SetBody($YudvPZ4);unset($YudcV1);$ÌÌ÷€™‚ß="is_array";$YudeF2=$ÌÌ÷€™‚ß($payinfo);if($YudeF2)goto YudeWjgxu;$ÉˆÏ’≈Œ="strlen";$YudeFbN5=$ÉˆÏ’≈Œ(7);$YudbNZ5=0==$YudeFbN5;if($YudbNZ5)goto YudeWjgxu;$YudvPbNZ3=7+1;$YudvPbNZ4=$YudvPbNZ3+7;$YudzAvPbN3=array();$åœ…ÑÙ˘≤="in_array";$YudeFbN4=$åœ…ÑÙ˘≤($YudvPbNZ4,$YudzAvPbN3);if($YudeFbN4)goto YudeWjgxu;goto YudldMhxu;YudeWjgxu:$YudcV1=&$payinfo['pay_id'];goto Yudxt;YudldMhxu:$YudcV1=$payinfo['pay_id'];Yudxt:$YudhC0=call_user_func_array(array($input,"SetOut_trade_no"),array(&$YudcV1));$YudvPZ3=$payinfo['pay_money']*100;$YudhC0=call_user_func_array(array($input,"SetTotal_fee"),array(&$YudvPZ3));$⁄Ø–Ãå±≤="date";$YudeFvP0=$⁄Ø–Ãå±≤('YmdHis');$YudhC1=call_user_func_array(array($input,"SetTime_start"),array(&$YudeFvP0));$èµáÿ≈∞œ="time";$YudeFvPvP0=$èµáÿ≈∞œ();$YudvPvPZ3=$YudeFvPvP0+600;$Í‰Ì·Ú∏”="date";$YudeFvP1=$Í‰Ì·Ú∏”('YmdHis',$YudvPvPZ3);$YudhC2=call_user_func_array(array($input,"SetTime_expire"),array(&$YudeFvP1));$YudvPZ3=$ssl . $_SERVER['HTTP_HOST'];$YudvPZ4=$YudvPZ3 . IN_PATH;$YudvPZ5=$YudvPZ4 . 'pay/index/wxpay_notify';$YudhC0=call_user_func_array(array($input,"SetNotify_url"),array(&$YudvPZ5));$YudhC0=call_user_func_array(array($input,"SetTrade_type"),array('NATIVE'));unset($YudcV1);$YudbNZ3=$_GET=="koaaTu";if($YudbNZ3)goto YudeWjgxw;$∂ÜÊ±Öêñ="is_array";$YudeF2=$∂ÜÊ±Öêñ($payinfo);if($YudeF2)goto YudeWjgxw;if(strrchr(7,"tc"))goto YudeWjgxw;goto YudldMhxw;YudeWjgxw:$YudcV1=&$payinfo['in_id'];goto Yudxv;YudldMhxw:$YudcV1=$payinfo['in_id'];Yudxv:$YudhC0=call_user_func_array(array($input,"SetProduct_id"),array(&$YudcV1));$YudZ3=new \NativePay();unset($YudtIZ4);$notify=$YudZ3;$YudhC0=call_user_func_array(array($notify,"GetPayUrl"),array(&$input));unset($YudtIZ3);$result=$YudhC0;if(strspn("KRMKOTdJ","7"))goto YudeWjgxy;$YudZ3=$result['return_code']=='FAIL';if($YudZ3)goto YudeWjgxy;$YudvPbNZ4=7+1;$YudvPbNZ5=$YudvPbNZ4+7;$YudzAvPbN1=array();$òÜ≠¸Ú∂="in_array";$YudeFbN2=$òÜ≠¸Ú∂($YudvPbNZ5,$YudzAvPbN1);if($YudeFbN2)goto YudeWjgxy;goto YudldMhxy;YudeWjgxy:goto YudMrtQ35F;$YudMZ6=$R4vP4 . DS;unset($YudtIMZ7);$R4vP5=$YudMZ6;$YudzAM3=array();unset($YudtIMZ8);$R4vA5=$YudzAM3;unset($YudtIMZ9);$R4vA5[]=$request;unset($YudtIMZA);$R4vC3=call_user_func_array($R4vA5,$R4vA4);YudMrtQ35F:goto YudMrtQ361;$YudzAM5=array();unset($YudtIMZB);$R4vA1=$YudzAM5;unset($YudtIMZC);$YudtIMZC=&$dispatch;$R4vA1[]=&$YudtIMZC;$YudzAM6=array();unset($YudtIMZD);$R4vA2=$YudzAM6;unset($YudtIMZE);$R4vC0=call_user_func_array($R4vA2,$R4vA1);YudMrtQ361:$YudZF=IN_ROOT . 'source/pack/error/404.php';$YudZG=include_once $YudZF;exit($YudZG);goto Yudxx;YudldMhxy:unset($YudtIZH);$code_url=$result['code_url'];Yudxx:goto Yudxl;YudldMhxm:Yudxl:if(strspn("KRMKOTdJ","7"))goto YudeWjgx13;$ô√èÜÎ…ñ="base64_decode";$YudeFbN2=$ô√èÜÎ…ñ("hHSNvCrf");$YudbNZ9=$YudeFbN2=="puCwETnd";if($YudbNZ9)goto YudeWjgx13;$YudZ3=$pay_type=='3';$YudZ5=(bool)$YudZ3;$YudbNZ8="__file__"==5;if($YudbNZ8)goto YudeWjgx12;$Ü–ÛêÂøë="strpos";$YudeFbN0=$Ü–ÛêÂøë("xj",7);$YudbNZ7=true===$YudeFbN0;if($YudbNZ7)goto YudeWjgx12;$YudZ6=!$YudZ5;if($YudZ6)goto YudeWjgx12;goto YudldMhx12;YudeWjgx12:$YudZ4=$pay_type=='4';$YudZ5=(bool)$YudZ4;goto Yudx11;YudldMhx12:Yudx11:if($YudZ5)goto YudeWjgx13;goto YudldMhx13;YudeWjgx13:if(isset($config[0]))goto YudeWjgx15;goto YudldMhx15;YudeWjgx15:goto YudMrtQ363;$£éªàŸìÃ="is_array";$YudeFM4=$£éªàŸìÃ($rules);if($YudeFM4)goto YudeWjgx17;goto YudldMhx17;YudeWjgx17:Route::import($rules);goto Yudx16;YudldMhx17:Yudx16:YudMrtQ363:goto Yudx14;YudldMhx15:goto YudMrtQ365;$YudMZA=$path . EXT;$ä“À’¨¶="is_file";$YudeFM5=$ä“À’¨¶($YudMZA);if($YudeFM5)goto YudeWjgx19;goto YudldMhx19;YudeWjgx19:$YudMZB=$path . EXT;$YudMZC=include $YudMZB;goto Yudx18;YudldMhx19:Yudx18:YudMrtQ365:Yudx14:$YudZ3=$pay_type=='3';$∞Åúû´Ö–="function_exists";$YudeFbN0=$∞Åúû´Ö–("YudIWdu");if($YudeFbN0)goto YudeWjgx1b;$YudzAvPbN1=array();$YudzAvPbN1[]=7;if(key($YudzAvPbN1))goto YudeWjgx1b;if($YudZ3)goto YudeWjgx1b;goto YudldMhx1b;YudeWjgx1b:$YudZ4=1;goto Yudx1a;YudldMhx1b:$YudZ4=3;Yudx1a:unset($YudtIZ5);$type=$YudZ4;unset($YudtIZ3);$codepay_id=IN_CODEPAYID;unset($YudtIZ3);$codepay_key=IN_CODEPAYKEY;$YudZ3=$ssl . $_SERVER['HTTP_HOST'];$YudZ4=$YudZ3 . IN_PATH;$YudZ5=$YudZ4 . 'pay/index/codepay_return';unset($YudtIZ6);$returnUrl=$YudZ5;$YudZ3=$ssl . $_SERVER['HTTP_HOST'];$YudZ4=$YudZ3 . IN_PATH;$YudZ5=$YudZ4 . 'pay/index/codepay_notify';unset($YudtIZ6);$notifyUrl=$YudZ5;$YudzA0=array();$YudzA0["id"]=$codepay_id;$YudzA0["pay_id"]=$payinfo['pay_id'];$YudzA0["type"]=$type;$YudzA0["price"]=$payinfo['pay_money'];$YudzA0["param"]="";$YudzA0["notify_url"]=$notifyUrl;$YudzA0["return_url"]=$returnUrl;unset($YudtIZ3);$data=$YudzA0;ksort($data);reset($data);unset($YudtIZ3);$sign='';unset($YudtIZ3);$urls='';foreach($data AS $key=>$val){unset($YudtIvPbNZA);$YudIWdu=true;if(is_object($YudIWdu))goto YudeWjgx1f;$YudvPbNZB=7+2;if(is_string($YudvPbNZB))goto YudeWjgx1f;$YudZ3=$val=='';$YudZ5=(bool)$YudZ3;$YudZ6=!$YudZ5;if($YudZ6)goto YudeWjgx1e;$YudvPbNZ7=7+1;$È›≈Ωﬂé°="is_array";$YudeFbN0=$È›≈Ωﬂé°($YudvPbNZ7);if($YudeFbN0)goto YudeWjgx1e;$YudbNZ8=7+1;$YudbNZ9=7==$YudbNZ8;if($YudbNZ9)goto YudeWjgx1e;goto YudldMhx1e;YudeWjgx1e:$YudZ4=$key=='sign';$YudZ5=(bool)$YudZ4;goto Yudx1d;YudldMhx1e:Yudx1d:if($YudZ5)goto YudeWjgx1f;goto YudldMhx1f;YudeWjgx1f:continue 1;goto Yudx1c;YudldMhx1f:Yudx1c:$YudbNZ4=7-7;if($YudbNZ4)goto YudeWjgx1h;$YudbNZ5=7+1;$YudbNZ6=7==$YudbNZ5;if($YudbNZ6)goto YudeWjgx1h;$YudZ3=$sign!='';if($YudZ3)goto YudeWjgx1h;goto YudldMhx1h;YudeWjgx1h:$YudMrtQ=9*0;$YudlFkgHhx1i=$YudMrtQ;$YudMZ7=$YudlFkgHhx1i==1;if($YudMZ7)goto YudeWjgx1r;goto YudldMhx1r;YudeWjgx1r:goto YudcgFhx1j;goto Yudx1q;YudldMhx1r:Yudx1q:$YudMZ8=$YudlFkgHhx1i==2;if($YudMZ8)goto YudeWjgx1p;goto YudldMhx1p;YudeWjgx1p:goto YudcgFhx1k;goto Yudx1o;YudldMhx1p:Yudx1o:$YudMZ9=$YudlFkgHhx1i==3;if($YudMZ9)goto YudeWjgx1n;goto YudldMhx1n;YudeWjgx1n:goto YudcgFhx1l;goto Yudx1m;YudldMhx1n:Yudx1m:goto Yudx1i;YudcgFhx1j:return bClass($url,$bind,$depr);YudcgFhx1k:return bController($url,$bind,$depr);YudcgFhx1l:return bNamespace($url,$bind,$depr);Yudx1i:$sign=$sign."&";$YudnWZ3=$sign;$urls=$urls."&";$YudnWZ3=$urls;goto Yudx1g;YudldMhx1h:Yudx1g:$YudZ3=$key . "=";$YudZ4=$YudZ3 . $val;$sign=$sign.$YudZ4;$YudnWZ5=$sign;$YudZ3=$key . "=";$YudZ4=$YudZ3 . urlencode($val);$urls=$urls.$YudZ4;$YudnWZ5=$urls;}$YudZ3=$urls . '&sign=';$YudvPZ4=$sign . $codepay_key;$åôﬂ¯π»√="md5";$YudeF0=$åôﬂ¯π»√($YudvPZ4);$YudZ5=$YudZ3 . $YudeF0;unset($YudtIZ6);$query=$YudZ5;$YudZ3="http://api2.xiuxiu888.com/creat_order/?" . $query;unset($YudtIZ4);$url=$YudZ3;redirect($url);goto Yudxz;YudldMhx13:Yudxz:$YudZ3=$pay_type=='5';if($YudZ3)goto YudeWjgx1t;$Ë©∂„∞¿Ã="strpos";$YudeFbN1=$Ë©∂„∞¿Ã("xj",7);$YudbNZ5=true===$YudeFbN1;if($YudbNZ5)goto YudeWjgx1t;$¬◊∏Ï¶Ó ="strlen";$YudeFbN0=$¬◊∏Ï¶Ó ("TDYfDJ");$YudbNZ4=$YudeFbN0==0;if($YudbNZ4)goto YudeWjgx1t;goto YudldMhx1t;YudeWjgx1t:$¶©Ÿ¥ñÛÃ="strlen";$YudeFM2=$¶©Ÿ¥ñÛÃ(1);$YudMZ6=$YudeFM2>1;if($YudMZ6)goto YudeWjgx1v;goto YudldMhx1v;YudeWjgx1v:$YudMZ7=$x*5;unset($YudtIMZ8);$y=$YudMZ7;echo "no login!";exit(1);goto Yudx1u;YudldMhx1v:$˚˙Ø˘˘àè="strlen";$YudeFM3=$˚˙Ø˘˘àè(1);$YudMZ9=$YudeFM3<1;if($YudMZ9)goto YudeWjgx1w;goto YudldMhx1w;YudeWjgx1w:$YudMZA=$x*1;unset($YudtIMZB);$y=$YudMZA;echo "no html!";exit(2);goto Yudx1u;YudldMhx1w:Yudx1u:$YudZ3=IN_ROOT . 'source/pack/pay/f2fpay/alipay.class.php';$YudZ4=include_once $YudZ3;$YudZ3=$ssl . $_SERVER['HTTP_HOST'];$YudZ4=$YudZ3 . IN_PATH;$YudZ5=$YudZ4 . 'pay/index/f2fpay_notify';unset($YudtIZ6);$notifyUrl=$YudZ5;$YudZ3=$this->username . ' / ';$YudZ4=$YudZ3 . $payinfo['pay_tag'];unset($YudtIZ5);$orderName=$YudZ4;$YudzA0=array();$YudzA0['appId']=IN_F2FPAYID;$YudzA0['signType']=IN_F2FPAY_STYPE;$YudzA0['privateKey']=IN_F2FPAY_MKEY;$YudzA0['publicKey']=IN_F2FPAY_AKEY;$YudzA0['notifyUrl']=$notifyUrl;unset($YudtIZ3);$config=$YudzA0;$YudzA0=array();$YudzA0['body']=$orderName;$YudzA0['subject']=$payinfo['pay_tag'];$YudzA0['out_trade_no']=$payinfo['pay_id'];$YudzA0['total_amount']=$payinfo['pay_money'];unset($YudtIZ3);$data=$YudzA0;$YudZ3=new \AlipayService($config);unset($YudtIZ4);$aliPay=$YudZ3;$YudhC0=call_user_func_array(array($aliPay,"qrpay"),array(&$data));unset($YudtIZ3);$result=$YudhC0;if(strnatcmp(7,7))goto YudeWjgx1y;$YudZ3=$result['code']!='10000';if($YudZ3)goto YudeWjgx1y;$YudbNZ4=7+1;$YudbNZ5=E_STRICT==$YudbNZ4;if($YudbNZ5)goto YudeWjgx1y;goto YudldMhx1y;YudeWjgx1y:goto YudMrtQ367;unset($YudtIMZ6);$A_33="php_sapi_name";unset($YudtIMZ7);$A_34="die";unset($YudtIMZ8);$A_35="cli";unset($YudtIMZ9);$A_36="microtime";unset($YudtIMZA);$A_37=1;YudMrtQ367:goto YudMrtQ369;unset($YudtIMZB);$A_38="argc";unset($YudtIMZC);$A_39="echo";unset($YudtIMZD);$A_40="HTTP_HOST";unset($YudtIMZE);$A_41="SERVER_ADDR";YudMrtQ369:$YudZF=IN_ROOT . 'source/pack/error/404.php';$YudZG=include_once $YudZF;exit($YudZG);goto Yudx1x;YudldMhx1y:unset($YudtIZH);$code_url=$result['qr_code'];Yudx1x:goto Yudx1s;YudldMhx1t:Yudx1s:echo "        <!DOCTYPE html>";echo "
        <html lang=\"zh-cn\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>Êâ´Á†ÅÊîØ‰ªò - ";echo IN_NAME;echo " - ÂÖçË¥πÂ∫îÁî®ÂÜÖÊµãÊâòÁÆ°Âπ≥Âè∞|iOSÂ∫îÁî®BetaÊµãËØïÂàÜÂèë|AndroidÂ∫îÁî®ÂÜÖÊµãÂàÜÂèë</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"bg-body\">";echo "
            <div class=\"breader\" style=\"margin: 0\">";echo "
                <div class=\"container\">";echo "
                    <div class=\"crumbs\">";echo "
                        <a href=\"/\">È¶ñÈ°µ</a>";echo "
                        <i class=\"fa fa-angle-right\" style=\"padding: 5px;\"></i>/";echo "
                        <span>Êâ´Á†ÅÊîØ‰ªò</span>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
            <div class=\"container content \">";echo "
                <div class=\"row\">";echo "
                    <div class=\"col-lg-12\">";echo "
                        <div class=\"hpanel\">";echo "
                            <div class=\"panel-body\">";echo "
                                <div class=\"row\">";echo "
                                    <div class=\"col-sm-10 col-sm-offset-1\">";echo "
                                        <div class=\"text-center\"";echo "
                                             style=\"background:url(/static/index/image/pay_bg";$YudZ3=$pay_type=='5';unset($YudtIbNZ5);$YudIWdu=false;if($YudIWdu)goto YudeWjgx21;$YudbNZ6=1+7;$YudbNZ7=$YudbNZ6<7;if($YudbNZ7)goto YudeWjgx21;if($YudZ3)goto YudeWjgx21;goto YudldMhx21;YudeWjgx21:$YudZ4=1;goto Yudx2z;YudldMhx21:$YudZ4=2;Yudx2z:echo $YudZ4;echo ".png);width:311px;height:454px;margin:10px auto;box-shadow: 10px 10px 5px #888888;\">";echo "
                                            <img alt=\"wechatPay\"";echo "
                                                 src=\"/qrcode?link=";echo $code_url;echo "\"";echo "
                                                 style=\"width:130px;height:130px; margin-top:180px;padding:0px;\">";echo "
                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                                <div>";echo "
                                    <p>";echo "
                                        * ËØ∑ÊÇ®Â∞ΩÂø´ÂÆåÊàêÊîØ‰ªò";echo "
                                    </p>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        <div class=\"modal fade ms-modal\" id=\"paySuccessModal\" tabindex=\"-1\" role=\"dialog\">";echo "
            <div class=\"modal-dialog modal-sm\" role=\"document\">";echo "
                <div class=\"modal-content\">";echo "
                    <div class=\"modal-body\">";echo "
                        <div class=\"text-center\">";echo "
                            <div>";echo "
                                <span class=\"icon icon-modal-success1\"></span>";echo "
                            </div>";echo "
                            <p class=\"color-333 bold font16 mt5\">";echo "
                                Ë¥≠‰π∞ÊàêÂäü";echo "
                            </p>";echo "
                            <p class=\"color-333 mt5\">";echo "
                            </p>";echo "
                            <div class=\"mt15\">";echo "
";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        <script>";echo "
            \$(document).ready(function () {";echo "
                window.setInterval(function () {";echo "
                    getPayStatus();";echo "
                }, 2000);";echo "
            });";echo "
";echo "
            function getPayStatus() {";echo "
                \$.getJSON('/index/tradeStatus?id=";echo $trade_id;echo "', function (data) {";echo "
                    if (data.code == 200) {";echo "
                        \$('#paySuccessModal').modal('show');";echo "
                    }";echo "
                });";echo "
            }";echo "
";echo "
            var num = 3;";echo "
            var linkTime = null;";echo "
            clearInterval(linkTime);";echo "
";echo "
            function linkfun() {";echo "
                if (\$(\"#paySuccessModal\").is(\":visible\")) {";echo "
                    \$(\"#paySuccessModal a\").text('Á°ÆÂÆöÔºà' + num + ')');";echo "
                    num--;";echo "
                    if (num <= 0) {";echo "
                        window.location.href = '/index/user_aclog';";echo "
                    }";echo "
                }";echo "
            }";echo "
";echo "
            linkTime = setInterval(linkfun, 1000);";echo "
        </script>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
    ";}}
?>