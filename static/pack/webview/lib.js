function upload_icon() {
    var upfile = $("#upload_a_icon")[0].files[0];
    if (in_login < 1) {
        alert("请先登录");
        return false;
    }
    if (upfile.size > 1048576) {
        alert("图标不能大于1M");
        return false;
    }
    var fd = new FormData();
    fd.append("webview", upfile);
    var a_icon_xhr = new XMLHttpRequest();
    a_icon_xhr.open("post", in_path + "webview/ajax?fn=" + in_time + "-icon");
    a_icon_xhr.onload = complete_a_icon;
    a_icon_xhr.onerror = failed_a_icon;
    a_icon_xhr.upload.onprogress = progress_a_icon;
    a_icon_xhr.send(fd);
}

function progress_a_icon(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_a_icon").text(per + "%");
    if (per > 99) {
        $("#tips_a_icon").text("请稍等...");
    }
}

function complete_a_icon(evt) {
    var response = evt.target.responseText;
    if (response == "return_0") {
        alert("请上传PNG图片");
    } else {
        $("#preview_a_icon").html('<img width="100" height="100" src="' + in_path + "data/tmp/" + response + '">');
    }
}

function failed_a_icon() {
    alert("上传异常");
}

function upload_launch() {
    var upfile = $("#upload_l_image")[0].files[0];
    if (in_login < 1) {
        alert("请先登录");
        return false;
    }
    if (upfile.size > 2097152) {
        alert("图片不能大于2M");
        return false;
    }
    var fd = new FormData();
    fd.append("webview", upfile);
    var l_image_xhr = new XMLHttpRequest();
    l_image_xhr.open("post", in_path + "webview/ajax?fn=" + in_time + "-launch");
    l_image_xhr.onload = complete_l_image;
    l_image_xhr.onerror = failed_l_image;
    l_image_xhr.upload.onprogress = progress_l_image;
    l_image_xhr.send(fd);
}

function progress_l_image(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_l_image").text(per + "%");
    if (per > 99) {
        $("#tips_l_image").text("请稍等...");
    }
}

function complete_l_image(evt) {
    var response = evt.target.responseText;
    if (response == "return_0") {
        alert("请上传PNG图片");
    } else {
        $("#preview_l_image").html('<img width="200" height="200" src="' + in_path + "data/tmp/" + response + '">');
    }
}

function failed_l_image() {
    alert("上传异常");
}

function prev_view() {
    if (step > 1) {
        step--;
        $('.step' + step).show().siblings('.step-common').hide();
        $("#web_view_btn").text('下一步');
        if (step == 1)
            $('#prev_view_btn').hide();
        $('ul.step li').eq(step - 1).addClass('active').siblings().removeClass('active')
    }
}

function next_view() {
    if (in_login < 1) {
        alert("请先登录后再操作！");
        return;
    }
    if (step == 1) {
        if ($("#in_title").val() == "") {
            $("#in_title").focus();
            return;
        }
        if ($("#in_url").val() == "") {
            $("#in_url").focus();
            return;
        }
        if ($("#in_b_color").val() == "") {
            $("#in_b_color").focus();
            return;
        }
        if ($("#in_t_color").val() == "") {
            $("#in_t_color").focus();
            return;
        }
        step++;
        $('.step' + step).show().siblings('.step-common').hide();
        $('#prev_view_btn').show();
        $('ul.step li').eq(step - 1).addClass('active').siblings().removeClass('active')
        return;
    }
    var type = $('input:radio[name=type]:checked').val();
    if (step == 2) {
        if ($("#preview_a_icon img").length < 1) {
            alert("请上传应用图标！");
            return;
        }
        if ($("#preview_l_image img").length < 1) {
            alert("请上传启动图片！");
            return;
        }
        step++;
        $('.step' + step).show().siblings('.step-common').hide();
        $('ul.step li').eq(step - 1).addClass('active').siblings().removeClass('active')
        if (type > 0) $('.ios_unable').hide(); else $('.android_unable').hide();
        return;
    }

    if (step == 3) {
        // if (!$('input[name=edit]').val()) {
        //     step++;
        //     $('.step' + step).show().siblings('.step-common').hide();
        //     $('ul.step li').eq(step - 1).addClass('active').siblings().removeClass('active')
        //     return;
        // }
    }
    var param = {
        id: $('input[name=id]').val(),
        type: type,
        title: escape($("#in_title").val()),
        url: $("#in_url").val(),
        screenOrientation: $("input[name=screenOrientation]:checked").val(),
        bundle_id: $("#bundle_id").val(),
        version: $("#version").val(),
        aicon: $("#preview_a_icon img")[0].src,
        limage: $("#preview_l_image img")[0].src,
        splashTime: $("input[name=splashTime]:checked").val(),
        period: $('ul.period>li.active').attr('data-id'),
    };
    param = getParam(param);
    // return console.log(param);
    $('.ng-binding').attr("disabled", "disabled");
    $("#web_view_btn").text("生成中...");
    $.post(
        in_path + "webview/ajax/webview", param,
        function (ret) {
            if (ret.code == -1) {
                $("#web_view_btn").text("请先登录");
                alert("请先登录！");
            } else if (ret.code == -2) {
                $("#web_view_btn").text("余额不足");
                alert("余额不足！", function () {
                    window.location.href = "/index/item_price";
                });
            } else if (ret.code == -4) {
                $("#web_view_btn").text("应用容量不足！请升级VIP!");
                alert("应用容量不足！请升级VIP!", function () {
                    window.location.href = "/index/item_price?type=2";
                });
            } else if (ret.data) {
                window.location.href = "/index/webview_log?id=" + ret.data.id;
            }
        }, 'json');

}

