var icon_xhr;
var icon_ot;
var icon_oloaded;

function upload_icon() {
    var upfile = $("#upload_icon")[0].files[0];
    $("#dialog-uploadify").show();
    if (upfile.size > 1048576) {
        $("#speed-uploadify").text("上传失败，大小不能超过1MB！");
        return false;
    }
    if (upfile.size < 1024) {
        var _size = upfile.size + "b";
    } else {
        var _size = Math.floor(upfile.size / 1024) + "kb";
    }
    if (upfile.name.length > 10) {
        var _name = upfile.name.substr(0, 10) + "...";
    } else {
        var _name = upfile.name;
    }
    $("#speed-uploadify").html(_name + "(" + _size + ')<span id="percentage"></span>');
    $(".turbo-upload").html('<a class="ng-binding" href="javascript:cancle_icon()">取消</a>');
    var fd = new FormData();
    fd.append("icon", upfile);
    fd.append("aid", in_id);
    fd.append("uid", in_uid);
    fd.append("upw", in_upw);
    icon_xhr = new XMLHttpRequest();
    icon_xhr.open("post", in_path + "upload/index/upicon");
    icon_xhr.onload = complete_icon;
    icon_xhr.onerror = failed_icon;
    icon_xhr.upload.onprogress = progress_icon;
    icon_xhr.upload.onloadstart = function (evt) {
        icon_ot = new Date().getTime();
        icon_oloaded = 0;
    };
    icon_xhr.send(fd);
}

function progress_icon(evt) {
    var nt = new Date().getTime();
    var pertime = (nt - icon_ot) / 1e3;
    icon_ot = new Date().getTime();
    var perload = evt.loaded - icon_oloaded;
    icon_oloaded = evt.loaded;
    var speed = perload / pertime;
    var units = "b/s";
    if (speed / 1024 > 1) {
        speed = speed / 1024;
        units = "k/s";
    }
    if (speed / 1024 > 1) {
        speed = speed / 1024;
        units = "M/s";
    }
    speed = speed.toFixed(1);
    var per = Math.round(evt.loaded / evt.total * 100);
    $(".growing").css("width", per + "%");
    $("#percentage").text(" - " + per + "% - " + speed + units);
    if (per > 99) {
        $("#percentage").text(" 正在保存,请稍等...");
    }
}

function complete_icon(evt) {
    var response = evt.target.responseText;
    if (response < 1) {
        if (response == -3) {
            $("#speed-uploadify").text("文件不规范，请重新选择！");
        } else if (response == -1) {
            $("#speed-uploadify").text("应用不存在或已被删除！");
        } else if (response == -2) {
            $("#speed-uploadify").text("您不能更新别人的应用！");
        }
        $(".growing").css("width", "0%");
        $(".turbo-upload").hide();
    } else {
        remote["open"] > 0 ? remote_up_icon() : location.reload();
    }
}

function failed_icon() {
    $("#speed-uploadify").text("上传异常，请重试！");
    $(".growing").css("width", "0%");
    $(".turbo-upload").hide();
}

function cancle_icon() {
    icon_xhr.abort();
    $("#speed-uploadify").fadeOut(1e3, function () {
        $(this).show().text("已取消上传");
        $(".growing").css("width", "0%");
        $(".turbo-upload").hide();
    });
}