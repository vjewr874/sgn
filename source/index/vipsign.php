<?php
if(!defined('IN_ROOT'))
{
	exit('Access denied');
}
?>
<!DOCTYPE html>
<html lang="zh">
<head> 
<title>超级签名 - <?php echo IN_NAME; ?>-IOS签名-APP打包-APP封装-ios免签封装-ios应用内测分发平台</title> 
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
<meta name="renderer" content="webkit" /> 
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>" /> 
<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/" />  
<meta property="og:title" content="<?php echo IN_NAME; ?>" /> 
<meta name="description" content="<?php echo IN_NAME; ?> 为开发者提供测试应用极速发布，iOS/Android应用开发、封装打包APP、内测发布等一系列效率工具服务" /> 
<?php include 'source/index/static.php'; ?>
<script type="text/javascript">
function update_seccode(){
	document.getElementById('img_seccode').src = '<?php echo IN_PATH; ?>source/index/seccode.php?' + Math.random();
}
</script>
<style>
    .ms-badge12 {
    background-color: #ffffff;
    width: 50px;
    height: 25px;
    line-height: 26px;
    display: inline-block;
    color: #e60000;
    border-radius: 10%;
    font-size: 12px;
    text-align: center;
    position: relative;
    top: -3px;
    left: 0;
}
</style>
<link rel="stylesheet" href="/static/default/css/main2.css"/>
</head>
<body>
    
<header>
    <div class="container">
        <div class="header clearfix">
            <a class="header-left block fl" href="/">
                <img src="/data/image/IN_LOGO.png" class="img-responsive hidden-xs">
                <img src="/data/image/IN_LOGO.png" class="img-responsive visible-xs">
            </a>
            <div class="phone-nav-wrap">
                <a class="header-left block fl" href="/">
                    <img src="/data/image/IN_LOGO.png" class="img-responsive visible-xs">
                </a>
                <ul class="ms-nav fl clearfix">
                    <li class=""><a href="/">首页</a>
                    </li>
                   
                    
                                         <li class="">
                            <a target="_blank" href="/index/vipsign">超级签名</a>
                        </li>
                        
                     <li class="">
                        <a href="/index/app_sign">企业签名</a>
                    </li>
                    <li class="">
                            <a href="/index/tf">TF签名</a>
                        </li>
                    <li class="">
                            <a href="/index/price">价格套餐</a>
                            <span class="ms-badge">优惠</span>
                        </li>
                    
                   
                    <li class="">
                        <a href="/index/pack">APP封装</a>
                          <span class="ms-badge">免签</span>
                    </li>
                    <li class="">
                        <a href="/index/utils">工具箱</a>
                    </li>
                                            <li class="">
                            <a href="/index/promote">推广加盟</a>
                        </li>
                        
                                        
                                    </ul>
 <div class="login-in clearfix" style="display: block;">
                            <a class="name-certified fl" href="/index/apps/apps"><font color="red" class="ms-badge12">控制台</font></a>
                                    
                            </div>
            <span class="icon-menu iconfont phone-menu visible-xs"></span>
            <div class="phone-shadow"></div>
        </div>
    </div>
</header>

