<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

echo "<link rel=\"stylesheet\" href=\"/static/pack/kindeditor/themes/default/default.css\"/>";echo "
<script charset=\"utf-8\" src=\"/static/pack/kindeditor/kindeditor-all-min.js\"></script>";echo "
<script charset=\"utf-8\" src=\"/static/pack/kindeditor/lang/zh-CN.js\"></script>";echo "
<script>";echo "
    var editor;";echo "
    KindEditor.ready(function (K) {";echo "
        editor = K.create('textarea[name=\"content\"]', {";echo "
            // allowFileManager: true,";echo "
            uploadJson: '/upload/index/kindeditor',";echo "
            themeType: 'simple',";echo "
            afterBlur: function () {";echo "
                this.sync();";echo "
            }";echo "
        });";echo "
    });";echo "
</script>";
?>