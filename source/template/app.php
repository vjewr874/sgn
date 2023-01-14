<?php

$ssid = SafeRequest("ssid", "get");
$authcode = SafeRequest("authcode", "get");

?>
<!doctype html>
<html lang="">
<head>
    <meta name="viewport"  content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="/static/pack/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/style.css"/>
    <link rel="stylesheet" href="/static/index/css/custom.css">
    <link rel="stylesheet" href="/static/index/css/appstyle.css">
    <link rel="stylesheet" href="/static/pack/swiper.5.4.1/swiper.min.css"/>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_780494_9oilb5iic5f.css"/>
    <link rel="stylesheet" href="/static/index/css/base.css"/>
    <link rel="stylesheet" href="/static/index/css/main.css"/>
    <link rel="stylesheet" href="/static/index/css/h5.css"/>
    <link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST'] ?>/favicon.ico" type="image/x-icon"/>
    <script>
        var www_domain = "https://<?php echo $_SERVER['HTTP_HOST'] ?>/";
    </script>
    <style>
		body {
			padding-bottom: 10px;
		}
        .template-common .template-btn.grey {
            background: grey;
            display: none;
        }

        .form-group {
            text-align: center
        }
    </style>
</head>
<body>
<input name="url" value="<?php echo $row['in_link'] ?>" type="hidden">
<input name="ssid" value="<?php echo $ssid ?>" type="hidden">
<input name="appid" value="<?php echo $row['in_id'] ?>" type="hidden">
<input name="module" value="<?php echo $module ?>" type="hidden">
<input name="action" value="<?php if (isset($action)) echo $action; ?>" type="hidden">
<input name="authcode" value="<?php echo $authcode; ?>" type="hidden">
<script type="text/template" id="title">
    <title>{{app_name}}</title>
</script>
<script language="text/template" id="meta">
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="{{keywords}}">
    <meta name="description" content="{{desciption}}">
    <link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST'] ?>/favicon.ico" type="image/x-icon"/>
    <meta name="author" content="<?php echo $_SERVER['HTTP_HOST'] ?>">
    <meta property="og:type" content="webpage">
    <meta property="og:url" content="{{web_url}}">
    <meta property="og:title" content="{{app_name}}">
    <meta property="og:description" content="{{app_name}}">
    <meta itemprop="name" content="{{app_name}}"/>
    <meta itemprop="image" content="{{icon_300}}"/>
    <meta name="description" itemprop="description" content="版本：{{version}}.{{version_code}}, 大小：{{app_size}}">
    <meta name="apple-mobile-web-app-title" content="{{web_url}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
