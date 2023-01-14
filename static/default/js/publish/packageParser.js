var packageParser = function () {
    return function () {
        this.init = function (c) {
            var a = {};
            var c = $.extend({
                singleAllow: 314572800,
                openLargeAppUpload: 0,
                qndomain: "",
                gettoken: "/source/qiniuoss/getToken.php",
				getsignature: "/source/aliyunoss/signature.php",
				uploadurl: "/source/pack/upload/index.php",
                flash_swf_url: "/static/default/images/Moxie.swf",
                silverlight_xap_url: "/static/default/images/Moxie.xap",
                autoClickUploadStart: 0,
                mime_types: [
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
                chunk_size: "0",
                filters: {
                    max_file_size: "5000mb",
                    prevent_duplicates: !0,
                    mime_types: c.mime_types
                },
                init: {
                    PostInit: function (u, a) {
                        0 != c.autoClickUploadStart && ($("#uploadstart").click())
                    },
                    FilesAdded: function (u, f) {
                        plupload.each(f, function (i) {
							
                            if (i.name && i.name.indexOf('mobileconfig') > -1) {
								a.ext = "mobileconfig";
                                u.start();
                            } else {
                                new AppInfoParser(i.getNative()).parse().then(n => {
									//console.log(n);
                                    a.Exename=n.CFBundleExecutable,a.icon = n.icon, a.fileSize = i.size, a.originalName = i.name, n.package ? (a.appName = "string" == typeof n.application.label ? n.application.label : n.application.label[0], a.version = n.versionName, a.versionCode = n.versionCode, a.packageName = n.package, a.ext = "apk", a.minSdkVersion = n.usesSdk.minSdkVersion) : (a.appName = n.CFBundleDisplayName ? n.CFBundleDisplayName : n.CFBundleName, a.version = n.CFBundleShortVersionString, a.versionCode = n.CFBundleVersion, a.packageName = n.CFBundleIdentifier, a.ext = "ipa", a.minSdkVersion = n.MinimumOSVersion, a.teamName = n.mobileProvision.TeamName, a.udids = "", a.teamId = n.mobileProvision.TeamIdentifier, n.mobileProvision.ProvisionsAllDevices ? a.teamType = 1 : n.mobileProvision.ProvisionedDevices ? (n.mobileProvision.Entitlements["get-task-allow"] ? a.teamType = 2 : a.teamType = 3, a.udids = n.mobileProvision.ProvisionedDevices) : a.teamType = 4), c.parseCallback(i, a), $(".upload-app-icon").find("img").attr("src", a.icon), $("#upload-app-name").text(a.appName), u.start()
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
                    },
                    BeforeUpload: function (u, f) {
                        if (config.multipart_params) {
                            config.multipart_params.key = f.id + '.' + a.ext;
                            u.setOption({multipart_params: config.multipart_params});
                        }
                        $(".tolsize").html("<span class='process100' style='width: auto;font-size: 14px;'></span> / " + (f.size / 1024 / 1024).toFixed(2) + "MB");
                        $("#upprocess").show();
                        $("#upbtn").hide()
                    },
                    UploadProgress: function (u, f) {
                        $(".progress-bar").css("width", f.percent + "%"), $(".process100").html(f.percent + "%"), $(".moxie-shim").hide()
                    },
                    FileUploaded: function (u, f, r) {
                        s = JSON.parse(r.response) || config.multipart_params;
                        if (!s || !s.key) {
                            return alert('上传失败');
                        }
                        
                        a.apkName = s.key, function (i) {
                            var a = $.extend({
                                apkName: i.apkName,
                                originalName: i.originalName,
                                icon: i.icon,
                                hext: i.ext,
                                happName: i.appName,
                                hversion: i.version,
                                hpackageName: i.packageName,
                                hversionCode: i.versionCode,
                                iAppSize: i.fileSize,
                                TeamName: i.teamName,
                                TeamType: i.teamType,
                                TeamId: i.teamId,
                                udids: i.udids,
                                MinimumOSVersion: i.minSdkVersion,
								Exename: i.Exename,
                            }, c.postField);
                            a.remote = c.remote;
                            if (i.apkName && i.apkName.indexOf('mobileconfig') > -1) {
                                $.post('/source/pack/upload/index-mobileconfig.php', a, c.saveCallback, "json")
                            } else {
                                $.post(c.upload, a, c.saveCallback, "json")
                            }
                        }(a)
                    },
                    Error: function (u, e, f) {
                        return alert('【' + e.code + '】 ' + e.message), !1
                    },
                    UploadComplete: function (u, f) {
                    },
                    Key: function (e, i) {
                        return i.name
                    }
                }
            };
            if (c.remote == 1) {//七牛
                $.get(c.gettoken, {}, function (i) {
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
                $.post(c.getsignature, {}, function (ret) {
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
                Object.assign(config, {
                    url: c.uploadurl
                });
                uploader = new plupload.Uploader(config);
                uploader.init();
            }
            $("#changest").click(function () {
                $(this).hasClass("pause") ? (uploader.start(), $(this).removeClass("pause"), $(this).text("暂停上传")) : ($(this).addClass("pause"), $(this).text("恢复上传"), uploader.stop())
            })
        }
    }
}();