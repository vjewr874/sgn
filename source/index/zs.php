<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>iOS证书在线检测-免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发 </title>
    <link rel="stylesheet" href="/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/libs/animate.css" />
    <link rel="stylesheet" href="/libs/font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="/styles/index.css" />
    <link rel="stylesheet" href="/static/index/css/font.css"/>
            <link rel="stylesheet" type="text/css" href="/static/index/css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="/static/index/css/base.css"/>
            <link rel="stylesheet" type="text/css" href="/static/index/css/main.css"/>
            <link rel="stylesheet" type="text/css" href="/static/index/css/h5.css"/>
  </head>
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
  <header>
    <div class="container">
        <div class="header clearfix">
            <a class="header-left block fl" href="/">
                <img src="/data/image/IN_LOGO.png" class="img-responsive hidden-xs">
                <img src="/img/h55.png" class="img-responsive visible-xs">
            </a>
            <div class="phone-nav-wrap">
                <a class="header-left block fl" href="/">
                    <img src="/img/h55.png" class="img-responsive visible-xs">
                </a>
                <ul class="ms-nav fl clearfix">
                    <li class=""><a href="/">首页</a>
                    </li>
                    
                    <li class="">
                            <a href="/index/apps/apps">应用分发</a>
                            <span class="ms-badge">分发</span>
                        </li>
                    
                                           
                                            <li class="">
                            <a href="/index/apps/super">超级签名</a>
                        </li>
                                            
                      <li class="">
                        <a href="/index/apps/sign">企业签名</a>
                    </li>
                   
                   
                    <li class="">
                        <a href="/index/pack">APP封装</a>
                       
                    </li>
                    <li class=""><a href="/index/price">价格套餐</a>
                             <span class="ms-badge">优惠</span>
                    </li>
                    <li class="">
                        <a href="/index/utils">工具箱</a>
                    </li>
                                            <li class="">
                            <a href="/index/promote">推广加盟</a>
                        </li>
                                        
                                            <li class="visible-xs phone-user-center">
                            <div class="clearfix user1">
                                <a href="/index/user_profile" class="fl">用户中心</a>
                                <span class="fr icon-arrow-down iconfont"></span>
                            </div>
                            <dl>
                                <dd><a href="/index/item_price" style="color:red;">充值购买</a></dd>
                                <dd><a href="/index/user_profile">我的资料</a></dd>
                                <dd><a href="/index/user_order">我的订单</a></dd>
                            </dl>
                        </li>
                        <!--登录后-->
                        <div class="login-in clearfix" style="display: block;">
                              <a class="name-certified fl" href="/index/apps/apps"><font color="red" class="ms-badge12">控制台</font></a>
                            
                           
                        </div>
                        <!--/登录后-->
                                    </ul>

                            </div>
            <span class="icon-menu iconfont phone-menu visible-xs"></span>
            <div class="phone-shadow"></div>
        </div>
    </div>