</script>
<?php 
include 'source/template/temp_'.$row['template'].'.php';
?>
<div class="modal fade ms-modal" id="reportSuccess" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <div><span class="icon icon-modal-success2"></span></div>
                    <p class="color-333 bold font16 mt5">{{REPORT_THANKS}}</p>
                    <p class="color-333 mt5">{{REPORT_MESSAGE}}</p>
                    <div class="mt15">
                        <button type="button" class="ms-btn ms-btn-default w90" data-dismiss="modal">{{BUTTON_OK}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade ms-modal auto-hide-modal" id="autoHideTemplateModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <div class="auto-hide">
                        <div class="mt5">{{PASSWORD_WRONG}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script language="text/template" id="copyright">
    <div class="template-footer">
        <div class="container">
            <div class="t-footer">
                <?php if (IN_DOWNLOAD_PAGE_FOOTER_ON) { ?>
                    <a href="//<?php echo IN_DOMAIN; ?>?source=down_page" target="_blank">{{DIBAQU}}</a> |
                <?php } ?>
                <a href="javascript:;" onclick="disclaimer()">{{DISCLAIMER}}</a>
                |
                <a href="javascript:;" onclick="DAFU.reportApp()">{{REPORT}}</a>
            </div>
        </div>
    </div>

    <div id="weixin_ios" style="display:none">
        <div class="click_opacity"></div>
        <div class="to_btn">
            {{GO_OUT_WECHAT_IOS_TIP}}
        </div>
    </div>
    <div id="weixin_android" style="display: none">
        <div class="click_opacity"></div>
        <div class="to_btn">{{GO_OUT_WECHAT_TIP}}
        </div>
    </div>
    <div id="no_safari" style="display:none">
        <div class="click_opacity"></div>
        <div class="to_btn">
            {{USE_SAFARI_TIP}}
        </div>
    </div>
    <!--免责声明-->
    <div class="modal fade ms-modal in" id="disclaimerModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="report">
                        <h3 style="text-align: center;line-height: 50px;">免责声明</h3>
                        <p style="padding-top:20px;link-height:10px;">
                            平台为第三方应用提供应用反馈收集等服务。应用内容均来源于第三方产品，仅为用户提供下载支持，不涉及任何人工编辑和整理，也不对任何来源于第三方的内容（包括但不限于安装包安全、信息描述、应用截图）承担责任，用户可根据描述场景谨慎选择下载试用。</p>
                        <p style="padding-top:20px;link-height:10px;">
                            任何公司、产品或者个人认为平台涉嫌侵犯您的版权或应用权，您应该及时向我们提供举报声明、书面权利通知，并提供身份证明、权属证明及侵权情况等投诉材料。我们将依法进行处理。</p>
                        <p style="padding-top:20px;link-height:10px;">
                            应用下载者与应用上传者如发生纠纷，请自行与上传者协商处理，协商无果请到相关部门进行投诉，或者拨打110警方介入，本平台不承担责任。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--举报弹窗-->
    <div class="modal fade ms-modal" id="reportModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="report">
                        <form action="" method="post">
                            <div class="tit">{{REPORT_TITLE}}</div>
                            <p>
                                {{REPORT_TIPS}}
                            </p>
                            <div class="form-group">
                                <label>{{REPORT_REASON_ERROR}}<span>*</span></label>
                                <ul class="clearfix">
                                    <li>
                                        <span class="icon icon-radio"></span>{{REPORT_DB}}
                                        <input type="radio" class="hidden" value="0">
                                    </li>
                                    <li>
                                        <span class="icon icon-radio"></span>{{REPORT_HS}}
                                        <input type="radio" class="hidden" value="1">
                                    </li>
                                    <li>
                                        <span class="icon icon-radio"></span>{{REPORT_QZ}}
                                        <input type="radio" class="hidden" value="2">
                                    </li>
                                    <li>
                                        <span class="icon icon-radio"></span>{{REPORT_OTHER}}
                                        <input type="radio" class="hidden" value="3">
                                    </li>
                                </ul>
                                <div class="error">{{REPORT_REASON_ERROR}}</div>
                            </div>
                            <div class="form-group">
                                <label>{{REPORT_REASON}}<span>*</span></label>
                                <textarea class="form-control" rows="4" id="report-content"
                                          placeholder="{{REPORT_CONTENT_PLACEHOLDER}}"></textarea>
                                <div class="error">{{REPORT_CONTENT_ERROR}}</div>
                            </div>
                            <div class="form-group">
                                <label>{{REPORT_EMAIL_PLACEHOLDER}}<span>*</span></label>
                                <input type="text" class="form-control" name="email"
                                       placeholder="{{REPORT_EMAIL_PLACEHOLDER}}" id="report-email">
                                <div class="error">{{REPORT_EMAIL_ERROR}}</div>
                            </div>
                            <div class="btn-bottom">
                                <button data-dismiss="modal" type="button" class="ms-btn color-hover">
                                    {{REPORT_RETUEN}}
                                </button>
                                <button type="button" class="ms-btn ms-btn-primary save">{{REPORT_BUTTON}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
<script src="/static/index/js/jquery.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
<script src="/static/index/js/clipboard.min.js"></script>
<script src="/static/index/js/markup.js"></script>
<script src="/static/index/js/publish/ua-parser.min.js"></script>
<script src="/static/index/js/template/wave.js?v=9"></script>
<script src="/static/index/js/template.js"></script>
<script>
    function autoHideModal(obj1, time) {
        var autoHide = null;
        clearTimeout(autoHide);
        $(obj1).modal('show');
        $(".modal-backdrop").hide();
        autoHide = setTimeout(function () {
            $(obj1).modal("hide");
        }, time);
    }

    // autoHideModal('#pwdModal', 3000);
    var windowWidth = $(window).width();
    if (windowWidth >= 768) {
        $(".template-btn").click(function () {
            $("#autoHideTemplateModal").find(".modal-dialog").removeClass("modal-sm").find(".auto-hide .mt5").text("请在手机上使用浏览器打开本页面，或者手机扫描页面二维码，即可安装");
            autoHideModal('#autoHideTemplateModal', 3000);
        });
    }
</script>
<style>
    .md-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 50%;
        max-width: 550px;
        min-width: 320px;
        height: auto;
        z-index: 9999999;
        visibility: hidden;
        background: #fff;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        border-radius: 25px;
        overflow: hidden;
    }

    .md-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .3);
        display: none;
    }

    .swiper-container {
        width: 100%;
        padding-bottom: 40px;
    }

    .swiper-container .swiper-slide img {
        width: 100%;
        height: auto
    }
