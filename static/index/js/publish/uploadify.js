//选择上传
function upload_app() {
    var upfile = $("#upload_app")[0].files[0];
    upload_appfile(upfile);
}

//拖拽上传
$(function () {
    $(document).on({
        dragleave: function (e) {
            e.preventDefault();
            $("#_drop1").show();
            $("#_drop2").text("{ipa,mobileconfig,apk}");
        },
        drop: function (e) {
            e.preventDefault();
        },
        dragenter: function (e) {
            e.preventDefault();
        },
        dragover: function (e) {
            e.preventDefault();
            $("#_drop1").hide();
            $("#_drop2").text("快松手");
        }
    });
    $("upload-card")[0].addEventListener("drop",
        function (e) {
            e.preventDefault();
            var fileList = e.dataTransfer.files;
            if (fileList.length == 0) {
                return false;
            }
            var upfile = fileList[0];
            upload_appfile(upfile);
        },
        false);
});

function upload_appfile(upfile) {
    var fext = upfile.name.split('.').pop();

    if (fext != 'apk' && fext != 'ipa' && fext != 'mobileconfig') {
        alert('不允许的文件类型！', function () {
            window.location.reload();
        });
        return false;
    }

    if (upfile.size > in_size * 1048576) {
        alert("上传失败，大小不能超过" + in_size + "MB！", function () {
            window.location.reload();
        });
        return false;
    }
    if (upfile.size > singlesize) {
        alert("单文件大小，超过" + Math.floor((singlesize / 1024 / 1024) * 100) / 100 + "MB，请开通或升级会员。");
        return false;
    } else {
        if (upfile.size > allowsize) {
            alert('应用空间容量不足，请开通或升级会员。');
            return false;
        }
    }
    if (mandatory == 1 && certification != 1) {
        alert('未进行实名认证或认证审核中');
        return false;
    }

    if (upfile.size < 1048576) {
        var _size = Math.floor(upfile.size / 1024) + "kb";
    } else {
        var _fixed = upfile.size / 1048576;
        var _size = _fixed.toFixed(2) + "MB";
    }
    if (upfile.name.length > 10) {
        var _name = upfile.name.substr(0, 10) + "...";
    } else {
        var _name = upfile.name;
    }

    $("#upprocess").show();
    $("#upbtn").hide();
    $("#speed-uploadify").html(_name + "(" + _size + ')<span id="percentage"></span>');
    $(".turbo-upload").html('<a class="ng-binding" href="javascript:cancle_app()">取消</a>');

    var a = {};
    if (fext == 'apk' || fext == 'ipa') {
        const parser = new AppInfoParser(upfile)
        parser.parse().then(n => {
            a.icon = n.icon,
                a.fileSize = upfile.size,
                a.originalName = upfile.name,
                n.package ? (a.appName = "string" == typeof n.application.label ? n.application.label : n.application.label[0], a.version = n.versionName, a.versionCode = n.versionCode, a.packageName = n.package, a.ext = "apk", a.minSdkVersion = n.usesSdk.minSdkVersion) : (a.appName = n.CFBundleDisplayName ? n.CFBundleDisplayName : n.CFBundleName, a.appExename = n.CFBundleExecutable, a.version = n.CFBundleShortVersionString, a.versionCode = n.CFBundleVersion, a.packageName = n.CFBundleIdentifier, a.ext = "ipa", a.minSdkVersion = n.MinimumOSVersion, a.teamName = n.mobileProvision.TeamName, a.udids = "", a.teamId = n.mobileProvision.TeamIdentifier, n.mobileProvision.ProvisionsAllDevices ? a.teamType = 1 : n.mobileProvision.ProvisionedDevices ? (n.mobileProvision.Entitlements["get-task-allow"] ? a.teamType = 2 : a.teamType = 3, a.udids = n.mobileProvision.ProvisionedDevices) : a.teamType = 4),
                $(".upload-app-icon").find("img").attr("src", a.icon),
                $("#upload-app-name").text(a.appName),
                parse_up(a, upfile)
        }).catch(err => {
            console.log('解析出错：');
            console.log(err);
        })
    } else {
        parse_up(a, upfile);
    }
}

var app_xhr;
var app_ot;
var app_oloaded;
var app_info;

function parse_up(appinfo, upfile) {
    if (iLocalId && (bundleId != appinfo.packageName)) {
        alert('不是同一个应用无法更新', function () {
            window.location.reload();
        });
        return false;
    }

    var fd = new FormData();
    fd.append("app", upfile);
    fd.append("time", in_time);
    app_xhr = new XMLHttpRequest();
    app_xhr.open("post", "/upload/index/uplog");
    app_xhr.onload = complete_app;
    app_xhr.onerror = failed_app;
    app_xhr.upload.onprogress = progress_app;
    app_xhr.upload.onloadstart = function (evt) {
        app_ot = new Date().getTime();
        app_oloaded = 0;
        app_info = appinfo;
    };
    app_xhr.send(fd);
}

function progress_app(evt) {
    var nt = new Date().getTime();
    var pertime = (nt - app_ot) / 1e3;
    app_ot = new Date().getTime();
    var perload = evt.loaded - app_oloaded;
    app_oloaded = evt.loaded;
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

function complete_app(evt) {
    var response = evt.target.responseText;
    if (response == -1) {
        $("#speed-uploadify").text("文件不规范，请重新选择！");
        $(".growing").css("width", "0%");
        $(".turbo-upload").hide();
    } else {
        submit_app(eval("(" + response + ")"));
    }
}

function failed_app() {
    $("#speed-uploadify").text("上传异常，请重试！");
    $(".growing").css("width", "0%");
    $(".turbo-upload").hide();
}

function cancle_app() {
    app_xhr.abort();
    $("#speed-uploadify").fadeOut(1e3,
        function () {
            $(this).show().text("已取消上传");
            $(".growing").css("width", "0%");
            $(".turbo-upload").hide();
        });
}

//上传成功后提交
function submit_app(response) {
    $(".progress-container").hide();
    $(".redirect-tips").show();
    data = app_info;
    data.time = response.time;
    data.filename = response.filename;
    data.id = in_id;
    data.super = $('#upload_app').attr('data-super');
    $.post("/upload/index/" + response.extension,
        data,
        function (ret) {
            if (ret.code == -1) {
                alert("请先登录后再操作！");
            } else if (ret.code == -2 || ret.code == -5) {
                alert("Access denied");
            } else if (ret.code == -3) {
                alert("未进行实名认证或认证审核中！");
            } else if (ret.code == -4) {
                alert("应用容量不足！请升级VIP!", function () {
                    window.location.href = "/index/item_price?type=1";
                });
            } else if (ret.code == -6) {
                alert('不是同一个应用无法更新', function () {
                    window.location.reload();
                });
            } else if (ret.code == 1) {
                window.location.href = "/index/publish_success?id=" + ret.data.id;
            }
        }, 'json')
}