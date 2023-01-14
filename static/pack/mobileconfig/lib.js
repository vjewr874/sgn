function upload_mc_a_icon() {
    var upfile = $("#upload_mc_a_icon")[0].files[0];
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
    a_icon_xhr.open("post", in_path + "webview/ajax");
    a_icon_xhr.onload = complete_mc_a_icon;
    a_icon_xhr.onerror = failed_mc_a_icon;
    a_icon_xhr.upload.onprogress = progress_mc_a_icon;
    a_icon_xhr.send(fd);
}

function progress_mc_a_icon(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_mc_a_icon").text(per + "%");
    if (per > 99) {
        $("#tips_mc_a_icon").text("请稍等...");
    }
}

function complete_mc_a_icon(evt) {
    var response = evt.target.responseText;
    if (response == "return_0") {
        alert("文件不规范");
    } else {
        $("#preview_mc_a_icon").html('<img width="100" height="100" src="' + in_path + "data/tmp/" + response + '">');
    }
}

function failed_mc_a_icon() {
    alert("上传异常");
}

var id = '';

function mobile_config() {
    if (in_login < 1) {
        alert("请先登录后再操作！");
        return;
    }
    if ($("#mc_title").val() == "") {
        $("#mc_title").focus();
        return;
    }
    if ($("#mc_url").val() == "") {
        $("#mc_url").focus();
        return;
    }
    if ($("#preview_mc_a_icon img").length < 1) {
        alert("请上传应用图标！");
        return;
    }
    $(".mc-btn").attr("disabled", "disabled").text("生成中...");
    var data = {
            id: $('input[name=id]').val(),
            title: escape($("#mc_title").val()),
            url: $("#mc_url").val(),
            aicon: $("#preview_mc_a_icon img")[0].src,
            period: $('ul.period>li.active').attr('data-id'),
            bid: $("#in_bid").val(),
            version: $("#version").val(),
            FullScreen: $('input[name=FullScreen]:checked').val(),
            IsRemovable: $('input[name=IsRemovable]:checked').val(),
            IsRemovURL: $('input[name=IsRemovURL]:checked').val()
        }
    ;

    $.post(in_path + "webview/ajax/mobileconfig", data, function (ret) {
        if (ret.code == -1) {
            alert("请先登录");
        } else if (ret.code == -2) {
            alert("余额不足", function () {
                window.location.href = "/index/item_price?type=1";
            });
        } else if (ret.code == -3) {
            alert("未进行实名认证或认证审核中！");
        } else if (ret.code == -4) {
            alert("应用容量不足！请升级VIP!", function () {
                window.location.href = "/index/item_price?type=2";
            });
        } else if (ret.data) {
            // $('.ng-binding').eq(0).hide().siblings().show();
            id = ret.data.id;
            window.location.href = "/index/webview_log?id=" + ret.data.id;
        }
    }, 'json');
}

function createHtml() {
    if (id) {
        var url = "/index/webview/createHtml?id=" + id;
        location.href = url;
        // window.open();
    } else {
        alert('请完成封装后下载此文件');
    }
}

function downloadFile() {
    var url = "/index/webview/download?id=" + id;
    location.href = url;
}

function publish() {
    location.href = "/webview/ajax/pub?id=" + id;
}