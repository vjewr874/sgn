<?php
if (!defined('IN_ROOT')) {
    exit('Access denied');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"/>
    <meta name="keywords" content="<?php echo IN_KEYWORDS ?>"/>
    <meta name="description" content="<?php echo IN_DESCRIPTION ?>"/>
    <title><?php echo IN_NAME ?>- 应用内测托管平台|iOS应用企业签名|Android应用上传内测</title>
    <link rel="stylesheet" href="/static/css/app.169f3e45b533bbb32452056fa2e942a7.css"/>
    <link rel="stylesheet" href="/static/newV2/css/index.css">
    <link rel="stylesheet" href="/static/newV2/css/normalize.css">
    <link rel="stylesheet" href="/static/index/css/font.css"/>
    <link rel="stylesheet" href="/static/index/css/swiper.min.css"/>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/base.css"/>
    <link rel="stylesheet" href="/static/index/css/main.css"/>
    <link rel="stylesheet" href="/static/index/css/h5.css"/>
    <link rel="stylesheet" href="/static/index/css/main.css"/>
    <link rel="stylesheet" href="/css/shouye.css"/>
    <link rel="stylesheet" href="/css/TJStyle.css"/>
    <link rel="stylesheet" href="/css/web_frame.min.css"/>
    <script src="/static/index/js/jquery.min.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/vue.js"></script>
    <script src="/static/index/js/js.js"></script>
    <script src="/static/index/js/swiper.min.js"></script>
    <script src="/static/index/js/vue-countup.min.js"></script>

    <script>
        isHideFooter = false;
    </script>
</head>
<body>
<?php $this->header() ?>
<script>
    isHideFooter = false;
</script>
<style>
    .index-contact {
    min-width: 1200px;
    padding: 45px 0;
    background-image: url(../images/contact-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center top;
    position: relative;
}

.wp {
    width: 1200px;
    min-width: 1200px;
    margin: 0 auto;
}
.index-contact .s {
    position: relative;
    padding: 0 120px;
    z-index: 100;
}
.index-contact h6 {
    font-size: 30px;
    color: #fff;
    line-height: 40px;
}
.index-contact p {
    line-height: 50px;
    font-size: 18px;
    color: #eee;
}
.index-contact .btn {
    position: absolute;
    top: 50%;
    right: 120px;
    display: block;
    width: 200px;
    margin-top: -25px;
    border: 1px #fff solid;
    text-align: center;
    border-radius: 3px;
}
.index-contact .btn a {
    display: block;
    height: 48px;
    line-height: 48px;
    font-size: 18px;
    color: #fff;
}
.btn-a span {
    color: #fff;
    position: relative;
    z-index: 2;
}
.btn-a em {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 0;
    background: #fff;
    transition: 0.5s;
}
   
    .ie_dialog {
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #FAFAFA !important;
        display: none;
    }

    .ie_dialog table {
        margin: 100px auto;
    }

    .ie_notice .logo_osc {
        display: block;
        margin: 0 auto;
        padding-bottom: 24px;
    }

    .ie_notice h2, .ie_notice h4 {
        margin: 0;
        text-align: center;
    }

    .ie_notice .title {
        font-size: 28px;
        color: #4A4A4A;
    }

    .ie_notice .subtitle {
        font-size: 20px;
        color: #9B9B9B;
        font-weight: normal;
    }

    .ie_notice .ie_box {
        width: 560px;
        margin: 24px auto;
        background: #FFFFFF;
        border: 1px solid #E6E6E6;
        box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.10);
        border-radius: 4px;
        display: table !important;
    }

    .ie_notice .ie_box .desc {
        font-size: 14px;
        color: #6D6D6D;
        line-height: 22px;
        padding: 20px;
    }

    .ie_notice .ie_box a {
        display: inline-block;
        width: 30%;
        text-align: center;
    }

    .ie_notice .ie_box .go {
        width: 100%;
        background: #F6F6F6;
        font-size: 16px;
        color: #9B9B9B;
        padding: 16px 0;
        text-align: center;
        border: none;
        margin-top: 20px;
        text-decoration: none;
    }

    .ie_notice .ie_box a img {
        border: none;
    }
</style>

<div data-v-b7d2c05a="" class="toplunbo"><div class="el-carousel el-carousel--horizontal"><div class="el-carousel__container" style="height: 653px;"><button type="button" class="el-carousel__arrow el-carousel__arrow--left" style="display: none;"><i class="el-icon-arrow-left"></i></button><button type="button" class="el-carousel__arrow el-carousel__arrow--right" style="display: none;"><i class="el-icon-arrow-right"></i></button><div class="el-carousel__item is-active is-animating" style="transform: translateX(0px) scale(1);"><div class="secondbg">
          <div class="second">
            <div class="des">
              <img src="/eideasImg/diypack/banner/app.png" alt="" class="title">
              <div class="content">
                <div class="item">
                  <p>
                    <img class="imgicon" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/banner/secicon.png" alt="">一键上传云分发平台
                  </p>
                  <p>
                    <img class="imgicon" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/banner/secicon.png" alt="">生成下载链接和二维码
                  </p>
                </div>
                <div class="item">
                  <p>
                    <img class="imgicon" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/banner/secicon.png" alt="">支持安卓苹果应用合并二维码
                  </p>
                  <p>
                    <img class="imgicon" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/banner/secicon.png" alt="">多种下载模板自由选择
                  </p>
                </div>
              </div>
              <button class="go"><a href="/index/apps/apps"><font color="#fff">立即发布</font></a></button>
            </div>
            <img src="/eideasImg/diypack/banner/secimg.png" alt="" class="rightimg">
          </div>
        </div></div></div><ul class="el-carousel__indicators el-carousel__indicators--horizontal"><li class="el-carousel__indicator el-carousel__indicator--horizontal is-active"><button class="el-carousel__button"><!----></button></li></ul></div></div>
<!--banner-->
<div data-v-b7d2c05a="" class="adv"><div data-v-b7d2c05a="" class="advitem"><img data-v-b7d2c05a="" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/default/product1.png" alt="" class="advimg"> <div data-v-b7d2c05a="" class="advtext"><p data-v-b7d2c05a="" class="title">在线自助制作</p> <p data-v-b7d2c05a="" class="des">24小时在线自助制作APP</p></div></div> <div data-v-b7d2c05a="" class="advitem"><img data-v-b7d2c05a="" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/default/product2.png" alt="" class="advimg"> <div data-v-b7d2c05a="" class="advtext"><p data-v-b7d2c05a="" class="title">
安全快速</p> <p data-v-b7d2c05a="" class="des">手机H5站一键封装</p></div></div> <div data-v-b7d2c05a="" class="advitem"><img data-v-b7d2c05a="" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/default/product3.png" alt="" class="advimg"> <div data-v-b7d2c05a="" class="advtext"><p data-v-b7d2c05a="" class="title">兼容性强</p> <p data-v-b7d2c05a="" class="des">安卓/苹果原生开发兼容性高</p></div></div> <div data-v-b7d2c05a="" class="advitem"><img data-v-b7d2c05a="" src="https://fenfalaomeng.oss-cn-beijing.aliyuncs.com/eideasImg/diypack/default/product4.png" alt="" class="advimg"> <div data-v-b7d2c05a="" class="advtext"><p data-v-b7d2c05a="" class="title">丰富的插件库</p> <p data-v-b7d2c05a="" class="des">多种功能组件随用随取配置</p></div></div></div>
<!-- Add Pagination -->
<div class="upgrade" style="margin-top: -13px;">
		<div class="introd">
			<h3 class="title">五大业务场景</h3>
			<p class="subtitle">精准定位您的核心需求且提供相对应的服务解决方案</p>
		</div>
		<div class="scenes">
			<div class="left">
				<p class="title"><img class="img" alt="" src="/static/newV2/images/index/sence1.png" style="opacity: 1;">TF签名</p>
				<p class="text">苹果官方认可的 Test Flight分发新模式，分发链接不再担心屏蔽风险，且无设备限制，任意苹果设备都可下载使用；彻底远离企业签名频繁掉签，告别超级签名昂贵的价格，让您拥有最高性价比的签名体验。 </p>
				<div class="detail">
					<button type="button" href="/">了解详情</button>
					<img alt="" src="/static/newV2/images/p1.png" style="opacity: 1;">
				</div>
			</div>
			<div class="right">
				<div class="item">
					<p class="title"> <img alt="" src="/static/newV2/images/index/sence2.png" style="opacity: 1;"> 企业签名</p>
					<p class="text">iOS 企业签名无需提交 App Store 或设置UDID 即可在苹果设备上直接安装。</p>
					<a class="detail" href="/index/app_sign">了解详情 <span class="iconfont icon"></span></a>
				</div>
				<div class="item">
					<p class="title"> <img alt="" src="/static/newV2/images/index/sence3.png" style="opacity: 1;"> 专属签名</p>
					<p class="text">绑定个人开发者账号，使用个人账号进行签名，稳定性极强，让您使用更加方便。</p>
					<a class="detail" href="/index/app_sign">了解详情 <span class="iconfont icon"></span></a>
				</div>
				<div class="item">
					<p class="title"> <img alt="" src="/static/newV2/images/index/sence4.png" style="opacity: 1;"> 应用内测分发</p>
					<p class="text">一键上传APP应用包，自动生成下载链接和二维码，方便用户内测下载。</p>
					<a class="detail" href="/index/apps/apps">了解详情 <span class="iconfont icon"></span></a>
				</div>
				<div class="item">
					<p class="title"> <img alt="" src="/static/newV2/images/index/sence5.png" style="opacity: 1;"> 应用封装</p>
					<p class="text">一键即可生成app，无需写代码，可视化编辑、 直接拖拽组件制作页面的高效平台。</p>
					<a class="detail" href="/index/webview">了解详情 <span class="iconfont icon"></span></a>
				</div>
			</div>
		</div>
	
		<div class="introd" style="margin-top:93px;">
			<h3 class="title">产品优势</h3>
			<p class="subtitle">因为用心所以更专业</p>
		</div>
		<div class="adv">
			<div class="left">
				<div class="item l1">
					<p class="title">
						<img alt="" src="/static/newV2/images/index/adv1.png" class="img" style="opacity: 1;">
						资深专业开发团队
					</p>
					<p class="text">多年iOS开发经验，提供免费解答技术疑问</p>
				</div>
				<div class="item l2">
					<p class="title">
						<img alt="" src="/static/newV2/images/index/adv2.png" class="img" style="opacity: 1;">
						签名服务多样化
					</p>
					<p class="text">专业苹果签名团队研发定制，安全稳定有保证</p>
				</div>
				<div class="item l3">
					<p class="title">
						<img alt="" src="/static/newV2/images/index/adv3.png" class="img" style="opacity: 1;">
						专业的售后服务体系
					</p>
					<p class="text">极速售后响应，不分节假日客服轮流值守</p>
				</div>
			</div>
			<img alt="" src="/static/newV2/images/p2.png" class="center" style="width: 500px; height: 378px; opacity: 1;">
			<div class="right">
				<div class="item r1">
					<p class="title">
						<img alt="" src="/static/newV2/images/index/adv4.png" class="img" style="opacity: 1;">
						价格透明且优惠
					</p>
					<p class="text">签名服务有多种价格套餐，价格优惠可按需购买</p>
				</div>
				<div class="item r2">
					<p class="title">
						<img alt="" src="/static/newV2/images/index/adv5.png" class="img" style="opacity: 1;">
						7*24小时客户服务
					</p>
					<p class="text">提供24小时全天专业服务随时为用户解答疑惑 </p>
				</div>
				<div class="item r3">
					<p class="title">
						<img alt="" src="/static/newV2/images/index/adv6.png" class="img" style="opacity: 1;">
						自有官方独立证书
					</p>
					<p class="text">多本证书备用，区分应用类型，减少掉签风险</p>
				</div>
			</div>
		</div>

		<div class="index-contact">
            <div class=" wp">
                <div class="s">
                    <h6>现在，非常期待与您的又一次邂逅</h6>
                    <p>IOS企业签名努力让每一次邂逅总能超越期待</p>
                    <div class="btn"> <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo IN_CONTACT ?>&amp;site=qq&amp;menu=yes" target="_blank" class="btn-a"><em></em><span>联系客服</span></a> </div>
                </div>
            </div>
            <div class="cover"></div>
        </div>
	
		<div class="introd " style="padding-top: 35px;">
			<h3 class="title">服务理念</h3>
			<p class="subtitle">致力打造行业领先服务平台</p>
		</div>
		<div class="service" id="box">
				<div class="item" id="left1">
					<img alt="" src="/static/newV2/images/index/serv1.png" class="img" style="opacity: 1;">
					<p class="subtitle">构建完善的服务平台</p>
					<p class="text">致力于技术不断创新，以技术为服务的根基</p>
				</div>
				<div class="item" id="left2">
					<img alt="" src="/static/newV2/images/index/serv2.png" class="img" style="opacity: 1;">
					<p class="subtitle">可视化技术签名服务</p>
					<p class="text">用专业的技术打造出优质与实用的产品服务</p>
				</div>
				<div class="item" id="left3">
					<img alt="" src="/static/newV2/images/index/serv3.png" class="img" style="opacity: 1;">
					<p class="subtitle">完善的售后服务</p>
					<p class="text">专业的客服团队24小时轮流值班解决问题</p>
				</div>
		</div>
		<div class="service" id="box2">
				<div class="item" id="left4">
					<img alt="" src="/static/newV2/images/index/serv4.png" class="img" style="opacity: 1;">
					<p class="subtitle">专业的技术保障</p>
					<p class="text">致力于为全球的开发者提供更好的技术支持</p>
				</div>
				<div class="item" id="left5">
					<img alt="" src="/static/newV2/images/index/serv5.png" class="img" style="opacity: 1;">
					<p class="subtitle">优质的用户体验</p>
					<p class="text">以客户需求为目标打造优质良好的用户体验</p>
				</div>
				<div class="item" id="left6">
					<img alt="" src="/static/newV2/images/index/serv6.png" class="img" style="opacity: 1;">
					<p class="subtitle">专业的研发团队</p>
					<p class="text">有专业的技术研发团队打造安全稳定的平台</p>
				</div>
		</div>
		<!-- <div class="introd bgfff" style="padding-top: 75px;">
			<h3 class="title">资讯中心</h3>
			<p class="subtitle">因为专业所以更专业</p>
		</div>
		<div class="newsbg">
			<div class="news">
				<div class="left">
					<div class="title">
						<p>
							<img data-src="/static/newV2/images/badge.png" alt="" src="" class="img"> 
							可云动态
						</p>
						<span class="more">更多</span>
					</div>
					<ul>
						<li>
							<div class="date">
								<p class="day">05/23</p>
								<p class="year">2020年</p>
							</div>
							<div class="des">
								<h3 class="title">APP封装打包平台安全吗？</h3>
								<p class="text">通过云计算大数据人工智能等技术将零售场大数据人工智能等技术...</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="right">
					<div class="title">
						<p>
							<img data-src="/static/newV2/images/badge.png" alt="" src="" class="img"> 
							行业动态
						</p>
						<span class="more">更多</span>
					</div>
					<ul>
						<li>
							<h3 class="subtitle">APP封装打包平台安全吗？
								<span class="time">2020-09-28</span>
							</h3>
							<p class="text">通过云计算大数据人工智能等技术将零售场大数据人工智能等技术...</p>
						</li>
						<li>
							<h3 class="subtitle">APP封装打包平台安全吗？
								<span class="time">2020-09-28</span>
							</h3>
							<p class="text">通过云计算大数据人工智能等技术将零售场大数据人工智能等技术...</p>
						</li>
						<li>
							<h3 class="subtitle">APP封装打包平台安全吗？
								<span class="time">2020-09-28</span>
							</h3>
							<p class="text">通过云计算大数据人工智能等技术将零售场大数据人工智能等技术...</p>
						</li>
					</ul>
				</div>
			</div>
		</div> -->

	</div>
<!-- Add Arrows -->
<!--
        <div class="swiper-button-next"><span class="iconfont icon-arrow-right"></span></div>
        <div class="swiper-button-prev"><span class="iconfont icon-arrow-left"></span></div>
-->
</div>
</div>
<!--/banner-->
<!--publicity-->

<!--在线签名-->


<!--证书签名-->


<!--内测发布-->

<!--技术成就-->
<div class="cumulative-wrap">
    <div class="container">
        <div class="index-cumulative index-common">
            <h1>
                3年产品技术积累，成就非凡品质
            </h1>
            <div class="row">
                <div class="col-sm-4 col-xs-4">
                    <div class="num num_br">
                                <span>
                             <?php echo IN_AUTOGRAPH ?>
                                </span>
                    </div>
                    <div class="text text0">
                        累计在线签名
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="num num_br">
                                <span>
                                    <?php echo IN_DISTRIBUTE ?>
                                </span>
                    </div>
                    <div class="text text1">
                        累计内测分发APP
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="num">
                                <span>
                                    <?php echo IN_DOWNLOAD ?>
                                </span>
                    </div>
                    <div class="text text2">
                        累计内测下载APP
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--合作伙伴-->
<div class="container">
    <div class="index-common index-partners">
        <h1>合作伙伴</h1>
        <ul class="p-list clearfix">
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-17.png">
                    <p>巨人网络是一家集研发、运营发行于一体的综合性娱乐互动企业。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-18.png">
                    <p>比格云提供新一代高性能云主机的服务商。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-19.png">
                    <p>游久网为用户提供完整庞大和专业游戏资讯的社区网络服务。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-20.png">
                    <p>中青宝是一家具有自主研发、运营和代理能力专业化网络游戏公司。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-21.png">
                    <p>盛大游戏是中国领先的互动娱乐内容运营平台。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-22.png">
                    <p>触控科技专注于苹果iOS产品和手游开发运营。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-23.png">
                    <p>4399是中国最早和领先的在线休闲小游戏平台。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-24.png">
                    <p>昆仑游戏是手游、页游、端游的研发与发行平台。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-25.png">
                    <p>七牛云-企业级云服务商，专注于以视觉智能和数据智能为核心的云计算业务。</p>
                </div>
            </li>
            <li>
                <div class="con">
                    <img class="img-responsive" src="/static/index/image/index-26.png">
                    <p>游族网络是中国互动娱乐供应商，提供游戏研发与发行、大数据与智能化服务。</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--/内测分发-->
<div class="ie_dialog" id="incompatible_tip">
    <div>
        <br>
        <table class="ie_notice" style="border:0">
            <tr>
                <td style="text-align: center;">
                    <img class="logo_osc" src="/static/index/image/logo-top.png" alt="智风云"/>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="title">我们不支持 IE 10 及以下版本浏览器</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 class="subtitle">It appears you’re using an unsupported browser</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ie_box">
                        <div class="desc">
                            为了获得更好的浏览体验，我们强烈建议您使用较新版本的 Chrome、 Firefox、 Safari、360 等，或者升级到最新版本的IE浏览器。 如果您使用的是
                            IE 11 或以上版本，请关闭“兼容性视图”。
                        </div>
                        <div class="logos">
                            <a href="http://www.google.cn/chrome/browser/desktop/index.html" target="_blank"
                               title="下载Chrome浏览器">
                                <img src="/static/index/image/logo_chrome.png" width="200px"/>
                            </a>
                            <a href="http://www.firefox.com.cn" target="_blank" title="下载Firefox浏览器">
                                <img src="/static/index/image/logo_firefox.png" width="100px"/>
                            </a>
                            <a href="http://browser.360.cn/" target="_blank" title="下载360浏览器">
                                <img src="/static/index/image/logo_360.png" width="100px"/>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0);"
                               onclick="document.getElementById('incompatible_tip').style.cssText = 'display:none;';"
                               class="go">继续访问</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php if (IN_ANNOUNCEMENT) { ?>
    <div class="modal fade ms-modal" id="showModalNotice" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo IN_NAME ?>网站公告</h4>
                </div>
                <div class="modal-body">
                    <p class="mt15">
                        <?php echo IN_ANNOUNCEMENT ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="ms-btn ms-btn-primary contactQQ">联系客服</button>
                    <button type="button" class="ms-btn ms-btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<script src="/static/index/js/jquery.cookie.js?20190516"></script>

<script>
    var isIE = (function () {
        var browser = {};
        return function (ver, c) {
            var key = ver ? (c ? "is" + c + "IE" + ver : "isIE" + ver) : "isIE";
            var v = browser[key];
            if (typeof (v) != "undefined") {
                return v;
            }
            if (!ver) {
                v = (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0);
            } else {
                var match = navigator.userAgent.match(/(?:MSIE |Trident\/.*; rv:|Edge\/)(\d+)/);
                if (match) {
                    var v1 = parseInt(match[1]);
                    v = c ? (c == 'lt' ? v1 < ver : (c == 'gt' ? v1 > ver : undefined)) : v1 == ver;
                } else if (ver <= 9) {
                    var b = document.createElement('b')
                    var s = '<!--[if ' + (c ? c : '') + ' IE ' + ver + ']><i></i><![endif]-->';
                    b.innerHTML = s;
                    v = b.getElementsByTagName('i').length === 1;
                } else {
                    v = undefined;
                }
            }
            browser[key] = v;
            return v;
        };
    }());

    if (isIE()) {
        document.getElementById('incompatible_tip').style.cssText = 'display:block;';
    }

</script>
<script>
    $(function () {
        if (!$.cookie('contactQQ')) {
            $("#showModalNotice").modal("show");
            $.cookie('contactQQ', '1', {expires: 1});
        }
        $(".contactQQ").on('click', function () {
            $.cookie('contactQQ', '1', {expires: 1});
            $(".chatQQ").trigger('click');
            $("#showModalNotice").modal("hide");
        });

        var mySwiper = new Swiper('.index-banner .swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            loop: true,
            speed: 800,
            autoplay: {
                delay: 4000,
                stopOnLastSlide: false,
                disableOnInteraction: true
            }
        });
    })

</script>
<?php $this->footer() ?>
</body>
</html>