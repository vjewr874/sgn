function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
}

(function () {
    var language = (/^zh/.test(navigator.language) ? "zh" : "en");

    var template_data = {};
    var module = $('input[name=module]').val();
    var ssid = $('input[name=ssid]').val();
    var link = $('input[name=url]').val();
    var authcode = $('input[name=authcode]').val();
    $(function () {

        window.DAFU = {
            brand: "Xuanfeng",
            locale: 'zh',
            params: {},
            platform: {},
            config: {
                server: "/index/ajax/jsonFormat?lang=" + language + "&link=" + link + (ssid ? "&ssid=" + ssid : '') + (module == 's' ? '&s=' + module : '')
            },
            data: {},
            APP: {},
            module,
            ssid,
            signPackage: {},
            AD: {},
            init: function () {

            },
            query: function () {
                var self = this;
                $.getJSON(this.config.server, this.getQueryParams(), function (ret) {
                    if (ret.code != '200') {
                        alert(ret.msg);
                        return false;
                    }
                    self.data = ret.data;
                    self.signPackage = ret.data.signPackage;
                    template_data = ret.data.template_data;
                    if (ret.data.template_language) {
                        language = ret.data.template_language;
                    }
                    $.extend(Mark.includes, template_data);
                    if (!self.data.template) {
                        self.successVip();
                    } else if (['tmp1', 'tmp2', 'tmp3', 'tmp4', 'tmp5', 'tmp6', 'tmp7'].indexOf(self.data.template) > -1) {
                        self.successVip();
                    } else if (['error'].indexOf(self.data.template) > -1) {
                        self.error(ret.data.msg);
                    }
                });
            },
            getQuerySetting: function () {
                var url = $('input[name="url"]').val();
                if (url) return url;

                var pathname = window.location.pathname.substring(1);
                pathname = pathname.split("?")[0];
                return pathname.replace(/show\//, "");

            },
            getQueryParams: function GetRequest() {
                var url = location.search;
                var theRequest = new Object();
                if (url.indexOf("?") != -1) {
                    var str = url.substr(1);
                    var strs = str.split("&");
                    for (var i = 0; i < strs.length; i++) {
                        theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                    }
                }
                return theRequest;
            },
			//当前使用渲染
            successVip: function () {
                var tmp = Mark.up($('#title').html(), this.data);
                $('head').append(tmp);
                var tmp = Mark.up($('#meta').html(), this.data);
                $('head').append(tmp);
                this.data.support_ios = (this.data.support & 1) ? true : false;
                this.data.support_android = (this.data.support & 2) ? true : false;
                $('body').append(Mark.up($('#content').html(), this.data));
                var clipboard = new ClipboardJS('#copy_button');
                clipboard.on('success', function (e) {
                    var msg = e.trigger.getAttribute('aria-label');
                    alert(msg);
                    e.clearSelection();
                });
                if (this.data.use_auth_code == 1) {
                    $('.template-pwd label').text(template_data.REQUIRE_ACODE);
                }

                if (!ssid && !this.data.in_super && this.data.show_guide && this.data.ext == 'iOS') {//信任引导
                    $('<div style="text-align:center;padding:15px;">' +
                        '<a target="_blank" href="/index/guide?lang=' + language+' " style="color:#157df1;">' +
                        '<span class="glyphicon glyphicon-hand-right"></span>' +
                        '&nbsp;&nbsp;' + template_data.UNTRUSTED_ENTERPRISE_DEVELOPER + '</a></div>'
                    ).insertBefore('.down_load');
                    $('.down_load').before().css('margin-top', 0);
                } else if (ssid || this.data.in_super) {//安装教程
                    $('<div style="text-align:center;padding:15px;" onclick="showmodal(1)">' +
                        '<a href="javascript:;" style="color:#157df1;">' +
                        '<span class="glyphicon glyphicon-hand-right"></span>' +
                        '&nbsp;&nbsp;' + template_data.SUPER_INSTALLATION_TUTORIAL + '</a></div>'
                    ).insertBefore('.down_load');
                    $('.down_load').before().css('margin-top', 0);
                }

                $('body').append(Mark.up($('#copyright').html(), this.data));

                this.showAd();
                this.showPopup();
                //this.weixin();
                if (this.data.is_publish == 0) {
                    Modal.templateModal({
                        imgName: "modal-bg-2.jpg",
                        title1: template_data.REALNAME_LAYER_HINT,
                        title2: template_data.REALNAME_LAYER_TITLE,
                        p: template_data.REALNAME_LAYER_CONTENT,
                        align: 'left', // 居左 left, 居中 center, 居右 right
                        btnText: template_data.REALNAME_LAYER_BUTTON_TEXT,
                        btnClass: "modal-btn1"
                    });
                }

                if (this.data.super_sign && !this.data.plist_path) {
                    startWorker();
                }

                if (this.data.plist_path) {
                    $('a.down_load').attr('href', this.data.plist_path);
                    $('.resign').show();
                }
                $('.resign').click(function () {
                    return location.href = "/index/super_sign/resign?ssid=" + ssid;
                    //old
                    $.get('/index/super_sign/resign', {ssid}, function (ret) {
                        if (ret.msg) {
                            $('.msg-text').show().text(ret.msg);
                        }
                        if (ret.data) {
                            $('.resign').hide();
                            startWorker()
                        }
                    }, 'json');
                });
            },
            error: function (msg) {
                $('body').append(Mark.up($('#error-content').html(), this.data));
                $(".error-msg").html(template_data[msg]);
            },
            success: function () {
                var tmp = Mark.up($('#title').html(), this.data);
                $('head').append(tmp);
                var tmp = Mark.up($('#meta').html(), this.data);
                $('head').append(tmp);
                var top_title = Mark.up($('#top_title').html(), this.data);
                $('body').append(top_title);

                var button = Mark.up($('#button').html(), this.data);
                $('body').append(button);

                $('body').append(Mark.up($('#intro').html(), this.data));
                $('body').append(Mark.up($('#qrcode').html(), this.data));
                var clipboard = new ClipboardJS('#copy_button');
                clipboard.on('success', function (e) {
                    var msg = e.trigger.getAttribute('aria-label');
                    alert(msg);
                    e.clearSelection();
                });

                this.data.show_guide = this.data.show_guide;
                $('body').append(Mark.up($('#copyright').html(), this.data));


                //this.weixin();
                this.showAd();
                this.showPopup();
            },

            showAd: function () {
                if (parseInt(this.data.show_ad) == 0) {
                    return;
                }
                $.ajax({
                    type: "POST",
                    url: "/index/ajax/adsense?template=" + this.data.template,
                    data: {'template': this.data.template},
                    dataType: 'html',
                    beforeSend: function (xhr) {
                    },
                    success: function (result, textStatus, jqXHR) {
                        if (result) {
                            $('body').append(result);
                            $('.template-footer').css("margin-bottom", "60px");
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }
                });
            },
            reportApp: function () {
                $("#reportModal").modal("show");
                // 举报 单选
                $(document).on('click', '.report ul li', function () {
                    $("#reportModal .report ul li").find(".icon").removeClass("icon-radio-checked").siblings("input[type=radio]").prop("checked", false);
                    $(this).find(".icon").addClass("icon-radio-checked").siblings("input[type=radio]").prop("checked", true);
                    // console.log($("#reportModal :checked").val());
                });

                // 举报保存
                $(document).on('click', (".report .save"), function () {
                    $(this).attr('disabled', true);
                    var checkedRadio = $("#reportModal .report ul");
                    var textarea = $("#reportModal .report textarea");
                    var email = $("#reportModal .report input[name=email]");
                    var emailValidation = /\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}/;

                    if (checkedRadio.find(":checked").length > 0) {
                        checkedRadio.parents(".form-group").removeClass("form-error");
                    } else {
                        checkedRadio.parents(".form-group").addClass("form-error");
                    }

                    if (textarea.val().length > 0) {
                        textarea.parents(".form-group").removeClass("form-error");
                    } else {
                        textarea.parents(".form-group").addClass("form-error");
                    }

                    if (emailValidation.test(email.val())) {
                        email.parents(".form-group").removeClass("form-error");
                    } else {
                        email.parents(".form-group").addClass("form-error");
                    }

                    var errorLength = $("#reportModal .report .form-error").length;
                    if (errorLength > 0) {
                        $("#reportModal").modal("show");
                    } else {
                        var app_id = DAFU.data.id;
                        var app_name = DAFU.data.app_name;
                        $.post('/index/ajax/report', {
                            email: email.val(),
                            type: $.trim(checkedRadio.find(":checked").parent().text()),
                            message: textarea.val(),
                            app_id: app_id,
                            app_name: app_name
                        }, function (data) {
                            $('#report-sending').hide();
                            if (data.code == 200) {
                                $("#reportModal").modal("hide");
                                Modal.generalModal({
                                    backdrop: true, // 点击阴影是否关闭弹窗， // true 开启； false 关闭
                                    iconClass: "",  // success: icon-modal-success1,  error: icon-modal-error2
                                    title: template_data.REPORT_THANKS,  // 弹窗标题
                                    p: template_data.REPORT_MESSAGE, // 弹窗内容
                                    align: 'left', // 弹窗内容排列顺序 left center right
                                    cancelBtnText: "",    // 取消按钮文字
                                    successBtnText: template_data.BUTTON_OK,  // 确定按钮文字
                                    successBtnModal: true, // 点击确定按钮是否关闭弹窗 true 关闭 false 不关闭
                                    cancelBtnModal: true, // 点击取消按钮是否关闭弹窗 true 关闭 false 不关闭
                                    successCallback: function () {

                                    },
                                    cancelCallback: function () {

                                    }
                                });
                            } else {
                                alert(data.msg);
                            }
                        }, 'json');

                    }
                });

            },
            clickReport: function () {
                $('.dialog-close .icon-close').click(function () {
                    $('#reportDialog').hide();
                });
                $('#reportDialog').show();
                $('.custom-checkbox').click(function () {
                    $('.custom-checkbox').removeClass('active');
                    $(this).addClass('active');
                });
                $("#submit_report").click(function () {
                    var email = $('#report-email').val();
                    var type = $('div .active').html();
                    var message = $('#report-content').val();
                    var app_id = DAFU.data.id;
                    var app_name = DAFU.data.app_name;
                    if (!email) {
                        $('.email-error').show();
                        return false;
                    } else {
                        $('.email-error').hide();
                    }
                    if (!type) {
                        $('.type-error').show();
                        return false;
                    } else {
                        $('.type-error').hide();
                    }
                    if (!message) {
                        $('.message-error').show();
                        return false;
                    } else {
                        $('.message-error').hide();
                    }
                    $('#report-sending').show();
                    $.post('/index/ajax/report', {
                        email: email,
                        type: type,
                        message: message,
                        app_id: app_id,
                        app_name: app_name
                    }, function (data) {
                        $('#report-sending').hide();
                        if (data.code == 200) {
                            $('#report-form').hide();
                            $('#report-feedback').show();
                        } else {
                            alert(data.msg);
                        }
                    }, 'json');

                });

            },
            showPopup: function () {
                var browser = {
                    versions: function () {
                        var u = navigator.userAgent;
                        var ua = navigator.userAgent.toLocaleLowerCase();
                        var app = navigator.appVersion;
                        return {
                            trident: u.indexOf('Trident') > -1, // IE内核
                            presto: u.indexOf('Presto') > -1, // opera内核
                            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, // 火狐内核
                            mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), // 是否为移动终端
                            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), // IOS终端
                            android: u.indexOf('Android') > -1, // 安卓终端
                            iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, // 是否为iphone或QQHD浏览器
                            iPad: u.indexOf('iPad') > -1, // 是否为iPad
                            webApp: u.indexOf('Safari') == -1, // 是否web应用程序，没有头部与底部
                            QQbrw: u.indexOf('MQQBrowser') > -1, // QQ浏览器
                            weiXin: u.indexOf('MicroMessenger') > -1, // 微信
                            QQ: ua.match(/\sQQ/i) == " qq", // QQ App内置浏览器（需要配合使用）
                            weiBo: ua.match(/WeiBo/i) == "weibo", // 微博
                            safari: /Safari/.test(u) && !/Chrome/.test(u) && u.indexOf('MQQBrowser') < 0 && !/CriOS/.test(u),
                            UCbrw: u.indexOf('UCBrowser') > -1, //UC浏览器
                            ucSpecial: u.indexOf('rv:1.2.3.4') > -1,
                            Symbian: u.indexOf('Symbian') > -1,
                            ucSB: u.indexOf('Firofox/1.') > -1
                        };
                    }(),
                    language: (navigator.browserLanguage || navigator.language).toLowerCase()
                };
                var weixin, weibo, isQQ, isiOS, isAndroid = false;
                var ua = navigator.userAgent.toLowerCase();//获取判断用的对象
                if (browser.versions.mobile) {//判断是否是移动设备打开
                    if (browser.versions.weiXin) {
                        weixin = true;
                    }
                    if (browser.versions.weiBo) {
                        weibo = true;
                    }
                    if (browser.versions.QQ) {
                        isQQ = true;
                    }

                    if (browser.versions.ios || browser.versions.iPhone || browser.versions.iPad) {
                        isiOS = true;
                    }
                    if (browser.versions.android) {
                        isAndroid = true;
                    }
                    if (browser.versions.safari) {
                        isSafari = true;
                    } else {
                        isSafari = false;
                    }
                }
                var appType = (this.data.ext == 'iOS') ? 'ios' : 'android';
                if (weixin == true) {
                    $('.down_load').hide();
                    if (isiOS == true) {
                        $("#weixin_ios").show();
                        $("#weixin_android").hide();
                    } else {
                        $("#weixin_ios").hide();
                        $("#weixin_android").show();
                    }
                    return false;
                }

                if (isQQ) {
                    $('.down_load').hide();
                    if (isiOS == true) {
                        $("#weixin_ios").show();
                        $("#weixin_android").hide();
                    } else {
                        $("#weixin_ios").hide();
                        $("#weixin_android").show();
                    }
                    return false;
                }
                if (isiOS && !isSafari && (browser.versions.UCbrw || this.data.fileExt == 'mobileconfig')) {
                    $('.down_load').hide();
                    $("#no_safari").show();
                }

                if (appType == 'android' && isiOS) {
                    $('.down_load').hide();
                } else if (appType == 'ios' && !isiOS) {
                    $('.down_load').hide();
                } else {
                    var app_source = this.data.source;
                    $('.down_load').click(function () {
                        $(this).hide();
                        $("#showtext").show();
                        var a = $.ua.browser.name;
                        var c = a.match(/safari/gi);
                        if (!ssid && c && "ios" == appType && app_source != 3) {
                            setTimeout(function () {
                                $("#showtext").hide();
                                var a = $("<a href='/static/app/app.mobileprovision' class='ms-btn template-btn clearfix pc-pwd' style='display:block;background-color:#40acf1; border: 1px solid #40acf1;margin: 15px'>" +
                                    (DAFU.data.in_super ? template_data.INSTALL_MOBILECONFIG : template_data.TRUST_DEVELOPER)
                                    + "</a>");
                                $("#showtext").after(a);
                                // location.href = "/static/app/app.mobileprovision";
                            }, 6000);
                        }
                        location.href = $(this).attr('href');
                    });
                }
            }, 
			weixin: function () {
                wx.config({
                    debug: false,
                    appId: this.signPackage["appId"],
                    timestamp: this.signPackage["timestamp"],
                    nonceStr: this.signPackage["nonceStr"],
                    signature: this.signPackage["signature"],
                    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ']
                });
                var this_app = this.data;
                wx.ready(function () {
                    wx.onMenuShareAppMessage({
                        title: this_app.app_name,
                        desc: decodeURIComponent(encodeURIComponent('版本：' + this_app.version + '.' + this_app.version_code + '  大小：' + this_app.app_size).replace(/\+/g, '%20')),
                        link: www_domain + this_app.url,
                        imgUrl: "https:" + this_app.icon_300
                    });
                    wx.onMenuShareTimeline({
                        title: this_app.app_name,
                        desc: decodeURIComponent(encodeURIComponent('版本：' + this_app.version + '.' + this_app.version_code + '  大小：' + this_app.app_size).replace(/\+/g, '%20')),
                        link: www_domain + this_app.url,
                        imgUrl: "https:" + this_app.icon_300
                    });
                    wx.onMenuShareQQ({
                        title: this_app.app_name,
                        desc: decodeURIComponent(encodeURIComponent('版本：' + this_app.version + '.' + this_app.version_code + '  大小：' + this_app.app_size).replace(/\+/g, '%20')),
                        link: www_domain + this_app.url,
                        imgUrl: "https:" + this_app.icon_300
                    });
                });
            },
            submitPwd: function () {
                var url = this.getQuerySetting();
                var password = $("input[name='pwd']").val();
                var ssid = $('input[name=ssid]').val();
                // 验证密码是否正确
                $.getJSON('/index/ajax/' + (DAFU.data.use_auth_code == 1 ? 'check_authcode' : 'check_password'), {
                    url, password, ssid
                }, function (ret) {
                    if (ret.code == 200) {
                        if (DAFU.data.use_auth_code == 1) {
                            DAFU.authcode = password;
                        }
                        var href = '/' + url + (DAFU.data.use_auth_code == 1 ? '?authcode=' : '?password=') + password + (ssid ? '&ssid=' + ssid : '');
                        window.location.href = href;
                    } else {
                        $("#autoHideTemplateModal").find(".modal-dialog").addClass("modal-sm").find(".auto-hide .mt5").text(template_data[DAFU.data.use_auth_code == 1 ? (ret.msg || 'AUTHCODE_WRONG') : 'PASSWORD_WRONG']);
                        autoHideModal('#autoHideTemplateModal', 3000);
                    }
                });

                //window.location.href = '/' + this.getQuerySetting() + '?password=' + $('#password').val();
            },
            showProvision: function () {
            }
        },
        DAFU.init(), DAFU.query();

        var message = '正在排队'
        var time = 0;
        var loading = ' <img src="/static/pack/layer/theme/default/loading-2.gif" height="20" style="margin-top: -5px"/>';

        function dosign() {
            message = template_data['SIGNING'];
            time = 0
            var appid = $('input[name=appid]').val();
            var ssid = $('input[name=ssid]').val();
            var authcode = $('input[name=authcode]').val();
            if (appid && ssid) {
                $('a.down_load').hide();
                $('a.grey').css('display', 'inline-block');
                var link = $('input[name=url]').val();
                $.get('/index/super_sign/dosign', {appid, ssid, authcode}, function (ret) {
                    if (ret.msg) {
                        clearInterval(DAFU.si);
                        var msg = ret.msg;
                        if (template_data[msg])
                            msg = template_data[msg];
                        show_grey(msg);
                    }
                    if (ret.data) {
                        // hide_grey(template_data['DOWNLOAD_INSTALL'])
                        $('a.down_load').attr('href', ret.data.plist_path);
                    }
                }, 'json');
            }
        }

        function check_sign() {
            time++;
            show_grey(message + loading);
            $.get('/index/super_sign/check_sign', {ssid}, function (ret) {
                if (ret.code == 5) {
                    clearInterval(DAFU.si);
                    hide_grey(template_data[ret.msg])
                    $('.resign').show();
                    $('a.down_load').trigger("click");
                } else if (ret.code == 2) {
                    dosign();
                } else if (ret.code < 0) {
                    clearInterval(DAFU.si);
                    show_grey(template_data[ret.msg])
                }
            }, 'json');
        }

        function startWorker() {
            time = 0;
            check_sign();
            DAFU.si = setInterval(function () {
                check_sign();
            }, 1000);
            show_grey();
        }

        function show_grey(msg) {
            $('a.down_load').hide();
            $('a.grey').css('display', 'inline-block');
            $('a.grey span.fl').html(msg || template_data['LOADING']);
        }

        function hide_grey(msg) {
            $('a.grey').hide();
            $('a.down_load').show();
            $('a.down_load span:last-child').html(msg);
        }
    });

}).call(this);