</header>
  <body>
    <input type="file" name="uploadfile" class="hide" onchange="handleFileUpload(this.files, $(this))" data-target="" id="uploadfile" />
    <div class="content container mt-80 inner-content">
      <h3 class="text-center font-36 font-cert-check-title">iOS 证书在线检测</h3>
      <h3 class="text-center font-16 mt-20 color-8c9497">想检查证书到期时间？用户反馈无法下载安装？为您在线检测 iOS 证书是否正常</h3>
      <div class="text-center cert mt-30 col-md-8 col-md-offset-2">
        <div class="form-horizontal text-center" id="checkStatus">
          <div id="certCheckTabContent" class="tab-content">
            <div class="tab-pane fade active in " id="certFile">
              <h5 class="url-title mb-30">请上传 iOS p12 证书及 mobilprovision 文件</h5>
              <div class="container-fluid file-upload-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="upload-img-init " id="uploadCert">
                      <img id="" src="/images/p12_file_2x.png" class="img-responsive center-block file-icon" />
                      <div class="text-center upload-tips">
                        <p>点击选择文件或拖拽文件至此区域</p>
                        <p>（支持 p12 格式证书）</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="upload-img-init " id="uploadProvision">
                      <img id="" src="/images/optional_icon_2x.png" class="img-responsive center-block file-icon optional-icon" />
                      <img id="" src="/images/mp_icon_2x.png" class="img-responsive center-block file-icon" />
                      <div class="text-center upload-tips">
                        <p>点击选择文件或拖拽文件至此区域</p>
                        <p>（支持 mobileprovision 格式文件）</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <span for="name" class="font-16">p12 证书密码：</span>
                      <input name="password" type="password" id="password" class="form-control" placeholder="如密码为空可不填" />
                    </div>
                  </div>
                </div>
                <hr class="mt-15 mb-20" />
              </div>
            </div>
            <div class="hide text-center" id="certResult">
              <h5 class="url-title mb-30">检测结果</h5>
              <p class="hide" id="errorMsg">
                <span style="color: #FD5A5A; font-size: 18px;"></span>
                <a
                  href="javascript:void(0);"
                  class="popovers hide"
                  data-html="true"
                  data-container="body"
                  data-toggle="popover"
                  data-trigger="hover"
                  data-placement="bottom"
                  data-content=""
                  data-original-title=""
                  title=""
                  ><i class="fa fa-question-circle" style="font-size:14px;color:#29bb9c;"></i>
                </a>
              </p>
              <div class="row text-center" id="certDetail">
                <div id="fileCertResult">
                  <div class="cert-result mb-40">
                    <div class="cert-icon" style="">
                      <img id="certFlag" src="/images/cert_icon_2x.png" class="img-responsive pull-right" />
                    </div>
                    <div class="text-left" style="">
                      <p class="">
                        <span class="">证书状态</span>
                      </p>
                      <p class="" style="margin-bottom:0">
                        <span class="font-18" style="font-weight:600">
                          <span class="certStatusSpan" id="certStatus"></span>
                          <a
                            href="javascript:void(0);"
                            id="certStatusExplain"
                            class="popovers certStatusExplain"
                            data-html="true"
                            data-container="body"
                            data-toggle="popover"
                            data-trigger="hover"
                            data-placement="bottom"
                            data-content=""
                            data-original-title=""
                            title=""
                            ><i class="fa fa-question-circle" style="font-size:14px;color:#29bb9c;"></i
                          ></a>
                        </span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-12" style="">
                    <p class="check-item" style="">
                      <span class="text-right item-title" style="">证书名称：</span>
                      <span class="text-left item-result certNameSpan" id="certName"></span>
                    </p>

                    <p class="check-item">
                      <span class="text-right item-title">过期时间：</span>
                      <span class="text-left item-result certExpireDateSpan" id="certExpireDate"></span>
                    </p>

                    <div class="provision-detail hide">
                      <p class="check-item">
                        <span class="text-right item-title">mobileprovision 状态：</span>
                        <span class="text-left item-result" id="provisionStatus"></span>
                      </p>
                      <p class="check-item">
                        <span class="text-right item-title">mobileprovision 过期时间：</span>
                        <span class="text-left item-result" id="provisionExpireDate"></span>
                      </p>
                      <p class="check-item provisionSignType hide">
                        <span class="text-right item-title">打包方式：</span>
                        <span class="text-left item-result" id="provisionSignType"></span>
                      </p>
                    </div>
                  </div>
                </div>
                <div id="urlCertResult">
                  <div class="" style="">
                    
                  </div>
                  <div class="col-md-12" style="">
                    <p class="check-item">
                      <span class="text-right item-title">证书状态：</span>
                      <span class="font-18 text-left item-result" style="font-weight:500">
                        <span class="certStatusSpan" id="certStatus"></span>
                        <a
                          href="javascript:void(0);"
                          id="certStatusExplain"
                          class="popovers certStatusExplain"
                          data-html="true"
                          data-container="body"
                          data-toggle="popover"
                          data-trigger="hover"
                          data-placement="bottom"
                          data-content=""
                          data-original-title=""
                          title=""
                          ><i class="fa fa-question-circle" style="font-size:14px;color:#29bb9c;"></i
                        ></a>
                      </span>
                    </p>

                    <p class="check-item" style="">
                      <span class="text-right item-title">证书名称：</span>
                      <span style="" class="text-left item-result certNameSpan" id="certName"></span>
                    </p>

                    <p class="check-item">
                      <span class="text-right item-title">过期时间：</span>
                      <span class="text-left item-result certExpireDateSpan" id="certExpireDate"></span>
                    </p>

                    <p class="check-item appName hide">
                      <span class="text-right item-title">应用名称：</span>
                      <span class="text-left item-result appName hide" id="appName"></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center row hide" id="search">
              <img src="/images/search.gif" class="img-responsive center-block" />
              <p class="">检测中...</p>
            </div>
          </div>
          <div class="row mb-30">
            <a style="display: inline-block; padding: 6px 13px;" class="btn-u h-30 mt-30 btn-check hide" id="recheckBtn" onclick="toggleRes()"> <span class="font-13">继续检测其他证书</span></a>
            <button class="btn-u h-30 mt-30 btn-check" id="submitButton"><span class="font-13">立即检测</span></button>
          </div>
          <div class="alert alert-warning alert-dismissablewarning mb-0 mt-50 text-left" id="fileCheckAlert" style="border-radius:0;border:none;color:#555; margin-bottom: 0px;">
            <i class="fa fa-exclamation-circle"></i><span class="ml-5" style="margin-left:5px;">您提交的证书文件和密码，将仅用于本次证书有效性检测，我们不会进行存储。</span> <br />
            <i class="fa fa-exclamation-circle"></i
            ><span class="ml-5" style="margin-left:5px;">证书检测结果精准性100%</span>
          </div>
        </div>
      </div>
    </div>
    <script src="/libs/jquery.min.js"></script>
    <script src="/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="/js/index.js"></script>
  </body>
