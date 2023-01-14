<?php
if (dstrpos($_SERVER['HTTP_USER_AGENT'], array('iphone', 'ipad', 'ipod', 'mac', 'ios', 'playbook'))) {
    $tip = 'Safari';
} else {
    $tip = '浏览器';
}
$uri = $_SERVER['REQUEST_URI'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>请使用<?php echo $tip; ?>打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <script src="/static/index/js/jquery.min.js"></script>
    <script src="/static/index/js/clipboard.min.js"></script>
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #fff;
        }

        .top-bar-guidance {
            font-size: 15px;
            color: #fff;
            height: 70%;
            line-height: 1.8;
            padding-left: 20px;
            padding-top: 20px;
            background: url(/static/index/image/tiptop.png) center top/contain no-repeat;
        }

        .top-bar-guidance .icon-safari {
            width: 25px;
            height: 25px;
            vertical-align: middle;
            margin: 0 0.2em;
        }

        .app-download-tip {
            margin: 0 auto;
            width: 290px;
            text-align: center;
            font-size: 15px;
            color: #2466f4;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center / auto 15px repeat-x;
        }

        .app-download-tip .guidance-desc {
            background-color: #fff;
            padding: 0 5px;
        }

        .app-download-btn {
            display: block;
            width: 214px;
            height: 40px;
            line-height: 40px;
            margin: 18px auto 0 auto;
            text-align: center;
            font-size: 18px;
            color: #2466f4;
            border-radius: 20px;
            border: 0.5px #2466f4 solid;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="top-bar-guidance">
    <p>点击右上角，在<img src="/static/index/image/safarilogo.png" class="icon-safari"> <?php echo $tip; ?>打开</p>
    <p>可以继续访问本站哦~</p>
</div>
<div class="app-download-tip">
    <span class="guidance-desc">您可以复制本站网址，到其它浏览器打开!</span>
</div>
<a class="app-download-btn" id="BtnClick" href="#">复制网址</a>
<script>
    var url = '<?php echo $url;?>';
    var turl = '<?php echo $url;?>';

    document.querySelector('body').addEventListener('touchmove', function (event) {
        event.preventDefault();
    });
    window.mobileUtil = (function (win, doc) {
        var UA = navigator.userAgent,
            isAndroid = /android|adr/gi.test(UA),
            isIOS = /iphone|ipod|ipad/gi.test(UA) && !isAndroid,
            isBlackBerry = /BlackBerry/i.test(UA),
            isWindowPhone = /IEMobile/i.test(UA),
            isMobile = isAndroid || isIOS || isBlackBerry || isWindowPhone;
        return {
            isAndroid: isAndroid,
            isIOS: isIOS,
            isMobile: isMobile,
            isWeixin: /MicroMessenger/gi.test(UA),
            isQQ: /QQ/gi.test(UA)
        };
    })(window, document);

    if (mobileUtil.isWeixin || mobileUtil.isQQ) {
        var clipboard = new ClipboardJS('#BtnClick', {
            text: function () {
                $("#BtnClick").css({"background-color": '#2466f4', 'color': 'white'});
                document.getElementById('BtnClick').innerHTML = '复制成功';
                return url;
            }
        });
    } else {
        document.getElementById('BtnClick').href = turl;
        // window.location.replace(turl);
    }
</script>
</body>
</html>