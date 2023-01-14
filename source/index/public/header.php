<?php
$notice = db('article')->where('type', '=', '2')->order('id desc')->find();
if ($notice) { ?>
    <div class="container" id="notice_wrap"
         style="background: #fff;line-height:30px;position: relative;overflow: hidden; color: #999;font-size: 14px;white-space: nowrap;">
        <a href="/index/message">
            <marquee direction="left" behavior="scroll" scrollamount="5" loop="-1" onmouseout="this.start()"
                     onmouseover="this.stop()">
                <?php $content = strip_tags($notice['content']);
                echo "{$notice['name']} - {$content}"; ?>
            </marquee>
        </a>
    </div>
<?php } ?>
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
            <a class="header-left block fl" href="<?php echo IN_PATH ?>">
                <img src="<?php echo IN_PATH . (IN_LOGO ?: 'static/index/image/logo-top.png') ?>"
                     class="img-responsive hidden-xs">
                <img src="/img/h55.png"
                     class="img-responsive visible-xs">
            </a>
            <div class="phone-nav-wrap">
                <a class="header-left block fl" href="/">
                    <img src="/img/h55.png"
                         class="img-responsive visible-xs">
                </a>
                <ul class="ms-nav fl clearfix">
                    <li class="<?php if ($this->module == 'index') echo 'active' ?>"><a
                                href="<?php echo IN_PATH ?>">首页</a>
                    </li>
                    
                    <li class="<?php if ($this->action == 'apps') echo 'active' ?>">
                            <a href="<?php echo IN_PATH . 'index/apps/apps' ?>">应用分发</a>
                            <span class="ms-badge">分发</span>
                        </li>
                    
                    <?php if ($this->userlogined) { ?>
                       
                    <?php }
                   
                    if (IN_SUPER) { ?>
                        <li class="<?php if ($this->action == 'super') echo 'active' ?>">
                            <a  href="<?php echo IN_PATH . 'index/apps/super' ?>">超级签名</a>
                        </li>
                    <?php } ?>
                        
                      <li class="<?php if ($this->module == 'sign') echo 'active' ?>">
                        <a href="<?php echo IN_PATH . 'index/apps/sign' ?>">企业签名</a>
                    </li>
                   
                   
                    <li class="<?php if ($this->module == 'webview' or $this->module == 'webview2' or $this->module == 'pack') echo 'active' ?>">
                        <a href="<?php echo IN_PATH . 'index/pack' ?>">APP封装</a>
                       
                    </li>
                    <li class="<?php if ($this->module == 'price') echo 'active' ?>"><a
                                href="<?php echo IN_PATH . 'index/price' ?>">价格套餐</a>
                             <span class="ms-badge">优惠</span>
                    </li>
                    <li class="<?php if ($this->module == 'utils') echo 'active' ?>">
                        <a href="<?php echo IN_PATH . 'index/utils' ?>">工具箱</a>
                    </li>
                    <?php if (IN_PROMOTE) { ?>
                        <li class="<?php if ($this->module == 'user_promote' or $this->module == 'promote') echo 'active' ?>">
                            <a href="<?php echo IN_PATH . 'index/promote' ?>">推广加盟</a>
                        </li>
                    <?php } ?>
                    
                    <?php if ($this->userlogined) { ?>
                        <li class="visible-xs phone-user-center">
                            <div class="clearfix user1">
                                <a href="<?php echo IN_PATH . 'index/user_profile' ?>" class="fl">用户中心</a>
                                <span class="fr icon-arrow-down iconfont"></span>
                            </div>
                            <dl>
                                <dd><a href="<?php echo IN_PATH . 'index/item_price' ?>" style="color:red;">充值购买</a></dd>
                                <dd><a href="<?php echo IN_PATH . 'index/user_profile' ?>">我的资料</a></dd>
                                <dd><a href="<?php echo IN_PATH . 'index/user_order' ?>">我的订单</a></dd>
                            </dl>
                        </li>
                        <!--登录后-->
                        <div class="login-in clearfix" style="display: block;">
                              <a class="name-certified fl" href="/index/apps/apps"><font color="red" class="ms-badge12">控制台</font></a>
                            <div class="notification fl">
                            <span class="iconfont">
							<?php if ($this->user['in_svip'] == 0) { ?>
                                <img src="<?php echo IN_PATH ?>static/index/image/user.png" width="22px">
                            <?php } ?>
                                <?php if ($this->user['in_svip'] == 1) { ?>
                                    <img src="<?php echo IN_PATH ?>static/index/image/user_1.png" width="22px">
                                <?php } ?>
                                <?php if ($this->user['in_svip'] == 2) { ?>
                                    <img src="<?php echo IN_PATH ?>static/index/image/user_2.png" width="22px">
                                <?php } ?>
                                <?php if ($this->user['in_svip'] == 3) { ?>
                                    <img src="<?php echo IN_PATH ?>static/index/image/user_3.png" width="22px">
                                <?php } ?>
							</span>
                                <span class="ms-badge"></span>
                                <div class="n-drop-down">
                                    <div class="n-con">
                                        <!--用户等级-->
                                        <div class="yes" style="/*display: none;*/">
                                            <?php if ($this->user['in_svip'] == 0) { ?>
                                                <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体验会员</div>
                                            <?php } ?>
                                            <?php if ($this->user['in_svip'] == 1) { ?>
                                                <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初级会员</div>
                                            <?php } ?>
                                            <?php if ($this->user['in_svip'] == 2) { ?>
                                                <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中级会员</div>
                                            <?php } ?>
                                            <?php if ($this->user['in_svip'] == 3) { ?>
                                                <div class="y-tit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高级会员</div>
                                            <?php } ?>
                                            <?php if ($this->user['in_svip'] != 0) { ?>
                                                
                                            <?php } ?>
                                        </div>
                                        <?php if ($this->user['in_svip'] == 0) { ?>
                                            <a href="<?php echo IN_PATH ?>index/price" class="m-more">购买会员</a>
                                        <?php } ?>
                                        <?php if ($this->user['in_svip'] == 1 or $this->user['in_svip'] == 2) { ?>
                                            <a href="<?php echo IN_PATH ?>index/price" class="m-more">升级会员</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="login-user clearfix fl">
                            <span class="fl"><font color="#FFF"><?php echo $this->user['in_username'] ?></font>
                                <?php if ($this->user['in_verify'] == 1) { ?>
                                    <span class="certified"><font color="#3bff0a">(已实名)</font></span><?php } ?>
							</span>
                                <a class="visible-xs fl logout1"
                                   href="<?php echo IN_PATH . 'index/logout' ?>">退出</a>
                                <span class="iconfont icon-arrow-bottom fl hidden-xs"></span>
                                <div class="user-wrap">
                                    <dl>
                                        <dd><a href="<?php echo IN_PATH . 'index/item_price' ?>" style="color:red;">余额充值</a></dd>
                                       
                                        <dd><a href="<?php echo IN_PATH . 'index/user_profile' ?>">我的资料</a></dd>
                                        <dd><a href="<?php echo IN_PATH . 'index/user_order' ?>">现金余额</a></dd>
                                        <dd><a href="<?php echo IN_PATH . 'index/user_aclog' ?>">账户记录</a></dd>
                                        <?php if (IN_PROMOTE) { ?>
                                            <dd><a href="<?php echo IN_PATH . 'index/user_promote' ?>">代理推广</a>
                                            </dd>
                                        <?php } ?>
                                        <dd><a href="<?php echo IN_PATH . 'index/user_cash' ?>">提现记录</a></dd>
                                        <dd><a href="<?php echo IN_PATH . 'index/certification' ?>">开发者认证</a></dd>
                                        
                                        <dt><a href="<?php echo IN_PATH . 'index/logout' ?>"><span
                                                        class="iconfont icon-sign-out"></span>退出</a></dt>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <!--/登录后-->
                    <?php } ?>
                </ul>

                <?php if (!$this->userlogined && IN_LOGIN_ON) { ?>
                    <ul class="login clearfix fr">
                        <li><a href="/index/login" class="ms-btn ms-btn-primary ml10">登录</a></li>
                        <?php if (IN_REG_ON) { ?>
                            <li><a href="/index/reg" class="ms-btn ms-btn-primary ml10">注册</a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <span class="icon-menu iconfont phone-menu visible-xs"></span>
            <div class="phone-shadow"></div>
        </div>
    </div>
</header>
