function reset_sign_confirm() {
    $.layer({
        shade: [0],
        area: ["auto", "auto"],
        dialog: {
            msg: "确定要重置签名吗？",
            btns: 2,
            type: 4,
            btn: ["确定", "取消"],
            yes: function () {
                reset_sign();
            },
            no: function () {
                layer.msg("已取消重置", 1, 0);
            }
        }
    });
}

function reset_sign() {
    return sign();
    $.get('/index/ajax_sign/reset', {aid: in_id}, function (ret) {
        if (ret.code == -1) {
            layer.msg("请先登录后再操作！", 3, 11);
        } else if (ret.code == -2) {
            layer.msg("应用不存在或已被删除！", 3, 11);
        } else if (ret.code == -3) {
            layer.msg("您不能重置别人的应用！", 3, 8);
        } else if (ret.code == -4) {
            layer.msg("该应用未在进行签名！", 3, 8);
        } else if (ret.code == 1) {
            location.reload();
        } else {
            layer.msg("出现未知错误！", 3, 8);
        }
    }, 'json');
}

function sign_confirm() {
    $.layer({
        shade: [0],
        area: ["auto", "auto"],
        dialog: {
            //msg: '<font color="#000fff">签名将会去除下列文件名注入的签名锁 <br>功能性动态库请勿使用下列文件名注入<br>否则您注入的动态库将失效!<br>   sign.data <br>   sign.dylib <br>   embedded.dylib<br>   embedded.png <br>   XXGamePlugin <br>如已注入以上名称的动态库请取消签名 <br>并修改功能文件注入名称后重新上传ipa <br>再重新签名！<br><br>确定要开始签名吗？</font>',
            msg: '确定要开始签名吗？',
            btns: 2,
            type: 4,
            btn: ["确定", "取消"],
            yes: function () {
                sign(1);
            },
            no: function () {
                layer.msg("已取消签名", 1, 0);
            }
        }
    });
}

function sign() {

    if (remote > 0) {
        //layer.msg("不支持云存储签名！", 3, 8);
        //return false;
    }
    $.get('/index/ajax_sign/sign', {aid: in_id}, function (ret) {
        if (ret.code == -1) {
            layer.msg("请先登录后再操作！", 3, 8);
        } else if (ret.code == -2) {
            layer.msg("应用不存在或已被删除！", 3, 8);
        } else if (ret.code == -22) {
            layer.msg("ipa包异常，请重新上传应用！", 3, 8);
        } else if (ret.code == -3) {
            layer.msg("您不能签名别人的应用！", 3, 8);
        } else if (ret.code == -4) {
            layer.msg("不能签名Android应用！", 3, 8);
        } else if (ret.code == -5) {
            layer.msg("该应用未开通企业签名！", 3, 8);
        } else if (ret.code == -6) {
            layer.msg("该应用补签名额不足！", 3, 8);
        } else if (ret.code == -7) {
            layer.msg("该应用正在进行签名！", 3, 8);
        } else if (ret.data) {
            if (IN_SIGNMETHOD == 1) {
                localStorage.setItem('signlog_id', ret.data.id);
                api_sign()
            } else {
                location.reload();
            }
        }
    }, 'json')
}

function api_sign() {
    return $.get(oauth.api + '/open/apps/sign', {aid: oauth.api_aid, secret: oauth.secret, end_time}, function (ret) {
        if (ret.msg) layer.msg(ret.msg, 3, 8);
        if (ret.data) {
            localStorage.setItem('api_signlog_id', ret.data.id);
            location.reload();
        }
    }, 'json');
}