</html>

<footer>
    <div class="container">
        <div class="footer hidden-xs">
            <div class="clearfix">
                <div class="fl left clearfix">
                    <dl class="fl">
                        <dt>产品服务</dt>
                        <dd class="line"></dd>
                        <dd><a href="/index/publish/apps" target="_blank">托管分发</a></dd>
                        <dd><a href="/index/price" target="_blank">价格服务</a></dd>
                        <dd><a href="/index/feedback" target="_blank">建议和反馈</a></dd>
                        <dd><a href="/index/utils" target="_blank">工具箱</a></dd>
                    </dl>
                    <dl class="fl">
                        <dt>关于我们</dt>
                        <dd class="line"></dd>
                        <dd><a href="/index/about" target="_blank">公司简介</a></dd>
                        <dd><a href="/index/about/privacy" target="_blank">隐私政策</a></dd>
                        <dd><a href="/index/about/agreement" target="_blank">服务协议</a></dd>
                        <dd><a href="/index/about/specification" target="_blank">应用审核规范</a></dd>
                    </dl>
                    <dl class="fl">
                        <dt>文档</dt>
                        <dd class="line"></dd>
                        <dd><a href="/index/docs/23" target="_blank">实名认证</a></dd>
                        <dd><a href="/index/docs/29" target="_blank">企业签名</a></dd>
                        <dd><a href="/index/docs/22" target="_blank">打包APP</a></dd>
                        <dd><a href="/index/docs/27" target="_blank">常见问题</a></dd>
                    </dl>
                    <dl class="fl">
                        <dt>联系我们</dt>
                        <dd class="line"></dd>
                        <dd>
                            <a href="javascript:;" target="_blank" class="chatQQ">联系扣扣：100000</a>
                        </dd>
                        <dd>联系邮箱：100000@163.com</dd>
                        <dd>合作邮箱：100000@163.com</dd>
                        <dd>公司地址：*********</dd>
                    </dl>
                </div>

                <div class="right fr clearfix">
                    <a href="/">
                        <img src="/static/index/image/phone-logo.png" class="img-responsive visible-xs">
                    </a>
                    <div class="clearfix">
                    </div>
                                        <div style="text-align: left; color: #fff; line-height: 28px;" class="visible-xs">
                        <a href="/index/about" target="_blank" class="color-white">公司简介</a>
                        <div>
                            <span>地址：*********</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="record">
                <div class="inline-block">
                    <span class="fl">Copyright ©  APP分发演示 版权所有 <a style="color:#ffffff" href="http://www.beian.miit.gov.cn/" target="_blank">ICP备案:豫ICP备20007482号-2 增值电信业务许可证号   豫B2-20201896</a></span>
                    <a target="_blank" href="http://www.beian.gov.cn/" style="text-decoration:none; height:20px; line-height:20px; float: left; margin-left: 10px;">
                        <img src="/static/index/image/jh.png" style="float:left;">
                        <p style="float:left; height:20px; line-height:20px; margin: 0px 0px 0px 5px; color:#fff;">豫公网安备41170202000389号</p>
                    </a>
                </div>
                <div class="down_ico" style="margin-top: 10px; margin-right: 10px;">

                    <a href="https://ss.knet.cn/" target="_blank">
                        <img src="/static/index/image/cnnic.png" height="30" alt="可信网站" title="可信网站" style="margin-right: 10px;"></a>
                    <a href="https://credit.szfw.org/" target="_blank">
                        <img src="/static/index/image/cxlogos.jpg" height="30" alt="诚信网站" title="诚信网站" style="margin-right: 10px;"></a>
                    <a href="https://v.yunaq.com/certificate?domain=www.567fenfa.cn&amp;from=label&amp;code=90020" target="_blank">
                        <img border="0" height="30" src="/static/index/image/bottom_large_img.png" style="margin-right: 10px;"></a>
                    <a href="http://www.anquan.org/" target="_blank">
                        <img border="0" height="30" src="/static/index/image/aqlmlogo.png" style="margin-right: 10px;"></a>
                    <a href="http://wangzhan.360.cn/" target="_blank">
                        <img border="0" height="30" src="/static/index/image/360logo.gif" style="margin-right: 10px;"></a>
                    <a href="http://www.internic.net/" target="_blank">
                        <img src="/static/index/image/reglogo.gif" height="30" title="ICANN授权注册服务机构" style="margin-right: 10px;"></a>
                    <a href="http://www.cnnic.cn/" target="_blank">
                        <img src="/static/index/image/cnnic.gif" height="30" title="中国互联网络信息中心合作" style="margin-right: 10px;"></a>
                </div>
            </div>
        </div>
        <div class="footer visible-xs">
            <div class="con">
                <a href="/index/about" target="_blank">公司简介</a><span>|</span><a href="/index/about/agreement" target="_blank">服务协议</a><span>|</span><a href="/index/about/log" target="_blank">更新日志</a><span>|</span><a href="/index/about/privacy" target="_blank">隐私政策</a>
            </div>
            <p class="p1">
                Copyright ©  APP分发演示                <a style="color:#ffffff" href="http://beian.miit.gov.cn/" target="_blank">ICP备案:豫ICP备20007482号-2 增值电信业务许可证号   豫B2-20201896</a>
            </p>
            <p class="p2">
                <a target="_blank" href="http://www.beian.gov.cn/" style="text-decoration:none; height:20px; line-height:20px; margin-left: 10px;">
                    <img src="/static/index/image/jh.png"><span style="height:20px; line-height:20px; margin: 0px 0px 0px 5px; color:#fff;">豫公网安备41170202000389号                </span></a>
            </p>
        </div>
    </div>
</footer>