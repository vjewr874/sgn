<!DOCTYPE html>
<!--[if IE 8]>
<html lang="" class="ie8"><![endif]-->
<!--[if IE 9]>
<html lang="" class="ie9"><![endif]-->
<!--[if !IE]><!-->
<html lang="">
<!--<![endif]-->
<head>
    <title>哎呦，遇到错误了</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="apk,android,ipa,ios,iphone,ipad,app封装,应用分发,企业签名">
    <meta name="description" content="<?php echo IN_NAME ?>为各行业提供ios企业签名、app封装、应用分发托管服务！">
    <meta name="author" content="<?php echo $_SERVER['HTTP_HOST'] ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="baidu-site-verification" content="ukBKOPYfE2"/>
    <meta name="baidu-site-verification" content="xSBa81fLpH"/>
    <meta name="author" content="<?php echo $_SERVER['HTTP_HOST'] ?>">
    <meta property="og:type" content="webpage">
    <meta property="og:title" content="<?php echo $_SERVER['HTTP_HOST'] ?>">
    <meta property="og:image" content="<?php echo $_SERVER['HTTP_HOST'] ?>/img/logo.png">
    <meta property="og:description" content="<?php echo IN_NAME ?>为开发者提供简洁迅速的内测程序服务">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="flper">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui">
    <link rel="stylesheet" href="/static/pack/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/style.css"/>
    <style>
        body {
            background-color: #efeff1;
        }

        .violations {
            margin: 100px auto 70px;
            width: 524px;
        }

        .violations .bg {
            background: url("/static/index/image/warning.png?20180927?20190530");
            width: 524px;
            height: 505px;
            color: #999;
            font-size: 18px;
            text-align: center;
            padding: 205px 100px 0 80px;
            font-weight: 600;
        }

        .violations a {
            width: 170px;
            height: 40px;
            line-height: 40px;
            background-color: #ffae5e;
            border-radius: 20px;
            display: block;
            margin: 70px auto 0;
            text-align: center;
            color: #fff;
            text-decoration: none;
        }

        @media (max-width: 767px) {
            .violations {
                margin: 150px auto 0;
                width: 6.5rem;
            }

            .violations .bg {
                background: url("/static/index/image/warning1.png?201809271?20190530");
                background-size: cover;
                width: 6.5rem;
                height: 6.26rem;
                color: #999;
                font-size: .32rem;
                text-align: center;
                padding: 115px 60px 0 50px;
                font-weight: 600;
            }
        }
    </style>
</head>
<body>
<script language="text/template" id="error-content">
    <div class="violations">
        <div class="bg"><span class="error-msg">{{REALNAME_LAYER_TITLE}}</span></div>
        <a href="/" class="hidden-xs">{{BACK_HOME}}</a>
    </div>
</script>
<script src="/static/index/js/jquery.min.js"></script>
<script>
    var windowWidth = $(window).width();

    function setRem() {
        var windowWidth = $(window).width();
        if (windowWidth <= 750) {
            var fs = windowWidth / 750 * 6.25 * 100;
            $('html').css('font-size', fs + '%');   // 1rem = 100px;
        }
    };
    setRem();
    $(window).resize(setRem);
    console.log('REALNAME_LAYER_TITLE[-10005]');
</script>
</body>
<script src="/static/index/js/markup.js"></script>
<script src="/static/index/js/publish/ua-parser.min.js"></script>
<script src="/static/index/js/template/wave.js"></script>
</html>