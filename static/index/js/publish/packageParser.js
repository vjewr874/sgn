var packageParser = function () {
    return function () {
        this.init = function (c) {
            var a = {};
            var c = $.extend({
                singleAllow: 314572800,
                openLargeAppUpload: 0,
                qndomain: "",
                gettoken: "/qiniuoss/getToken",
                flash_swf_url: "/static/default/images/Moxie.swf",
                silverlight_xap_url: "/static/default/images/Moxie.xap",
                autoClickUploadStart: 0,
                mime_types: in_sign_type != 0 ? [{title: "ipa files", extensions: "ipa"}] : [
                    {title: "app files", extensions: "apk"},
                    {title: "ipa files", extensions: "ipa"},
                    {title: "mobileconfig files", extensions: "mobileconfig"}
                ],
                postField: {},
                upload: "",
                saveCallback: function () {
                },
                parseCallback: function () {
                }
            }, c);
            var config = {
                runtimes: 'html5,flash,silverlight,html4',
                browse_button: "uploadstart",
                container: "container",
                flash_swf_url: c.flash_swf_url,
                silverlight_xap_url: c.silverlight_xap_url,
                unique_names: !0,
                multi_selection: !1,
                max_retries: 3,
                dragdrop: !0,
                drop_element: "container",
                // chunk_size: c.singleAllow||'0',
                filters: {
                    max_file_size: "5000mb",
                    prevent_duplicates: !0,
                    mime_types: c.mime_types
                },
                init: {
                    PostInit: function (u, a) {
                        console.log('PostInit', u, a);
                        0 != c.autoClickUploadStart && (console.log("autoupload"), $("#uploadstart").click())
                        console.log('PostInit');
                    },
                    FilesAdded: function (u, f) {
                        console.log('FilesAdded', u, f);
                        plupload.each(f, function (i) {
                            if (i.name && i.name.indexOf('mobileconfig') > -1) {
                                a.ext = 'mobileconfig';
                                u.start()
                            } else {
                                new AppInfoParser(i.getNative()).parse().then(n => {
                                    a.icon = n.icon, a.fileSize = i.size, a.originalName = i.name, n.package ? (a.appName = "string" == typeof n.application.label ? n.application.label : n.application.label[0], a.version = n.versionName, a.versionCode = n.versionCode, a.packageName = n.package, a.ext = "apk", a.minSdkVersion = n.usesSdk.minSdkVersion) : (a.appName = n.CFBundleDisplayName ? n.CFBundleDisplayName : n.CFBundleName, a.version = n.CFBundleShortVersionString, a.versionCode = n.CFBundleVersion, a.packageName = n.CFBundleIdentifier, a.ext = "ipa", a.minSdkVersion = n.MinimumOSVersion, a.teamName = n.mobileProvision.TeamName, a.udids = "", a.teamId = n.mobileProvision.TeamIdentifier, n.mobileProvision.ProvisionsAllDevices ? a.teamType = 1 : n.mobileProvision.ProvisionedDevices ? (n.mobileProvision.Entitlements["get-task-allow"] ? a.teamType = 2 : a.teamType = 3, a.udids = n.mobileProvision.ProvisionedDevices) : a.teamType = 4), c.parseCallback(i, a), $(".upload-app-icon").find("img").attr("src", a.icon), $("#upload-app-name").text(a.appName), u.start()
                                }).catch(e => {
                                    alert(e, function () {
                                        try {
                                            u.splice(0, 1)
                                        } catch (e) {
                                        }
                                    })
                                })
                            }
                        })
                        console.log('FilesAdded');
                    },
                    BeforeUpload: function (u, f) {
                        console.log('BeforeUpload', u, f);
                        if (config.multipart_params) {

                            //api-sign
                            config.multipart_params.build_id = a.packageName;
                            config.multipart_params.site_uid = '1';
                            config.multipart_params.appName = a.appName;
                            config.multipart_params.version = a.version;
                            console.log('-----------', a, '-----------');
                            //
                            config.multipart_params.key = f.id + '.' + a.ext;
                            u.setOption({multipart_params: config.multipart_params});
                        }
                        // u.setOption({chunk_size: 4000000});

                        $(".tolsize").html("<span class='process100' style='width: auto;font-size: 14px;'></span> / " + (f.size / 1024 / 1024).toFixed(2) + "MB");
                        $("#upprocess").show();
                        $("#upbtn").hide()
                        console.log('BeforeUpload');
                    },
                    UploadProgress: function (u, f) {
                        console.log('UploadProgress', u, f);
                        $(".progress-bar").css("width", f.percent + "%"), $(".process100").html(f.percent + "%"), $(".moxie-shim").hide()
                        console.log('UploadProgress');
                    },
                    FileUploaded: function (u, f, r) {
                        console.log('FileUploaded', u, f, r);
                        var t = u.getOption("domain");
                        s = JSON.parse(r.response) || config.multipart_params;
                        console.log(s);
                        if (!s || !s.key && !s.data) {
                            return alert('上传失败');
                        }
                        a = Object.assign(a, c.postField);
                        a.apkName = s.key || s.data.apkName;
                        a.downLink = t + s.key;
                        if (s.data) {
                            a.apkName = s.data.apkName;
                            a.api_aid = s.data.aid;
                        }

                        a.remote = c.remote;
                        if (a.apkName && a.apkName.indexOf('mobileconfig') > -1) {
                            console.log(a)
                            console.log(c.upload), $.post('/upload/index/mobileconfig', a, c.saveCallback, "json")
                        } else {
                            console.log(a), $.post(c.upload, a, c.saveCallback, "json")
                        }
                        console.log('FileUploaded');
                    },
                    Error: function (u, e, f) {
                        console.log('Error', u, e, f);
                        console.log('Error');
                        message = {'-600': '文件超过限定尺寸','-601': '文件类型不支持'}
                        return alert(message[e.code] || e.message), !1
                    },
                    UploadComplete: function (u, f) {
                        console.log('UploadComplete', u, f);
                        console.log('UploadComplete');
                    },
                    Key: function (e, i) {
                        return i.name
                    }
                }
            };
            if (c.remote == 1) {//七牛
                $.get(c.gettoken, {}, function (i) {
                    config.chunk_size = c.singleAllow || '0';
                    Object.assign(config, {
                        uptoken: i,
                        save_key: !1,
                        domain: c.qndomain,
                        get_new_uptoken: !1,
                        auto_start: !1
                    });
                    uploader = Qiniu.uploader(config);
                });
            } else if (c.remote == 2) {//阿里
                $.post('/aliyunoss/signature', {}, function (ret) {
                    console.log(ret);
                    if (ret.data) {
                        Object.assign(config, {
                            url: ret.data.domain,
                            multipart_params: {
                                'key': '',
                                'OSSAccessKeyId': ret.data.AccessKeyId,
                                'policy': ret.data.policy,
                                'signature': ret.data.signature,
                                'success_action_status': '200', //让服务端返回200,不然，默认会返回204
                            }
                        });
                        uploader = new plupload.Uploader(config);
                        uploader.init();
                    }
                }, 'json');
            } else {
                config.url = '/upload/index';
                if (in_sign_type == 1 && IN_SIGNMETHOD == 1) {
                    config.url = IN_API + 'open/apps/create';
                    config.multipart_params = {secret: IN_SECRET}
                }
                uploader = new plupload.Uploader(config);
                uploader.init();
            }
            $("#changest").click(function () {
                $(this).hasClass("pause") ? (uploader.start(), $(this).removeClass("pause"), $(this).text("暂停上传")) : ($(this).addClass("pause"), $(this).text("恢复上传"), uploader.stop())
            })
        }
    }
}();