function listen() {
    if (IN_SIGNMETHOD == 1) {
        return listen_api();
    }
    $.get('/index/ajax_sign/listen', {aid: in_id}, function (ret) {
        if (ret.code == -2) {
            $("#_listen").text("签名失败！");
        } else if (ret.code == -1) {
            $("#_listen").text("解析失败");
        } else if (ret.code == 1) {
            $("#_listen").text("准备中");
        } else if (ret.code == 2) {
            $("#_listen").text("正在解析");
        } else if (ret.code == 3) {
            $("#_listen").text("正在签名");
        } else if (ret.code == 4) {
            $("#_listen").text("正在打包");
        } else if (ret.code == 5) {
            $("#_listen").text('签名完成');
            location.reload();
        }
    }, 'json');
}

function listen_api() {
    var api_signlog_id = localStorage.getItem('api_signlog_id');
    if (api_signlog_id)
        $.get(oauth.api + '/open/apps/signStatus', {aid: oauth.api_aid, secret: oauth.secret}, function (ret) {
            var signlog_id = localStorage.getItem('signlog_id');
            if (signlog_id)
                $.get('/index/ajax_sign/saveStatus', {aid: in_id, in_status: ret.code}, function () {
                    if (ret.code == -2) {
                        $("#_listen").text("签名失败");
                        location.reload();
                    } else if (ret.code == -1) {
                        $("#_listen").text("解析失败");
                        location.reload();
                    } else if (ret.code == 1) {
                        $("#_listen").text("准备中");
                    } else if (ret.code == 2) {
                        $("#_listen").text("正在解析");
                    } else if (ret.code == 3) {
                        $("#_listen").text("正在签名");
                    } else if (ret.code == 4) {
                        $("#_listen").text("正在打包");
                    } else if (ret.code == 5) {
                        $("#_listen").text('签名完成');
                        location.reload();
                    }
                }, 'json');

        }, 'json');
}

function download() {
    if (IN_SIGNMETHOD == 1) {
        return download_api();
    }
    $.get('/index/ajax_sign/download', {aid: in_id}, function (ret) {
        if (ret.code == -1) {
            layer.msg("请先登录后再操作！", 3, 11);
        } else if (ret.code == -2) {
            layer.msg("应用不存在或已被删除！", 3, 11);
        } else if (ret.code == -3) {
            layer.msg("您不能下载别人的应用！", 3, 8);
        } else if (ret.code == -4) {
            layer.msg("该应用暂未完成签名！", 3, 8);
        } else if (ret.data.url) {
            location.href = ret.data.url;
        }
    }, 'json');
}

function download_api() {
    location.href = oauth.api + '/open/download?aid=' + oauth.api_aid
}

function purchase(key) {
    $.get('/index/ajax_sign/purchase', {aid: in_id, key}, function (ret) {
        if (ret.code == -1) {
            layer.msg("请先登录后再操作！", 3, 11);
        } else if (ret.code == -2) {
            layer.msg("应用不存在或已被删除！", 3, 11);
        } else if (ret.code == -3) {
            layer.msg("密钥不正确或已被使用！", 3, 8);
        } else if (ret.code == 1) {
            location.reload();
        }
    }, 'json');
}

function tishi() {
    alert('签名开始后请勿切换到其他页面或刷新\n否则可能签名失败，请耐心等待!');
}

function tishi1() {
    alert('签名将会去除下列文件名注入的签名锁 \n功能性动态库请勿使用下列文件名注入\n否则您注入的动态库将失效!\n   sign.data \n   sign.dylib \n   embedded.dylib\n   embedded.png \n   XXGamePlugin \n如已注入以上名称的动态库请取消签名 \n并修改功能文件注入名称后重新上传ipa \n再重新签名！');
}

function change(type) {
    var inre = $("#in_replace").val();
    if (type == 1) {
        $('#check').html('<input type="text" class="col-sm-9 linkform-control" value="*.*|*" id="in_replace" style="display:none;" readonly="true">');
    }
    if (inre == '*.*|*') {
        $('#check').html('<input type="text" class="col-sm-9 link" placeholder="指定特殊签名文件，默认留空！多文件以 | 隔开" id="in_replace"><br><br>');
    }
}