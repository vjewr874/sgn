<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\index;class ajax_utils extends Base{function index(){unset($E4wtIAC);$app=$_POST['app'];unset($E4wtIAC);$bundle=$_POST['bundle'];unset($E4wtIAC);$downloadLink=$_POST['downloadLink'];unset($E4wtIAC);$link=$_POST['link'];$�������="header";$E4weF0=$�������('Content-type: text/xml; charset=UTF-8');$E4wvPAC='Content-Disposition:attachement;filename=' . $app;$E4wvPAD=$E4wvPAC . '.plist';$��؟�ۮ="header";$E4weF0=$��؟�ۮ($E4wvPAD);$E4wAC='<?xml version="1.0" encoding="UTF-8"?>
<plist version="1.0">
  <dict>
      <key>items</key>
      <array>
        <dict>
           <key>assets</key>
           <array>
             <dict>
               <key>kind</key>
               <string>software-package</string>
               <key>url</key>
               <string><![CDATA[' . $downloadLink;$E4wAD=$E4wAC . ']]></string>
             </dict>
             <dict>
               <key>kind</key>
               <string>display-image</string>
               <key>needs-shine</key>
               <integer>0</integer>
               <key>url</key>
               <string><![CDATA[';$E4wAE=$E4wAD . $link;$E4wAF=$E4wAE . ']]></string>
             </dict>
             <dict>
               <key>kind</key>
               <string>full-size-image</string>
               <key>needs-shine</key>
               <true/>
               <key>url</key>
               <string><![CDATA[';$E4wAG=$E4wAF . $link;$E4wAH=$E4wAG . ']]></string>
             </dict>
           </array>
           <key>metadata</key>
           <dict>
             <key>bundle-identifier</key>
             <string>';$E4wAI=$E4wAH . $bundle;$E4wAJ=$E4wAI . '</string>
             <key>bundle-version</key>
             <string><![CDATA[1.0.0]]></string>
             <key>kind</key>
             <string>software</string>
             <key>title</key>
             <string><![CDATA[';$E4wAK=$E4wAJ . $app;$E4wAL=$E4wAK . ']]></string>			 
           </dict>
        </dict>
      </array>
  </dict>
</plist>';echo $E4wAL;}}
?>