<div class="content-bg">
  <div class="container">
	<div class="con hidden-xs">
        <h1 align="center">总裁云分发iOS App超级签名</h1>
	    <h4 align="center">更稳定的签名服务、提高应用内测效率、省时省力又省钱</h4>
	    <h5 align="center">安装即可运行，不需要信任操作,操作简单,只需上传分发即可</h5>
       
        
	    <button type="button" class="center-block" target="_blank" onclick="isgo()">立即签名</button>
    </div>
    <div class="con visible-xs">
        <h1 align="center">超级签名</h1>
        <h5 align="center">按设备收费、提高应用内测效率、省力又省钱</h5>
        <h5 align="center">操作简单,只需上传分发即可,无需其他操作</h5>
         
       <button type="button" class="center-block" target="_blank" onclick="isgo()">立即签名</button>
    </div>
    
    <div class="row advantage">
      <h2 align="center">4大优势告别掉签烦恼</h2>
      <div class="col-md-6 col-xs-12 col-sm-6">
        <div class="row pd20">
          <div class="col-md-4 col-xs-4">
            <img data-cfsrc="/static/home/img/csign/superimg_1.png" class="img-responsive center-block" src="/static/home/img/csign/superimg_1.png"></div>
          <div class="col-md-8 col-xs-8">
            <h3>稳定全年，告别掉签</h3>
            <p class="lh25">特殊签名机制，无掉签烦恼，每个超级签名的应用后可使用一年左右</p></div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6">
        <div class="row pd20">
          <div class="col-md-4 col-xs-4">
            <img class="img-responsive center-block" data-cfsrc="/static/home/img/csign/superimg_2.png" src="/static/home/img/csign/superimg_2.png"></div>
          <div class="col-md-8 col-xs-8">
            <h3>无需上架，无需越狱</h3>
            <p class="lh25">可以直接分享下载链接下载安装，不需要上架AppStore，也不需要手机越狱&amp;二维码保持不变，永久唯一。</p></div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6">
        <div class="row pd20">
          <div class="col-md-4 col-xs-4">
            <img class="img-responsive center-block" data-cfsrc="/static/home/img/csign/superimg_3.png" src="/static/home/img/csign/superimg_3.png"></div>
          <div class="col-md-8 col-xs-8">
            <h3>不植入插件，无后门</h3>
            <p class="lh25">不以统计启动次数为由植入插件保持应用原样，无后顾之忧</p></div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6">
        <div class="row pd20">
          <div class="col-md-4 col-xs-4">
            <img class="img-responsive center-block" data-cfsrc="/static/home/img/csign/superimg_4.png" src="/static/home/img/csign/superimg_4.png"></div>
          <div class="col-md-8 col-xs-8">
            <h3>应用越多，越划算</h3>
            <p class="lh25">同一设备下载你的多个不同的应用也只收取一次设备费用</p></div>
        </div>
      </div>
    </div>
  </div>
</div>
<h3 align="center" class="superh3">操作步骤简单清晰</h3>
<div class="text-center">
  <div class="container">
    <div class="stepitem">
      <div>
        <img class="center-block" data-cfsrc="/static/home/img/csign/supericon_1.png" src="/static/home/img/csign/supericon_1.png">
        <p align="center">登录/注册</p></div>
      <img data-cfsrc="/static/home/img/csign/right.png" src="/static/home/img/csign/right.png"></div>
    <div class="stepitem">
      <div>
        <img class="center-block" data-cfsrc="/static/home/img/csign/supericon_2.png" src="/static/home/img/csign/supericon_2.png">
        <p align="center">上传IPA包</p></div>
      <img data-cfsrc="/static/home/img/csign/right.png" src="/static/home/img/csign/right.png"></div>
    <div class="stepitem">
      <div>
        <img class="center-block" data-cfsrc="/static/home/img/csign/supericon_4.png" src="/static/home/img/csign/supericon_4.png">
        <p align="center">购买设备</p></div>
      <img data-cfsrc="/static/home/img/csign/right.png" src="/static/home/img/csign/right.png"></div>
    <div class="stepitem">
      <div>
        <img class="center-block" data-cfsrc="/static/home/img/csign/supericon_5.png" src="/static/home/img/csign/supericon_5.png">
        <p align="center">分发专属链接</p></div>
    </div>
  </div>
</div>
<h3 align="center" class="superh3">不一样的 iOS 签名，不一样的优点</h3>
<div class="container signb">
  <div class="signb_left col-xs-12">
    <h4>iOS 超级签名</h4>
    <hr class="signb_left_line">
      <p>1. 签名一次正常签名时效一年左右
      <br>2. 同一设备下载你的多个不同的应用也只收取一次设备费用
      <br>3. 多种安装方式自由选择设置
      <br>4. 支持推送、免费无限次更新
      <br>5. 同一终端不限次数安装只计费一次
      <br>6. 独家超签引擎,超快签名速度</p></div>
  <div class="signb_right col-xs-12">
    <h4>iOS企业签名</h4>
    <hr class="signb_left_right">
    <p>年付较贵
      <br>多个应用多次收费
      <br>不可自行设置
      <br>包月收费
      <br>独立签名
      <br></p></div>
