<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"/>
    <meta name="keywords" content="<?php echo IN_KEYWORDS;?>"/>
    <meta name="description" content="<?php echo IN_DESCRIPTION;?>"/>
    <title>APP打包封装 - <?php echo IN_NAME;?> - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
    <?php 
$this->static_();
?>    <link href="<?php echo IN_PATH;?>static/pack/colpick/colpick.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/static/index/css/spectrum.css">
    <script src="<?php echo IN_PATH;?>static/index/js/jquery.form.js"></script>
    <script src="<?php echo IN_PATH;?>static/pack/colpick/colpick.js"></script>
    <script src="<?php echo IN_PATH;?>static/pack/webview/lib.js"></script>
    <script>
        var in_path = '<?php echo IN_PATH;?>';
        var in_login = '<?php echo $this->userlogined ? "1" : "-1";?>';
        var in_time = '<?php echo $time;?>';
        var step = '<?php echo $step;?>';
    </script>
</head>
<body>
<?php 
$this->header();
?>
<div class="release-app-wrap">
    <div class="container">
        <div class="release-app2">
            <div class="crumbs">
                <a href="/index/webview">APP封装</a><span>/</span>WEB标准封装
            </div>
            <div class="row clearfix signature1">
                <?php 
$this->webview_left();
?>                <div class="col-sm-10">
                    <div class="aside-right">
                        <ul class="step clearfix">
                            <li class="active">
                                <span>1</span>基本信息
                            </li>
                            <li>
                                <span>2</span>上传图标
                            </li>
                            <li>
                                <span>3</span>配置插件
                            </li>
                            <li>
                               <span>4</span>下载APP
                             </li>
                            <li>
                                <span>5</span>上传发布
                            </li>

                        </ul>
                        <div class="account-management real-name" style="height: auto;padding: 0px">
                            <form id="mainForm">
                                <div class="pack-step1 encapsulation">
                                    <div class="step1 step-common">
                                        <input type="hidden" name="edit" value="<?php echo $edit;?>">
                                        <input type="hidden" name="id" value="<?php echo $id;?>">
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>应用类型</label>
                                            <div class="col-sm-6">
                                                <div class="input-text ptype">
                                                    <label class="<?php echo $data["type"] == 0 ? "selon" : "";?>"
                                                           style="">
                                                        <img src="/static/index/image/Android.png"
                                                             style="width:36px;"> 安卓应用（apk）
                                                        <input type="radio" name="type"
                                                               value="0" <?php echo $data["type"] == 0 ? "checked" : "";?>                                                               style="display:none;">
                                                    </label>
                                                    <label class="<?php echo $data["type"] == 1 ? "selon" : "";?>">
                                                        <img src="/static/index/image/iOS.png"
                                                             style="width:36px;"> 苹果应用（ipa）
                                                        <input type="radio" name="type"
                                                               value="1"<?php echo $data["type"] == 1 ? "checked" : "";?>                                                               style="display:none;">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $('.ptype>label').click(function () {
                                                $(this).addClass('selon').siblings().removeClass('selon');
                                            });
                                        </script>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>APP名称</label>
                                            <div class="col-sm-6">
                                                <div class="input-text">
                                                    <input type="text" id="in_title" name="in_title"
                                                           class="form-control input-change1" rows="5"
                                                           placeholder="请填写APP名字，建议5个字以内的中文，英文或数字"
                                                           value="<?php echo $data["name"];?>">
                                                    <div class="error1 color-danger">名字不能为空，且仅支持中文，英文或数字，不支持特殊字符
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>网站链接</label>
                                            <div class="col-sm-6">
                                                <div class="input-text">
                                                    <input type="text" class="form-control input-change2 "
                                                           id="in_url"
                                                           name="in_url" rows="5"
                                                           placeholder="请您填写完整的网站链接（例如：http://<?php echo $_SERVER["HTTP_HOST"];?>/)"
                                                           value="<?php echo $data["url"];?>">
                                                    <div class="error1 color-danger">
                                                        请输入完整的网站链接，必须带http或https开头的链接地址
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>横竖屏</label>
                                            <div class="col-sm-6">
                                                <div class="input-text">
                                                    <label>
                                                        <input type="radio" name="screenOrientation"
                                                               value="0" <?php echo $data["config"]["screenOrientation"] == 0 ? "checked" : "";?>>
                                                        自适应
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="screenOrientation"
                                                               value="1"<?php echo $data["config"]["screenOrientation"] == 1 ? "checked" : "";?>>
                                                        始终横屏
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="screenOrientation"
                                                               value="2"<?php echo $data["config"]["screenOrientation"] == 2 ? "checked" : "";?>>
                                                        始终竖屏
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group clearfix">
			<label class="control-label col-sm-2"><span>*</span>包名(Bundle ID)</label>
			<div class="col-sm-6">
				<div class="input-text">
					<label><input type="radio" name="bidtype" value="0" checked> 默认</label> <label><input type="radio" name="bidtype" value="1"> 自定义</label>
				</div>
				<div class="input-text" id="bidtype_box" style="display:none;">
					<input type="text" id="bundle_id" name="bundle_id" class="form-control input-change1" rows="5" placeholder="自定义包名，不懂请留空即可" value="<?php echo $data["bundle_id"];?>">
					<div class="error1 color-danger">包名格式如：com.xuanfeng.app</div>
				</div>
			</div>
		</div>
		
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>版本号</label>
                                            <div class="col-sm-6">
               <div class="input-text">
					<label><input type="radio" name="bidtypee" value="0" checked> 默认</label> <label><input type="radio" name="bidtypee" value="1"> 自定义</label>
				</div>
				<div class="input-text" id="bidtype_boxx" style="display:none;">
					<input type="text" id="version" name="version" class="form-control input-change1" rows="5" placeholder="默认1.0.0" value="<?php echo $data["version"];?>">
					
				</div>
                                                
                                            </div>
                                        </div>
                                        <!--收费-->
                                        <?php 
