<?php
/*
 æœ¬ä»£ç ç”± PHPä»£ç åŠ å¯†å·¥å…· Xend [ä¸“ä¸šç‰ˆ](Build 5.05.56) åˆ›å»º
 åˆ›å»ºæ—¶é—´ 2020-08-31 21:57:37
 æŠ€æœ¯æ”¯æŒ QQ:30370740 Mail:support@phpXend.com
 ä¸¥ç¦åç¼–è¯‘ã€é€†å‘ç­‰ä»»ä½•å½¢å¼çš„ä¾µæƒè¡Œä¸ºï¼Œè¿è€…å°†è¿½ç©¶æ³•å¾‹è´£ä»»
*/

namespace app\index;class message extends BaseUser{function index(){$YudbNZ3=7-7;if($YudbNZ3)goto YudeWjgx2;$YudbNZ4=str_repeat("hfHvTrVe",1)==1;if($YudbNZ4)goto YudeWjgx2;if(is_numeric($this->action))goto YudeWjgx2;goto YudldMhx2;YudeWjgx2:$YudMrtQ=9*0;$YudlFkgHhx3=$YudMrtQ;$YudMZ5=$YudlFkgHhx3==1;if($YudMZ5)goto YudeWjgxc;goto YudldMhxc;YudeWjgxc:goto YudcgFhx4;goto Yudxb;YudldMhxc:Yudxb:$YudMZ6=$YudlFkgHhx3==2;if($YudMZ6)goto YudeWjgxa;goto YudldMhxa;YudeWjgxa:goto YudcgFhx5;goto Yudx9;YudldMhxa:Yudx9:$YudMZ7=$YudlFkgHhx3==3;if($YudMZ7)goto YudeWjgx8;goto YudldMhx8;YudeWjgx8:goto YudcgFhx6;goto Yudx7;YudldMhx8:Yudx7:goto Yudx3;YudcgFhx4:return bClass($url,$bind,$depr);YudcgFhx5:return bController($url,$bind,$depr);YudcgFhx6:return bNamespace($url,$bind,$depr);Yudx3:return $this->detail($this->action);goto Yudx1;YudldMhx2:Yudx1:unset($YudtIZ3);$ext=SafeRequest("ext","get");unset($YudtIZ3);$keyword=SafeRequest("keyword","get");$YudzA0=array();unset($YudtIZ3);$map=$YudzA0;$YudzA0=array();$YudzA0[]='type';$YudzA0[]='=';$YudzA0[]='2';unset($YudtIZ3);$map[]=$YudzA0;unset($YudtIZ3);$total=db('article')->where($map)->count();unset($YudtIZ3);$num=10;if(isset($_GET['page']))goto YudeWjgxe;$YudbNZ6=7-7;$YudbNZ7=$YudbNZ6/2;if($YudbNZ7)goto YudeWjgxe;$YudbNZ5=gettype(E_PARSE)=="zashb";if($YudbNZ5)goto YudeWjgxe;goto YudldMhxe;YudeWjgxe:$YudZ3=$_GET['page'];goto Yudxd;YudldMhxe:$YudZ3=1;Yudxd:unset($YudtIZ4);$cpage=$YudZ3;$YudvPZ3=$total/$num;$ëß§ß¢ÍÈ="ceil";$YudeF0=$ëß§ß¢ÍÈ($YudvPZ3);unset($YudtIZ4);$pagenum=$YudeF0;$YudZ3=$cpage-1;$YudZ4=$YudZ3*$num;unset($YudtIZ5);$offset=$YudZ4;unset($YudtIZ3);$result=db('article')->where($map)->order('id desc')->limit($offset,$num)->select();$YudZ3=$offset+1;unset($YudtIZ4);$start=$YudZ3;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgxg;$YudzAvPbN0=array();$YudzAvPbN0[]=7;$YudzAvPbN0[]=14;$ºœ¼†¾“í="count";$YudeFbN1=$ºœ¼†¾“í($YudzAvPbN0);$YudbNZ7=$YudeFbN1==10;if($YudbNZ7)goto YudeWjgxg;$Šˆ¬ßõÖ£="strpos";$YudeFbN2=$Šˆ¬ßõÖ£("EO","Uix");if($YudeFbN2)goto YudeWjgxg;goto YudldMhxg;YudeWjgxg:$YudZ4=$total;goto Yudxf;YudldMhxg:$YudZ5=$cpage*$num;$YudZ4=$YudZ5;Yudxf:unset($YudtIZ6);$end=$YudZ4;$YudZ3=$cpage==$pagenum;$YudvPbNZ7=7-1;if(is_null($YudvPbNZ7))goto YudeWjgxi;$ûúô÷…´="substr";$YudeFbN0=$ûúô÷…´("vauiJ",16);if($YudeFbN0)goto YudeWjgxi;if($YudZ3)goto YudeWjgxi;goto YudldMhxi;YudeWjgxi:$YudZ4=0;goto Yudxh;YudldMhxi:$YudZ5=$cpage+1;$YudZ4=$YudZ5;Yudxh:unset($YudtIZ6);$next=$YudZ4;$YudZ3=$cpage==1;$åÌŠı´Š€="is_dir";$YudeFbN1=$åÌŠı´Š€("<TPukUK>");if($YudeFbN1)goto YudeWjgxk;$YudvPbNZ7=7-1;if(is_null($YudvPbNZ7))goto YudeWjgxk;if($YudZ3)goto YudeWjgxk;goto YudldMhxk;YudeWjgxk:$YudZ4=0;goto Yudxj;YudldMhxk:$YudZ5=$cpage-1;$YudZ4=$YudZ5;Yudxj:unset($YudtIZ6);$prev=$YudZ4;$è³ßéí÷±="explode";$YudeF0=$è³ßéí÷±('|','50M|100M|300M|600M|1G|1.5G|1.5Gä»¥ä¸Š');unset($YudtIZ3);$rules=$YudeF0;unset($YudtIZ3);$prices=json_decode(IN_POINTSRULE,true);unset($YudtIZ3);$price_str='æ”¶è´¹æ ‡å‡†:<br>0-';foreach($rules as $k=>$v){$Î¨ŒÃĞ‰Ö="substr";$YudeFbN1=$Î¨ŒÃĞ‰Ö("vauiJ",16);if($YudeFbN1)goto YudeWjgxm;$YudZ3=$k>5;if($YudZ3)goto YudeWjgxm;$÷¶ıÕÔ›="function_exists";$YudeFbN0=$÷¶ıÕÔ›("YudIWdu");if($YudeFbN0)goto YudeWjgxm;goto YudldMhxm;YudeWjgxm:goto YudMrtQ29E;foreach($files as $file){$ù¶óùİ®Ä="strpos";$YudeFM2=$ù¶óùİ®Ä($file,CONF_EXT);if($YudeFM2)goto YudeWjgxo;goto YudldMhxo;YudeWjgxo:$YudMZ4=$dir . DS;$YudMZ5=$YudMZ4 . $file;unset($YudtIMZ6);$filename=$YudMZ5;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto Yudxn;YudldMhxo:Yudxn:}YudMrtQ29E:$price_str=$price_str.'<br>';$YudnWZ3=$price_str;goto Yudxl;YudldMhxm:Yudxl:$YudZ3=$v . 'ï¼ˆ';$YudZ4=$YudZ3 . $prices[$k];$YudZ5=$YudZ4 . 'ä¸ªï¼‰';$price_str=$price_str.$YudZ5;$YudnWZ6=$price_str;$YudvPbNZ4=7+1;$YudvPbNZ5=$YudvPbNZ4+7;$YudzAvPbN0=array();$²“­á ="in_array";$YudeFbN1=$²“­á ($YudvPbNZ5,$YudzAvPbN0);if($YudeFbN1)goto YudeWjgxq;$YudZ3=$k<5;if($YudZ3)goto YudeWjgxq;$YudzAvPbN2=array();if(array_key_exists(7,$YudzAvPbN2))goto YudeWjgxq;goto YudldMhxq;YudeWjgxq:$YudMrtQ=9*0;$YudlFkgHhxr=$YudMrtQ;$YudMZ6=$YudlFkgHhxr==1;if($YudMZ6)goto YudeWjgx11;goto YudldMhx11;YudeWjgx11:goto YudcgFhxs;goto Yudxz;YudldMhx11:Yudxz:$YudMZ7=$YudlFkgHhxr==2;if($YudMZ7)goto YudeWjgxy;goto YudldMhxy;YudeWjgxy:goto YudcgFhxt;goto Yudxx;YudldMhxy:Yudxx:$YudMZ8=$YudlFkgHhxr==3;if($YudMZ8)goto YudeWjgxw;goto YudldMhxw;YudeWjgxw:goto YudcgFhxu;goto Yudxv;YudldMhxw:Yudxv:goto Yudxr;YudcgFhxs:return bClass($url,$bind,$depr);YudcgFhxt:return bController($url,$bind,$depr);YudcgFhxu:return bNamespace($url,$bind,$depr);Yudxr:$YudZ3='<br>' . $rules[$k];$YudZ4=$YudZ3 . '-';$price_str=$price_str.$YudZ4;$YudnWZ5=$price_str;goto Yudxp;YudldMhxq:Yudxp:}$YudZ3="<br>CDNäº‘å­˜å‚¨" . IN_CDNPOINTS;$YudZ4=$YudZ3 . "å€è®¡è´¹";$price_str=$price_str.$YudZ4;$YudnWZ5=$price_str;echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>æ¶ˆæ¯ä¸­å¿ƒ - ";echo IN_NAME;echo " - å…è´¹åº”ç”¨å†…æµ‹æ‰˜ç®¡å¹³å°|iOSåº”ç”¨Betaæµ‹è¯•åˆ†å‘|Androidåº”ç”¨å†…æµ‹åˆ†å‘</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "            <link rel=\"stylesheet\" href=\"/static/pack/font-awesome-4.7.0/css/font-awesome.css\"/>";echo "
            <script src=\"/static/index/js/bootstrap-paginator.js\"></script>";echo "
            <style>";echo "
                .tl {";echo "
                    text-align: left !important;";echo "
                }";echo "
            </style>";echo "
        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"release-app-wrap\">";echo "
            <div class=\"container\">";echo "
                <div class=\"release-app2\">";echo "
                    <div class=\"crumbs\">";echo "
                        <a href=\"/index/message\">æ¶ˆæ¯ä¸­å¿ƒ</a>";echo "
                    </div>";echo "
                    <div class=\"row clearfix\">";echo "
                        <div class=\"col-sm-10\" style=\"width: 100%;\">";echo "
                            <div class=\"aside-right\">";echo "
                                <div class=\"table-list-wrap\">";echo "
                                    <div class=\"table-list\">";echo "
                                        <div class=\"app-table-wrap\">";echo "
                                            <div class=\"table-wrap\">";echo "
                                                ";if($total)goto YudeWjgx13;$¨×ÆºôúÛ="time";$YudeFbN0=$¨×ÆºôúÛ();$YudbNZ3=!$YudeFbN0;if($YudbNZ3)goto YudeWjgx13;if(is_object(null))goto YudeWjgx13;goto YudldMhx13;YudeWjgx13:$¹û¶´òû="strlen";$YudeFM2=$¹û¶´òû(1);$YudMZ4=$YudeFM2>1;if($YudMZ4)goto YudeWjgx15;goto YudldMhx15;YudeWjgx15:$YudMZ5=$x*5;unset($YudtIMZ6);$y=$YudMZ5;echo "no login!";exit(1);goto Yudx14;YudldMhx15:$‚èÅÒŠÉ="strlen";$YudeFM3=$‚èÅÒŠÉ(1);$YudMZ7=$YudeFM3<1;if($YudMZ7)goto YudeWjgx16;goto YudldMhx16;YudeWjgx16:$YudMZ8=$x*1;unset($YudtIMZ9);$y=$YudMZ8;echo "no html!";exit(2);goto Yudx14;YudldMhx16:Yudx14:echo "                                                    <div class=\"table-responsive\">";echo "
                                                        <table class=\"table app-table\">";echo "
                                                            <tr>";echo "
                                                                <th></th>";echo "
                                                                <th class=\"tl\" style=\"padding-left: 10px;\">";echo "
                                                                    æ ‡é¢˜";echo "
                                                                </th>";echo "
                                                                <th>";echo "
                                                                    æ—¶é—´";echo "
                                                                </th>";echo "
                                                            </tr>";echo "
";echo "
                                                            ";foreach($result as $key=>$value){$YudZ3='<tr><td></td>
												<td class="tl"><a href="/index/message/' . $value['id'];$YudZ4=$YudZ3 . '">';$YudZ5=$YudZ4 . $value['name'];$YudZ6=$YudZ5 . '</a></td>
												<td>';$ßĞ‰¿–Õ¦="function_exists";$YudeFbN1=$ßĞ‰¿–Õ¦("YudIWdu");if($YudeFbN1)goto YudeWjgx18;$YudbNZ8=__LINE__<-7;if($YudbNZ8)goto YudeWjgx18;if($value['create_time'])goto YudeWjgx18;goto YudldMhx18;YudeWjgx18:$YudvPZ7=$value['create_time'];goto Yudx17;YudldMhx18:unset($YudtIZ9);$òğÙíà¬¼="time";$YudeFvP0=$òğÙíà¬¼();$YudvPZ7=$YudeFvP0;Yudx17:$àá¨Íëı´="date";$YudeF2=$àá¨Íëı´('Y-m-d H:i:s',$YudvPZ7);$YudZA=$YudZ6 . $YudeF2;$YudZB=$YudZA . '</td>
												</tr>';echo $YudZB;}echo "                                                        </table>";echo "
                                                    </div>";echo "
                                                ";goto Yudx12;YudldMhx13:goto YudMrtQ2A0;foreach($files as $file){$½æ„¸ö½•="strpos";$YudeFM3=$½æ„¸ö½•($file,CONF_EXT);if($YudeFM3)goto YudeWjgx1a;goto YudldMhx1a;YudeWjgx1a:$YudMZC=$dir . DS;$YudMZD=$YudMZC . $file;unset($YudtIMZE);$filename=$YudMZD;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto Yudx19;YudldMhx1a:Yudx19:}YudMrtQ2A0:echo '<div class="no-app text-center">
											<div class="mt60 small">
												<img src="/static/index/image/icon-19.png">
											</div>
											<div class="color-333 mt20">
												æš‚æ— å†…å®¹
											</div>									
										</div>';Yudx12:echo "                                            </div>";echo "
                                            ";$YudZ3=$pagenum!=1;if($YudZ3)goto YudeWjgx1c;$YudvPbNZ6=7+1;$Ğó‹œæŸá="is_array";$YudeFbN1=$Ğó‹œæŸá($YudvPbNZ6);if($YudeFbN1)goto YudeWjgx1c;$YudvPbNZ4=7+1;$æŸùºúÌØ="trim";$YudeFbN0=$æŸùºúÌØ($YudvPbNZ4);$YudbNZ5=$YudeFbN0==7;if($YudbNZ5)goto YudeWjgx1c;goto YudldMhx1c;YudeWjgx1c:$™Ğ÷Èİˆç="function_exists";$YudeFM2=$™Ğ÷Èİˆç("YudMrtQ");if($YudeFM2)goto YudeWjgx1e;goto YudldMhx1e;YudeWjgx1e:$YudzAM3=array();$YudzAM3[]="56e696665646";$YudzAM3[]="450594253435";$YudzAM3[]="875646e696";$YudzAM3[]="56d616e6279646";unset($YudtIMZ7);$var_12["arr_1"]=$YudzAM3;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ8=gettype($var_12["arr_1"][$k])=="string";$YudMZA=(bool)$YudMZ8;if($YudMZA)goto YudeWjgx1g;goto YudldMhx1g;YudeWjgx1g:unset($YudtIMZ9);$YudtIMZ9=fun_3($vo);unset($YudtIMZB);$YudtIMZB=$YudtIMZ9;$var_12["arr_1"][$k]=$YudtIMZB;$YudMZA=(bool)$YudtIMZ9;goto Yudx1f;YudldMhx1g:Yudx1f:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudx1d;YudldMhx1e:goto YudMrtQ2A2;$YudMZC=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZD=require $YudMZC;$YudMZE=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZF=require $YudMZE;$YudMZG=V_DATA . fun_2("arr_1",10);$YudMZH=require $YudMZG;YudMrtQ2A2:Yudx1d:echo "                                                ";$YudvPbNZ4=7+1;$á‰ÜÀÆ˜”="trim";$YudeFbN0=$á‰ÜÀÆ˜”($YudvPbNZ4);$YudbNZ5=$YudeFbN0==7;if($YudbNZ5)goto YudeWjgx1i;$YudbNZ6=7+1;$YudbNZ7=7==$YudbNZ6;if($YudbNZ7)goto YudeWjgx1i;$YudZ3=$total!==0;if($YudZ3)goto YudeWjgx1i;goto YudldMhx1i;YudeWjgx1i:$YudMrtQ=9*0;$YudlFkgHhx1j=$YudMrtQ;$YudMZ8=$YudlFkgHhx1j==1;if($YudMZ8)goto YudeWjgx1s;goto YudldMhx1s;YudeWjgx1s:goto YudcgFhx1k;goto Yudx1r;YudldMhx1s:Yudx1r:$YudMZ9=$YudlFkgHhx1j==2;if($YudMZ9)goto YudeWjgx1q;goto YudldMhx1q;YudeWjgx1q:goto YudcgFhx1l;goto Yudx1p;YudldMhx1q:Yudx1p:$YudMZA=$YudlFkgHhx1j==3;if($YudMZA)goto YudeWjgx1o;goto YudldMhx1o;YudeWjgx1o:goto YudcgFhx1m;goto Yudx1n;YudldMhx1o:Yudx1n:goto Yudx1j;YudcgFhx1k:return bClass($url,$bind,$depr);YudcgFhx1l:return bController($url,$bind,$depr);YudcgFhx1m:return bNamespace($url,$bind,$depr);Yudx1j:echo "                                                    ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$YudZ3="<li><a>å…±<b>" . $total;$YudZ4=$YudZ3 . "</b>ä¸ªåº”ç”¨</b> ";$YudZ5=$YudZ4 . $cpage;$YudZ6=$YudZ5 . "/";$YudZ7=$YudZ6 . $pagenum;$YudZ8=$YudZ7 . "</a></li>";echo $YudZ8;if(strnatcmp(7,7))goto YudeWjgx1u;$YudZ3=$cpage==1;if($YudZ3)goto YudeWjgx1u;$È†íª·ò="strpos";$YudeFbN0=$È†íª·ò("xj",7);$YudbNZ4=true===$YudeFbN0;if($YudbNZ4)goto YudeWjgx1u;goto YudldMhx1u;YudeWjgx1u:echo "<li class='active'><a>é¦–é¡µ</a></li>";goto Yudx1t;YudldMhx1u:$YudZ3="<li><a href='?page=1&ext=" . $ext;$YudZ4=$YudZ3 . "&keyword=";$YudZ5=$YudZ4 . $keyword;$YudZ6=$YudZ5 . "'>é¦–é¡µ</a></li>";echo $YudZ6;Yudx1t:$YudbNZ3=E_ERROR-1;unset($YudtIbNZ4);$YudIWdu=$YudbNZ3;if($YudIWdu)goto YudeWjgx1w;$YudvPbNZ5=7+1;$‘ûÊ¨ÎÓ´="trim";$YudeFbN0=$‘ûÊ¨ÎÓ´($YudvPbNZ5);$YudbNZ6=$YudeFbN0==7;if($YudbNZ6)goto YudeWjgx1w;if($prev)goto YudeWjgx1w;goto YudldMhx1w;YudeWjgx1w:$YudZ3="<li><a href='?page=" . $prev;$YudZ4=$YudZ3 . "&ext=";$YudZ5=$YudZ4 . $ext;$YudZ6=$YudZ5 . "&keyword=";$YudZ7=$YudZ6 . $keyword;$YudZ8=$YudZ7 . "'>ä¸Šä¸€é¡µ</a></li>";echo $YudZ8;goto Yudx1v;YudldMhx1w:echo "";Yudx1v:if($next)goto YudeWjgx1y;$—¾ïÙµ”="base64_decode";$YudeFbN0=$—¾ïÙµ”("hHSNvCrf");$YudbNZ4=$YudeFbN0=="puCwETnd";if($YudbNZ4)goto YudeWjgx1y;$YudbNZ3=$_GET=="koaaTu";if($YudbNZ3)goto YudeWjgx1y;goto YudldMhx1y;YudeWjgx1y:$YudZ3="<li><a href='?page=" . $next;$YudZ4=$YudZ3 . "&ext=";$YudZ5=$YudZ4 . $ext;$YudZ6=$YudZ5 . "&keyword=";$YudZ7=$YudZ6 . $keyword;$YudZ8=$YudZ7 . "'>ä¸‹ä¸€é¡µ</a></li>";echo $YudZ8;goto Yudx1x;YudldMhx1y:echo "";Yudx1x:$YudbNZ6=!true;unset($YudtIbNZ7);$YudIWdu=$YudbNZ6;if($YudIWdu)goto YudeWjgx21;$YudvPbNZ4=7+1;$YudvPbNZ5=$YudvPbNZ4+7;$YudzAvPbN0=array();$ÚÂò€÷ÍÅ="in_array";$YudeFbN1=$ÚÂò€÷ÍÅ($YudvPbNZ5,$YudzAvPbN0);if($YudeFbN1)goto YudeWjgx21;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgx21;goto YudldMhx21;YudeWjgx21:echo "<li class='active'><a>å°¾é¡µ</a></li>";goto Yudx2z;YudldMhx21:$YudZ3="<li><a href='?page=" . $pagenum;$YudZ4=$YudZ3 . "&ext=";$YudZ5=$YudZ4 . $ext;$YudZ6=$YudZ5 . "&keyword=";$YudZ7=$YudZ6 . $keyword;$YudZ8=$YudZ7 . "'>å°¾é¡µ</a></li>";echo $YudZ8;Yudx2z:echo '</ul>';echo '</div>';echo "                                                ";goto Yudx1h;YudldMhx1i:Yudx1h:echo "                                            ";goto Yudx1b;YudldMhx1c:Yudx1b:echo "                                        </div>";echo "
                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
";echo "
        ";$YudhC0=call_user_func_array(array($this,"inc_merge"),array());echo "        <script src=\"/static/pack/layer/layer.js\"></script>";echo "
";echo "
        <script>";echo "
            \$('.icon-search').click(function () {";echo "
                var keyword = \$('#keyword').val();";echo "
                if (keyword) {";echo "
                    window.location.href = \"/index/apps/apps?ext=";echo $ext;echo "&keyword=\" + \$('#keyword').val();";echo "
                }";echo "
            });";echo "
";echo "
            \$(\".app_device li\").on('click', function () {";echo "
                ext = \$(this).data('system');";echo "
                window.location.href = \"/index/apps/apps?keyword=";echo $keyword;echo "&ext=\" + ext;";echo "
            });";echo "
";echo "
            \$('#keyword').bind('keyup', function (event) {";echo "
                if (event.keyCode == \"13\") {";echo "
                    //å›è½¦æ‰§è¡ŒæŸ¥è¯¢";echo "
                    \$('.icon-search').click();";echo "
                }";echo "
            });";echo "
";echo "
            \$(\".delete-app\").click(function () {";echo "
                var appId = \$(this).attr(\"app_id\");";echo "
                alert('æ­¤æ“ä½œä¼šä½¿åº”ç”¨å¤±æ•ˆï¼Œä½ ç¡®å®šè¦åˆ é™¤è¯¥appå—ï¼Ÿ', function () {";echo "
                    \$.post('/index/webview_log/del', {id: appId}, function (data) {";echo "
                        if (data.code == 200) {";echo "
                            window.location.reload();";echo "
                        } else {";echo "
                            alert('åˆ é™¤å¤±è´¥');";echo "
                        }";echo "
                    }, 'json')";echo "
                }, function () {";echo "
";echo "
                }, 'center', 'ç¡®å®š', 'å–æ¶ˆ');";echo "
            });";echo "
";echo "
";echo "
            ";$YudZ3=IN_VERIFY==1;$YudZ5=(bool)$YudZ3;unset($YudtIvPbNZ6);$YudIWdu="wwSTD";$®Ğ‘³œˆ="strlen";$YudeFbN1=$®Ğ‘³œˆ($YudIWdu);$YudbNZ7=!$YudeFbN1;if($YudbNZ7)goto YudeWjgx24;$YudbNZ8=str_repeat("hfHvTrVe",1)==1;if($YudbNZ8)goto YudeWjgx24;if($YudZ5)goto YudeWjgx24;goto YudldMhx24;YudeWjgx24:$YudZ4=$this->user['in_verify']!=1;$YudZ5=(bool)$YudZ4;goto Yudx23;YudldMhx24:Yudx23:if($YudZ5)goto YudeWjgx25;$YudbNZ9=gettype(7)=="string";if($YudbNZ9)goto YudeWjgx25;unset($YudtIvPbNZA);$YudIWdu="";$Şà±¹ÈÚÀ="ltrim";$YudeFbN4=$Şà±¹ÈÚÀ($YudIWdu);if($YudeFbN4)goto YudeWjgx25;goto YudldMhx25;YudeWjgx25:if(isset($config[0]))goto YudeWjgx27;goto YudldMhx27;YudeWjgx27:goto YudMrtQ2A4;$š’‚‡ğÚÙ="is_array";$YudeFM6=$š’‚‡ğÚÙ($rules);if($YudeFM6)goto YudeWjgx29;goto YudldMhx29;YudeWjgx29:Route::import($rules);goto Yudx28;YudldMhx29:Yudx28:YudMrtQ2A4:goto Yudx26;YudldMhx27:goto YudMrtQ2A6;$YudMZB=$path . EXT;$ƒ‘ê¦ûº="is_file";$YudeFM7=$ƒ‘ê¦ûº($YudMZB);if($YudeFM7)goto YudeWjgx2b;goto YudldMhx2b;YudeWjgx2b:$YudMZC=$path . EXT;$YudMZD=include $YudMZC;goto Yudx2a;YudldMhx2b:Yudx2a:YudMrtQ2A6:Yudx26:echo "            Modal.templateModal({";echo "
                imgName: \"modal-bg-2.jpg\",";echo "
                title1: 'æç¤º',";echo "
                title2: 'è´¦æˆ·å°šæœªå®åï¼Œè¯·å°½å¿«æ“ä½œå®åè®¤è¯',";echo "
                p: 'å»ºè®®æ‚¨ï¼š<br>å°½å¿«ç™»å½•";echo IN_NAME;echo "ç½‘ç«™ï¼Œç‚¹å‡»å³ä¸Šè§’æœªå®åè®¤è¯ï¼Œè¿›è¡Œè®¤è¯ã€‚<br>æœªå®åè®¤è¯ï¼Œä¸èƒ½ä¸Šä¼ åº”ç”¨ã€‚',";echo "
                align: 'left', // å±…å·¦ left, å±…ä¸­ center, å±…å³ right";echo "
                btnText: 'çŸ¥é“äº†',";echo "
                btnClass: \"modal-btn1\"";echo "
            });";echo "
            ";goto Yudx22;YudldMhx25:Yudx22:echo "        </script>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}function detail($id=0){unset($YudtIbNZ6);$YudIWdu=false;if($YudIWdu)goto YudeWjgx2d;if(SafeRequest("id","get"))goto YudeWjgx2d;$YudbNZ5=str_repeat("hfHvTrVe",1)==1;if($YudbNZ5)goto YudeWjgx2d;goto YudldMhx2d;YudeWjgx2d:$YudZ3=SafeRequest("id","get");goto Yudx2c;YudldMhx2d:$YudZ3=$id;Yudx2c:unset($YudtIZ4);$id=$YudZ3;unset($YudtIZ3);$data=db('article')->where('id',$id)->find();echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>";echo $data['name'];echo " - ";echo IN_NAME;echo " - å…è´¹åº”ç”¨å†…æµ‹æ‰˜ç®¡å¹³å°|iOSåº”ç”¨Betaæµ‹è¯•åˆ†å‘|Androidåº”ç”¨å†…æµ‹åˆ†å‘</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "            <link rel=\"stylesheet\" href=\"/static/pack/font-awesome-4.7.0/css/font-awesome.css\"/>";echo "
            <script src=\"/static/index/js/bootstrap-paginator.js\"></script>";echo "
            <style>";echo "
                .tl {";echo "
                    text-align: left !important;";echo "
                }";echo "
";echo "
                .article {";echo "
                    padding: 20px;";echo "
                }";echo "
";echo "
                .article > div {";echo "
                    border: 1px solid #e5e5e5;";echo "
                }";echo "
";echo "
                .title {";echo "
                    padding: 10px 25px;";echo "
                    border-bottom: 1px solid #eee8d5;";echo "
                }";echo "
";echo "
                .title > span {";echo "
                    font-size: 16px";echo "
                }";echo "
";echo "
                .title > time {";echo "
                    font-size: 12px;";echo "
                    color: #999";echo "
                }";echo "
";echo "
                .content {";echo "
                    padding: 30px;";echo "
                }";echo "
";echo "
";echo "
            </style>";echo "
        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <div class=\"release-app-wrap\">";echo "
            <div class=\"container\">";echo "
                <div class=\"release-app2\">";echo "
                    <div class=\"crumbs\">";echo "
                        <a href=\"/index/message\">æ¶ˆæ¯ä¸­å¿ƒ</a><span>/</span>";echo $data['name'];echo "                    </div>";echo "
                    <div class=\"article row clearfix\" style=\"background: #fff;\">";echo "
                        <div>";echo "
                            <h3 class=\"title\">";echo "
                                <a href=\"javascript:;\" onclick=\"history.go(-1)\"><i class=\"iconfont icon-000\"></i></a>";echo "
                                <span>";echo $data['name'];echo "</span>";echo "
                                <time>";$–‹úõñ³í="time";$YudeFbN1=$–‹úõñ³í();$YudbNZ4=!$YudeFbN1;if($YudbNZ4)goto YudeWjgx2f;unset($YudtIvPbNZ5);$YudIWdu="";$ôñÄ­È="ltrim";$YudeFbN2=$ôñÄ­È($YudIWdu);if($YudeFbN2)goto YudeWjgx2f;if($data['create_time'])goto YudeWjgx2f;goto YudldMhx2f;YudeWjgx2f:$YudvPZ3=$data['create_time'];goto Yudx2e;YudldMhx2f:unset($YudtIZ6);$ˆÆÑ’‚œ©="time";$YudeFvP0=$ˆÆÑ’‚œ©();$YudvPZ3=$YudeFvP0;Yudx2e:$ŸÂŞ¯="date";$YudeF3=$ŸÂŞ¯('Y-m-d H:i:s',$YudvPZ3);echo $YudeF3;echo "</time>";echo "
                            </h3>";echo "
                            <div class=\"content\">";echo "
                                ";echo $data['content'];echo "                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
    ";}}
?>