</style>
<div class="md-overlay md-overlay1" onclick="hidemodal(1);"></div>
<div class="md-modal md-effect-1" id="modal-1">
    <div style="width:100%;padding:10px 15px;background: #01B5FF;text-align: right" onclick="hidemodal(1)">
        <img src='/static/index/image/close.png' height=20>
    </div>
    <div class="swiper-container" id="sst_pagination">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/static/index/image/<?php if ($row['template_language'] == 'en') echo 'en_'; ?>sst1.png">
            </div>
            <div class="swiper-slide">
                <img src="/static/index/image/<?php if ($row['template_language'] == 'en') echo 'en_'; ?>sst2.png">
            </div>
            <div class="swiper-slide">
                <img src="/static/index/image/<?php if ($row['template_language'] == 'en') echo 'en_'; ?>sst3.png">
            </div>
            <div class="swiper-slide">
                <img src="/static/index/image/<?php if ($row['template_language'] == 'en') echo 'en_'; ?>sst4.png">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php if ($row['template_language'] != 'en') { ?>
        <div class="md-trigger btn" data-modal="modal-2"
             style="width:100%;background:#fff;font-size:16px;color:#0477F9;text-align: center;"
             onclick="showmodal(2);hidemodal(1);">
            什么是描述文件？
        </div>
    <?php } ?>
</div>
<div class="md-overlay md-overlay2" onclick="hidemodal(2);"></div>
<div class="md-modal md-effect-2" id="modal-2">
    <div class="md-content" style="background: #fff;padding:15px">
        <h3>描述文件</h3>
        <div>
            <p><b>1，什么是描述文件？为什么要安装？</b></p>
            <p>描述文件是经过苹果公司认证的，用来记录用户设备，请放心使用。安装描述文件，是为了将您的设备注册到苹果用户库。是安装苹果APP的必备条件。
            <p><b>2，安装过程中卡在了设置页面，如何解决？</b></p>
            <p>卡顿属于iOS系统的bug。解决方案：双击Home/底部上滑-上滑关掉设置页面-重新安装即可。
            <p><b>3，安装描述文件时为什么要输入密码？输入什么密码？</b></p>
            <p>为了确认是设备主人在操作，安装描述文件时需输入【解锁密码】
            <p>
            <div class="md-close" onclick="hidemodal(2);"
                 style="width:140px; height:30px; line-height:30px;background:#00ADF4;border-radius:25px;color:#fff;font-size:16px; margin:0 auto;text-align:center">
                我知道了
            </div>
        </div>
    </div>
</div>
<script src="/static/pack/swiper.5.4.1/swiper.min.js"></script>
<script>
    var swiper = new Swiper('#sst_pagination', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });

    function showmodal(index) {
        index = index || 1
        $('#modal-' + index).css('visibility', 'visible');
        $('.md-overlay' + index).show();
    }

    function hidemodal(index) {
        index = index || 1
        $('#modal-' + index).css('visibility', 'hidden');
        $('.md-overlay' + index).hide();
    }

    function disclaimer() {
        $("#disclaimerModal").modal("show");
    }
</script>
</body>
</html>