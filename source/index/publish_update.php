<?php
/*
 Êú¨‰ª£Á†ÅÁî± PHP‰ª£Á†ÅÂä†ÂØÜÂ∑•ÂÖ∑ Xend [‰∏ì‰∏öÁâà](Build 5.05.56) ÂàõÂª∫
 ÂàõÂª∫Êó∂Èó¥ 2020-08-14 11:21:07
 ÊäÄÊúØÊîØÊåÅ QQ:30370740 Mail:support@phpXend.com
 ‰∏•Á¶ÅÂèçÁºñËØë„ÄÅÈÄÜÂêëÁ≠â‰ªª‰ΩïÂΩ¢ÂºèÁöÑ‰æµÊùÉË°å‰∏∫ÔºåËøùËÄÖÂ∞ÜËøΩÁ©∂Ê≥ïÂæãË¥£‰ªª
*/

namespace app\index;class publish_update extends BaseUser{function index(){unset($E4wtIAC);$id=SafeRequest("id","get");unset($E4wtIAC);$in_id=bees_decrypt($id);unset($E4wtIAC);$row=db('appid')->where('in_uid',$this->userid)->where('in_id',$in_id)->find();$E4wAC=(bool)$row;$E4wAD=!$E4wAC;if($E4wAD)goto E4weWjgx2;if(strnatcmp(11,11))goto E4weWjgx2;$ÌœÔ‘ãó€="is_file";$E4weFbN1=$ÌœÔ‘ãó€("<mXsHNf>");if($E4weFbN1)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:$E4wAC=(bool)redirect();goto E4wx1;E4wldMhx2:E4wx1:unset($E4wtIAC);$in_bid=$row['in_bid'];$E4wAC=$row['in_form']=='Android';$E4wvPbNAF=new \Exception();$®ø£ëº∞Ê="method_exists";$E4weFbN0=$®ø£ëº∞Ê($E4wvPbNAF,11);if($E4weFbN0)goto E4weWjgx4;if($E4wAC)goto E4weWjgx4;$ÙøÆìãã…="time";$E4weFbN1=$ÙøÆìãã…();$E4wbNAG=!$E4weFbN1;if($E4wbNAG)goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:$E4wAD='apk';goto E4wx3;E4wldMhx4:$E4wAD='ipa';E4wx3:unset($E4wtIAE);$ext=$E4wAD;echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>Êõ¥Êñ∞app„Äê";echo $row['in_name'];echo "„Äë - ";echo IN_NAME;echo " -";echo "
                ÂÖçË¥πÂ∫îÁî®ÂÜÖÊµãÊâòÁÆ°Âπ≥Âè∞|iOSÂ∫îÁî®BetaÊµãËØïÂàÜÂèë|AndroidÂ∫îÁî®ÂÜÖÊµãÂàÜÂèë</title>";echo "
            ";$E4wAC=include 'static.php';echo "        </head>";echo "
        <body>";echo "
        ";$E4wAC=include 'header.php';$E4wbNAK=11+1;$E4wbNAL=11==$E4wbNAK;if($E4wbNAL)goto E4weWjgxa;$E4wAD=(bool)IN_REMOTE;if($E4wAD)goto E4weWjgx9;$Â‚§≤®úù="strlen";$E4weFbN3=$Â‚§≤®úù(11);$E4wbNAI=0==$E4weFbN3;if($E4wbNAI)goto E4weWjgx9;$E4wbNAJ=__LINE__<-11;if($E4wbNAJ)goto E4weWjgx9;goto E4wldMhx9;E4weWjgx9:$E4wAC=$this->user['in_svip']>0;$E4wAD=(bool)$E4wAC;goto E4wx8;E4wldMhx9:E4wx8:$E4wAE=(bool)$E4wAD;$E4wbNAH=11-11;if($E4wbNAH)goto E4weWjgx7;if($E4wAE)goto E4weWjgx7;$E4wvPbNAF=11+1;$E4wvPbNAG=$E4wvPbNAF+11;$E4wzAvPbN1=array();$…àÁÒÂçÎ="in_array";$E4weFbN2=$…àÁÒÂçÎ($E4wvPbNAG,$E4wzAvPbN1);if($E4weFbN2)goto E4weWjgx7;goto E4wldMhx7;E4weWjgx7:$E4wAE=(bool)$row['remote'];goto E4wx6;E4wldMhx7:E4wx6:if($E4wAE)goto E4weWjgxa;$óáÛäÁÕí="function_exists";$E4weFbN4=$óáÛäÁÕí("D4vIYlW");if($E4weFbN4)goto E4weWjgxa;goto E4wldMhxa;E4weWjgxa:$Çÿ∞äÙÄ‘="function_exists";$E4weFM5=$Çÿ∞äÙÄ‘("D4vMIer");if($E4weFM5)goto E4weWjgxc;goto E4wldMhxc;E4weWjgxc:$E4wzAM6=array();$E4wzAM6[]="56e696665646";$E4wzAM6[]="450594253435";$E4wzAM6[]="875646e696";$E4wzAM6[]="56d616e6279646";unset($E4wtIMAM);$var_12["arr_1"]=$E4wzAM6;foreach($var_12["arr_1"] as $k=>$vo){$E4wMAN=gettype($var_12["arr_1"][$k])=="string";$E4wMAP=(bool)$E4wMAN;if($E4wMAP)goto E4weWjgxe;goto E4wldMhxe;E4weWjgxe:unset($E4wtIMAO);$E4wtIMAO=fun_3($vo);unset($E4wtIMAQ);$E4wtIMAQ=$E4wtIMAO;$var_12["arr_1"][$k]=$E4wtIMAQ;$E4wMAP=(bool)$E4wtIMAO;goto E4wxd;E4wldMhxe:E4wxd:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto E4wxb;E4wldMhxc:goto D4vMIer33C;$E4wMAR=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$E4wMAS=require $E4wMAR;$E4wMAT=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$E4wMAU=require $E4wMAT;$E4wMAV=V_DATA . fun_2("arr_1",10);$E4wMAW=require $E4wMAV;D4vMIer33C:E4wxb:$E4wAC=include 'publish_qiniu.php';goto E4wx5;E4wldMhxa:goto D4vMIer33E;$E4wMAD=$R4vP4 . DS;unset($E4wtIMAE);$R4vP5=$E4wMAD;$E4wzAM0=array();unset($E4wtIMAF);$R4vA5=$E4wzAM0;unset($E4wtIMAG);$R4vA5[]=$request;unset($E4wtIMAH);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D4vMIer33E:goto D4vMIer340;$E4wzAM2=array();unset($E4wtIMAI);$R4vA1=$E4wzAM2;unset($E4wtIMAJ);$E4wtIMAJ=&$dispatch;$R4vA1[]=&$E4wtIMAJ;$E4wzAM3=array();unset($E4wtIMAK);$R4vA2=$E4wzAM3;unset($E4wtIMAL);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D4vMIer340:$E4wAM=include 'publish_local.php';E4wx5:echo "        <script>";echo "
            var isUploadPage = 1;";echo "
        </script>";echo "
        <script src=\"/static/index/js/checkIsBanned.js\"></script>";echo "
        ";$E4wAC=include 'footer.php';echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>