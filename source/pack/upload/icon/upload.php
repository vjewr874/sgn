<?php

include '../../../system/db.class.php';
if (!isAdminLogin()) {
    exit(iframe_message("请先登录管理中心！"));
}
echo '<!DOCTYPE html>
<html lang="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=' . IN_CHARSET . '" />
<title>一键切图</title>
<link href="' . IN_PATH . 'static/pack/upload/uploadify.css" rel="stylesheet" type="text/css" />
<script src="' . IN_PATH . 'static/pack/layer/jquery.js"></script>
<script src="' . IN_PATH . 'static/pack/upload/uploadify.js"></script>
<script>
var in_php = \'' . IN_PATH . 'source/pack/upload/icon/save.php\';
var in_post = \'' . IN_EXT . '\';
var in_size = 2;
function return_response(response){
        if (response == 1) {
                location.href = "' . IN_PATH . 'data/icon/icon.zip?" + Math.random();
        } else if (response == -1) {
                $(".uploadifySuccess").hide();
                $(".uploadifyError").show().text("文件不规范，请重新选择！");
        } else if (response == -2) {
                $(".uploadifySuccess").hide();
                $(".uploadifyError").show().text("上传出错，请重试！");
        } else {
                $(".uploadifySuccess").hide();
                $(".uploadifyError").show().text(response);
        }
}
</script>
</head>
<body>
<div id="fileQueue">
	<div class="uploadifyQueueItem uploadifySuccess" style="display:none">
		<div class="cancel">
			<a href="javascript:cancle()"><img src="' . IN_PATH . 'static/pack/upload/cancel.png" border="0"></a>
		</div>
		<span class="fileName"></span><span class="percentage"></span>
		<div class="uploadifyProgress">
			<div class="uploadifyProgressBar"></div>
		</div>
	</div>
	<div class="uploadifyQueueItem uploadifyError" style="display:none"></div>
</div>
<input type="file" id="uploadify" onchange="uploadify()" style="display:none">
<img src="' . IN_PATH . 'static/pack/upload/up.png" style="cursor:pointer" onclick="$(\'#uploadify\').click()">
</body>
</html>';