</div>

<h2 class="text-center problem">常见问题解答</h2>		
<div class="container problemlist">
  <table>
    <tbody>
      <tr>
        <td>
          <img data-cfsrc="/static/home/img/csign/" src="/static/home/img/csign/q.png"></td>
        <td>
          <h4 style="font-weight: 600;">需要提供 App 的源码吗?</h4>
          <h4></h4>
        </td>
      </tr>
      <tr style="border-bottom:1px dashed #ddd;">
        <td>
          <img data-cfsrc="/static/images/a.png" src="/static/home/img/csign/a.png"></td>
        <td>
          <p style="max-width: 960px;">不需要提供，仅需要提供adhoc版本的ipa格式的安装包即可。</p></td>
      </tr>
      <tr>
        <td>
          <img data-cfsrc="/static/home/img/csign/" src="/static/home/img/csign/q.png"></td>
        <td>
          <h4 style="font-weight: 600;">对安装包的大小是否有限制？</h4>
          <h4></h4>
        </td>
      </tr>
      <tr style="border-bottom:1px dashed #ddd;">
        <td>
          <img data-cfsrc="/static/images/a.png" src="/static/home/img/csign/a.png"></td>
        <td>
          <p style="max-width: 960px;">应用包大小最高不超过2G。</p></td>
      </tr>
      <tr>
        <td>
          <img data-cfsrc="/static/home/img/csign/" src="/static/home/img/csign/q.png"></td>
        <td>
          <h4 style="font-weight: 600;">签名需要多长时间？?</h4>
          <h4></h4>
        </td>
      </tr>
      <tr style="border-bottom:1px dashed #ddd;">
        <td>
          <img data-cfsrc="/static/images/a.png" src="/static/home/img/csign/a.png"></td>
        <td>
          <p style="max-width: 960px;">上传IPA安装包后开始签名，一般来说1分钟内完成签名。</p></td>
      </tr>
      <tr>
        <td>
          <img data-cfsrc="/static/home/img/csign/" src="/static/home/img/csign/q.png"></td>
        <td>
          <h4 style="font-weight: 600;">签名的 App 可以在 App Store 搜索到吗??</h4>
          <h4></h4>
        </td>
      </tr>
      <tr style="border-bottom:1px dashed #ddd;">
        <td>
          <img data-cfsrc="/static/images/a.png" src="/static/home/img/csign/a.png"></td>
        <td>
          <p style="max-width: 960px;">不能，超级签名后的 App 可以直接将链接发给用户安装，无需越狱，无需苹果账号，无需苹果审核。</p></td>
      </tr>
      <tr>
        <td>
          <img data-cfsrc="/static/home/img/csign/" src="/static/home/img/csign/q.png"></td>
        <td>
          <h4 style="font-weight: 600;">如果同一台设备安装应用后卸载，再重新安装，计费时算一台设备还是两台？?</h4>
          <h4></h4>
        </td>
      </tr>
      <tr style="border-bottom:1px dashed #ddd;">
        <td>
          <img data-cfsrc="/static/images/a.png" src="/static/home/img/csign/a.png"></td>
        <td>
          <p style="max-width: 960px;">按照真实设备数量计算，只计算一台设备。</p></td>
      </tr>
      <tr>
        <td>
          <img data-cfsrc="/static/home/img/csign/" src="/static/home/img/csign/q.png"></td>
        <td>
          <h4 style="font-weight: 600;">超级签名的 App 有下载限制吗？?</h4>
          <h4></h4>
        </td>
      </tr>
      <tr style="border-bottom:1px dashed #ddd;">
        <td>
          <img data-cfsrc="/static/images/a.png" src="/static/home/img/csign/a.png"></td>
        <td>
          <p style="max-width: 960px;">无安装应用数限制，只收取设备费用。</p></td>
      </tr>
    </tbody>
  </table>
</div>

<script>
	function isgo(){
		parent.location.href = 'http://wpa.qq.com/msgrd?v=3&uin=306776634&site=qq&menu=yes';
	}
</script>
<?php include 'source/index/footer.php'; ?>
<?php include_once("baidu_js_push.php") ?>
</body>
</html>