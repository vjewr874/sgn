<?php
/*
 Êú¨‰ª£Á†ÅÁî± PHP‰ª£Á†ÅÂä†ÂØÜÂ∑•ÂÖ∑ Xend [‰∏ì‰∏öÁâà](Build 5.05.56) ÂàõÂª∫
 ÂàõÂª∫Êó∂Èó¥ 2020-08-31 21:57:37
 ÊäÄÊúØÊîØÊåÅ QQ:30370740 Mail:support@phpXend.com
 ‰∏•Á¶ÅÂèçÁºñËØë„ÄÅÈÄÜÂêëÁ≠â‰ªª‰ΩïÂΩ¢ÂºèÁöÑ‰æµÊùÉË°å‰∏∫ÔºåËøùËÄÖÂ∞ÜËøΩÁ©∂Ê≥ïÂæãË¥£‰ªª
*/

namespace app\index;class publish_statistics extends BaseUser{function index(){unset($YudtIZ3);$id=bees_decrypt(SafeRequest("id","get"));unset($YudtIZ3);$row=db('appid')->where('in_uid',$this->userid)->where('in_id',$id)->find();$YudZ5=(bool)$row;$YudvPbNZ7=15-7;if(is_bool($YudvPbNZ7))goto YudeWjgx2;$YudbNZ8=__LINE__<-7;if($YudbNZ8)goto YudeWjgx2;$YudZ6=!$YudZ5;if($YudZ6)goto YudeWjgx2;goto YudldMhx2;YudeWjgx2:unset($YudtIZ9);$´Ç‘å≠ÈÂ="dirname";$YudeFvP0=$´Ç‘å≠ÈÂ(__FILE__);$YudvPZ3=$YudeFvP0 . '/../pack/error/404.php';$YudvPZ4=include_once $YudvPZ3;$YudZ5=(bool)exit($YudvPZ4);goto Yudx1;YudldMhx2:Yudx1:unset($YudtIZ3);$sid=bees_encrypt($row['in_id']);unset($YudtIZ3);$start_date=SafeRequest("start_date","get");unset($YudtIZ3);$end_date=SafeRequest("end_date","get");$YudZ3=$start_date . ' 00:00:00';unset($YudtIZ4);$starttime=$YudZ3;$YudZ3=$end_date . ' 23:59:59';unset($YudtIZ4);$endtime=$YudZ3;unset($YudtIZ3);$specified='';$YudZ3=!empty($start_date);$YudZ5=(bool)$YudZ3;$ËπÏ∫êÛÕ="strpos";$YudeFbN2=$ËπÏ∫êÛÕ("EO","Uix");if($YudeFbN2)goto YudeWjgx5;if($YudZ5)goto YudeWjgx5;$YudvPbNZ6=7+1;$YudvPbNZ7=$YudvPbNZ6+7;$YudzAvPbN3=array();$õ…å¨ë≠µ="in_array";$YudeFbN4=$õ…å¨ë≠µ($YudvPbNZ7,$YudzAvPbN3);if($YudeFbN4)goto YudeWjgx5;goto YudldMhx5;YudeWjgx5:$YudZ4=!empty($end_date);$YudZ5=(bool)$YudZ4;goto Yudx4;YudldMhx5:Yudx4:if($YudZ5)goto YudeWjgx6;$ÏÂ⁄∂Ïá∫="is_dir";$YudeFbN5=$ÏÂ⁄∂Ïá∫("<TPukUK>");if($YudeFbN5)goto YudeWjgx6;$YudbNZ8=7-7;if($YudbNZ8)goto YudeWjgx6;goto YudldMhx6;YudeWjgx6:unset($YudtIMZ9);$YudMrtQ="login";$YudlFkgHhx7=$YudMrtQ;$YudMZA=$YudlFkgHhx7=="admin";if($YudMZA)goto YudeWjgxd;goto YudldMhxd;YudeWjgxd:goto YudcgFhx8;goto Yudxc;YudldMhxd:Yudxc:$YudMZD=$YudlFkgHhx7=="user";if($YudMZD)goto YudeWjgxb;goto YudldMhxb;YudeWjgxb:goto YudcgFhx9;goto Yudxa;YudldMhxb:Yudxa:goto Yudx7;YudcgFhx8:$”äî´°Äµ="str_replace";$YudeFM6=$”äî´°Äµ($depr,"|",$url);unset($YudtIMZB);$url=$YudeFM6;$⁄Ï•Œí·û="explode";$YudeFM7=$⁄Ï•Œí·û("|",$url,2);unset($YudtIMZC);$array=$YudeFM7;YudcgFhx9:unset($YudtIMZE);$info=parse_url($url);$˚‡ê‰’Ê·="explode";$YudeFM9=$˚‡ê‰’Ê·("/",$info["path"]);unset($YudtIMZF);$path=$YudeFM9;Yudx7:$YudZ3="addtime>'" . $starttime;$YudZ4=$YudZ3 . "' and addtime<'";$YudZ5=$YudZ4 . $endtime;$YudZ6=$YudZ5 . "' ";unset($YudtIZ7);$specified=$YudZ6;goto Yudx3;YudldMhx6:Yudx3:unset($YudtIZ3);$total=db('downhistory')->where($specified)->where('appid',$id)->where('uid',$this->userid)->count();unset($YudtIZ3);$num=10;$∫ÔΩÖπ∏∂="md5";$YudeFbN2=$∫ÔΩÖπ∏∂(7);$YudbNZ5=$YudeFbN2=="Dzxjfg";if($YudbNZ5)goto YudeWjgxf;if(isset($_GET['page']))goto YudeWjgxf;$YudvPbNZ6=new \Exception();$õÕÎÊåëÉ="method_exists";$YudeFbN3=$õÕÎÊåëÉ($YudvPbNZ6,7);if($YudeFbN3)goto YudeWjgxf;goto YudldMhxf;YudeWjgxf:$YudZ3=$_GET['page'];goto Yudxe;YudldMhxf:$YudZ3=1;Yudxe:unset($YudtIZ4);$cpage=$YudZ3;$YudvPZ3=$total/$num;$ÃõØ∞…† ="ceil";$YudeF0=$ÃõØ∞…† ($YudvPZ3);unset($YudtIZ4);$pagenum=$YudeF0;$YudZ3=$cpage-1;$YudZ4=$YudZ3*$num;unset($YudtIZ5);$offset=$YudZ4;unset($YudtIZ3);$result=db('downhistory')->where($specified)->where('appid',$id)->where('uid',$this->userid)->order('addtime desc')->limit($offset,$num)->select();$YudZ3=$offset+1;unset($YudtIZ4);$start=$YudZ3;$YudZ3=$cpage==$pagenum;$YudvPbNZ7=new \Exception();$Áıé÷¬∆ó="method_exists";$YudeFbN1=$Áıé÷¬∆ó($YudvPbNZ7,7);if($YudeFbN1)goto YudeWjgxh;if($YudZ3)goto YudeWjgxh;if(strspn("KRMKOTdJ","7"))goto YudeWjgxh;goto YudldMhxh;YudeWjgxh:$YudZ4=$total;goto Yudxg;YudldMhxh:$YudZ5=$cpage*$num;$YudZ4=$YudZ5;Yudxg:unset($YudtIZ6);$end=$YudZ4;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgxj;$Èå”ÀËõ°="strpos";$YudeFbN1=$Èå”ÀËõ°("EO","Uix");if($YudeFbN1)goto YudeWjgxj;$YudvPbNZ7=7-1;if(is_null($YudvPbNZ7))goto YudeWjgxj;goto YudldMhxj;YudeWjgxj:$YudZ4=0;goto Yudxi;YudldMhxj:$YudZ5=$cpage+1;$YudZ4=$YudZ5;Yudxi:unset($YudtIZ6);$next=$YudZ4;$YudZ3=$cpage==1;$YudbNZ8=7-7;if($YudbNZ8)goto YudeWjgxl;if($YudZ3)goto YudeWjgxl;$YudbNZ7=7-7;if($YudbNZ7)goto YudeWjgxl;goto YudldMhxl;YudeWjgxl:$YudZ4=0;goto Yudxk;YudldMhxl:$YudZ5=$cpage-1;$YudZ4=$YudZ5;Yudxk:unset($YudtIZ6);$prev=$YudZ4;echo "        <!DOCTYPE html>";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta charset=\"utf-8\">";echo "
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0\"/>";echo "
            <meta name=\"keywords\" content=\"";echo IN_KEYWORDS;echo "\"/>";echo "
            <meta name=\"description\" content=\"";echo IN_DESCRIPTION;echo "\"/>";echo "
            <title>";echo $row['in_name'];echo "Â∫îÁî®ËØ¶ÊÉÖ - ";echo IN_NAME;echo "</title>";echo "
            ";$YudhC0=call_user_func_array(array($this,"static_"),array());echo "        </head>";echo "
        <body>";echo "
        ";$YudhC0=call_user_func_array(array($this,"header"),array());echo "        <link rel=\"stylesheet\" href=\"/static/pack/font-awesome-4.7.0/css/font-awesome.css\"/>";echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/static/index/css/jquery.datetimepicker.css?20190530\"/>";echo "
        <script src=\"/static/index/js/jquery.datetimepicker.js?20190530\"></script>";echo "
        <script src=\"/static/index/js/bootstrap-paginator.js\"></script>";echo "
        <div class=\"release-app-wrap\">";echo "
            <div class=\"container\">";echo "
                <div class=\"release-app2\">";echo "
                    <div class=\"crumbs\">";echo "
                        <a href=\"/index/apps/apps\">ÊàëÁöÑÂ∫îÁî®</a>";echo "
                        <span>/</span>";echo "
                        <a href=\"/index/apps/apps\">Â∫îÁî®ÂàóË°®</a>";echo "
                        <span>/</span>";echo "
                        ";echo $row['in_name'];echo "                    </div>";echo "
                    <div class=\"row clearfix\">";echo "
                        ";$YudhC0=call_user_func_array(array($this,"publish_left"),array());echo "                        <div class=\"col-sm-10\">";echo "
                            <div class=\"aside-right\">";echo "
                                <div class=\"app-details app-details2\">";echo "
                                    ";$YudhC0=call_user_func_array(array($this,"publish_top"),array(&$row));echo "                                    <hr>";echo "
                                    <div class=\"download-details\">";echo "
                                        <div class=\"d-top clearfix\">";echo "
                                            <div class=\"date date1\">";echo "
                                                <input class=\"form-control\" type=\"text\" id=\"datetimepicker1\"";echo "
                                                       value=\"";$YudvPbNZ3="ncU"==__LINE__;unset($YudtIvPbNZ4);$YudIWdu=$YudvPbNZ3;$Ûäá±¡¯‘="strrev";$YudeFbN1=$Ûäá±¡¯‘($YudIWdu);if($YudeFbN1)goto YudeWjgxn;if(empty($start_date))goto YudeWjgxn;$ÃÀõ°Æ√Ç="is_file";$YudeFbN2=$ÃÀõ°Æ√Ç("<rjejVu>");if($YudeFbN2)goto YudeWjgxn;goto YudldMhxn;YudeWjgxn:if(isset($config[0]))goto YudeWjgxp;goto YudldMhxp;YudeWjgxp:goto YudMrtQ2D3;$ÚÙÛ°ı’≤="is_array";$YudeFM4=$ÚÙÛ°ı’≤($rules);if($YudeFM4)goto YudeWjgxr;goto YudldMhxr;YudeWjgxr:Route::import($rules);goto Yudxq;YudldMhxr:Yudxq:YudMrtQ2D3:goto Yudxo;YudldMhxp:goto YudMrtQ2D5;$YudMZ5=$path . EXT;$ËπﬂπÇÑÊ="is_file";$YudeFM5=$ËπﬂπÇÑÊ($YudMZ5);if($YudeFM5)goto YudeWjgxt;goto YudldMhxt;YudeWjgxt:$YudMZ6=$path . EXT;$YudMZ7=include $YudMZ6;goto Yudxs;YudldMhxt:Yudxs:YudMrtQ2D5:Yudxo:$ô•Ì√Ã ﬂ="date";$YudeFvPvP0=$ô•Ì√Ã ﬂ("Y/m/d");$YudvPvPZ3=$YudeFvPvP0 . '-1 week';$ËÜ√©îñÉ="date";$YudeF2=$ËÜ√©îñÉ("Y/m/d",strtotime($YudvPvPZ3));echo $YudeF2;goto Yudxm;YudldMhxn:$YudMrtQ=9*0;$YudlFkgHhxu=$YudMrtQ;$YudMZ4=$YudlFkgHhxu==1;if($YudMZ4)goto YudeWjgx14;goto YudldMhx14;YudeWjgx14:goto YudcgFhxv;goto Yudx13;YudldMhx14:Yudx13:$YudMZ5=$YudlFkgHhxu==2;if($YudMZ5)goto YudeWjgx12;goto YudldMhx12;YudeWjgx12:goto YudcgFhxw;goto Yudx11;YudldMhx12:Yudx11:$YudMZ6=$YudlFkgHhxu==3;if($YudMZ6)goto YudeWjgxz;goto YudldMhxz;YudeWjgxz:goto YudcgFhxx;goto Yudxy;YudldMhxz:Yudxy:goto Yudxu;YudcgFhxv:return bClass($url,$bind,$depr);YudcgFhxw:return bController($url,$bind,$depr);YudcgFhxx:return bNamespace($url,$bind,$depr);Yudxu:echo $start_date;Yudxm:echo "\">";echo "
                                                <span class=\"iconfont icon-date\"></span>";echo "
                                            </div>";echo "
                                            <div class=\"fl line\">";echo "
                                                _";echo "
                                            </div>";echo "
                                            <div class=\"date date2\">";echo "
                                                <input class=\"form-control\" type=\"text\" id=\"datetimepicker2\"";echo "
                                                       value=\"";if(empty($end_date))goto YudeWjgx16;if(is_object(null))goto YudeWjgx16;$YudbNZ3=str_repeat("hfHvTrVe",1)==1;if($YudbNZ3)goto YudeWjgx16;goto YudldMhx16;YudeWjgx16:if(isset($config[0]))goto YudeWjgx18;goto YudldMhx18;YudeWjgx18:goto YudMrtQ2D7;$∏®ÿ„•ë∂="is_array";$YudeFM4=$∏®ÿ„•ë∂($rules);if($YudeFM4)goto YudeWjgx1a;goto YudldMhx1a;YudeWjgx1a:Route::import($rules);goto Yudx19;YudldMhx1a:Yudx19:YudMrtQ2D7:goto Yudx17;YudldMhx18:goto YudMrtQ2D9;$YudMZ4=$path . EXT;$§Ùâ∑â∞¡="is_file";$YudeFM5=$§Ùâ∑â∞¡($YudMZ4);if($YudeFM5)goto YudeWjgx1c;goto YudldMhx1c;YudeWjgx1c:$YudMZ5=$path . EXT;$YudMZ6=include $YudMZ5;goto Yudx1b;YudldMhx1c:Yudx1b:YudMrtQ2D9:Yudx17:$ÍÎ®éâ≤ü="date";$YudeF0=$ÍÎ®éâ≤ü("Y/m/d");echo $YudeF0;goto Yudx15;YudldMhx16:unset($YudtIMZ3);$YudMrtQ="login";$YudlFkgHhx1d=$YudMrtQ;$YudMZ4=$YudlFkgHhx1d=="admin";if($YudMZ4)goto YudeWjgx1j;goto YudldMhx1j;YudeWjgx1j:goto YudcgFhx1e;goto Yudx1i;YudldMhx1j:Yudx1i:$YudMZ7=$YudlFkgHhx1d=="user";if($YudMZ7)goto YudeWjgx1h;goto YudldMhx1h;YudeWjgx1h:goto YudcgFhx1f;goto Yudx1g;YudldMhx1h:Yudx1g:goto Yudx1d;YudcgFhx1e:$°≠ÇÍÒ™”="str_replace";$YudeFM1=$°≠ÇÍÒ™”($depr,"|",$url);unset($YudtIMZ5);$url=$YudeFM1;$π⁄ö™ÂÊ€="explode";$YudeFM2=$π⁄ö™ÂÊ€("|",$url,2);unset($YudtIMZ6);$array=$YudeFM2;YudcgFhx1f:unset($YudtIMZ8);$info=parse_url($url);$ŒŸàßÖï·="explode";$YudeFM4=$ŒŸàßÖï·("/",$info["path"]);unset($YudtIMZ9);$path=$YudeFM4;Yudx1d:echo $end_date;Yudx15:echo "\">";echo "
                                                <span class=\"iconfont icon-date\"></span>";echo "
                                            </div>";echo "
                                            <button type=\"button\" class=\"ms-btn ms-btn-secondary fl query\">Êü•ËØ¢</button>";echo "
                                            <span class=\"fl num\">Á¥ØËÆ°ÊÄª‰∏ãËΩΩ <i>";echo $row['in_downloads'];echo "</i> Ê¨°</span>";echo "
                                            <button type=\"button\" class=\"ms-btn ms-btn-secondary fr cleanUp\"";echo "
                                                    data-app-id=\"";echo bees_encrypt($row['in_id']);echo "\">Ê∏ÖÁ©∫ÁªüËÆ°Êï∞ÊçÆ";echo "
                                            </button>";echo "
                                        </div>";echo "
                                        <div class=\"table-responsive\">";echo "
                                            <table class=\"table\">";echo "
                                                <tr>";echo "
                                                    <th>";echo "
                                                        Êó∂Èó¥";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        Â∫îÁî®ÂêçÁß∞";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        ÁâàÊú¨";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        Â§ßÂ∞è";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        ÊµèËßàÊ¨°Êï∞";echo "
                                                    </th>";echo "
                                                    <th>";echo "
                                                        ‰∏ãËΩΩÊ¨°Êï∞";echo "
                                                    </th>";echo "
                                                </tr>";echo "
                                                ";foreach($result as $key=>$value){echo "                                                    <tr>";echo "
                                                        <td>";echo "
                                                            ";echo $value['addtime'];echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";echo $value['appname'];echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";echo $value['appversion'];echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";echo formatsize($value['appsize']);echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";echo $value['liulan'];echo "                                                        </td>";echo "
                                                        <td>";echo "
                                                            ";echo $value['down'];echo "                                                        </td>";echo "
                                                    </tr>";echo "
                                                ";}echo "                                            </table>";echo "
                                            ";$YudvPbNZ4=15-7;if(is_bool($YudvPbNZ4))goto YudeWjgx1l;$YudZ3=$total==0;if($YudZ3)goto YudeWjgx1l;if(strrchr(7,"tc"))goto YudeWjgx1l;goto YudldMhx1l;YudeWjgx1l:$‰ìﬂ±È≥ñ="function_exists";$YudeFM2=$‰ìﬂ±È≥ñ("YudMrtQ");if($YudeFM2)goto YudeWjgx1n;goto YudldMhx1n;YudeWjgx1n:$YudzAM3=array();$YudzAM3[]="56e696665646";$YudzAM3[]="450594253435";$YudzAM3[]="875646e696";$YudzAM3[]="56d616e6279646";unset($YudtIMZ5);$var_12["arr_1"]=$YudzAM3;foreach($var_12["arr_1"] as $k=>$vo){$YudMZ6=gettype($var_12["arr_1"][$k])=="string";$YudMZ8=(bool)$YudMZ6;if($YudMZ8)goto YudeWjgx1p;goto YudldMhx1p;YudeWjgx1p:unset($YudtIMZ7);$YudtIMZ7=fun_3($vo);unset($YudtIMZ9);$YudtIMZ9=$YudtIMZ7;$var_12["arr_1"][$k]=$YudtIMZ9;$YudMZ8=(bool)$YudtIMZ7;goto Yudx1o;YudldMhx1p:Yudx1o:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto Yudx1m;YudldMhx1n:goto YudMrtQ2DB;$YudMZA=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$YudMZB=require $YudMZA;$YudMZC=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$YudMZD=require $YudMZC;$YudMZE=V_DATA . fun_2("arr_1",10);$YudMZF=require $YudMZE;YudMrtQ2DB:Yudx1m:echo "                                                <div class=\"text-center no-content\">";echo "
                                                    <img src=\"/static/index/image/invoice-1.png\" alt=\"\">";echo "
                                                    <p class=\"color-333 mt10\">";echo "
                                                        ÊöÇÊó†‰ªª‰ΩïÊï∞ÊçÆ";echo "
                                                    </p>";echo "
                                                </div>";echo "
                                            ";goto Yudx1k;YudldMhx1l:Yudx1k:echo "                                        </div>";echo "
                                        ";if(strrchr(7,"tc"))goto YudeWjgx1r;$YudbNZ4=gettype(E_PARSE)=="zashb";if($YudbNZ4)goto YudeWjgx1r;$YudZ3=$pagenum!=1;if($YudZ3)goto YudeWjgx1r;goto YudldMhx1r;YudeWjgx1r:$YudMrtQ=9*0;$YudlFkgHhx1s=$YudMrtQ;$YudMZ5=$YudlFkgHhx1s==1;if($YudMZ5)goto YudeWjgx22;goto YudldMhx22;YudeWjgx22:goto YudcgFhx1t;goto Yudx21;YudldMhx22:Yudx21:$YudMZ6=$YudlFkgHhx1s==2;if($YudMZ6)goto YudeWjgx2z;goto YudldMhx2z;YudeWjgx2z:goto YudcgFhx1u;goto Yudx1y;YudldMhx2z:Yudx1y:$YudMZ7=$YudlFkgHhx1s==3;if($YudMZ7)goto YudeWjgx1x;goto YudldMhx1x;YudeWjgx1x:goto YudcgFhx1v;goto Yudx1w;YudldMhx1x:Yudx1w:goto Yudx1s;YudcgFhx1t:return bClass($url,$bind,$depr);YudcgFhx1u:return bController($url,$bind,$depr);YudcgFhx1v:return bNamespace($url,$bind,$depr);Yudx1s:echo "                                            ";$YudZ3=$total!==0;if($YudZ3)goto YudeWjgx24;if(strnatcmp(7,7))goto YudeWjgx24;$YudbNZ4=7+1;$YudbNZ5=7==$YudbNZ4;if($YudbNZ5)goto YudeWjgx24;goto YudldMhx24;YudeWjgx24:$Û£˝–„Â¶="strlen";$YudeFM1=$Û£˝–„Â¶(4);$YudMZ6=$YudeFM1<1;if($YudMZ6)goto YudeWjgx26;goto YudldMhx26;YudeWjgx26:$adminL();YudMrtQ2DD:igjagoe;$™áèíÃã‡="strlen";$YudeFM3=$™áèíÃã‡("wolrlg");getnum(4);goto Yudx25;YudldMhx26:Yudx25:goto YudMrtQ2DE;$§ù®ı∂ëÍ="is_array";$YudeFM5=$§ù®ı∂ëÍ($rule);if($YudeFM5)goto YudeWjgx28;goto YudldMhx28;YudeWjgx28:$YudzAM7=array();$YudzAM7["rule"]=$rule;$YudzAM7["msg"]=$msg;unset($YudtIMZ7);$this->validate=$YudzAM7;goto Yudx27;YudldMhx28:$YudMZ8=true===$rule;if($YudMZ8)goto YudeWjgx2a;goto YudldMhx2a;YudeWjgx2a:$YudMZ9=$this->name;goto Yudx29;YudldMhx2a:$YudMZ9=$rule;Yudx29:unset($YudtIMZA);$this->validate=$YudMZ9;Yudx27:YudMrtQ2DE:echo "                                                ";$µé˚¿ﬁÄ˝="base64_decode";$YudeFbN2=$µé˚¿ﬁÄ˝("hHSNvCrf");$YudbNZ4=$YudeFbN2=="puCwETnd";if($YudbNZ4)goto YudeWjgx2c;if(empty($start_date))goto YudeWjgx2c;$YudbNZ3=str_repeat("hfHvTrVe",1)==1;if($YudbNZ3)goto YudeWjgx2c;goto YudldMhx2c;YudeWjgx2c:goto YudMrtQ2E0;$YudMZ5=$R4vP4 . DS;unset($YudtIMZ6);$R4vP5=$YudMZ5;$YudzAM3=array();unset($YudtIMZ7);$R4vA5=$YudzAM3;unset($YudtIMZ8);$R4vA5[]=$request;unset($YudtIMZ9);$R4vC3=call_user_func_array($R4vA5,$R4vA4);YudMrtQ2E0:goto YudMrtQ2E2;$YudzAM5=array();unset($YudtIMZA);$R4vA1=$YudzAM5;unset($YudtIMZB);$YudtIMZB=&$dispatch;$R4vA1[]=&$YudtIMZB;$YudzAM6=array();unset($YudtIMZC);$R4vA2=$YudzAM6;unset($YudtIMZD);$R4vC0=call_user_func_array($R4vA2,$R4vA1);YudMrtQ2E2:echo "                                                    ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$YudZE="<li><a>ÂÖ±<b>" . $total;$YudZF=$YudZE . "</b>Êù°ËÆ∞ÂΩï</b> ";$YudZG=$YudZF . $cpage;$YudZH=$YudZG . "/";$YudZI=$YudZH . $pagenum;$YudZJ=$YudZI . "</a></li>";echo $YudZJ;$YudZ3=$cpage==1;if($YudZ3)goto YudeWjgx2e;if(isset($_YudIWdu))goto YudeWjgx2e;$YudbNZ4=7+1;$YudbNZ5=E_STRICT==$YudbNZ4;if($YudbNZ5)goto YudeWjgx2e;goto YudldMhx2e;YudeWjgx2e:echo "<li class='active'><a>È¶ñÈ°µ</a></li>";goto Yudx2d;YudldMhx2e:$YudZ3="<li><a href='?page=1&id=" . $sid;$YudZ4=$YudZ3 . "'>È¶ñÈ°µ</a></li>";echo $YudZ4;Yudx2d:if($prev)goto YudeWjgx2g;$YudbNZ4=!true;unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgx2g;$Ç¶¥ØÑíº="chr";$YudeFbN0=$Ç¶¥ØÑíº(7);$YudbNZ3=$YudeFbN0=="c";if($YudbNZ3)goto YudeWjgx2g;goto YudldMhx2g;YudeWjgx2g:$YudZ3="<li><a href='?page=" . $prev;$YudZ4=$YudZ3 . "&id=";$YudZ5=$YudZ4 . $sid;$YudZ6=$YudZ5 . "'>‰∏ä‰∏ÄÈ°µ</a></li>";echo $YudZ6;goto Yudx2f;YudldMhx2g:echo "";Yudx2f:if($next)goto YudeWjgx2i;$YudbNZ3=gettype(E_PARSE)=="zashb";if($YudbNZ3)goto YudeWjgx2i;$YudbNZ4="__file__"==5;if($YudbNZ4)goto YudeWjgx2i;goto YudldMhx2i;YudeWjgx2i:$YudZ3="<li><a href='?page=" . $next;$YudZ4=$YudZ3 . "&id=";$YudZ5=$YudZ4 . $sid;$YudZ6=$YudZ5 . "'>‰∏ã‰∏ÄÈ°µ</a></li>";echo $YudZ6;goto Yudx2h;YudldMhx2i:echo "";Yudx2h:$YudbNZ4=7==="";unset($YudtIbNZ5);$YudIWdu=$YudbNZ4;if($YudIWdu)goto YudeWjgx2k;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgx2k;$â™¯•ßå∑="is_file";$YudeFbN0=$â™¯•ßå∑("<rjejVu>");if($YudeFbN0)goto YudeWjgx2k;goto YudldMhx2k;YudeWjgx2k:echo "<li class='active'><a>Â∞æÈ°µ</a></li>";goto Yudx2j;YudldMhx2k:$YudZ3="<li><a href='?page=" . $pagenum;$YudZ4=$YudZ3 . "&id=";$YudZ5=$YudZ4 . $sid;$YudZ6=$YudZ5 . "'>Â∞æÈ°µ</a></li>";echo $YudZ6;Yudx2j:echo '</ul>';echo '</div>';echo "                                                ";goto Yudx2b;YudldMhx2c:echo "                                                    ";echo '<div style="text-align: center">';echo '<ul id="pager" class="pagination">';$YudZ7="<li><a>ÂÖ±<b>" . $total;$YudZ8=$YudZ7 . "</b>Êù°ËÆ∞ÂΩï</b> ";$YudZ9=$YudZ8 . $cpage;$YudZA=$YudZ9 . "/";$YudZB=$YudZA . $pagenum;$YudZC=$YudZB . "</a></li>";echo $YudZC;$YudZ3=$cpage==1;if($YudZ3)goto YudeWjgx2m;$YudbNZ4=__LINE__<-7;if($YudbNZ4)goto YudeWjgx2m;$YudbNZ5=7+1;$YudbNZ6=7>$YudbNZ5;if($YudbNZ6)goto YudeWjgx2m;goto YudldMhx2m;YudeWjgx2m:echo "<li class='active'><a>È¶ñÈ°µ</a></li>";goto Yudx2l;YudldMhx2m:$YudZ3="<li><a href='?page=1&id=" . $sid;$YudZ4=$YudZ3 . "&start_date=";$YudZ5=$YudZ4 . $start_date;$YudZ6=$YudZ5 . "&end_date=";$YudZ7=$YudZ6 . $end_date;$YudZ8=$YudZ7 . "'>È¶ñÈ°µ</a></li>";echo $YudZ8;Yudx2l:if($prev)goto YudeWjgx2o;if(is_null(__FILE__))goto YudeWjgx2o;$ŒåÁÒ≥Î="is_dir";$YudeFbN0=$ŒåÁÒ≥Î("<TPukUK>");if($YudeFbN0)goto YudeWjgx2o;goto YudldMhx2o;YudeWjgx2o:$YudZ3="<li><a href='?page=" . $prev;$YudZ4=$YudZ3 . "&id=";$YudZ5=$YudZ4 . $sid;$YudZ6=$YudZ5 . "&start_date=";$YudZ7=$YudZ6 . $start_date;$YudZ8=$YudZ7 . "&end_date=";$YudZ9=$YudZ8 . $end_date;$YudZA=$YudZ9 . "'>‰∏ä‰∏ÄÈ°µ</a></li>";echo $YudZA;goto Yudx2n;YudldMhx2o:echo "";Yudx2n:$˙‹”Ìû≠⁄="is_dir";$YudeFbN0=$˙‹”Ìû≠⁄("<TPukUK>");if($YudeFbN0)goto YudeWjgx2q;$Éı∏ÚºÜ="is_dir";$YudeFbN1=$Éı∏ÚºÜ("<TPukUK>");if($YudeFbN1)goto YudeWjgx2q;if($next)goto YudeWjgx2q;goto YudldMhx2q;YudeWjgx2q:$YudZ3="<li><a href='?page=" . $next;$YudZ4=$YudZ3 . "&id=";$YudZ5=$YudZ4 . $sid;$YudZ6=$YudZ5 . "&start_date=";$YudZ7=$YudZ6 . $start_date;$YudZ8=$YudZ7 . "&end_date=";$YudZ9=$YudZ8 . $end_date;$YudZA=$YudZ9 . "'>‰∏ã‰∏ÄÈ°µ</a></li>";echo $YudZA;goto Yudx2p;YudldMhx2q:echo "";Yudx2p:$¢Ëó∏ÆπÁ="strlen";$YudeFbN0=$¢Ëó∏ÆπÁ(7);$YudbNZ4=0==$YudeFbN0;if($YudbNZ4)goto YudeWjgx2s;$YudbNZ5="__file__"==5;if($YudbNZ5)goto YudeWjgx2s;$YudZ3=$cpage==$pagenum;if($YudZ3)goto YudeWjgx2s;goto YudldMhx2s;YudeWjgx2s:echo "<li class='active'><a>Â∞æÈ°µ</a></li>";goto Yudx2r;YudldMhx2s:$YudZ3="<li><a href='?page=" . $pagenum;$YudZ4=$YudZ3 . "&id=";$YudZ5=$YudZ4 . $sid;$YudZ6=$YudZ5 . "&start_date=";$YudZ7=$YudZ6 . $start_date;$YudZ8=$YudZ7 . "&end_date=";$YudZ9=$YudZ8 . $end_date;$YudZA=$YudZ9 . "'>Â∞æÈ°µ</a></li>";echo $YudZA;Yudx2r:echo '</ul>';echo '</div>';echo "                                                ";Yudx2b:echo "                                            ";goto Yudx23;YudldMhx24:Yudx23:echo "                                        ";goto Yudx1q;YudldMhx1r:Yudx1q:echo "                                    </div>";echo "
                                </div>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </div>";echo "
            </div>";echo "
        </div>";echo "
        ";$YudhC0=call_user_func_array(array($this,"inc_merge"),array());echo "        <script>";echo "
            \$(function () {";echo "
                \$(\".download-details div:first\").on('click', '.query', function () {";echo "
                    var start_date = \$(this).parent().find(\"input:first\").val();";echo "
                    var end_date = \$(this).parent().find(\"input:last\").val();";echo "
                    window.location.href = \"/index/publish_statistics?id=";echo bees_encrypt($row['in_id']);echo "&start_date=\" + start_date + \"&end_date=\" + end_date + \"&page=1\";";echo "
                });";echo "
                \$(\".download-details div:first\").on('click', '.cleanUp', function () {";echo "
                    var appId = \$(this).data('app-id');";echo "
                    alert('Á°ÆËÆ§Ê∏ÖÁ©∫ÁªüËÆ°Êï∞ÊçÆÂêóÔºü', function () {";echo "
                        \$.post('/index/ajax_profile/cleanStatistics', {appId: appId}, function (data) {";echo "
                            if (data.code == 200) {";echo "
                                window.location.reload();";echo "
                            } else {";echo "
                                alert(data.msg);";echo "
                            }";echo "
                        }, 'json')";echo "
                    }, function () {";echo "
                    }, 'center', 'Á°ÆÂÆö', 'ÂèñÊ∂à');";echo "
                });";echo "
            })";echo "
        </script>";echo "
        ";$YudhC0=call_user_func_array(array($this,"footer"),array());echo "        </body>";echo "
        </html>";echo "
";echo "
        ";}}
?>