if (!$id) {
	?>                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>选择套餐</label>
                                                <div class="col-sm-6">
                                                    <ul class="clearfix period">
                                                        <?php 
	$active = "active";
	$checked = "icon-radio-checked";
	$index = 0;
	if (!empty($IN_WEBVIEWPOINTS[0])) {
		?>                                                            <li class="clearfix  <?php echo $active;?>"
                                                                data-id="0"
                                                                data-price="<?php echo $IN_WEBVIEWPOINTS[0];?>">
                                                                <span class="icon icon-radio fl <?php echo $checked;?>"></span>
                                                                <span class="fl">一个月</span>
                                                            </li>
                                                            <?php 
		$active = $checked = "";
	}
	echo "                                                        ";
	if (!empty($IN_WEBVIEWPOINTS[1])) {
		$index = $active ? 1 : $index;
		?>                                                            <li class="clearfix  <?php echo $active;?>"
                                                                data-id="1"
                                                                data-price="<?php echo $IN_WEBVIEWPOINTS[1];?>">
                                                                <span class="icon icon-radio fl <?php echo $checked;?>"></span>
                                                                <span class="fl">三个月</span>
                                                            </li>
                                                            <?php 
		$active = $checked = "";
	}
	echo "                                                        ";
	if (!empty($IN_WEBVIEWPOINTS[2])) {
		$index = $active ? 2 : $index;
		?>                                                            <li class="clearfix  <?php echo $active;?>"
                                                                data-id="2"
                                                                data-price="<?php echo $IN_WEBVIEWPOINTS[2];?>">
                                                                <span class="icon icon-radio fl <?php echo $checked;?>"></span>
                                                                <span class="fl">六个月</span>
                                                            </li>
                                                            <?php 
		$active = $checked = "";
	}
	echo "                                                        ";
	if (!empty($IN_WEBVIEWPOINTS[3])) {
		$index = $active ? 3 : $index;
		?>                                                            <li class="clearfix  <?php echo $active;?>"
                                                                data-id="3"
                                                                data-price="<?php echo $IN_WEBVIEWPOINTS[3];?>">
                                                                <span class="icon icon-radio fl <?php echo $checked;?>"></span>
                                                                <span class="fl">一年</span>
                                                            </li>
                                                            <?php 
		$active = $checked = "";
	}
	echo "                                                        ";
	if (!empty($IN_WEBVIEWPOINTS[4])) {
		$index = $active ? 4 : $index;
		?>                                                            <li class="clearfix  <?php echo $active;?>"
                                                                data-id="4"
                                                                data-price="<?php echo $IN_WEBVIEWPOINTS[4];?>">
                                                                <span class="icon icon-radio fl <?php echo $checked;?>"></span>
                                                                <span class="fl">永久</span>
                                                            </li>
                                                        <?php 
	}
	?>                                                    </ul>
                                                    <script>
                                                        $('ul.period>li').click(function () {
                                                            $(this).addClass('active').siblings().removeClass('active');
                                                            $('ul.period>li .icon-radio').removeClass('icon-radio-checked');
                                                            $(this).find('.icon-radio').addClass('icon-radio-checked');
                                                            $('#price').html('<b class="color-danger">' + $(this).attr('data-price') + '</b>元');
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2 col-xs-4"><span>*</span>收费标准</label>
                                                <div class="col-sm-2 col-xs-4" id="price">
                                                    
                                                   <b class="color-danger"><?php echo $IN_WEBVIEWPOINTS[$index];?></b>元
                                                </div>
												 <div class="col-sm-2 col-xs-4"><a class="ms-btnna ms-btn-secondarya"><img src="/img/ye.png" alt="">余额￥<?php echo $this->user["money"];?></a></div>
												 <div class="col-sm-2 col-xs-4"><a class="ms-btn ms-btn-secondaryy" href="<?php echo IN_PATH;?>index/item_price" target="_blank"><font color="#ffffff">充值</font></a></div>
                                            </div>
                                        <?php 
}
?>                                    </div>
                                    <div class="step2 step-common">
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>APP图标</label>
                                            <div class="clearfix col-sm-6">
                                                <input type="file" id="upload_a_icon" onchange="upload_icon()"
                                                       style="display:none">
                                                <div id="preview_a_icon" class="upload-icon fl "
                                                     onclick="$('#upload_a_icon').click()">
                                                    <?php 
if (!empty($data["icon"])) {
	?>                                                        <img src="<?php echo $data["icon"];?>">
                                                    <?php 
} else {
	?>                                                        <div class="text">点击上传图片</div>
                                                        <div class="reset">重新上传</div>
                                                    <?php 
}
?>                                                </div>
                                                <div class="img-note fl">
                                                    <div>
                                                        <a class="ms-btn ms-btn-secondary mb5"
                                                           href="<?php echo IN_PATH;?>index/icon_make"
                                                           target="_blank">在线制作图标</a>
                                                        <p>200*200尺寸，小于1M<br>PNG格式</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>启动图</label>
                                            <div class="clearfix col-sm-6">
                                                <input type="file" id="upload_l_image"
                                                       onchange="upload_launch()"
                                                       style="display:none">
                                                <div id="preview_l_image" class="upload-icon fl upload-img"
                                                     onclick="$('#upload_l_image').click()">
                                                    <?php 
if (!empty($data["launch"])) {
	?>                                                        <img src="<?php echo $data["launch"];?>">
                                                    <?php 
} else {
	?>                                                        <div class="text">点击上传图片</div>
                                                        <div class="reset">重新上传</div>
                                                    <?php 
}
?>                                                </div>
                                                <div class="img-note img-note1 fl">
                                                    <div>
                                                        <p>1242*2208尺寸，小于1M<br>PNG格式</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2"><span>*</span>显示时间</label>
                                            <div class="col-sm-6">
                                                <div class="input-text">
                                                    <label>
                                                        <input type="radio" name="splashTime"
                                                               value="0" <?php echo $data["config"]["splashTime"] == 0 ? "checked" : "";?>>
                                                        不显示
                                                    </label>
                                                    <label>
                                                       
                                                        <input type="radio" name="splashTime"
                                                               value="1"<?php echo $data["config"]["splashTime"] == 1 ? "checked" : "";?>>
                                                        1秒
                                                    </label>
                                                    <label>
                                                        <input type="radio" class="active" name="splashTime"
                                                               value="2"<?php echo $data["config"]["splashTime"] == 2 ? "checked" : "";?>>
                                                        2秒
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="splashTime"
                                                               value="3"<?php echo $data["config"]["splashTime"] == 3 ? "checked" : "";?>>
                                                        3秒
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="splashTime"
                                                               value="4"<?php echo $data["config"]["splashTime"] == 4 ? "checked" : "";?>>
                                                        4秒
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step3 step-common encapsulation3">
                                        <script>
                                            var id = "0";
                                            var navData = {};
                                            var titleBar = {};
                                            var share = {};
                                            var asideData = {};
                                            var stateBar = {};
                                            var supportLongPressSavePicture = 0;
                                            var supportQrcodeScan = 0;
                                            var skidBack = 0;
                                            var noNet = 0;
                                            var installTip = 0;
                                            var keepScreen = 0;
                                            var hideBottom = 0;
                                            var supportZoom = 0;
                                            var guide = {};
                                            var supportGuideEnterMainPageButton = 1;
                                            var guideEnterMainPageButtonColor = '#ffffff';
                                            var plugin = {};
                                            var device_type = 0;
                                            var androidKey = {};
                                            $(function () {
                                                if (id && device_type) {
                                                    checkDevicePlugin(device_type);
                                                }

                                                $("#keystore-upload").on('change', function (event) {
                                                    var e = window.event || event
                                                    var file = e.target.files[0]
                                                    let data = new FormData;
                                                    data.append("keysotre", file);
                                                    $.ajax({
                                                        type: 'post',
                                                        url: "/webview/ajax/uploadkeystore",
                                                        dataType: "json",
                                                        data: data,
                                                        processData: false,
                                                        contentType: false,
                                                        success: function (res) {
                                                            if (res.data) {
                                                                $('#keystoreModal .keystore-wrap').find("input[name='store_storepass']").val('').removeAttr('readonly');
                                                                $('#keystoreModal .keystore-wrap').find("input[name='store_alias']").val('').removeAttr('readonly');
                                                                $('#keystoreModal .keystore-wrap').find("input[name='store_keypass']").val('').removeAttr('readonly');
                                                                $('.keystore-input').val('上传成功');
                                                                $('.store_file_content').val(res.data.key);
                                                                $(".keystore-clear").val('重置证书');
                                                                keystore_download_toggle()
                                                            }
                                                        }
                                                    })
                                                });
                                                keystore_download_toggle();
                                                $('.keystore-download').on('click', function () {
                                                    var alias = $('.store_file_content').val();
                                                    var url = "/webview/ajax/downloadkeystore?alias=" + alias;
                                                    window.open(url);
                                                });

                                                $('.keystore-clear').on('click', function () {
                                                    if (!$("input[name=store_alias]").val() || confirm('是否确认重置签名？')) {
                                                        $.post("/webview/ajax/createkeystore", {}, function (ret) {
                                                            if (ret.data) {
                                                                $('.keystore-input').val('系统随机生成')
                                                                $('.store_file_content').val(ret.data.alias);
                                                                $("input[name=store_storepass]").val(ret.data.storepass).attr('readonly', 'readonly');
                                                                $("input[name=store_alias]").val(ret.data.alias).attr('readonly', 'readonly');
                                                                $("input[name=store_keypass]").val(ret.data.keypass).attr('readonly', 'readonly');
                                                                $(".keystore-clear").val('重置证书');
                                                                keystore_download_toggle();
                                                            }
                                                        }, 'json')
                                                    }
                                                });

                                                function keystore_download_toggle() {
                                                    if ($("input[name=store_alias]").val())
                                                        $('.keystore-download').show();
                                                    else
                                                        $('.keystore-download').hide();
                                                }
                                            })
                                        </script>
                                        <form class="form-horizontal">
                                            <!--            <div class="tit3" style="border-bottom:0px">功能插件</div>-->
                                            <div class="free-tool">基础插件</div>
                                            <div class="plugin-list plugin-list1">
                                                <div class="row clearfix">
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["loadingAnimationType"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#loadingModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/001.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0001.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">加载动画</div>
                                                            </div>
                                                            <div class="c-right fr" id="config1">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["loadingAnimationType"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["clearCookie"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#cacheModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/002.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0002.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">清理缓存</div>
                                                            </div>
                                                            <div class="c-right fr" id="config2">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["clearCookie"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["webViewType"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#browserModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/008.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0008.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">浏览器内核</div>
                                                            </div>
                                                            <div class="c-right fr" id="config3">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["webViewType"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["exitMode"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#exitModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/007.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0007.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">退出提示</div>
                                                            </div>
                                                            <div class="c-right fr" id="config4">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["exitMode"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportPullToRefresh"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#refreshModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/007-1.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0007-1.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">下拉刷新</div>
                                                            </div>
                                                            <div class="c-right fr" id="configRefresh">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["supportPullToRefresh"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--            <div class="tit3" style="border-bottom:0px">高级插件</div>-->
                                            <div class="pay-tool">高级插件</div>
                                            <div class="plugin-list plugin-list2">
                                                <div class="row clearfix">
                                                    <!--状态标题栏-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["isSupportConfigureStatueBarColor"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#titleModal" data-backdrop="static">
                                                            <div class="fl c-left">
                                                                <img src="/static/index/image/006.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0006.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">状态标题栏</div>
                                                                <span class="new"
                                                                      style="position: absolute;top: 2px;left: 2px;border: 1px solid #ff4222;color: #ff4222;padding: 0px 3px;border-radius: 20px;font-size: 12px;">必选</span>
                                                            </div>
                                                            <div class="c-right fr" id="config10">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["isSupportConfigureStatueBarColor"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--导航栏-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportNavigator"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#navModal" data-backdrop="static">
                                                            <div class="fl c-left">
                                                                <img src="/static/index/image/004.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0004.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">导航栏（底部）</div>
                                                            </div>
                                                            <div class="c-right fr" id="config8">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["supportNavigator"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--微信分享-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["shareText"] && $data["config"]["shareUrl"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#shareModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/009.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0009.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">微信分享</div>
                                                            </div>
                                                            <div class="c-right fr" id="config5">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["shareText"] && $data["config"]["shareUrl"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--识别二维码-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportQRCodeScan"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#identifyCodeModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/023.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0023.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">识别二维码</div>
                                                            </div>
                                                            <div class="c-right fr" id="configIdentifyCode">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["supportQRCodeScan"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--侧滑返回-->
                                                    <div class="col-sm-2 ios_unable" id="skidBack"
                                                         style="display: block;">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportRightSlideGoBack"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#skidBackModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/027.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0027.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">侧滑返回</div>
                                                            </div>
                                                            <div class="c-right fr" id="configSkidBack">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["supportRightSlideGoBack"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--长按图片保存-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportLongPressSavePicture"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#photoSaveModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/022.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0022.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">长按图片保存</div>
                                                            </div>
                                                            <div class="c-right fr" id="configPhotoSave">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["supportLongPressSavePicture"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--引导页-->
                                                    <div class="col-sm-2" style="display: none">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportNavigator"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#guideModal" data-backdrop="static">
                                                            <div class="fl c-left">
                                                                <img src="/static/index/image/013.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0013.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">引导页</div>
                                                            </div>
                                                            <div class="c-right fr" id="config11">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["supportNavigator"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--屏幕常亮-->
                                                    <div class="col-sm-2 ios_unable" id="keepScreen"
                                                         style="display: block;">
                                                        <div class="con clearfix <?php 
if ($data["config"]["keepScreen"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#keepScreenModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/028.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0028.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">屏幕常亮</div>
                                                                <span class="new"
                                                                      style="position: absolute;top: 2px;left: 2px;border: 1px solid #ff4222;color: #ff4222;padding: 0px 3px;border-radius: 20px;font-size: 12px;">NEW</span>
                                                            </div>
                                                            <div class="c-right fr" id="configKeepScreen">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["keepScreen"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--URL 拉起APP-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#urlAppModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/008-url.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0008-url.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">URL 拉起APP</div>
                                                            </div>
                                                            <div class="c-right fr" id="configUrlApp">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["urlApp"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--侧边栏-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["supportSideBar"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#asideModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/015.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0015.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">侧边栏</div>
                                                            </div>
                                                            <div class="c-right fr" id="configAside">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1  <?php 
if ($data["config"]["supportSideBar"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--网页缩放-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["isSupportZoom"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#webZoomModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/024.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0024.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">网页缩放</div>
                                                            </div>
                                                            <div class="c-right fr" id="configWebZoom">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["isSupportZoom"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--无网提示-->
                                                    <div class="col-sm-2 ios_unable" id="noNet"
                                                         style="display: block;">
                                                        <div class="con clearfix <?php 
if ($data["config"]["noNet"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#noNetModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/029.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0029.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">无网提示</div>
                                                                <span class="new"
                                                                      style="position: absolute;top: 2px;left: 2px;border: 1px solid #ff4222;color: #ff4222;padding: 0px 3px;border-radius: 20px;font-size: 12px;">NEW</span>
                                                            </div>
                                                            <div class="c-right fr" id="configNoNet">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["noNet"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--极光推送-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["jPushId"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#auroraModal" data-backdrop="static">
                                                            <div class="fl c-left">
                                                                <img src="/static/index/image/010.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0010.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">极光推送</div>
                                                            </div>
                                                            <div class="c-right fr" id="config6">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["jPushId"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--友盟统计-->
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["umengId"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#alliesModal" data-backdrop="static">
                                                            <div class="fl c-left">
                                                                <img src="/static/index/image/011.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0011.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">友盟统计</div>
                                                            </div>
                                                            <div class="c-right fr" id="config7">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["umengId"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2" style="display: none">
                                                        <div class="con clearfix" data-toggle="modal"
                                                             data-target="#gesturesModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/003.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0003.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">手势配置</div>
                                                            </div>
                                                            <div class="c-right fr">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="con clearfix <?php 
if ($data["config"]["UserAgent"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#uaModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/ua001.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/ua01.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">浏览器UA</div>
                                                            </div>
                                                            <div class="c-right fr" id="userAgent">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["UserAgent"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--保存账号密码-->
                                                    <div class="col-sm-2" style="display: none;">
                                                        <div class="con clearfix" data-toggle="modal"
                                                             data-target="#savePwdModal" data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/pwd01.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/pwd001.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">保存账号密码</div>
                                                            </div>
                                                            <div class="c-right fr">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--APK安装器-->
                                                    <div class="col-sm-2 ios_unable" id="installTip"
                                                         style="display: block;">
                                                        <div class="con clearfix <?php 
if ($data["config"]["installTip"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#installTipModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/025.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0025.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">APK安装器</div>
                                                                <span class="new"
                                                                      style="position: absolute;top: 2px;left: 2px;border: 1px solid #ff4222;color: #ff4222;padding: 0px 3px;border-radius: 20px;font-size: 12px;">NEW</span>
                                                            </div>
                                                            <div class="c-right fr" id="configInstallTip">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["installTip"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--隐藏虚拟按键-->
                                                    <div class="col-sm-2 ios_unable" id="hideBottom"
                                                         style="display: block;">
                                                        <div class="con clearfix <?php 
if ($data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#hideBottomModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/030.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0030.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">隐藏虚拟按键</div>
                                                                <span class="new"
                                                                      style="position: absolute;top: 2px;left: 2px;border: 1px solid #ff4222;color: #ff4222;padding: 0px 3px;border-radius: 20px;font-size: 12px;">NEW</span>
                                                            </div>
                                                            <div class="c-right fr" id="configHideBottom">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["hideBottom"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--android-->
                                                    <div class="col-sm-2 ios_unable" id="keystore"
                                                         style="display: block;">
                                                        <div class="con clearfix <?php 
if ($data["config"]["androidKey"]) {
	?>active<?php 
}
?>"
                                                             data-toggle="modal"
                                                             data-target="#keystoreModal"
                                                             data-backdrop="static">
                                                            <div class="c-left fl">
                                                                <img src="/static/index/image/031.png"
                                                                     class="img-responsive img-hide">
                                                                <img src="/static/index/image/0031.png"
                                                                     class="img-responsive img-show">
                                                                <div class="text3">安卓证书</div>
                                                                <span class="new"
                                                                      style="position: absolute;top: 2px;left: 2px;border: 1px solid #ff4222;color: #ff4222;padding: 0px 3px;border-radius: 20px;font-size: 12px;">必选</span>
                                                            </div>
                                                            <div class="c-right fr" id="configKeystore">
                                                                <div class="line"></div>
                                                                <span class="iconfont icon-checkbox1 <?php 
if ($data["config"]["androidKey"]) {
	?>icon-checkbox-checked1 add-checked<?php 
}
?>"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/保存账号密码-->
                                                    <div class="col-sm-2">
                                                        <div class="con">
                                                            <img src="/static/index/image/014.png"
                                                                 class="img-responsive">
                                                            <div class="text3">更多插件，敬请期待…</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pl30">
                                                <div class="color-danger">以上插件，如果无需配置，点击【下一步】，直接打包。</div>
                                            </div>
                                        </form>
                                        <!--弹窗 下拉刷新-->
                                        <div class="modal fade plugin-modal" role="dialog" id="refreshModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">下拉刷新</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-refresh">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["supportPullToRefresh"]) {
	?>active<?php 
}
?>"
                                                                            data-refresh="1">开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="<?php 
if (!$data["config"]["supportPullToRefresh"]) {
	?>active<?php 
}
?>"
                                                                            data-refresh="2">
                                                                            关闭<span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10"
                                                                       style="display: none">
                                                                        开启后，全局支持下拉刷新</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 下拉刷新-->

                                        <!--弹窗 加载动画-->
                                        <div class="modal fade plugin-modal" role="dialog" id="loadingModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">加载动画</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-loading">
                                                                    <div class="row clearfix">
                                                                        <div class="col-sm-5">
                                                                            <div class="con <?php 
if ($data["config"]["loadingAnimationType"] != 1) {
	?>active<?php 
}
?>"
                                                                                 data-way="1">
                                                                                <div class="tit1">顶部进度条</div>
                                                                                <div class="con-1">
                                                                                    <div class="top clearfix">
                                                                                        <span class="iconfont icon-signal fl"></span>
                                                                                        <span class="iconfont icon-wifi fl"></span>
                                                                                        <span class="iconfont icon-dianliang fr"></span>
                                                                                        <span class="fr num">100%</span>
                                                                                        <span class="time">12:00</span>
                                                                                    </div>
                                                                                    <div class="tit2">
                                                                                        <?php echo IN_NAME;?>                                                                                        <span class="progress1"
                                                                                              style="background-color: rgb(21, 125, 241)">
                                                </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="color-picker-wrap" <?php 
if ($data["config"]["loadingAnimationType"] == 1) {
	?>style="display:none"<?php 
}
?>>
                                                                                <div class="tit3">样式颜色</div>
                                                                                <input type="hidden"
                                                                                       id="colorPicker1"
                                                                                       name="colorPicker1"
                                                                                       value="<?php echo $data["config"]["loadingAnimationColor"] ?: "#157df1";?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="con  <?php 
if ($data["config"]["loadingAnimationType"] == 1) {
	?>active<?php 
}
?>"
                                                                                 data-way="2">
                                                                                <div class="tit1">加载等待框</div>
                                                                                <div class="con-1">
                                                                                    <div class="top clearfix">
                                                                                        <span class="iconfont icon-signal fl"></span>
                                                                                        <span class="iconfont icon-wifi fl"></span>
                                                                                        <span class="iconfont icon-dianliang fr"></span>
                                                                                        <span class="fr num">100%</span>
                                                                                        <span class="time">12:00</span>
                                                                                    </div>
                                                                                    <div class="tit2"><?php echo IN_NAME;?></div>
                                                                                    <img src="/static/index/image/img-17.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 加载动画-->

                                        <!--弹窗 清除缓存-->
                                        <div class="modal fade plugin-modal" role="dialog" id="cacheModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">清理缓存</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-cache">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["clearCookie"]) {
	?>active<?php 
}
?>"
                                                                            data-cache="1">开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["clearCookie"]) {
	?>active<?php 
}
?>"
                                                                            data-cache="-1">
                                                                            关闭<span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        每次开启APP，后台自动清理缓存</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 清除缓存-->

                                        <!--弹窗 浏览器-->
                                        <div class="modal fade plugin-modal" role="dialog" id="browserModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">浏览器内核</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-browser ios_unable">
                                                                    <div class="tit1 mb10 color-333">
                                                                        安卓浏览器内核<a href="/index/docs"
                                                                                  class="select-browser">如何选择浏览器</a>
                                                                    </div>
                                                                    <ul class="clearfix common-ul mb30"
                                                                        id="androidKernel">
                                                                        <li class="<?php 
if ($data["config"]["webViewType"]) {
	?>active<?php 
}
?>"
                                                                            data-android-kernel="1">
                                                                            腾讯X5内核
                                                                            <span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li data-android-kernel="0"
                                                                            class="<?php 
if (!$data["config"]["webViewType"]) {
	?>active<?php 
}
?>">
                                                                            系统原生内核
                                                                            <span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="plugin-browser android_unable">
                                                                    <div class="tit1 mb10 color-333">苹果浏览器内核
                                                                    </div>
                                                                    <ul class="clearfix common-ul"
                                                                        id="iosKernel">
                                                                        <li class="<?php 
if ($data["config"]["webViewType"]) {
	?>active<?php 
}
?>"
                                                                            data-ios-kernel="1">
                                                                            Safari浏览器内核
                                                                            <span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li data-ios-kernel="0"
                                                                            class="<?php 
if (!$data["config"]["webViewType"]) {
	?>active<?php 
}
?>">
                                                                            系统原生内核
                                                                            <span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 浏览器-->

                                        <!--弹窗 退出提示-->
                                        <div class="modal fade plugin-modal" role="dialog" id="exitModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">退出提示</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-exit plugin-loading">
                                                                    <dl class="mode">
                                                                        <dd class="clearfix <?php 
if ($data["config"]["exitMode"] == 0) {
	?>active<?php 
}
?>"
                                                                            data-exit="0">
                                                                            <span class="icon icon-radio fl <?php 
if ($data["config"]["exitMode"] == 0) {
	?>icon-radio-checked<?php 
}
?>"></span>
                                                                            <span class="text fl">单击退出</span>
                                                                        </dd>
                                                                        <dd class="clearfix <?php 
if ($data["config"]["exitMode"] == 1) {
	?>active<?php 
}
?>"
                                                                            data-exit="1">
                                                                            <span class="icon icon-radio fl <?php 
if ($data["config"]["exitMode"] == 1) {
	?>icon-radio-checked<?php 
}
?>"></span>
                                                                            <span class="text fl">双击退出</span>
                                                                        </dd>
                                                                        <dd class="clearfix <?php 
if ($data["config"]["exitMode"] == 2) {
	?>active<?php 
}
?>"
                                                                            data-exit="2">
                                                                            <span class="icon icon-radio fl <?php 
if ($data["config"]["exitMode"] == 2) {
	?>icon-radio-checked<?php 
}
?>"></span>
                                                                            <span class="text fl">弹出确认框退出</span>
                                                                        </dd>
                                                                    </dl>
                                                                    <p class="color-warning font12">
                                                                        该配置只针对安卓手机有效，苹果手机点击Home健直接退出</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 退出提示-->

                                        <!--弹窗 手势配置-->
                                        <div class="modal fade plugin-modal" role="dialog" id="gesturesModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">手势配置</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-gestures">
                                                                    <div class="tit">左右滑动</div>
                                                                    <ul class="clearfix gestures-list1">
                                                                        <li class="<?php 
if ($data["config"]["urlApp"] == 1) {
	?>active<?php 
}
?>"
                                                                            data-gestures="1"><span
                                                                                    class="icon-radio icon icon-radio-checked"></span>打开侧栏
                                                                        </li>
                                                                        <li class="<?php 
if ($data["config"]["urlApp"] == 2) {
	?>active<?php 
}
?>"
                                                                            data-gestures="2"><span
                                                                                    class="icon-radio icon"></span>网页后退
                                                                        </li>
                                                                        <li class="<?php 
if ($data["config"]["urlApp"] == -1) {
	?>active<?php 
}
?>"
                                                                            data-gestures="-1"><span
                                                                                    class="icon-radio icon"></span>无
                                                                        </li>
                                                                    </ul>
                                                                    <div class="gestures-list2">
                                                                        <div class="tit">上下滑动</div>
                                                                        <ul class="clearfix common-ul">
                                                                            <li class="<?php 
if ($data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                                                data-switch="1">
                                                                                开启<span
                                                                                        class="icon-checkbox icon"></span>
                                                                            </li>
                                                                            <li class="choose-cancel <?php 
if (!$data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                                                data-switch="-1">关闭<span
                                                                                        class="icon-checkbox icon"></span>
                                                                            </li>
                                                                        </ul>
                                                                        <p>上下滑动时自动隐藏导航栏，下滑时显示导航栏</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 手势配置-->

                                        <!--弹窗 保存账户密码-->
                                        <div class="modal fade plugin-modal" role="dialog" id="savePwdModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">自动保存账号密码</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-save-pwd">
                                                                    <div class="tit">登录好后，下次登录，自动记录账号密码</div>
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                                            data-save-pwd="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                                            data-save-pwd="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        【清除缓存】插件和【自动保存账号密码】插件为互斥操作，两者都开启后，默认使用【清除缓存】</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 保存账户密码-->

                                        <!--弹窗 极光推送-->
                                        <div class="modal fade plugin-modal" role="dialog" id="auroraModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">极光推送</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-aurora">
                                                                    <div class="form-group">
                                                                        <label class="mb7">极光AppKey</label>
                                                                        <div class="clearfix row">
                                                                            <div class="col-sm-8">
                                                                                <input class="form-control app-key"
                                                                                       type="text"
                                                                                       name="jPushId"
                                                                                       value="<?php echo $data["config"]["jPushId"];?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="/index/docs"
                                                                       target="_blank"
                                                                       class="color-hover font12">查看《极光推送申请教程》</a><br>
                                                                    <a href="/index/docs"
                                                                       target="_blank"
                                                                       class="color-hover font12">查看《极光推送配置教程（安卓版）》</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                disabled=""
                                                                data-dismiss="modal">
                                                            保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 极光推送--><!--弹窗 友盟统计-->
                                        <div class="modal fade plugin-modal" role="dialog" id="alliesModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">友盟统计</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-aurora">
                                                                    <div class="form-group">
                                                                        <label class="mb7">App_Key</label>
                                                                        <div class="clearfix row">
                                                                            <div class="col-sm-8">
                                                                                <input class="form-control app-key"
                                                                                       type="text"
                                                                                       id=""
                                                                                       name="umeng_ios_key"
                                                                                       value="<?php echo $data["config"]["umengId"];?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <a href="/index/docs"
                                                                       target="_blank"
                                                                       class="color-hover font12">友盟统计申请教程</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                disabled=""
                                                                data-dismiss="modal">
                                                            保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 友盟统计--><!--弹窗 引导页-->
                                        <div class="modal fade plugin-modal" role="dialog" id="guideModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-aside clearfix">
                                                        <div class="modal-aside-left fl">
                                                            <div class="tit1">预览效果</div>
                                                            <div class="bg">
                                                                <!--                                                                        <img src="/pack"><img-->
                                                                <!--                                                                                src="/pack"><img-->
                                                                <!--                                                                                src="/pack"><img-->
                                                                <!--                                                                                src="/pack"><img-->
                                                                <!--                                                                                src="/pack">-->
                                                                <span class="experience-btn">立即体验</span>
                                                            </div>
                                                        </div>
                                                        <div class="modal-aside-right fl">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"><span
                                                                            aria-hidden="true">×</span>
                                                                </button>
                                                                <h4 class="modal-title">引导页</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="config-plugin">
                                                                    <div class="plugin-common">
                                                                        <div class="plugin-guide">
                                                                            <div class="row clearfix">
                                                                                <div class="col-sm-3">
                                                                                    <div class="upload-img  ">
                                                                                        <input type="file"
                                                                                               class="thumbnail"
                                                                                               name="thumbnail"
                                                                                               value="">
                                                                                        <div class="text">上传图片
                                                                                        </div>
                                                                                        <div class="reset">更换图片
                                                                                        </div>
                                                                                        <span class="icon icon-delete2"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="upload-img ">
                                                                                        <input type="file"
                                                                                               class="thumbnail"
                                                                                               name="thumbnail"
                                                                                               value="">
                                                                                        <div class="text">上传图片
                                                                                        </div>
                                                                                        <div class="reset">更换图片
                                                                                        </div>
                                                                                        <span class="icon icon-delete2"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="upload-img ">
                                                                                        <input type="file"
                                                                                               class="thumbnail"
                                                                                               name="thumbnail"
                                                                                               value="">
                                                                                        <div class="text">上传图片
                                                                                        </div>
                                                                                        <div class="reset">更换图片
                                                                                        </div>
                                                                                        <span class="icon icon-delete2"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="upload-img ">
                                                                                        <input type="file"
                                                                                               class="thumbnail"
                                                                                               name="thumbnail"
                                                                                               value="">
                                                                                        <div class="text">上传图片
                                                                                        </div>
                                                                                        <div class="reset">更换图片
                                                                                        </div>
                                                                                        <span class="icon icon-delete2"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="upload-img ">
                                                                                        <input type="file"
                                                                                               class="thumbnail"
                                                                                               name="thumbnail"
                                                                                               value="">
                                                                                        <div class="text">上传图片
                                                                                        </div>
                                                                                        <div class="reset">更换图片
                                                                                        </div>
                                                                                        <span class="icon icon-delete2"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="color-warning font12 mt10">
                                                                                注：1242*2208尺寸，小于1M，PNG,JPG格式</p>
                                                                            <div class="experience">
                                                                                <div class="tit">显示【立即体验】</div>
                                                                                <ul class="clearfix radio-tick">
                                                                                    <li class="ms-btn ms-btn-default <?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                                        data-type="1"><span
                                                                                                class="icon icon-checkbox-small"></span>显示
                                                                                    </li>
                                                                                    <li class="ms-btn ms-btn-default <?php 
if (!$data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                                        data-type="-1"><span
                                                                                                class="icon icon-checkbox-small"></span>隐藏
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="experience experience-color">
                                                                                        <div class="tit">
                                                                                            【立即体验】文字颜色
                                                                                        </div>
                                                                                        <input type="hidden"
                                                                                               id="experienceTextColor">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                        data-dismiss="modal">
                                                                    保存
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 引导页-->
                                        <script>
                                            tab.radioTick({
                                                el: ".radio-tick li"
                                            });
                                        </script><!--弹窗 第三方分享-->
                                        <div class="modal fade plugin-modal" role="dialog" id="shareModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">第三方分享</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-share">
                                                                    <!--
                                        <div class="s-tit"><span class="color-danger mr5">*</span>分享按钮位置</div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="con active" data-location="0">
                                                    <div class="tit1">导航栏（顶部）-左侧</div>
                                                    <div class="con-1">
                                                        <div class="top clearfix">
                                                            <span class="iconfont icon-signal fl"></span>
                                                            <span class="iconfont icon-wifi fl"></span>
                                                            <span class="iconfont icon-dianliang fr"></span>
                                                            <span class="fr num">100%</span>
                                                            <span class="time">12:00</span>
                                                        </div>
                                                        <div class="tit2"><span class="iconfont icon-60 share-left"></span><?php echo IN_NAME;?></div>
                                                    </div>
                                                    <span class="icon icon-checkbox-small"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="con" data-location="1">
                                                    <div class="tit1">导航栏（顶部）-右侧</div>
                                                    <div class="con-1">
                                                        <div class="top clearfix">
                                                            <span class="iconfont icon-signal fl"></span>
                                                            <span class="iconfont icon-wifi fl"></span>
                                                            <span class="iconfont icon-dianliang fr"></span>
                                                            <span class="fr num">100%</span>
                                                            <span class="time">12:00</span>
                                                        </div>
                                                        <div class="tit2"><span class="iconfont icon-60 share-right"></span><?php echo IN_NAME;?>                                                        </div>
                                                    </div>
                                                    <span class="icon icon-checkbox-small"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="s-tit1">请选择分享按钮的位置</div>
                                        -->
                                                                    <!--分享方式-->
                                                                    <div class="s-way">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="w-top clearfix">
                                                                                    <span class="fl t-left"><!--<span class="color-danger mr5">*</span>-->分享方式</span>
                                                                                    <!--                                            <span class="fr t-right" data-trigger="hover" data-html="true"
                                                              data-container="body" data-toggle="popover" data-placement="right"
                                                              data-content="<div class='color-333'><b>系统分享</b>：无需申请第三方平台的分享Key，操作简单。<img class='mt5' src=''><br><b><br>APP分享：</b>需要申请第三方平台的分享Key，操作复杂。暂时只支持微信平台。<br><img class='mt5' src=''></div>">两种分享方式的差别</span>
            -->                                        </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="common-ul clearfix s-ul">
                                                                            <li class="<?php 
$wx = $data["config"]["shareText"] && $data["config"]["shareUrl"] && $data["config"]["wxAppId"] && $data["config"]["wxAppScrect"];
if (!$wx) {
	?>active<?php 
}
?>"
                                                                                data-way="0">
                                                                                系统分享
                                                                                <img class="recommended"
                                                                                     src="/static/index/image/recommended.png">
                                                                                <span class="icon icon-checkbox-small"></span>
                                                                            </li>
                                                                            <li class="<?php 
if ($wx) {
	?>active<?php 
}
?>"
                                                                                data-way="1">APP分享<span
                                                                                        class="icon icon-checkbox-small"></span>
                                                                                <a href="javascript:;"
                                                                                   class="way-top"
                                                                                   data-trigger="hover"
                                                                                   data-html="true"
                                                                                   data-container="body"
                                                                                   data-toggle="popover"
                                                                                   data-placement="right"
                                                                                   data-content="&lt;div class=&#39;color-333&#39;&gt;&lt;b&gt;系统分享&lt;/b&gt;：无需申请第三方平台的分享Key，操作简单。&lt;img class=&#39;mt5&#39; src=&#39;//sres.dbqapp.com/static/img/way-3.png?202008148184&#39;&gt;&lt;br&gt;&lt;b&gt;&lt;br&gt;APP分享：&lt;/b&gt;需要申请第三方平台的分享Key，操作复杂。暂时只支持微信平台。&lt;br&gt;&lt;img class=&#39;mt5&#39; src=&#39;//sres.dbqapp.com/static/img/way-4.png?202008148184&#39;&gt;&lt;/div&gt;"
                                                                                   data-original-title=""
                                                                                   title="">两种分享方式的差别</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="s-tit1">请选择分享方式</div>
                                                                    </div>
                                                                    <!--/分享方式-->

                                                                    <div class="app-share">
                                                                        <div class="clearfix label-wrap">
                                                                            <!--<label class="fl">微信分享</label>-->
                                                                            <a href="/index/docs"
                                                                               target="_blank"
                                                                               class="fr">配置APP分享的教程</a>
                                                                        </div>
                                                                        <div class="s-con">
                                                                            <div class="s-tit3">
                                                                                注册微信开发平台，填写对应客户端的包名，申请App
                                                                                Key，申请成功，填写Key值。
                                                                            </div>
                                                                            <!--                                            <a href="/index/docs" target="_blank" class="color-hover font12">点击查看《配置APP分享的教程》</a>-->
                                                                            <input class="form-control app-key"
                                                                                   name="wxId"
                                                                                   type="text"
                                                                                   placeholder="微信 APP_ID"
                                                                                   value="<?php echo $data["config"]["wxAppId"];?>">
                                                                            <input class="form-control app-key"
                                                                                   name="wxSecret"
                                                                                   type="text"
                                                                                   placeholder="微信 App_Secret"
                                                                                   value="<?php echo $data["config"]["wxAppScrect"];?>">
                                                                            <div class="s-tit1 error">
                                                                                请填写完整的微信分享ID和Secret
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="share-content">
                                                                        <label>分享内容</label>
                                                                        <div class="tab">
                                                                            <div class="s-con"
                                                                                 style="display: block;">
                                                                                <div class="form-group">
                                                                                    <label>介绍文字</label>
                                                                                    <input class="form-control"
                                                                                           name="text"
                                                                                           type="text"
                                                                                           placeholder="请输入30个以内的介绍文字"
                                                                                           value="<?php echo $data["config"]["shareText"];?>">
                                                                                    <div class="error">
                                                                                        请输入30个以内的介绍文字
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>网址链接<span
                                                                                                class="color-danger">*</span></label>
                                                                                    <input class="form-control"
                                                                                           name="link1"
                                                                                           type="text"
                                                                                           placeholder="请输入http://或者https://开头的网站链接，可以是APP下载链接"
                                                                                           value="<?php echo $data["config"]["shareUrl"];?>">
                                                                                    <div class="error">
                                                                                        请输入http://或https://开头的网站链接
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="share-location">
                                                                        <div class="s-tit4">分享按钮显示位置</div>
                                                                        <p>请前往【标题栏】插件页中，配置第三方按钮的显示位置。</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20">
                                                            保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 第三方分享--><!--弹窗 状态栏-->
                                        <div class="modal fade plugin-modal" role="dialog" id="stateModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-aside">
                                                        <div class="plugin-state clearfix">
                                                            <div class="modal-aside-left fl">
                                                                <div class="tit1">预览效果</div>
                                                                <div class="bg">
                                                                    <div class="common-top state-bgcolor clearfix progress-state"
                                                                         style="background-color: rgb(21, 125, 241);">
                                                                        <span class="iconfont icon-signal fl"></span>
                                                                        <span class="fl font12">中国移动</span>
                                                                        <span class="iconfont icon-dianliang fr"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-aside-right fl">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title">状态栏</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="config-plugin">
                                                                        <div class="plugin-common">
                                                                            <div class="row">
                                                                                <div class="col-sm-7">
                                                                                    <div class="tit1">状态栏</div>
                                                                                    <ul class="clearfix common-ul"
                                                                                        id="stateUl">
                                                                                        <li class="<?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                                            data-state="1">
                                                                                            显示
                                                                                            <span class="icon-checkbox icon"></span>
                                                                                        </li>
                                                                                        <li class="<?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                                            data-state="2">
                                                                                            隐藏
                                                                                            <span class="icon-checkbox icon"></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="be-hidden color-warning mt5"
                                                                                         style="display: none;">
                                                                                        状态栏将不会在打开的APP中显示
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="bg-text-color mt40">
                                                                                            <div class="col-sm-8">
                                                                                                <div class="color-picker-wrap">
                                                                                                    <div class="tit1">
                                                                                                        样式颜色
                                                                                                    </div>
                                                                                                    <input id="colorPicker22"
                                                                                                           name="state-color"
                                                                                                           value="<?php echo $data["config"]["statusBarColor"];?>">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <div class="tit1">
                                                                                                    文字颜色
                                                                                                </div>
                                                                                                <ol class="clearfix writing">
                                                                                                    <li class="<?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                                                        date-font="1">
                                                                                                        <span></span>
                                                                                                    </li>
                                                                                                    <li class="<?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                                                        date-font="2">
                                                                                                        <span></span>
                                                                                                    </li>
                                                                                                </ol>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                            data-dismiss="modal">保存
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 状态栏-->
                                        <!--弹窗 状态标题栏-->
                                        <div class="modal fade plugin-modal" role="dialog" id="titleModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-aside">
                                                        <div class="plugin-title clearfix">
                                                            <div class="modal-aside-left fl">
                                                                <div class="tit1">预览效果</div>
                                                                <div class="bg">
                                                                    <div class="state-title-header">
                                                                        <div class="common-top state-bgcolor state-top clearfix">
                                                                            <span class="iconfont icon-signal fl"></span>
                                                                            <span class="fl font12">中国移动</span>
                                                                            <span class="iconfont icon-dianliang fr"></span>
                                                                        </div>
                                                                        <div class="common-top clearfix title-top">
                                                                            <div class="t-left fl clearfix">
                                                                        <span class="iconfont icon-fanhui1 fl"
                                                                              data-index="5"></span>
                                                                                <span class="iconfont icon-saoyisao fl"
                                                                                      data-index="61"></span>
                                                                                <span class="fl iconfont icon-refresh"
                                                                                      data-index="21"></span>
                                                                                <span class="fl iconfont icon-tuichu"
                                                                                      data-index="65"></span>
                                                                                <span class="fl iconfont icon-fenxiang1"
                                                                                      data-index="59"></span>
                                                                                <span class="fl iconfont icon-caidanlan"
                                                                                      data-index="71"></span>
                                                                                <span></span>
                                                                            </div>
                                                                            <div class="t-right fr clearfix">
                                                                        <span class="iconfont icon-shouye1 fl"
                                                                              data-index="1"></span>
                                                                                <span class="iconfont icon-saoyisao fl"
                                                                                      data-index="61"></span>
                                                                                <span class="fl iconfont icon-refresh"
                                                                                      data-index="21"></span>
                                                                                <span class="fl iconfont icon-tuichu"
                                                                                      data-index="65"></span>
                                                                                <span class="fl iconfont icon-fenxiang1"
                                                                                      data-index="59"></span>
                                                                                <span class="fl iconfont icon-caidanlan"
                                                                                      data-index="71"></span>
                                                                                <span></span>
                                                                            </div>
                                                                            <span class="text"><?php echo IN_NAME;?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-aside-right fl">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title">状态标题栏</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="config-plugin">
                                                                        <div class="plugin-common">
                                                                            <div class="row">
                                                                                <div class="col-sm-11">
                                                                                    <div class="tit1">状态栏</div>
                                                                                    <ul class="clearfix common-ul state-show-toggle">
                                                                                        <li data-state="1"
                                                                                            class="<?php 
if ($data["config"]["isSupportConfigureStatueBarColor"]) {
	?>active<?php 
}
?>">
                                                                                            显示<span
                                                                                                    class="icon-checkbox icon"></span>
                                                                                        </li>
                                                                                        <li data-state="2"
                                                                                            class="<?php 
if (!$data["config"]["isSupportConfigureStatueBarColor"]) {
	?>active<?php 
}
?>">
                                                                                            隐藏<span
                                                                                                    class="icon-checkbox icon"></span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="be-hidden1 color-warning mt5"
                                                                                         style="display: none;">
                                                                                        状态栏将不会在打开的APP中显示
                                                                                    </div>
                                                                                    <div class="state-way" <?php 
if (!$data["config"]["isSupportConfigureStatueBarColor"]) {
	?>style="display:none"<?php 
}
?>>
                                                                                        <div class="tit1">
                                                                                            状态栏显示方式
                                                                                        </div>
                                                                                        <ul class="clearfix common-ul state-way-ul">
                                                                                            <li data-state-way="1"
                                                                                                class="<?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>">
                                                                                                自定义颜色<span
                                                                                                        class="icon-checkbox icon"></span>
                                                                                            </li>
                                                                                            <li data-state-way="2"
                                                                                                class="<?php 
if (!$data["config"]["urlApp"]) {
	?>active<?php 
}
?>">
                                                                                                背景图延伸<span
                                                                                                        class="icon-checkbox icon"></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="extend-prompt">
                                                                                            选择背景图延伸后，则无法配置标题栏
                                                                                        </div>
                                                                                        <div class="way-popover"
                                                                                             data-trigger="hover"
                                                                                             data-html="true"
                                                                                             data-container="body"
                                                                                             data-toggle="popover"
                                                                                             data-placement="right"
                                                                                             data-content="&lt;div style=&#39;color: #333; margin-bottom: 3px;&#39;&gt;背景图延伸&lt;span style=&#39;color: #f00; margin-left: 20px;&#39;&gt;背景延伸至状态栏&lt;/span&gt;&lt;/div&gt;&lt;img style=&#39;margin-bottom: 5px;&#39; src=&#39;//sres.dbqapp.com/static/img/bg-ys.png?202008148184&#39;&gt;"
                                                                                             data-original-title=""
                                                                                             title="">
                                                                                            查看背景图延伸案例
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="bg-text-color1 clearfix">
                                                                                                <div class="col-sm-6 state-bg-color1">
                                                                                                    <div class="color-picker-wrap">
                                                                                                        <div class="tit1">
                                                                                                            背景颜色
                                                                                                        </div>
                                                                                                        <input type="hidden"
                                                                                                               id="colorPicker2"
                                                                                                               value="<?php echo $data["config"]["statusBarColor"];?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6">
                                                                                                    <div class="tit1">
                                                                                                        文字颜色
                                                                                                    </div>
                                                                                                    <ol class="clearfix writing">
                                                                                                        <li data-state-font-color="1"
                                                                                                            class="<?php echo $data["config"]["statusBarTextColorMode"] ? "active" : "";?>">
                                                                                                            <span></span>
                                                                                                        </li>
                                                                                                        <li data-state-font-color="2"
                                                                                                            class="<?php echo $data["config"]["statusBarTextColorMode"] ? "" : "active";?>">
                                                                                                            <span></span>
                                                                                                        </li>
                                                                                                    </ol>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr class="hr">
                                                                            <div class="row">
                                                                                <div class="title-wrap1 clearfix">
                                                                                    <div class="col-sm-11">
                                                                                        <div class="tit1">标题栏
                                                                                        </div>
                                                                                        <ul class="clearfix common-ul"
                                                                                            id="titleShow">
                                                                                            <li class="<?php 
if ($data["config"]["supportActionBar"]) {
	?>active<?php 
}
?>"
                                                                                                data-show="0">
                                                                                                显示<span
                                                                                                        class="icon-checkbox icon"></span>
                                                                                            </li>
                                                                                            <li class="<?php 
if (!$data["config"]["supportActionBar"]) {
	?>active<?php 
}
?>"
                                                                                                data-show="1">
                                                                                                隐藏<span
                                                                                                        class="icon-checkbox icon"></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="be-hidden2 color-warning mt5"
                                                                                             style="display: none;">
                                                                                            标题栏将不会在打开的APP中显示
                                                                                        </div>
                                                                                        <div class="title-way" <?php 
if (!$data["config"]["supportActionBar"]) {
	?>style="display: none;"<?php 
}
?>>
                                                                                            <div class="bg-text-color1 clearfix">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
                                                                                                            <label class="mb5">标题文字</label>
                                                                                                            <input name="title"
                                                                                                                   maxlength="6"
                                                                                                                   class="form-control input-title"
                                                                                                                   type="text"
                                                                                                                   value="<?php echo $data["config"]["titleBarText"] ?: IN_NAME;?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="color-picker-wrap mb40 mt40">
                                                                                                            <div class="tit1">
                                                                                                                背景颜色
                                                                                                            </div>
                                                                                                            <input type="hidden"
                                                                                                                   id="colorPicker3"
                                                                                                                   value="<?php echo $data["config"]["actionBarColor"];?>">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="tit1">
                                                                                                            文字和图标颜色
                                                                                                        </div>
                                                                                                        <input type="hidden"
                                                                                                               id="titFontColor"
                                                                                                               value="<?php echo $data["config"]["titleColor"];?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="function-keys-wrap">
                                                                                                <div class="form-group">
                                                                                                    <label class="mb5">左侧功能键</label>
                                                                                                    <ul class="function-keys f-left clearfix"
                                                                                                        id="leftKey">
                                                                                                        <?php 
$arr = $data["config"]["leftActionBarIcons"] ? array_column($data["config"]["leftActionBarIcons"], "action") : [];
$count = count($arr);
?>                                                                                                        <li class="<?php 
if ($has = in_array("@back", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-left-key="back">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>返回
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@scan", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-left-key="scan">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>扫一扫
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@refresh", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-left-key="refresh">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>刷新
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@exit", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-left-key="exit">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>退出（只对安卓手机有效）
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@share", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-left-key="share"
                                                                                                            data-share="1"><span
                                                                                                                    class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>分享功能
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@sideBar", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-left-key="sideBar"
                                                                                                            data-sideBar="1"><span
                                                                                                                    class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>侧边栏
                                                                                                        </li>
                                                                                                        <!--<li data-left-key="" class="rule-out"><span class="iconfont icon-checkbox1"></span>无</li>
            -->                                                            </ul>
                                                                                                    <div class="plugin-remind mt0 font12">
                                                                                                        <p>
                                                                                                            请您去【侧边栏】插件配置内容，如您没去配置，则您勾选的侧边栏将是无效配置</p>
                                                                                                    </div>
                                                                                                    <div class="plugin-remind1 mt0 font12">
                                                                                                        <p>
                                                                                                            请您去【第三方分享】插件中配置分享内容，否则默认分享网站链接</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label class="mb5">右侧功能键</label>
                                                                                                    <ul class="function-keys f-right clearfix"
                                                                                                        id="rightKey">
                                                                                                        <?php 
$arr = $data["config"]["rightActionBarIcons"] ? array_column($data["config"]["rightActionBarIcons"], "action") : [];
$count = count($arr);
?>                                                                                                        <li class="<?php 
if ($has = in_array("@back", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-right-key="back">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>返回
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@scan", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-right-key="scan">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>扫一扫
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@refresh", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-right-key="refresh">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>刷新
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@exit", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-right-key="exit">
                                                                                                            <span class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>退出（只对安卓手机有效）
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@share|system", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-right-key="share"
                                                                                                            data-share="1"><span
                                                                                                                    class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>分享功能
                                                                                                        </li>
                                                                                                        <li class="<?php 
if ($has = in_array("@sideBar", $arr)) {
	?>active<?php 
} else {
	if ($count > 1) {
		?>disabled<?php 
	}
}
?>"
                                                                                                            data-right-key="sideBar"
                                                                                                            data-sideBar="1"><span
                                                                                                                    class="iconfont icon-checkbox1 <?php 
if ($has) {
	?>icon-checkbox-checked1<?php 
}
?>"></span>侧边栏
                                                                                                        </li>
                                                                                                        <!--<li data-right-key="" class="rule-out"><span class="iconfont icon-checkbox1"></span>无</li>-->
                                                                                                    </ul>
                                                                                                    <div class="plugin-remind mt0 font12">
                                                                                                        <p>
                                                                                                            请您去【侧边栏】插件配置内容，如您没去配置，则您勾选的侧边栏将是无效配置</p>
                                                                                                    </div>
                                                                                                    <div class="plugin-remind1 mt0 font12">
                                                                                                        <p>
                                                                                                            请您去【第三方分享】插件中配置分享内容，否则默认分享网站链接</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="state-bg-extension">
                                                                                    <div class="tit">标题栏</div>
                                                                                    <div class="color-danger">
                                                                                        状态栏选择背景图延伸之后，无法显示标题栏，如需显示标题栏，请选择【自定义颜色】的状态栏显示方式。
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <img class="more-gif"
                                                                         src="/static/index/image/gif-1.gif">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                            data-dismiss="modal">保存
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 状态标题栏-->
                                        <!--弹窗 导航栏-->
                                        <div class="modal fade plugin-modal" role="dialog" id="navModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-aside">
                                                        <div class="plugin-nav clearfix">
                                                            <div class="modal-aside-left fl">
                                                                <div class="tit1">预览效果</div>
                                                                <div class="bg">
                                                                    <div class="common-top state-bgcolor nav-top">
                                                                        <ul>
                                                                            <?php 
foreach (range(0, 4) as $i) {
	$nav = $data["config"]["menu"][$i] ?? [];
	?>                                                                                <li>
                                                                                    <div class="li-con">
                                                                                        <div>
                                                                                            <span class="n-icon iconfont <?php echo str_replace("menu", "icon-", $nav["icon"] ?? "icon-null");?>"></span>
                                                                                            <div class="n-text">
                                                                                                <?php echo $nav["text"] ?? "空白";?>                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <?php 
}
?>                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-aside-right fl">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h4 class="modal-title">导航栏</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="config-plugin">
                                                                        <div class="plugin-common">
                                                                            <div class="plugin-nav">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-sm-10">
                                                                                        <div class="bg-text-color">
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="color-picker-wrap">
                                                                                                        <div class="tit1">
                                                                                                            背景颜色
                                                                                                        </div>
                                                                                                        <input type="hidden"
                                                                                                               id="colorPicker4"
                                                                                                               value="<?php echo $data["config"]["menuBackgroundColor"];?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="nav-font-color1">
                                                                                            <div class="tit1">
                                                                                                文字和图标颜色—默认色
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8">
                                                                                                    <input type="hidden"
                                                                                                           id="navFontColor1"
                                                                                                           class="fl"
                                                                                                           value="<?php echo $data["config"]["menuTextColor"];?>">
                                                                                                </div>
                                                                                                <span class="fl color-hover"
                                                                                                      data-container="body"
                                                                                                      data-toggle="popover"
                                                                                                      data-placement="right"
                                                                                                      data-content="&lt;div&gt;以微信为例：&lt;/div&gt;&lt;img src=&quot;//sres.dbqapp.com/static/img/nav-1.png?202008148184&quot; class=&quot;img-responsive&quot;&gt;"
                                                                                                      data-html="true"
                                                                                                      data-trigger="hover"
                                                                                                      data-original-title=""
                                                                                                      title="">查看案例</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="nav-font-color2">
                                                                                            <div class="tit1">
                                                                                                文字和图标颜色—选中色
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-sm-8">
                                                                                                    <input type="hidden"
                                                                                                           id="navFontColor2"
                                                                                                           class="fl"
                                                                                                           value="<?php echo $data["config"]["menuPressedTextColor"];?>">
                                                                                                </div>
                                                                                                <span class="fl color-hover"
                                                                                                      data-container="body"
                                                                                                      data-toggle="popover"
                                                                                                      data-placement="right"
                                                                                                      data-content="&lt;div&gt;以微信为例：&lt;/div&gt;&lt;img src=&quot;//sres.dbqapp.com/static/img/nav-2.png?202008148184&quot; class=&quot;img-responsive&quot;&gt;"
                                                                                                      data-html="true"
                                                                                                      data-trigger="hover"
                                                                                                      data-original-title=""
                                                                                                      title="">查看案例</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="set-nav mt40">
                                                                                    <div class="set-bottom">
                                                                                        <div class="b-tit">显示
                                                                                        </div>
                                                                                        <ul class="clearfix"
                                                                                            id="iconNameShow">
                                                                                            <li class="active"
                                                                                                data-show="0">
                                                                                                <span class="icon icon-radio icon-radio-checked"></span>显示图标和名称
                                                                                            </li>
                                                                                            <li class=""
                                                                                                data-show="1">
                                                                                                <span class="icon icon-radio"></span>只显示图标
                                                                                            </li>
                                                                                            <li class=""
                                                                                                data-show="2">
                                                                                                <span class="icon icon-radio"></span>只显示名称
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="clearfix mt40">
                                                                                        <div class="tit2 fl">
                                                                                            导航配置<span>（支持2-5个）</span>
                                                                                        </div>
                                                                                        <div class="fr reset">
                                                                                            清空导航配置
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="set-con">
                                                                                        <ul class="n-nav">
                                                                                            <li class="nav-fun">
                                                                                                导航功能
                                                                                            </li>
                                                                                            <li class="nav-name">
                                                                                                导航名称
                                                                                            </li>
                                                                                            <li class="nav-icon">
                                                                                                图标
                                                                                            </li>
                                                                                        </ul>
                                                                                        <dl class="n-list">
                                                                                            <?php 
foreach (range(0, 4) as $i) {
	$nav = $data["config"]["menu"][$i] ?? [];
	$nav["action"] = $nav["action"] ?? "";
	if (filter_var($nav["action"], FILTER_VALIDATE_URL)) {
		$nav["url"] = $nav["action"];
		$nav["action"] = "@link_app";
	}
	if (strstr($nav["action"], "@systemBrowser|")) {
		$nav["url"] = str_replace("@systemBrowser|", "", $nav["action"]);
		$nav["action"] = "@link_url";
	}
	?>                                                                                                <dd class="clearfix <?php 
	if ($nav["action"] || $i < 2) {
		?>active<?php 
	}
	?>">
                                                                                                    <span class="n-num fl">导航<?php echo $i + 1;?></span>
                                                                                                    <select class="fl form-control" <?php 
	if ($nav["action"]) {
		?>style="color:#333"<?php 
	}
	?>>
                                                                                                        <option value="">
                                                                                                            请选择
                                                                                                        </option>
                                                                                                        <?php 
	foreach (["home" => "首页", "forward" => "前进", "back" => "后退", "refresh" => "刷新", "share|system" => "分享", "scan" => "扫一扫", "clearCache" => "清除缓存", "exit" => "退出APP（仅对安卓手机有效）", "link_app" => "APP内打开链接", "link_url" => "浏览器打开链接"] as $k => $v) {
		?>                                                                                                            <option value="<?php echo $k;?>" <?php 
		if ($nav["action"] == "@" . $k) {
			?>selected="selected"<?php 
		}
		?>><?php echo $v;?></option>
                                                                                                        <?php 
	}
	?>                                                                                                    </select>
                                                                                                    <input type="text"
                                                                                                           name="navText"
                                                                                                           class="form-control n-text fl"
                                                                                                           placeholder="四个字以内"
                                                                                                           value="<?php echo $nav["text"] ?? "";?>">
                                                                                                    <span class="add-icon fl">
                                                                                                            <span class="iconfont <?php echo str_replace("menu", "icon-", $nav["icon"] ?? "icon-jia");?>"  <?php 
	if ($nav["icon"]) {
		?>style="color:#333"<?php 
	}
	?> data-index="<?php echo str_replace("menu", "", $nav["icon"]);?>"></span>
                                                                                                        </span>
                                                                                                    <input type="text"
                                                                                                           name="navLink"
                                                                                                           class="form-control n-link fl"
                                                                                                           placeholder="请输入http://或https://的链接地址"
                                                                                                           value="<?php echo $nav["url"] ?? "";?>" <?php 
	if ($nav["url"]) {
		?>style="visibility: visible;"<?php 
	}
	?>>
                                                                                                    <?php 
	if ($i > 1) {
		?><span class="fl n-delete iconfont icon-delete1"></span><?php 
	}
	?>                                                                                                </dd>
                                                                                                <?php 
}
?>

                                                                                            <dt class="ms-btn ms-btn-primary add-config">
                                                                                                + 新增导航
                                                                                            </dt>
                                                                                        </dl>
                                                                                    </div>
                                                                                    <!--<p class="color-danger mt10 font12">导航最少2个，最多5个</p>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <img class="more-gif"
                                                                         src="/static/index/image/gif-1.gif">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="ms-btn ms-btn-primary w120 plugin-save mr20">
                                                                        保存
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 导航栏-->
                                        <!--弹窗 左侧栏-->
                                        <div class="modal fade plugin-modal" role="dialog" id="asideModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="aside-modal clearfix">
                                                        <div class="a-left">
                                                            <div class="l-tit">预览效果</div>
                                                            <div class="phone">
                                                                <div class="bg"
                                                                     style="background-color: #f3f3f3;">
                                                                    <div class="aside-icon"><img
                                                                                src="<?php echo $data["icon"];?>"
                                                                                alt=""></div>
                                                                    <ul class="aside-nav white">
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span class="fl iconfont"></span>
                                                                            <span class="text fl"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="b-right">
                                                                        <img src="/static/index/image/aside-1.png"
                                                                             alt="">
                                                                        <img src="/static/index/image/aside-2.png"
                                                                             alt="">
                                                                        <img src="/static/index/image/aside-3.png"
                                                                             alt=""
                                                                             style="display: block;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="a-right">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"><span
                                                                            aria-hidden="true">×</span>
                                                                </button>
                                                                <h4 class="modal-title">侧边栏</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="config-plugin">
                                                                    <div class="plugin-common">
                                                                        <div class="plugin-aside">
                                                                            <div class="row clearfix">
                                                                                <div class="col-sm-7">
                                                                                    <div class="bg-text-color">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-sm-8">
                                                                                                <div class="color-picker-wrap">
                                                                                                    <div class="tit1">
                                                                                                        背景颜色
                                                                                                    </div>
                                                                                                    <input type="hidden"
                                                                                                           id="colorPicker5"
                                                                                                           value="<?php echo $data["config"]["asideBgColor"];?>">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-8 mt40">
                                                                                                <div class="tit1">
                                                                                                    文字和图标颜色
                                                                                                </div>
                                                                                                <input type="hidden"
                                                                                                       id="asideFontColor"
                                                                                                       value="<?php echo $data["config"]["asideFontColor"];?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="set-nav mt40">
                                                                                <!--
                                                    <div class="set-bottom">
                                                        <div class="b-tit">显示方式</div>
                                                        <ul class="clearfix" id="displayMode">
                                                            <li class="active" data-display="0"><span
                                                                        class="icon icon-radio icon-radio-checked"></span>移动缩放
                                                            </li>
                                                            <li data-display="1"><span class="icon icon-radio"></span>平移</li>
                                                            <li data-display="2"><span class="icon icon-radio"></span>覆盖</li>
                                                        </ul>
                                                    </div>
                                                    -->
                                                                                <div class="top-show">
                                                                                    <div class="b-tit">顶部显示APP图标
                                                                                    </div>
                                                                                    <ul class="clearfix">
                                                                                        <li class="ms-btn ms-btn-default <?php 
if ($data["config"]["supportSideBarLogo"]) {
	?>active<?php 
}
?>"
                                                                                            data-app-show="0"><span
                                                                                                    class="icon icon-checkbox-small"></span>显示
                                                                                        </li>
                                                                                        <li class="ms-btn ms-btn-default <?php 
if (!$data["config"]["supportSideBarLogo"]) {
	?>active<?php 
}
?>"
                                                                                            data-app-show="1"><span
                                                                                                    class="icon icon-checkbox-small"></span>隐藏
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="clearfix mt40">
                                                                                    <div class="tit2 fl">
                                                                                        导航配置<span>（最少1个，最多10个）</span>
                                                                                    </div>
                                                                                    <div class="fr reset">恢复默认
                                                                                    </div>
                                                                                </div>
                                                                                <div class="set-con">
                                                                                    <ul class="n-nav">
                                                                                        <li class="nav-fun">导航功能
                                                                                        </li>
                                                                                        <li class="nav-name">
                                                                                            导航名称
                                                                                        </li>
                                                                                        <li class="nav-icon">
                                                                                            图标
                                                                                        </li>
                                                                                    </ul>
                                                                                    <dl class="n-list">
                                                                                        <?php 
foreach (range(0, 9) as $i) {
	$nav = $data["config"]["sideBar"][$i] ?? [];
	$nav["action"] = $nav["action"] ?? "";
	if (filter_var($nav["action"], FILTER_VALIDATE_URL)) {
		$nav["url"] = $nav["action"];
		$nav["action"] = "@link_app";
	}
	if (strstr($nav["action"], "@systemBrowser|")) {
		$nav["url"] = str_replace("@systemBrowser|", "", $nav["action"]);
		$nav["action"] = "@link_url";
	}
	?>                                                                                            <dd class="clearfix <?php 
	if ($nav["action"] || $i < 1) {
		?>active<?php 
	}
	?>">
                                                                                                <span class="n-num fl">导航<?php echo $i + 1;?></span>
                                                                                                <select class="fl form-control" <?php 
	if ($nav["action"]) {
		?>style="color:#333"<?php 
	}
	?>>
                                                                                                    <option value="">
                                                                                                        请选择
                                                                                                    </option>
                                                                                                    <?php 
	foreach (["home" => "首页", "forward" => "前进", "back" => "后退", "refresh" => "刷新", "share|system" => "分享", "scan" => "扫一扫", "clearCache" => "清除缓存", "exit" => "退出APP（仅对安卓手机有效）", "link_app" => "APP内打开链接", "link_url" => "浏览器打开链接"] as $k => $v) {
		?>                                                                                                        <option value="<?php echo $k;?>" <?php 
		if ($nav["action"] == "@" . $k) {
			?>selected="selected"<?php 
		}
		?>><?php echo $v;?></option>
                                                                                                    <?php 
	}
	?>                                                                                                </select>
                                                                                                <input type="text"
                                                                                                       name="navText"
                                                                                                       class="form-control n-text fl"
                                                                                                       placeholder="四个字以内"
                                                                                                       value="<?php echo $nav["text"] ?? "";?>">
                                                                                                <span class="add-icon fl">
                                                                                                            <span class="iconfont <?php echo str_replace("menu", "icon-", $nav["icon"] ?? "icon-jia");?>"  <?php 
	if ($nav["icon"]) {
		?>style="color:#333"<?php 
	}
	?> data-index="<?php echo str_replace("menu", "", $nav["icon"]);?>"></span>
                                                                                                        </span>
                                                                                                <input type="text"
                                                                                                       name="navLink"
                                                                                                       class="form-control n-link fl"
                                                                                                       placeholder="请输入http://或https://的链接地址"
                                                                                                       value="<?php echo $nav["url"] ?? "";?>" <?php 
	if ($nav["url"]) {
		?>style="visibility: visible;"<?php 
	}
	?>>
                                                                                                <?php 
	if ($i > 0) {
		?><span class="fl n-delete iconfont icon-delete1"></span><?php 
	}
	?>                                                                                                <div class="clearfix"></div>
                                                                                            </dd>
                                                                                        <?php 
}
?>                                                                                        <dt class="ms-btn ms-btn-primary add-config">
                                                                                            + 新增导航
                                                                                        </dt>
                                                                                    </dl>
                                                                                </div>
                                                                            </div>
                                                                            <div class="plugin-remind">
                                                                                <div class="r-tit">显示位置</div>
                                                                                <p>
                                                                                    请去【标题栏插件】中选择侧边栏入口显示的位置，如不选择位置，则侧边栏配置无效。</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="ms-btn ms-btn-primary w120 plugin-save mr20">
                                                                    保存
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 左侧栏--><!--弹窗 URL 拉起APP-->
                                        <div class="modal fade plugin-modal" role="dialog" id="urlAppModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">URL 拉起APP</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-url-app">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["urlApp"]) {
	?>active<?php 
}
?>"
                                                                            data-url-app="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li data-url-app="-1"
                                                                            class="<?php 
if (!$data["config"]["urlApp"]) {
	?>active<?php 
}
?>">
                                                                            关闭<span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        选择开启后，即可在线封装好的APP中，直接拉起其他APP，例如微信、支付宝、淘宝等应用。
                                                                    </p>
                                                                    <a href="/index/docs"
                                                                       target="_blank"
                                                                       class="font12 color-hover">《查看URL拉起APP教程》</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 URL 拉起APP-->
                                        <!--弹窗 图标库-->
                                        <div class="modal fade plugin-modal" role="dialog" id="iconsModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">选择图标</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="icons clearfix">
                                                            <li><span class="iconfont icon-0"></span>
                                                                <div>主页</div>
                                                            </li>
                                                            <li><span class="iconfont icon-1"></span>
                                                                <div>主页</div>
                                                            </li>
                                                            <li><span class="iconfont icon-2"></span>
                                                                <div>主页</div>
                                                            </li>
                                                            <li><span class="iconfont icon-3"></span>
                                                                <div>主页</div>
                                                            </li>
                                                            <li><span class="iconfont icon-4"></span>
                                                                <div>后退</div>
                                                            </li>
                                                            <li><span class="iconfont icon-5"></span>
                                                                <div>后退</div>
                                                            </li>
                                                            <li><span class="iconfont icon-6"></span>
                                                                <div>后退</div>
                                                            </li>
                                                            <li><span class="iconfont icon-7"></span>
                                                                <div>后退</div>
                                                            </li>
                                                            <li><span class="iconfont icon-8"></span>
                                                                <div>前进</div>
                                                            </li>
                                                            <li><span class="iconfont icon-9"></span>
                                                                <div>前进</div>
                                                            </li>
                                                            <li><span class="iconfont icon-10"></span>
                                                                <div>前进</div>
                                                            </li>
                                                            <li><span class="iconfont icon-11"></span>
                                                                <div>前进</div>
                                                            </li>
                                                            <li><span class="iconfont icon-12"></span>
                                                                <div>充值</div>
                                                            </li>
                                                            <li><span class="iconfont icon-13"></span>
                                                                <div>充值</div>
                                                            </li>

                                                            <li><span class="iconfont icon-14"></span>
                                                                <div>交易</div>
                                                            </li>
                                                            <li><span class="iconfont icon-15"></span>
                                                                <div>客服</div>
                                                            </li>
                                                            <li><span class="iconfont icon-16"></span>
                                                                <div>客服</div>
                                                            </li>
                                                            <li><span class="iconfont icon-17"></span>
                                                                <div>客服</div>
                                                            </li>
                                                            <li><span class="iconfont icon-18"></span>
                                                                <div>客服</div>
                                                            </li>
                                                            <li><span class="iconfont icon-19"></span>
                                                                <div>设置</div>
                                                            </li>
                                                            <li><span class="iconfont icon-20"></span>
                                                                <div>设置</div>
                                                            </li>
                                                            <li><span class="iconfont icon-21"></span>
                                                                <div>刷新</div>
                                                            </li>
                                                            <li><span class="iconfont icon-22"></span>
                                                                <div>刷新</div>
                                                            </li>
                                                            <li><span class="iconfont icon-23"></span>
                                                                <div>等待</div>
                                                            </li>
                                                            <li><span class="iconfont icon-24"></span>
                                                                <div>MORE</div>
                                                            </li>
                                                            <li><span class="iconfont icon-25"></span>
                                                                <div>MORE</div>
                                                            </li>
                                                            <li><span class="iconfont icon-26"></span>
                                                                <div>User</div>
                                                            </li>
                                                            <li><span class="iconfont icon-27"></span>
                                                                <div>收藏</div>
                                                            </li>

                                                            <li><span class="iconfont icon-28"></span>
                                                                <div>User</div>
                                                            </li>
                                                            <li><span class="iconfont icon-29"></span>
                                                                <div>User</div>
                                                            </li>
                                                            <li><span class="iconfont icon-30"></span>
                                                                <div>搜索</div>
                                                            </li>
                                                            <li><span class="iconfont icon-31"></span>
                                                                <div>搜索</div>
                                                            </li>
                                                            <li><span class="iconfont icon-32"></span>
                                                                <div>关注</div>
                                                            </li>
                                                            <li><span class="iconfont icon-33"></span>
                                                                <div>关注</div>
                                                            </li>
                                                            <li><span class="iconfont icon-34"></span>
                                                                <div>添加</div>
                                                            </li>
                                                            <li><span class="iconfont icon-35"></span>
                                                                <div>添加</div>
                                                            </li>
                                                            <li><span class="iconfont icon-36"></span>
                                                                <div>下载</div>
                                                            </li>
                                                            <li><span class="iconfont icon-37"></span>
                                                                <div>下载</div>
                                                            </li>
                                                            <li><span class="iconfont icon-38"></span>
                                                                <div>消息</div>
                                                            </li>
                                                            <li><span class="iconfont icon-39"></span>
                                                                <div>消息</div>
                                                            </li>
                                                            <li><span class="iconfont icon-40"></span>
                                                                <div>菜单</div>
                                                            </li>
                                                            <li><span class="iconfont icon-41"></span>
                                                                <div>菜单</div>
                                                            </li>

                                                            <li><span class="iconfont icon-42"></span>
                                                                <div>礼物</div>
                                                            </li>
                                                            <li><span class="iconfont icon-43"></span>
                                                                <div>礼物</div>
                                                            </li>
                                                            <li><span class="iconfont icon-44"></span>
                                                                <div>电话</div>
                                                            </li>
                                                            <li><span class="iconfont icon-45"></span>
                                                                <div>电话</div>
                                                            </li>
                                                            <li><span class="iconfont icon-46"></span>
                                                                <div>资讯</div>
                                                            </li>
                                                            <li><span class="iconfont icon-47"></span>
                                                                <div>资讯</div>
                                                            </li>
                                                            <li><span class="iconfont icon-48"></span>
                                                                <div>URL</div>
                                                            </li>
                                                            <li><span class="iconfont icon-49"></span>
                                                                <div>工具箱</div>
                                                            </li>
                                                            <li><span class="iconfont icon-50"></span>
                                                                <div>工作台</div>
                                                            </li>
                                                            <li><span class="iconfont icon-51"></span>
                                                                <div>游戏</div>
                                                            </li>
                                                            <li><span class="iconfont icon-52"></span>
                                                                <div>运动</div>
                                                            </li>
                                                            <li><span class="iconfont icon-53"></span>
                                                                <div>运动</div>
                                                            </li>
                                                            <li><span class="iconfont icon-54"></span>
                                                                <div>购物车</div>
                                                            </li>
                                                            <li><span class="iconfont icon-55"></span>
                                                                <div>浏览器</div>
                                                            </li>

                                                            <li><span class="iconfont icon-56"></span>
                                                                <div>浏览器</div>
                                                            </li>
                                                            <li><span class="iconfont icon-57"></span>
                                                                <div>浏览器</div>
                                                            </li>
                                                            <li><span class="iconfont icon-58"></span>
                                                                <div>分享</div>
                                                            </li>
                                                            <li><span class="iconfont icon-59"></span>
                                                                <div>分享</div>
                                                            </li>
                                                            <li><span class="iconfont icon-60"></span>
                                                                <div>分享</div>
                                                            </li>
                                                            <li><span class="iconfont icon-61"></span>
                                                                <div>扫一扫</div>
                                                            </li>
                                                            <li><span class="iconfont icon-62"></span>
                                                                <div>扫一扫</div>
                                                            </li>
                                                            <li><span class="iconfont icon-63"></span>
                                                                <div>扫一扫</div>
                                                            </li>
                                                            <li><span class="iconfont icon-64"></span>
                                                                <div>扫一扫</div>
                                                            </li>
                                                            <li><span class="iconfont icon-65"></span>
                                                                <div>退出</div>
                                                            </li>
                                                            <li><span class="iconfont icon-66"></span>
                                                                <div>退出</div>
                                                            </li>
                                                            <li><span class="iconfont icon-67"></span>
                                                                <div>退出</div>
                                                            </li>
                                                            <li><span class="iconfont icon-68"></span>
                                                                <div>清除缓存</div>
                                                            </li>
                                                            <li><span class="iconfont icon-69"></span>
                                                                <div>清除缓存</div>
                                                            </li>
                                                            <li><span class="iconfont icon-70"></span>
                                                                <div>清除缓存</div>
                                                            </li>
                                                            <li><span class="iconfont icon-71"></span>
                                                                <div>侧边栏</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 图标库--><!--弹窗 长按图片保存-->
                                        <div class="modal fade plugin-modal" role="dialog" id="photoSaveModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">长按图片保存</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-photo-save">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["supportLongPressSavePicture"]) {
	?>active<?php 
}
?>"
                                                                            data-photo-save="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["supportLongPressSavePicture"]) {
	?>active<?php 
}
?>"
                                                                            data-photo-save="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        长按图片即刻保存到手机相册中</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--识别二维码-->
                                        <div class="modal fade plugin-modal" role="dialog"
                                             id="identifyCodeModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">识别二维码</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-identify-code">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["supportQRCodeScan"]) {
	?>active<?php 
}
?>"
                                                                            data-identify-code="1">开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["supportQRCodeScan"]) {
	?>active<?php 
}
?>"
                                                                            data-identify-code="-1">
                                                                            关闭<span class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        长按二维码可以自动识别</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--网页缩放-->
                                        <div class="modal fade plugin-modal" role="dialog" id="webZoomModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">网页缩放</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-web-zoom">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["isSupportZoom"]) {
	?>active<?php 
}
?>"
                                                                            data-web-zoom="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["isSupportZoom"]) {
	?>active<?php 
}
?>"
                                                                            data-web-zoom="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        支持手势对网页进行放大缩小</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 网页缩放--><!--弹窗 浏览器UA-->
                                        <div class="modal fade plugin-modal" role="dialog" id="uaModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">浏览器UA</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-ua">
                                                                    <div class="ua">
                                                                        <div class="form-horizontal">
                                                                            <div class="ua-con clearfix">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-3">追加User-Agent</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input class="form-control"
                                                                                               name="appendUa"
                                                                                               type="text"
                                                                                               maxlength="128"
                                                                                               value="<?php echo $data["config"]["UserAgent"];?>">
                                                                                        <p><span
                                                                                                    style="cursor: pointer">【使用微信】</span>将此字符串追加到系统User-Agent后面，不超过128字节
                                                                                        </p>
                                                                                        <div class="error">
                                                                                            不能为空或不能超过128字节
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--                                        <div class="form-group">-->
                                                                                <!--                                            <label class="control-label col-sm-3">完整User-Agent</label>-->
                                                                                <!--                                            <div class="col-sm-8">-->
                                                                                <!--                                                <input class="form-control" name="completeUa" type="text"-->
                                                                                <!--                                                       maxlength="256">-->
                                                                                <!--                                                <p>忽略系统User-Agent，以此字符串代替，不超过256字节</p>-->
                                                                                <!--                                                <div class="error">不能为空或不能超过256字节</div>-->
                                                                                <!--                                            </div>-->
                                                                                <!--                                        </div>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20">
                                                            保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/弹窗 浏览器UA-->
                                        <script>
                                            $(function () {
                                                $(".ua-con div:first").find("span").on('click', function () {
                                                    $("input[name='appendUa']").val('MicroMessenger');
                                                })
                                            })
                                        </script><!--弹窗 侧滑返回-->
                                        <div class="modal fade plugin-modal" role="dialog" id="skidBackModal"
                                             style="display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">侧滑返回</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-skid-back">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["supportRightSlideGoBack"]) {
	?>active<?php 
}
?>"
                                                                            data-skid-back="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["supportRightSlideGoBack"]) {
	?>active<?php 
}
?>"
                                                                            data-skid-back="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        右滑时返回上一页</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--无网提示-->
                                        <div class="modal fade plugin-modal" role="dialog" id="noNetModal"
                                             style="display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">无网提示</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-no-net">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["noNet"]) {
	?>active<?php 
}
?>"
                                                                            data-no-net="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["noNet"]) {
	?>active<?php 
}
?>"
                                                                            data-no-net="-1">
                                                                            关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        网站连接失败时的显示，避免显示出网站地址</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--APK安装器-->
                                        <div class="modal fade plugin-modal" role="dialog" id="installTipModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">APK安装器</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-install-tip">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["installTip"]) {
	?>active<?php 
}
?>"
                                                                            data-install-tip="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["installTip"]) {
	?>active<?php 
}
?>"
                                                                            data-install-tip="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        可直接在APP内下载完成后提示安装Apk</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--屏幕常亮-->
                                        <div class="modal fade plugin-modal" role="dialog" id="keepScreenModal"
                                             style="display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">屏幕常亮</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-keep-screen">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["keepScreen"]) {
	?>active<?php 
}
?>"
                                                                            data-keep-screen="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["keepScreen"]) {
	?>active<?php 
}
?>"
                                                                            data-keep-screen="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        开启后，全局支持屏幕常亮，请谨慎开启</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--隐藏虚拟按键-->
                                        <div class="modal fade plugin-modal" role="dialog" id="hideBottomModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">隐藏虚拟按键</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-hide-bottom">
                                                                    <ul class="clearfix common-ul">
                                                                        <li class="<?php 
if ($data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                                            data-hide-bottom="1">
                                                                            开启<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                        <li class="choose-cancel <?php 
if (!$data["config"]["hideBottom"]) {
	?>active<?php 
}
?>"
                                                                            data-hide-bottom="-1">关闭<span
                                                                                    class="icon-checkbox icon"></span>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="color-warning font12 mt10">
                                                                        强制隐藏安卓系统底部的虚拟按键，实现全屏效果</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20"
                                                                data-dismiss="modal">保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--安卓证书-->
                                        <div class="modal fade plugin-modal" role="dialog" id="keystoreModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">安卓证书</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="config-plugin">
                                                            <div class="plugin-common">
                                                                <div class="plugin-keystore">
                                                                    <div class="keystore-content clearfix">
                                                                        <div class="clearfix"
                                                                             style="padding:15px 30px;background-color:#d9edf7;margin-bottom:20px">
                                                                            <ul style="line-height:1.5;">
                                                                                <li style="list-style-type: disc;">
                                                                                    可使用系统随机生成的证书，系统生成的证书提供下载<br>
                                                                                </li>
                                                                                <li style="list-style-type: disc;">
                                                                                    也可上传自有Android签名证书，仅支持.jks格式的签名证书<br>
                                                                                </li>
                                                                                <li style="list-style-type: disc;">
                                                                                    如需更换原有的系统生成证书，可点击重置并保存，重新打包时系统将使用新的证书<br>
                                                                                </li>
                                                                                <li style="list-style-type: disc;">
                                                                                    请注意：签名证书不能随意更换，更换了签名证书的APP将不能覆盖手机上原有的APP<br>
                                                                                </li>
                                                                                <li style="list-style-type: disc;">
                                                                                    请注意：别名、密码与证书不匹配会导致封装失败，请慎重填写<br>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tab keystore-wrap">
                                                                            <div class="s-con"
                                                                                 style="display: block;">
                                                                                <div class="form-group keystore-input-group row">
                                                                                    <div class="col-sm-3 text-right">
                                                                            <span class="mb5"
                                                                                  style="color:#333;">签名文件</span>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <input style="display:inline-block;width: 59%;color:#157df1;"
                                                                                               readonly="readonly"
                                                                                               class="form-control keystore-input input-title"
                                                                                               value=""
                                                                                               placeholder="请生成或上传证书"
                                                                                               type="text">
                                                                                        <label class="input-group-btn"
                                                                                               style="display:inline-block">
                                                                                            <input type="button"
                                                                                                   value="<?php echo $data["config"]["androidKey"]["alias"] ? "重置证书" : "生成证书";?>"
                                                                                                   class="btn btn-primary keystore-clear">
                                                                                            <input type="button"
                                                                                                   value="上传证书"
                                                                                                   class="btn btn-primary keystore-browse"
                                                                                                   onclick="$(&#39;#keystore-upload&#39;).click();">

                                                                                        </label>
                                                                                        <input type="file"
                                                                                               id="keystore-upload"
                                                                                               accept=".jks"
                                                                                               style="display: none">
                                                                                        <input type="hidden"
                                                                                               class="store_file_content"
                                                                                               name="store_file_content"
                                                                                               value="<?php echo $data["config"]["androidKey"]["file_url"];?>">
                                                                                    </div>
                                                                                    <br>
                                                                                    <span class="col-sm-3"></span>
                                                                                    <span class="help-block btn btn-main btn-xs keystore-download"
                                                                                          style="margin-left:15px;background: #157df1;color: #fff;border: 1px solid #157df1;">下载此证书</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="s-con"
                                                                                 style="display: block;">
                                                                                <div class="form-group row">
                                                                                    <label class="control-label text-right col-sm-3">签名文件密码(storepass)</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input class="form-control"
                                                                                               name="store_storepass"
                                                                                               placeholder="请输入签名文件密码"
                                                                                               type="text"
                                                                                               readonly="readonly"
                                                                                               value="<?php echo $data["config"]["androidKey"]["storepass"];?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="s-con"
                                                                                 style="display: block;">
                                                                                <div class="form-group row">
                                                                                    <label class="control-label text-right col-sm-3">别名(alias)</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input class="form-control"
                                                                                               name="store_alias"
                                                                                               placeholder="请输入别名"
                                                                                               type="text"
                                                                                               readonly="readonly"
                                                                                               value="<?php echo $data["config"]["androidKey"]["alias"];?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="s-con"
                                                                                 style="display: block;">
                                                                                <div class="form-group row">
                                                                                    <label class="control-label text-right col-sm-3">别名密码(keypass)</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input class="form-control"
                                                                                               name="store_keypass"
                                                                                               placeholder="请输入别名密码"
                                                                                               type="text"
                                                                                               readonly="readonly"
                                                                                               value="<?php echo $data["config"]["androidKey"]["keypass"];?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="ms-btn ms-btn-primary w120 plugin-save mr20">
                                                            保存
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <!--/弹窗 第三方分享-->
                                        <script src="/static/index/js/spectrum.js"></script>
                                        <script>
                                        </script>
                                        <script src="/static/pack/webview/plugin.js"></script>
                                    </div>
                                    <div class="step">
                                        <div class="form-group clearfix mt40 stepall">
                                            <label class="control-label col-sm-2"></label>
                                            <div class="col-sm-6">
                                                <button class="ms-btn ms-btn-default w140 ng-binding" type="button"
                                                        id="prev_view_btn"
                                                        onclick="prev_view();">
                                                    上一步
                                                </button>
                                                <button class="ms-btn ms-btn-primary w140 ng-binding" type="button"
                                                        id="web_view_btn"
                                                        onclick="next_view();">
                                                    下一步
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix form-group">
        <label class="control-label col-sm-2"></label>
        <div class="warn-prompt-wrap1ass fl">
            <div class="warn-prompt-cont" style="padding:15px;text-align: left;">
                <p> 
                    本平台不支持以下类型应用：
                    <br>1.诈骗类应用 2.借贷类应用 3.博彩类应用 4.色情类应用 5.违规直播类应用 6.区块链虚拟币类应用 7.其他违法违规类应用，如有违反，我们将视情况封禁应用或账号，（<span style="color:red">均不做退款处理</span>）,严重者我们将上报有关部门,请您确认上传的应用符合《<a href="/index/about/specification" target="_blank" class="color-hover">应用审核规范</a>》，如果您已上传以上类型应用请尽快删除下架，自觉清理，避免违法行为。
                </p> 
            </div>
        </div>
    </div>
    <script>
$('#picker').colpick({
		layout:'hex',submit:0,colorScheme:'dark',
		onChange:function(hsb,hex,rgb,el,bySetColor){
			if(!bySetColor){
				$('#in_b_color').val(hex);
				$('#in_b_color').css('background-color','#'+hex);
			}
		}
	}).keyup(function(){
		$(this).colpickSetColor(this.value);
});
$(document).ready(function(){
	$("input[name='splash']").click(function(){
		if($(this).val()==1){
			$("#splash_box").show();
		}else{
			$("#splash_box").hide();
		}
	});
	$("input[name='bidtype']").click(function(){
		if($(this).val()==1){
			$("#bidtype_box").show();
		}else{
			$("#bidtype_box").hide();
		}
	});
	$("input[name='bidtypee']").click(function(){
		if($(this).val()==1){
			$("#bidtype_boxx").show();
		}else{
			$("#bidtype_boxx").hide();
		}
	});
	$("input[name='certype']").click(function(){
		if($(this).val()==1){
			$("#certype_box0").hide();
			$("#certype_box1").show();
		}else{
			$("#certype_box0").show();
			$("#certype_box1").hide();
		}
	});
});

</script>
    <?php 
$this->footer();
?></body>
</html>