function getParam(param) {
    param = param || {}
    var hasChecked1 = $("#config1").find(".iconfont").hasClass("icon-checkbox-checked1"); // 加载动画
    var hasChecked2 = $("#config2").find(".iconfont").hasClass("icon-checkbox-checked1"); // 清理缓存
    var hasChecked3 = $("#config3").find(".iconfont").hasClass("icon-checkbox-checked1"); // 浏览器
    var hasChecked4 = $("#config4").find(".iconfont").hasClass("icon-checkbox-checked1"); // 退出提示
    var hasChecked5 = $("#config5").find(".iconfont").hasClass("icon-checkbox-checked1"); // 第三方分享
    var hasChecked6 = $("#config6").find(".iconfont").hasClass("icon-checkbox-checked1"); // 极光推送
    var hasChecked7 = $("#config7").find(".iconfont").hasClass("icon-checkbox-checked1"); // 友盟统计
    var hasChecked8 = $("#config8").find(".iconfont").hasClass("icon-checkbox-checked1"); // 导航栏
    var hasChecked9 = $("#config9").find(".iconfont").hasClass("icon-checkbox-checked1"); // 状态栏
    var hasChecked10 = $("#config10").find(".iconfont").hasClass("icon-checkbox-checked1"); // 标题栏
    var hasChecked11 = $("#config11").find(".iconfont").hasClass("icon-checkbox-checked1"); // 引导页
    var configAsideChecked = $("#configAside").find(".iconfont").hasClass("icon-checkbox-checked1"); // 左侧栏
    var longPressSavePictureChecked = $("#configPhotoSave").find(".iconfont").hasClass("icon-checkbox-checked1"); // 长按图片保存
    var qrcodeScanChecked = $("#configIdentifyCode").find(".iconfont").hasClass("icon-checkbox-checked1"); // 扫一扫
    var webZoomChecked = $("#configWebZoom").find(".iconfont").hasClass("icon-checkbox-checked1"); // 网页缩放
    var userAgentChecked = $("#userAgent").find(".iconfont").hasClass("icon-checkbox-checked1");
    var isSkidBack = $("#configSkidBack").find(".iconfont").hasClass("icon-checkbox-checked1"); // 侧滑返回
    var isNoNet = $("#configNoNet").find(".iconfont").hasClass("icon-checkbox-checked1"); // 无网提示
    var isInstallTip = $("#configInstallTip").find(".iconfont").hasClass("icon-checkbox-checked1"); // APK安装器
    var isKeepScreen = $("#configKeepScreen").find(".iconfont").hasClass("icon-checkbox-checked1"); // 屏幕常亮
    var isHideBottom = $("#configHideBottom").find(".iconfont").hasClass("icon-checkbox-checked1"); // 屏幕常亮
    var hasKeystore = $('#configKeystore').find(".iconfont").hasClass("icon-checkbox-checked1"); // 安卓证书
    param.supportLongPressSavePicture = 0;
    param.supportQrcodeScan = 0;
    param.supportZoom = 0;
    param.userAgent = {};
    param.skidBack = 0;
    param.noNet = 0;
    param.installTip = 0;
    param.keepScreen = 0;
    param.hideBottom = 0;
    if (longPressSavePictureChecked) param.supportLongPressSavePicture = $("#photoSaveModal").find("ul>li.active").data('photo-save');
    if (qrcodeScanChecked) param.supportQrcodeScan = $("#identifyCodeModal").find("ul>li.active").data('identify-code');
    if (webZoomChecked) param.supportZoom = $("#webZoomModal").find("ul>li.active").data('web-zoom');
    if (userAgentChecked) {
        $("#uaModal .plugin-save").trigger('click');
        param.userAgent = userAgent;
    }

    if (isSkidBack) param.skidBack = $("#skidBackModal").find("ul>li.active").data('skid-back');
    if (isNoNet) param.noNet = $("#noNetModal").find("ul>li.active").data('no-net');
    if (isInstallTip) param.installTip = $("#installTipModal").find("ul>li.active").data('install-tip');
    if (isKeepScreen) param.keepScreen = $("#keepScreenModal").find("ul>li.active").data('keep-screen');
    if (isHideBottom) param.hideBottom = $("#hideBottomModal").find("ul>li.active").data('hide-bottom');
    // 下拉刷新
    var hasCheckedRefresh = $("#configRefresh").find(".iconfont").hasClass("icon-checkbox-checked1");
    if (hasCheckedRefresh) {
        refreshVal = $("#refreshModal").find(".plugin-refresh").find(".active").attr("data-refresh");
        param.refresh = refreshVal;
    } else {
        param.refresh = 0;
    }

    // URL 拉起APP
    var hasCheckedUrlApp = $("#configUrlApp").find(".iconfont").hasClass("icon-checkbox-checked1");
    param.urlApp = 0;
    if (hasCheckedUrlApp) {
        urlAppVal = $("#urlAppModal").find(".plugin-url-app").find(".active").attr("data-url-app");
        param.urlApp = urlAppVal;
    }

    // 加载配置
    if (hasChecked1) {
        way = $("#loadingModal").find(".plugin-loading").find(".active").attr("data-way");
        color = $("#loadingModal").find(".plugin-loading").find(".sp-preview-inner").css("background-color");
        color = colorRGB2Hex(color);
        param.loading = {way: way, color: color};
    } else {
        param.loading = {};
    }

    // 清理缓存
    if (hasChecked2) {
        param.cache = $("#cacheModal").find(".plugin-cache").find(".active").attr("data-cache");
    } else {
        param.cache = 0;
    }

    // 浏览器内核
    if (hasChecked3) {
        android = $("#browserModal").find("#androidKernel").find(".active").attr("data-android-kernel");
        ios = $("#browserModal").find("#iosKernel").find(".active").attr("data-ios-kernel");

        param.browser = {android: android, ios: ios}
    } else {
        param.browser = {};
    }

    // 退出提示
    if (hasChecked4) {
        exit = $("#exitModal").find(".plugin-exit").find(".active").attr("data-exit");
        param.exit = exit;
    } else {
        param.exit = 0;
    }

    // 第三方分享
    if (hasChecked5) {
        $("#shareModal .plugin-save").trigger('click');
        param.share = share;
    }

    // 极光推送
    param.jPushId = '';
    if (hasChecked6) {
        jPushId = $.trim($('#auroraModal input[name="jPushId"]').val());
        if (jPushId) param.jPushId = jPushId;
    }

    // 友盟统计
    param.umengKey = '';
    if (hasChecked7) {
        umengIosKey = $.trim($('#alliesModal input[name="umeng_ios_key"]').val());
        umengAndroidKey = $.trim($('#alliesModal input[name="umeng_android_key"]').val());
        param.umengKey = {
            ios: umengIosKey,
            android: umengAndroidKey
        };
    }

    // 导航栏
    param.nav = '';
    if (hasChecked8) {
        $("#navModal .plugin-save").trigger('click');
        param.nav = navData;
    }
    // 状态标题栏
    param.titleBar = '';
    param.stateBar = '';
    if (hasChecked10) {
        $("#titleModal .plugin-save").trigger('click');
        param.titleBar = titleBar;
        param.stateBar = stateBar;
    }
    // 侧边栏
    param.asideData = '';

    if (configAsideChecked) {
        $("#asideModal .plugin-save").trigger('click')
        param.asideData = asideData;
    }

    // 引导页
    param.guide = {};
    if (hasChecked11) {
        $("#guideModal .plugin-save").trigger('click');
        param.guide = guide;
        param.support_guide_enter_main_page_button = supportGuideEnterMainPageButton;
        param.guide_enter_main_page_button_color = guideEnterMainPageButtonColor;
    }
    if (hasKeystore) {
        $("#keystoreModal .plugin-save").trigger('click');
        delete androidKey.save;
        param.androidKey = androidKey;
    }
    // 是否点击跳过
    //var isSkip = $(this).hasClass('skip');
    return param;
}