<?php
/*
 ±¾´úÂëÓÉ PHP´úÂë¼ÓÃÜ¹¤¾ß Xend [×¨Òµ°æ](Build 5.05.56) ´´½¨
 ´´½¨Ê±¼ä 2020-08-31 21:57:37
 ¼¼ÊõÖ§³Ö QQ:30370740 Mail:support@phpXend.com
 ÑÏ½û·´±àÒë¡¢ÄæÏòµÈÈÎºÎÐÎÊ½µÄÇÖÈ¨ÐÐÎª£¬Î¥Õß½«×·¾¿·¨ÂÉÔðÈÎ
*/

namespace app\index;class logout extends BaseUser{function index(){$ê˜­Õ÷³µ="time";$YudeFvP0=$ê˜­Õ÷³µ();$YudvPZ3=$YudeFvP0-1;setcookie('in_userid','',$YudvPZ3,IN_PATH);$Ïö±Èãã="time";$YudeFvP0=$Ïö±Èãã();$YudvPZ3=$YudeFvP0-1;setcookie('in_username','',$YudvPZ3,IN_PATH);$ƒ…¸ê„à§="time";$YudeFvP0=$ƒ…¸ê„à§();$YudvPZ3=$YudeFvP0-1;setcookie('in_userpassword','',$YudvPZ3,IN_PATH);redirect('/index/login');}}
?>