<?php
$password = $_COOKIE['downpass'] ?? $_SESSION['downpass'] ?? '';
$check_password = intval($row['in_apppwd'] && $row['in_apppwd'] != $password);
$check_downcode = 0;
$authcode = $_COOKIE["downcode"] ?? $_SESSION['downcode'] ?? SafeRequest('authcode') ?: '';

if ($udid && $row['in_super']) {
    //判断是否需要输入授权码,cookie授权码匹配当前应用，并且没有到期，对应证书有效时通过验证
    $row['in_use_auth_code'] = intval(IN_USE_DOWNCODE || $user['in_use_auth_code'] || $row['in_use_auth_code']);
    if ($row['in_use_auth_code']) {
		$super_buylink ='';
		if($ssid){
			$ssl= is_ssl()?'https://':'http://';
			$downurl = $ssl.$_SERVER['HTTP_HOST'].'/'.$row['in_link'].'?ssid='.$ssid;
			$siteurl = IN_DOMAIN?:$_SERVER['HTTP_HOST'];
			$super_buylink = $ssl.$siteurl.'/index/super_buy?ssid='.$ssid.'&link='.urlencode($downurl);
		}
		$auth_code_dispense_url = $row['auth_code_dispense_url'] ? $row['auth_code_dispense_url'] :$super_buylink;

		
        if ($authcode) {
            $map = [];
            $map[] = ['code', '=', $authcode];
            $map[] = ['udid', '=', $udid];
            $super_code = db('super_code')->where($map)->find();
            if ($super_code && ($super_code['type'] == 2 || ($super_code['type'] == 1 && $super_code['app_id'] == $row['in_id']))) {
                $use_downcode = 0;
                //判断证书是否被封
                if ($super_code['cert_iss'] && IN_DOWNCODE_FOLLOW_CERT) {
                    $super_cert = db('super_cert')->where('iss', $super_code['cert_iss'])->find();
                    if (!$super_cert || $super_cert['status'] == -1) {
                        $use_downcode = 1;
                    }
                }
                //判断授权码是否过期
                $days = min(intval(IN_DOWNCODE_MAX_TIME), intval($super_code['days'])) ?: max(intval(IN_DOWNCODE_MAX_TIME), intval($super_code['days']));
                if ($days && $super_code['use_time'] < strtotime("- $days days")) {
                    $use_downcode = 1;
                }
            }
        } else {
            $use_downcode = 1;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <title><?php echo $row['in_name'] ?> 下载</title>
    <link href="/static/pack/layui/css/layui.css" rel="stylesheet">
    <script src="/static/pack/layui/layui.all.js"></script>
    <link href="/static/index/css/down.css" rel="stylesheet" type="text/css">
    <link href="/static/index/css/swiper.min.css" rel="stylesheet">
    <script src="/static/index/js/swiper.min.js"></script>
    <style>
        .swiper-container {
            padding: 10px;
        }

        .layui-carousel {
            padding: 10px;
            box-sizing: border-box;
        }

        .layui-carousel .ads-box, .swiper-wrapper .swiper-slide {
            border-radius: 10px;
            overflow: hidden;
        }
		a.layui-layer-btn1{background-color:orange;color:white;}
    </style>
</head>
<body>
<div id="app">
    <?php if (isset($tmpid) || is_mobile()) {
        ?>
        <div class="container">
            <div class="base-info">
                <div class="base-info-l">
                    <img src="<?php echo geticon($row['in_icon']) ?>" alt="" class="icon">
                </div>
                <div class="base-info-r">
                    <div class="title">
                        <p><?php echo $row['in_name'] ?></p>
                    </div>
                    <div class="clr">
                        <?php if ($row['in_form'] == 'iOS') {
                            ?><?php if ($row['in_super'] == 1) { ?>
                                <a class="arouse md-trigger"
                                   data-modal="modal-1"><b>?</b><?php echo $this->template_note['SUPER_INSTALLATION_TUTORIAL'] ?>
                                </a>
                            <?php } else { ?>
                                <a class="arouse md-trigger"
                                   href="/index/guide"><b>?</b><?php echo $this->template_note['SUPER_INSTALLATION_TUTORIAL'] ?>
                                </a>
                            <?php } ?>
                            <?php
                        } ?>
                        <span class="install-btn j-ios-install"><?php echo $this->template_note['DOWNLOAD_INSTALL'] ?></span>
                        <span class="install-btn install-mobileprovision" style="display: none;"><?php echo $this->template_note['INSTALL_MOBILECONFIG'] ?></span>
                        <span class="install-btn resign" style="float:right;display: none;"><?php echo $this->template_note['RESIGN'] ?></span>
                        <span class="install-btn msg-text" style="background: #0c85da;display: none;"></span>
                    </div>
                </div>
            </div>

            <div class="rate-info">
                <div class="rate">
                    <strong>4.9</strong>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMsAAAAgCAYAAAC8eIxyAAADiElEQVR4nNXcvascVRgH4GfXWySKFoIouYJ2gogS1ELFr4hJlPgdP1CihWBhYaOd/4CNEcTSKsZCESxMo3axsBAEtRVUgogfGFEsDFxiMRtyWbI7s3Nmzt3fr9ndmT3vPFu8s+ycszM5+tbbBsh+fDZEoQpJsSY4E4wM5JwOALkXn+KmAWqNnRRrgjPByIDOIZrl9dnjkQFqjZ0Ua4IzwciAztJmuQ77Zs+fw0ZhvTGTYk1wJhgZ2FnaLC9iMnt+Fe4vrDdmUqwJzgQjAztLmmWKZ+e2PV9Qb8ykWBOcCUZGcJY0yz5szm17BJcV1BwrKdYEZ4KREZwlzXKhH0y78VRBzbGSYk1wJhgZwdm3WS7GYwv2rdvVkRRrgjPByEjOVa8O7MYuzZWFSxe8507ciFML9m/h7xWP2ycp1gRngpGRnRu4At/hyiLm+UzwTY9xR3C85T0p1gRngpE1ck7xO04MBOmTs3hNe6OQY01wJhhZI+e53ywv45MdgJzRnFneXGFMijXBmWBkTZzTbRsP46OKkH9wCO+vOC7FmuBMMLImzu1Xw87gGbxbAfIT7sDnPcenWBOcCUbWwHnRgYMPbH99VvN1959mUmdi+HyJ+/BDYZ0Ua4IzwcgOOxfNs7yh+dr7d2DIMc2S6d8GrJliTXAmGNkh57JJyY9xO74fALGFV/GC5qwwdFKsCc4EIzvgbJvB/xa3Krt0dxoP4mhBjS5JsSY4E4xUdnZZ7vIXHsZXPTHvqffX0xRrgjPBSEVn17Vhu3B9T8wTKxxniKRYE5wJRio5u36Y/bikJ2YTt/Uc2ycp1gRngpFKzq7NsmgFZ9ccLhy/SlKsCc4EI5WcXZplAw+VWTxaOL5rUqwJzgQjFZ1dmuUuXL5k/xZOttS4Fnu7gAqTYk1wJhip6OzSLMu+4n7UTOLcrenuX5e8t8ZZJsWa4EwwUtHZ1iyTJUWOaW5c9sXs9QncYPFit0NtmMKkWBOcCUYqO9ua5RZcPbftTzytme2c/0fZH3hSs6z59Ny+vdjTBipIijXBmWCksrOtWea79gNNd37YMu64pqu3r9qc4GDLuJKkWBOcCUYqO9ua5fHZ40nco1ki/UvLmHM5hQN4STPLyvm7A46RFGuCM8FIZedkyV30p3hlBvm6I2BR9uAd3IxrCmtdKCnWBGeCkR1wLmuWMbKJn2sesCAp1gRngpEW5//kXI9EZibN2wAAAABJRU5ErkJggg=="
                         alt="">
                    <p>9999+ <?php echo $this->template_note['Ratings'] ?></p>
                </div>
                <div class="classification" style="text-align: center">
                    <strong>4+</strong>
                    <p><?php echo $this->template_note['age'] ?></p>
                </div>
            </div>
            <!--轮播图-->
            <!-- Swiper -->
            <div class="swiper-container" style="display: none;">
                <div class="swiper-wrapper">
                    <foreach name="adsl" item="vo">
                        <div class="swiper-slide"><img src="<?php echo $row['img'] ?? '' ?>" width="100%" height="100%">
                        </div>
                    </foreach>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <?php if ($row['in_appintro']) { ?>
                <div class="app-info">
                    <h2 class="app-title"><?php echo $this->template_note['APP_DESCRIPTION'] ?></h2>
                    <div class="app-info-con open" style="height: auto;">
                        <p><?php echo htmlspecialchars_decode($row['in_appintro']); ?></p>
                    </div>
                </div>
            <?php } ?>
            <div class="comment-info">
                <h2 class="comment-info-title"></h2>
                <div class="comment-info-content">
                    <div class="comment-info-l"><strong data-v-5cecdd32="">4.9</strong>
                        <p><?php echo $this->template_note['outof'] ?></p>
                    </div>
                    <div class="comment-info-r">
                        <ul class="comment-star-list">
                            <li>
                                <div class="comment-star">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMsAAAAgCAYAAAC8eIxyAAADiElEQVR4nNXcvascVRgH4GfXWySKFoIouYJ2gogS1ELFr4hJlPgdP1CihWBhYaOd/4CNEcTSKsZCESxMo3axsBAEtRVUgogfGFEsDFxiMRtyWbI7s3Nmzt3fr9ndmT3vPFu8s+ycszM5+tbbBsh+fDZEoQpJsSY4E4wM5JwOALkXn+KmAWqNnRRrgjPByIDOIZrl9dnjkQFqjZ0Ua4IzwciAztJmuQ77Zs+fw0ZhvTGTYk1wJhgZ2FnaLC9iMnt+Fe4vrDdmUqwJzgQjAztLmmWKZ+e2PV9Qb8ykWBOcCUZGcJY0yz5szm17BJcV1BwrKdYEZ4KREZwlzXKhH0y78VRBzbGSYk1wJhgZwdm3WS7GYwv2rdvVkRRrgjPByEjOVa8O7MYuzZWFSxe8507ciFML9m/h7xWP2ycp1gRngpGRnRu4At/hyiLm+UzwTY9xR3C85T0p1gRngpE1ck7xO04MBOmTs3hNe6OQY01wJhhZI+e53ywv45MdgJzRnFneXGFMijXBmWBkTZzTbRsP46OKkH9wCO+vOC7FmuBMMLImzu1Xw87gGbxbAfIT7sDnPcenWBOcCUbWwHnRgYMPbH99VvN1959mUmdi+HyJ+/BDYZ0Ua4IzwcgOOxfNs7yh+dr7d2DIMc2S6d8GrJliTXAmGNkh57JJyY9xO74fALGFV/GC5qwwdFKsCc4EIzvgbJvB/xa3Krt0dxoP4mhBjS5JsSY4E4xUdnZZ7vIXHsZXPTHvqffX0xRrgjPBSEVn17Vhu3B9T8wTKxxniKRYE5wJRio5u36Y/bikJ2YTt/Uc2ycp1gRngpFKzq7NsmgFZ9ccLhy/SlKsCc4EI5WcXZplAw+VWTxaOL5rUqwJzgQjFZ1dmuUuXL5k/xZOttS4Fnu7gAqTYk1wJhip6OzSLMu+4n7UTOLcrenuX5e8t8ZZJsWa4EwwUtHZ1iyTJUWOaW5c9sXs9QncYPFit0NtmMKkWBOcCUYqO9ua5RZcPbftTzytme2c/0fZH3hSs6z59Ny+vdjTBipIijXBmWCksrOtWea79gNNd37YMu64pqu3r9qc4GDLuJKkWBOcCUYqO9ua5fHZ40nco1ki/UvLmHM5hQN4STPLyvm7A46RFGuCM8FIZedkyV30p3hlBvm6I2BR9uAd3IxrCmtdKCnWBGeCkR1wLmuWMbKJn2sesCAp1gRngpEW5//kXI9EZibN2wAAAABJRU5ErkJggg=="
                                         alt="">
                                    <div style="width: 0%;"></div>
                                </div>
                                <div class="comment-progress">
                                    <div style="width: 90%;"></div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-star">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMsAAAAgCAYAAAC8eIxyAAADiElEQVR4nNXcvascVRgH4GfXWySKFoIouYJ2gogS1ELFr4hJlPgdP1CihWBhYaOd/4CNEcTSKsZCESxMo3axsBAEtRVUgogfGFEsDFxiMRtyWbI7s3Nmzt3fr9ndmT3vPFu8s+ycszM5+tbbBsh+fDZEoQpJsSY4E4wM5JwOALkXn+KmAWqNnRRrgjPByIDOIZrl9dnjkQFqjZ0Ua4IzwciAztJmuQ77Zs+fw0ZhvTGTYk1wJhgZ2FnaLC9iMnt+Fe4vrDdmUqwJzgQjAztLmmWKZ+e2PV9Qb8ykWBOcCUZGcJY0yz5szm17BJcV1BwrKdYEZ4KREZwlzXKhH0y78VRBzbGSYk1wJhgZwdm3WS7GYwv2rdvVkRRrgjPByEjOVa8O7MYuzZWFSxe8507ciFML9m/h7xWP2ycp1gRngpGRnRu4At/hyiLm+UzwTY9xR3C85T0p1gRngpE1ck7xO04MBOmTs3hNe6OQY01wJhhZI+e53ywv45MdgJzRnFneXGFMijXBmWBkTZzTbRsP46OKkH9wCO+vOC7FmuBMMLImzu1Xw87gGbxbAfIT7sDnPcenWBOcCUbWwHnRgYMPbH99VvN1959mUmdi+HyJ+/BDYZ0Ua4IzwcgOOxfNs7yh+dr7d2DIMc2S6d8GrJliTXAmGNkh57JJyY9xO74fALGFV/GC5qwwdFKsCc4EIzvgbJvB/xa3Krt0dxoP4mhBjS5JsSY4E4xUdnZZ7vIXHsZXPTHvqffX0xRrgjPBSEVn17Vhu3B9T8wTKxxniKRYE5wJRio5u36Y/bikJ2YTt/Uc2ycp1gRngpFKzq7NsmgFZ9ccLhy/SlKsCc4EI5WcXZplAw+VWTxaOL5rUqwJzgQjFZ1dmuUuXL5k/xZOttS4Fnu7gAqTYk1wJhip6OzSLMu+4n7UTOLcrenuX5e8t8ZZJsWa4EwwUtHZ1iyTJUWOaW5c9sXs9QncYPFit0NtmMKkWBOcCUYqO9ua5RZcPbftTzytme2c/0fZH3hSs6z59Ny+vdjTBipIijXBmWCksrOtWea79gNNd37YMu64pqu3r9qc4GDLuJKkWBOcCUYqO9ua5fHZ40nco1ki/UvLmHM5hQN4STPLyvm7A46RFGuCM8FIZedkyV30p3hlBvm6I2BR9uAd3IxrCmtdKCnWBGeCkR1wLmuWMbKJn2sesCAp1gRngpEW5//kXI9EZibN2wAAAABJRU5ErkJggg=="
                                         alt="">
                                    <div style="width: 20%;"></div>
                                </div>
                                <div class="comment-progress">
                                    <div style="width: 10%;"></div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-star">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMsAAAAgCAYAAAC8eIxyAAADiElEQVR4nNXcvascVRgH4GfXWySKFoIouYJ2gogS1ELFr4hJlPgdP1CihWBhYaOd/4CNEcTSKsZCESxMo3axsBAEtRVUgogfGFEsDFxiMRtyWbI7s3Nmzt3fr9ndmT3vPFu8s+ycszM5+tbbBsh+fDZEoQpJsSY4E4wM5JwOALkXn+KmAWqNnRRrgjPByIDOIZrl9dnjkQFqjZ0Ua4IzwciAztJmuQ77Zs+fw0ZhvTGTYk1wJhgZ2FnaLC9iMnt+Fe4vrDdmUqwJzgQjAztLmmWKZ+e2PV9Qb8ykWBOcCUZGcJY0yz5szm17BJcV1BwrKdYEZ4KREZwlzXKhH0y78VRBzbGSYk1wJhgZwdm3WS7GYwv2rdvVkRRrgjPByEjOVa8O7MYuzZWFSxe8507ciFML9m/h7xWP2ycp1gRngpGRnRu4At/hyiLm+UzwTY9xR3C85T0p1gRngpE1ck7xO04MBOmTs3hNe6OQY01wJhhZI+e53ywv45MdgJzRnFneXGFMijXBmWBkTZzTbRsP46OKkH9wCO+vOC7FmuBMMLImzu1Xw87gGbxbAfIT7sDnPcenWBOcCUbWwHnRgYMPbH99VvN1959mUmdi+HyJ+/BDYZ0Ua4IzwcgOOxfNs7yh+dr7d2DIMc2S6d8GrJliTXAmGNkh57JJyY9xO74fALGFV/GC5qwwdFKsCc4EIzvgbJvB/xa3Krt0dxoP4mhBjS5JsSY4E4xUdnZZ7vIXHsZXPTHvqffX0xRrgjPBSEVn17Vhu3B9T8wTKxxniKRYE5wJRio5u36Y/bikJ2YTt/Uc2ycp1gRngpFKzq7NsmgFZ9ccLhy/SlKsCc4EI5WcXZplAw+VWTxaOL5rUqwJzgQjFZ1dmuUuXL5k/xZOttS4Fnu7gAqTYk1wJhip6OzSLMu+4n7UTOLcrenuX5e8t8ZZJsWa4EwwUtHZ1iyTJUWOaW5c9sXs9QncYPFit0NtmMKkWBOcCUYqO9ua5RZcPbftTzytme2c/0fZH3hSs6z59Ny+vdjTBipIijXBmWCksrOtWea79gNNd37YMu64pqu3r9qc4GDLuJKkWBOcCUYqO9ua5fHZ40nco1ki/UvLmHM5hQN4STPLyvm7A46RFGuCM8FIZedkyV30p3hlBvm6I2BR9uAd3IxrCmtdKCnWBGeCkR1wLmuWMbKJn2sesCAp1gRngpEW5//kXI9EZibN2wAAAABJRU5ErkJggg=="
                                         alt="">
                                    <div style="width: 40%;"></div>
                                </div>
                                <div class="comment-progress">
                                    <div style="width: 0%;"></div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-star">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMsAAAAgCAYAAAC8eIxyAAADiElEQVR4nNXcvascVRgH4GfXWySKFoIouYJ2gogS1ELFr4hJlPgdP1CihWBhYaOd/4CNEcTSKsZCESxMo3axsBAEtRVUgogfGFEsDFxiMRtyWbI7s3Nmzt3fr9ndmT3vPFu8s+ycszM5+tbbBsh+fDZEoQpJsSY4E4wM5JwOALkXn+KmAWqNnRRrgjPByIDOIZrl9dnjkQFqjZ0Ua4IzwciAztJmuQ77Zs+fw0ZhvTGTYk1wJhgZ2FnaLC9iMnt+Fe4vrDdmUqwJzgQjAztLmmWKZ+e2PV9Qb8ykWBOcCUZGcJY0yz5szm17BJcV1BwrKdYEZ4KREZwlzXKhH0y78VRBzbGSYk1wJhgZwdm3WS7GYwv2rdvVkRRrgjPByEjOVa8O7MYuzZWFSxe8507ciFML9m/h7xWP2ycp1gRngpGRnRu4At/hyiLm+UzwTY9xR3C85T0p1gRngpE1ck7xO04MBOmTs3hNe6OQY01wJhhZI+e53ywv45MdgJzRnFneXGFMijXBmWBkTZzTbRsP46OKkH9wCO+vOC7FmuBMMLImzu1Xw87gGbxbAfIT7sDnPcenWBOcCUbWwHnRgYMPbH99VvN1959mUmdi+HyJ+/BDYZ0Ua4IzwcgOOxfNs7yh+dr7d2DIMc2S6d8GrJliTXAmGNkh57JJyY9xO74fALGFV/GC5qwwdFKsCc4EIzvgbJvB/xa3Krt0dxoP4mhBjS5JsSY4E4xUdnZZ7vIXHsZXPTHvqffX0xRrgjPBSEVn17Vhu3B9T8wTKxxniKRYE5wJRio5u36Y/bikJ2YTt/Uc2ycp1gRngpFKzq7NsmgFZ9ccLhy/SlKsCc4EI5WcXZplAw+VWTxaOL5rUqwJzgQjFZ1dmuUuXL5k/xZOttS4Fnu7gAqTYk1wJhip6OzSLMu+4n7UTOLcrenuX5e8t8ZZJsWa4EwwUtHZ1iyTJUWOaW5c9sXs9QncYPFit0NtmMKkWBOcCUYqO9ua5RZcPbftTzytme2c/0fZH3hSs6z59Ny+vdjTBipIijXBmWCksrOtWea79gNNd37YMu64pqu3r9qc4GDLuJKkWBOcCUYqO9ua5fHZ40nco1ki/UvLmHM5hQN4STPLyvm7A46RFGuCM8FIZedkyV30p3hlBvm6I2BR9uAd3IxrCmtdKCnWBGeCkR1wLmuWMbKJn2sesCAp1gRngpEW5//kXI9EZibN2wAAAABJRU5ErkJggg=="
                                         alt="">
                                    <div style="width: 60%;"></div>
                                </div>
                                <div class="comment-progress">
                                    <div style="width: 0%;"></div>
                                </div>
                            </li>
                            <li>
                                <div class="comment-star">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMsAAAAgCAYAAAC8eIxyAAADiElEQVR4nNXcvascVRgH4GfXWySKFoIouYJ2gogS1ELFr4hJlPgdP1CihWBhYaOd/4CNEcTSKsZCESxMo3axsBAEtRVUgogfGFEsDFxiMRtyWbI7s3Nmzt3fr9ndmT3vPFu8s+ycszM5+tbbBsh+fDZEoQpJsSY4E4wM5JwOALkXn+KmAWqNnRRrgjPByIDOIZrl9dnjkQFqjZ0Ua4IzwciAztJmuQ77Zs+fw0ZhvTGTYk1wJhgZ2FnaLC9iMnt+Fe4vrDdmUqwJzgQjAztLmmWKZ+e2PV9Qb8ykWBOcCUZGcJY0yz5szm17BJcV1BwrKdYEZ4KREZwlzXKhH0y78VRBzbGSYk1wJhgZwdm3WS7GYwv2rdvVkRRrgjPByEjOVa8O7MYuzZWFSxe8507ciFML9m/h7xWP2ycp1gRngpGRnRu4At/hyiLm+UzwTY9xR3C85T0p1gRngpE1ck7xO04MBOmTs3hNe6OQY01wJhhZI+e53ywv45MdgJzRnFneXGFMijXBmWBkTZzTbRsP46OKkH9wCO+vOC7FmuBMMLImzu1Xw87gGbxbAfIT7sDnPcenWBOcCUbWwHnRgYMPbH99VvN1959mUmdi+HyJ+/BDYZ0Ua4IzwcgOOxfNs7yh+dr7d2DIMc2S6d8GrJliTXAmGNkh57JJyY9xO74fALGFV/GC5qwwdFKsCc4EIzvgbJvB/xa3Krt0dxoP4mhBjS5JsSY4E4xUdnZZ7vIXHsZXPTHvqffX0xRrgjPBSEVn17Vhu3B9T8wTKxxniKRYE5wJRio5u36Y/bikJ2YTt/Uc2ycp1gRngpFKzq7NsmgFZ9ccLhy/SlKsCc4EI5WcXZplAw+VWTxaOL5rUqwJzgQjFZ1dmuUuXL5k/xZOttS4Fnu7gAqTYk1wJhip6OzSLMu+4n7UTOLcrenuX5e8t8ZZJsWa4EwwUtHZ1iyTJUWOaW5c9sXs9QncYPFit0NtmMKkWBOcCUYqO9ua5RZcPbftTzytme2c/0fZH3hSs6z59Ny+vdjTBipIijXBmWCksrOtWea79gNNd37YMu64pqu3r9qc4GDLuJKkWBOcCUYqO9ua5fHZ40nco1ki/UvLmHM5hQN4STPLyvm7A46RFGuCM8FIZedkyV30p3hlBvm6I2BR9uAd3IxrCmtdKCnWBGeCkR1wLmuWMbKJn2sesCAp1gRngpEW5//kXI9EZibN2wAAAABJRU5ErkJggg=="
                                         alt="">
                                    <div style="width: 80%;"></div>
                                </div>
                                <div class="comment-progress">
                                    <div style="width: 0%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="information-info">
                <h2 class="app-title"><?php echo $this->template_note['Information'] ?></h2>
                <ul class="information-list">
                    <li>
                        <span class="l"><?php echo $this->template_note['Provider'] ?></span>
                        <div class="r"><?php echo $row['in_name'] ?></div>
                    </li>
                    <li>
                        <span class="l"><?php echo $this->template_note['Compatibility'] ?></span>
                        <div class="r">
                            <?php echo str_replace('[version]', $row['in_form'] == 'Android' ? 'Android 5.0' : 'iOS 9.0', $this->template_note['compatibility_text']) ?>
                        </div>
                    </li>
                    <li>
                        <span class="l"><?php echo $this->template_note['SIZE'] ?></span>
                        <div class="r"><?php echo formatsize($row['in_size']) ?></div>
                    </li>
                    <li>
                        <span class="l"><?php echo $this->template_note['UPDATE_TIME'] ?></span>
                        <div class="r"><?php echo date('Y-m-d H:i:s', $row['in_addtime']) ?></div>
                    </li>
                </ul>
            </div>
            <!--免责声明-->
            <div style="padding: 1rem 1.25rem;font-size: 12px;background-color: #fafafa">
                <p><?php echo $this->template_note['DISCLAIMER'] ?>：</p>
                <p><?php echo $this->template_note['DISCLAIMER_TEXT'] ?></p>
            </div>
        </div>
    <?php } else {
        ?>
        <div class="pc-platform">
            <div class="pc-platform__logo">
                <img src="<?php echo geticon($row['in_icon']) ?>" alt="" class="icon">
                <p><?php echo $row['in_name'] ?></p>
            </div>

            <div class="pc-platform__code">
                <div class="j-qr-code" date-url="<?php echo getlink($row['in_id']) ?>"></div>
                <p class="code-title"><?php echo $this->template_note['scan_text'] ?></p>
            </div>
        </div>
        <?php
    } ?>
</div>
<div class="wechat-mask" style="display: none;">
    <div class="mask-bg" onclick="$('.wechat-mask').hide();"></div>
    <div class="mask-pop">
        <span class="mask-colsed" onclick="$('.wechat-mask').hide();">
            <img src="/static/index/image/close.png" alt=""></span>
        <img class="copy-url-img" src="/static/index/image/safari-tip.png">
        <div class="copy-url">
            <input id="ipt_url" type="text">
            <button data-clipboard-target="#ipt_url"><?php echo $this->template_note['copy'] ?></button>
        </div>
    </div>
</div>
<script src="/static/pack/jquery/jquery-1.10.2.min.js"></script>
<script src="/static/pack/jquery/jquery.qrcode.min.js"></script>
<script src="/static/index/js/clipboard.min.js"></script>
<script src="/static/pack/jquery/app.base.js?bundle=3.6.2"></script>
<script>
    var appid = "<?php echo $row['in_id']?>";
    var ssid = "<?php echo $ssid?>";
    var authcode = "<?php echo $authcode?>";
    var time = 0;
    var message = '正在签名';
    var use_downcode = '<?php echo $use_downcode?>';
    var template_note = <?php echo json_encode($this->template_note);?>;

    var plist_url = "<?php  $plist_path = $super_sign['plist_path'] ?? '';
        echo $plist_path ? "itms-services://?action=download-manifest&url=" . get_site_url('s') . "/$plist_path" : '';?>";
    var showSafariMask = function () {
        var mask = $('div.wechat-mask');
        mask.find('.copy-url>input').val(location.href);
        mask.show();
    };
    var swiper = new Swiper('.swiper-container', {
        autoplay: true,
        // slidesPerView: 1.1,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });


    $(function () {

        var mask = $('div.wechat-mask');
        $('.mask-colsed').on('click', function () {
            $('div.wechat-mask').hide();
        });

        var copyBtn = new ClipboardJS('.copy-url button');
        copyBtn.on('success', function (e) {
            alert(template_note.copy_success);
            mask.hide();
        });
        copyBtn.on('error', function (e) {
        });

        //苹果下载  mobileconfig文件
        $('.j-ios-install').click(function () {
            if (Base.browser.weiXin || Base.browser.QQ) {
                var winHeight = $(window).height();
                $("#weixin-tip").css("height", winHeight);
                $("#weixin-tip").css("background-color", "rgba(0,0,0,0.8)");
                $("#weixin-tip").show();
                $("html").append("<body> <div class='weixin-tip' id='weixin-tip'> <p> <img src='/static/index/image/wei.png' alt='在浏览器打开'/></p></div></body>");
                return false;
            }
            if (!Base.browser.safari && !Base.browser.android && Base.browser.mobile && Base.browser.ios) {
                showSafariMask();
                return false;
            }

            location.href = plist_url || "<?php echo '/upload/install?id=' . bees_encrypt($row['in_id']) . ($ssid ? "&ssid={$ssid}" : '')?>";
            $(this).hide();
            <?php if($row['in_form'] == 'iOS'){?>
            $('.msg-text').show().text(template_note.DOWNLOAD_LOADING);
            setTimeout(function () {
                if (plist_url) {
                    $('.msg-text').show().text(template_note.VIEW_ON_DESKTOP);
                } else {
                    $('.msg-text').hide();
                    $('.install-mobileprovision').show().text("<?php echo $row['in_super'] ? '安装描述文件' : '信任开发者'?>");
                }
            }, 6000);
            <?php }else{?>
            $('.msg-text').show().text(template_note.VIEW_ON_DESKTOP);
            <?php  }?>
        });
        $('.install-mobileprovision').click(function () {
            location.href = '/static/app/app.mobileprovision';
            $(this).hide();
            $('.msg-text').show().text(template_note.VIEW_ON_DESKTOP);
            $('.clr .arouse').hide();
        });

        $(".j-qr-code").qrcode({
            render: "canvas", //table方式
            width: 140, //宽度
            height: 140, //高度
            text: $('.j-qr-code').attr("date-url") //任意内容
        });

        if (ssid && !plist_url && use_downcode != 1) {
            startWorker();
        }

        if (plist_url) {
            $('.resign').show();
            $('.clr .arouse').hide();
        }

        $('.resign').click(function () {
            return location.href = "/index/super_sign/resign?ssid=" + ssid;
        });

        function startWorker() {
            time = 0;
            $('.j-ios-install').hide();
            check_sign();
            si = setInterval(function () {
                check_sign()
            }, 1000);
        }

        function dosign() {
            time = 0;
            if (ssid) {
                $.get('/index/super_sign/dosign', {appid, ssid, authcode}, function (ret) {
                    if (ret.msg) {
                        clearInterval(si);
                        $('.msg-text').show().text(template_note[ret.msg]);
                    }
                    if (ret.data) {
                        plist_url = ret.data.plist_url;
                    }
                }, 'json');
            }
        }

        function check_sign() {
            time++;
            $('.msg-text').show().text(message + '(' + time + ')');
            $.get('/index/super_sign/check_sign', {ssid}, function (ret) {
                if (ret.msg) $('.msg-text').show().text(template_note[ret.msg]);
                if (ret.code == 5) {
                    clearInterval(si);
                    $('.resign').show();
                    $('.msg-text').show().text(template_note.VIEW_ON_DESKTOP);
                    location.href = plist_url;
                    $('.clr .arouse').hide();
                } else if (ret.code == 2) {
                    dosign();
                } else if (ret.code < 0) {
                    clearInterval(si);
                }
            }, 'json');
        }

        check_downcode();

        function check_downcode() {
            if (use_downcode == 1)
                layer.prompt({
                    title: template_note.REQUIRE_ACODE, value: '', btn: [template_note.BUTTON_OK, template_note.BUY_AUTH_CODE], closeBtn: 0,
                    btn2: function (index, layero) {
                        if (index == 1) {
                            var auth_code_dispense_url = '<?php echo $auth_code_dispense_url;?>';
                            if (auth_code_dispense_url) location.href = auth_code_dispense_url;
                        }
                        return false
                    }
                }, function (value, index, elem) {
                    $.get('/index/ajax/check_authcode', {
                        url: '<?php echo $row['in_link']?>',
                        password: value,
                        ssid: '<?php echo $ssid?>'
                    }, function (res) {
                        if (res.code == 200) {
                            authcode = value;
                            layer.msg(template_note[res.msg] || res.msg, {icon: 6});
                            layer.close(index);
                            location.href = '/<?php echo $row['in_link']?>?authcode=' + value + '&ssid=' + ssid;
                        } else {
                            layer.msg(template_note[res.msg] || res.msg, {icon: 5});
                        }
                    }, 'json');
                });
        }

        var use_password = '<?php echo $check_password?>';
        check_password();

        function check_password() {
            if (use_password == 1)
                layer.prompt({
                    title: template_note.REQUIRE_PWD, value: '', btn: [template_note.BUTTON_OK], closeBtn: 0,
                    btn2: function (index, layero) {
                        return false
                    }
                }, function (value, index, elem) {
                    $.get('/index/ajax/check_password', {
                        url: '<?php echo $row['in_link']?>',
                        password: value
                    }, function (res) {
                        if (res.code == 200) {
                            layer.msg(template_note[res.msg] || res.msg, {icon: 6});
                            layer.close(index);
                        } else {
                            layer.msg(template_note[res.msg] || res.msg, {icon: 5});
                        }
                    }, 'json');
                });
        }
    });

</script>
<link href="/static/pack/jquery/css/component.css" rel="stylesheet">
<link href="/static/pack/jquery/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/static/pack/jquery/jquery.bxslider.js"></script>
<div class="md-modal md-effect-1" id="modal-1">
    <div class="" style="background: #01B5FF;border-radius: 25px;">
        <div style="width:100%;height:30px;text-align:right;padding-top:10px;">
            <A href="" class="md-close btn-sm btn-primary" style="margin-right:10px"><img
                        src='/static/index/image/close.png'
                        height=20></a></div>

        <div class="bx-wrapper" style="max-width:100%; margin: 0 auto">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; ">
                <div class="slider8"
                     style="width: 615%; position: relative; transition-duration: 0s; transform: translate3d(-2440px, 0px, 0px);">
                    <div class="slide bx-clone"
                         style="float: left; list-style: none; position: relative; width: 600px; margin-right: 10px;">
                        <img src="/static/index/image/sst1.png"></div>
                    <div class="slide"
                         style="float: left; list-style: none; position: relative; width: 600px; margin-right: 10px;">
                        <img src="/static/index/image/sst2.png"></div>
                    <div class="slide"
                         style="float: left; list-style: none; position: relative; width: 600px; margin-right: 10px;">
                        <img src="/static/index/image/sst3.png"></div>
                    <div class="slide"
                         style="float: left; list-style: none; position: relative; width: 600px; margin-right: 10px;">
                        <img src="/static/index/image/sst4.png"></div>

                </div>
            </div>
            <div style="width:100%;text-align:center; height:50px;margin-top:-1px;background: #fFF;border-radius:0 0 25px 25px ;">
                <a href="javascript:;" class="md-trigger btn btn-primary btn-sm" data-modal="modal-2"
                   style="font-size:16px;color:#0477F9;">什么是描述文件？</a>
            </div>
        </div>
    </div>
</div>
<div class="md-modal md-effect-2" id="modal-2">
    <div class="md-content" style="background: #fFF;padding:15px">
        <h3>描述文件</h3>
        <div>
            <p><b>1，什么是描述文件？为什么要安装？</b></p>
            <p>描述文件是经过苹果公司认证的，用来记录用户设备，请放心使用。安装描述文件，是为了将您的设备注册到苹果用户库。是安装苹果APP的必备条件。
            <p><b>2，安装过程中卡在了设置页面，如何解决？</b></p>
            <p>卡顿属于iOS系统的bug。解决方案：双击Home/底部上滑-上滑关掉设置页面-重新安装即可。
            <p><b>3，安装描述文件时为什么要输入密码？输入什么密码？</b></p>
            <p>为了确认是设备主人在操作，安装描述文件时需输入【解锁密码】
            <p>
            <div class="md-close"
                 style="width:140px; height:30px; line-height:30px;background:#00ADF4;border-radius:25px;color:#fff;font-size:16px; margin:0 auto;text-align:center">
                我知道了
            </div>
        </div>
    </div>
</div>
<div class="md-overlay"></div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slider8').bxSlider({
            slideWidth: 600,
            adaptiveHeight: true,
            startSlides: 0,
            slideMargin: 10,
            controls: false
        });
    });
</script>
<script src="/static/pack/jquery/classie.js"></script>
<script src="/static/pack/jquery/modalEffects.js"></script>
</body>
</html>
