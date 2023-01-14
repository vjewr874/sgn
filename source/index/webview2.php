<?php

namespace app\index;

class webview2 extends BaseUser
{
	function index()
	{
		$_var_0 = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH;
		$_var_1 = is_ssl() ? str_replace("http://", "https://", $_var_0) : $_var_0;
		$_var_2 = $this->action && $this->action != "index" ? bees_decrypt($this->action) : 0;
		$_var_3 = db("app_pack")->where("user_id", $this->userid)->where("id", $_var_2)->json(["config"], true)->find();
		$_var_4 = $_var_3 && ($_var_3["period"] < 1 || $_var_3["period"] > time());
		$_var_5 = $this->userid . "-" . time();
		if (!$_var_3) {
			$_var_3 = ["name" => "", "url" => "", "bundle_id" => "", "version" => "", "type" => 2, "config" => NUll];
		}
		if (!$_var_3["config"]) {
			$_var_3["config"] = ["FullScreen" => true, "IsRemovable" => true, "IsRemovURL" => false];
		}
		$_var_6 = json_decode(IN_WEBVIEWPOINTS, true);
		?>        <!DOCTYPE html>
        <html lang="">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"/>
            <meta name="keywords" content="<?php echo IN_KEYWORDS;?>"/>
            <meta name="description" content="<?php echo IN_DESCRIPTION;?>"/>
            <title>APP打包封装 - <?php echo IN_NAME;?> - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
            <?php 
		$this->static_();
		?>            <script src="<?php echo IN_PATH;?>static/pack/mobileconfig/lib.js"></script>
            <script>
                var in_path = '<?php echo IN_PATH;?>';
                var in_login = '<?php echo $this->userlogined ? "1" : "-1";?>';
            </script>
        </head>
        <body>
        <?php 
		$this->header();
		?>      
        <div class="release-app-wrap">
            <div class="container">
                <div class="release-app2">
                    <div class="crumbs">
                        <a href="/index/webview">APP封装</a><span>/</span>苹果免签封装
                    </div>
                    <div class="row clearfix signature1">
                        <?php 
		$this->webview_left();
		?>                        <div class="col-sm-10">
                            <div class="aside-right">
                                <div class="account-management real-name" style="height: auto;padding: 0px">
                                    <div class="pack-step1 encapsulation">
                                        <div class="step1 step-common">
                                            <input type="hidden" name="id" value="<?php echo $_var_2;?>">
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>APP名称</label>
                                                <div class="col-sm-6">
                                                    <div class="input-text">
                                                        <input type="text" id="mc_title" name="mc_title"
                                                               class="form-control input-change1" rows="5"
                                                               placeholder="请填写APP名字，建议5个字以内的中文，英文或数字"
                                                               value="<?php echo $_var_3["name"];?>">
                                                        <div class="error1 color-danger">名字不能为空，且仅支持中文，英文或数字，不支持特殊字符
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>网站链接</label>
                                                <div class="col-sm-6">
                                                    <div class="input-text">
                                                        <input type="text" class="form-control input-change2 "
                                                               id="mc_url"
                                                               name="mc_url" rows="5"
                                                               placeholder="请您填写完整的网站链接（例如：http://<?php echo $_SERVER["HTTP_HOST"];?>/)"
                                                               value="<?php echo $_var_3["url"];?>">
                                                        <div class="error1 color-danger">
                                                            请输入完整的网站链接，必须带http或https开头的链接地址
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>APP图标</label>
                                                <div class="clearfix col-sm-6">
                                                    <input type="file" id="upload_mc_a_icon"
                                                           onchange="upload_mc_a_icon()"
                                                           style="display:none">
                                                    <div id="preview_mc_a_icon" class="upload-icon fl "
                                                         onclick="$('#upload_mc_a_icon').click()">
                                                        <?php 
		if (!empty($_var_3["icon"])) {
			?>                                                            <img src="<?php echo $_var_3["icon"];?>">
                                                        <?php 
		} else {
			?>                                                            <div class="text" id="tips_a_icon">点击上传图标</div>
                                                            <div class="reset">重新上传</div>
                                                        <?php 
		}
		?>                                                    </div>
                                                    <div class="img-note fl">
                                                        <div>
                                                            <a class="ms-btn ms-btn-secondary mb5"
                                                               href="<?php echo IN_PATH;?>index/icon_make"
                                                               target="_blank">在线制作图标</a>
                                                            <p>200*200尺寸，小于1M<br>PNG、JPG格式</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>是否全屏显示</label>
                                                <div class="col-sm-6">
                                                    <div class="input-text">
                                                        <input type="radio" name="FullScreen"
                                                               value="1" <?php 
		if ($_var_3["config"]["FullScreen"]) {
			?>checked="checked"<?php 
		}
		?>>
                                                        是
                                                        <input
                                                                type="radio" name="FullScreen"
                                                                value="0" <?php 
		if (!$_var_3["config"]["FullScreen"]) {
			?>checked="checked"<?php 
		}
		?>>
                                                        否
                                                        <div class="error1 color-danger">全屏显示没有导航按钮</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>是否允许删除</label>
                                                <div class="col-sm-6">
                                                    <div class="input-text">
                                                        <input type="radio" name="IsRemovable"
                                                               value="1" <?php 
		if ($_var_3["config"]["IsRemovable"]) {
			?>checked="checked"<?php 
		}
		?>>
                                                        是
                                                        <input type="radio" name="IsRemovable"
                                                               value="0" <?php 
		if (!$_var_3["config"]["IsRemovable"]) {
			?>checked="checked"<?php 
		}
		?>>
                                                        否
                                                        <div class="error1 color-danger">如选择否安装后无法删除</div>
                                                    </div>
                                                </div>
                                            </div>
                               
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>包名(Bundle ID)</label>
                                                <div class="col-sm-6">
                                                    <div class="input-text">
                                                        <input type="text" id="bundle_id" name="bundle_id"
                                                               class="form-control input-change1" rows="5"
                                                               placeholder="自定义包名，留空则随机生成"
                                                               value="<?php echo $_var_3["bundle_id"];?>" <?php echo $_var_4 ? "readonly" : "";?>>
                                                        <div class="error1 color-danger">包名格式如：com.xuanfeng.app
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>版本号</label>
                                                <div class="col-sm-6">
                                                    <div class="input-text">
                                                        <input type="text" id="version" name="version"
                                                               class="form-control input-change1" rows="5"
                                                               placeholder="默认1.0.0"
                                                               value="<?php echo $_var_3["version"];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
		if (!$_var_4) {
			?>                                                <div class="form-group clearfix">
                                                    <label class="control-label col-sm-2"><span>*</span>选择套餐</label>
                                                    <div class="col-sm-6">
                                                        <ul class="clearfix period">
                                                            <?php 
			$_var_7 = "active";
			$_var_8 = "icon-radio-checked";
			$_var_9 = 0;
			if ($_var_9 == 0) {
				if (!empty($_var_6[0])) {
					?>                                                                    <li class="clearfix  <?php echo $_var_7;?>"
                                                                        data-id="0"
                                                                        data-price="<?php echo $_var_6[0];?>">
                                                                        <span class="icon icon-radio fl <?php echo $_var_8;?>"></span>
                                                                        <span class="fl">一个月</span>
                                                                    </li>
                                                                    <?php 
					$_var_7 = $_var_8 = "";
				}
				echo "                                                                ";
				if (!empty($_var_6[1])) {
					$_var_9 = $_var_7 ? 1 : $_var_9;
					?>                                                                    <li class="clearfix  <?php echo $_var_7;?>"
                                                                        data-id="1"
                                                                        data-price="<?php echo $_var_6[1];?>">
                                                                        <span class="icon icon-radio fl <?php echo $_var_8;?>"></span>
                                                                        <span class="fl">三个月</span>
                                                                    </li>
                                                                    <?php 
					$_var_7 = $_var_8 = "";
				}
				echo "                                                                ";
				if (!empty($_var_6[2])) {
					$_var_9 = $_var_7 ? 2 : $_var_9;
					?>                                                                    <li class="clearfix  <?php echo $_var_7;?>"
                                                                        data-id="2"
                                                                        data-price="<?php echo $_var_6[2];?>">
                                                                        <span class="icon icon-radio fl <?php echo $_var_8;?>"></span>
                                                                        <span class="fl">六个月</span>
                                                                    </li>
                                                                    <?php 
					$_var_7 = $_var_8 = "";
				}
				echo "                                                                ";
				if (!empty($_var_6[3])) {
					$_var_9 = $_var_7 ? 3 : $_var_9;
					?>                                                                    <li class="clearfix  <?php echo $_var_7;?>"
                                                                        data-id="3"
                                                                        data-price="<?php echo $_var_6[3];?>">
                                                                        <span class="icon icon-radio fl <?php echo $_var_8;?>"></span>
                                                                        <span class="fl">一年</span>
                                                                    </li>
                                                                    <?php 
					$_var_7 = $_var_8 = "";
				}
			}
			echo "                                                            ";
			if (!empty($_var_6[4])) {
				$_var_9 = $_var_7 ? 4 : $_var_9;
				?>                                                                <li class="clearfix  <?php echo $_var_7;?>"
                                                                    data-id="4"
                                                                    data-price="<?php echo $_var_6[4];?>">
                                                                    <span class="icon icon-radio fl <?php echo $_var_8;?>"></span>
                                                                    <span class="fl">永久</span>
                                                                </li>
                                                            <?php 
			}
			?>                                                        </ul>
                                                        <script>
                                                            $('ul.period>li').click(function () {
                                                                $(this).addClass('active').siblings().removeClass('active');
                                                                $('ul.period>li .icon-radio').removeClass('icon-radio-checked');
                                                                $(this).find('.icon-radio').addClass('icon-radio-checked');
                                                                $('#price').html('<b class="color-danger">' + $(this).attr('data-price') + '</b>元');
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
												 <div class="form-group clearfix">
                                                <label class="control-label col-sm-2 col-xs-4"><span>*</span>收费标准</label>
                                                <div class="col-sm-2 col-xs-4" id="price">
                                                    <b class="color-danger"><?php echo $_var_6[$_var_9];?></b>元
                                                </div>
                                                <div class="col-sm-2 col-xs-4"><a class="ms-btnna ms-btn-secondarya"><img src="/img/ye.png" alt="">余额￥<?php echo $this->user["money"];?></a></div>
												 <div class="col-sm-2 col-xs-4"><a class="ms-btn ms-btn-secondaryy" href="<?php echo IN_PATH;?>index/item_price" target="_blank"><font color="#ffffff">充值</font></a></div>
                                            </div>
                                                <?php 
		}
		?>                                            <div class="form-group clearfix">
                                                <label class="control-label col-sm-2"><span>*</span>封装方式</label>
                                                <div class="col-sm-10">
                                                    <div class="input-text">
                                                        <label onclick="$('#note').hide()">
                                                            <input type="radio" name="IsRemovURL"
                                                                   value="0" <?php 
		if (!$_var_3["config"]["IsRemovURL"]) {
			?>checked="checked"<?php 
		}
		?>>
                                                            普通封装
                                                        </label>
                                                        <label onclick="$('#note').show()">
                                                            <input type="radio" name="IsRemovURL"
                                                                   value="1" <?php 
		if ($_var_3["config"]["IsRemovURL"]) {
			?>checked="checked"<?php 
		}
		?>>
                                                            高级封装
                                                        </label>
                                                        <div class="error1 color-danger"></div>
                                                    </div>
                                                    <div class="col-sm-10" id="note"
                                                         style="padding: 5px;<?php 
		if (!$_var_3["config"]["IsRemovURL"]) {
			?>display:none;<?php 
		}
		?>">
                                                        <p style="padding: 5px">
                                                            1、IOS APP只能打开网站首页，点击内部的链接会跳转到safari浏览器?<br>
                                                            在您的网站head里添加以下script代码，可以解决此问题。<br>
                                                            <code> &lt;script
                                                                src="<?php echo $_var_1;?>static/index/js/nosafari.js                                                                "&gt;&lt;/script&gt; </code>
                                                        </p>
                                                        <p style="padding: 5px">
                                                            2、隐藏头部网址，<code><a onclick="createHtml()"
                                                                              style="color: #c7254e">下载app1.html文件</a></code>，放在网站根目录<br>
                                                            此文件名称必须为app1.html，不能改名<br>
                                                        </p>
                                                        <p style="padding: 5px;">如需技术支持，请联系客服，我们提供付费服务。</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group1 clearfix mt40">
                                                <label class="control-label col-sm-2"></label>
                                                <div class="col-sm-6">
                                                    <button class="ms-btn ms-btn-primary w140 ng-binding" type="button"
                                                            onclick="mobile_config();">
                                                        一键封装
                                                    </button>
                                                    <button class="ms-btn ms-btn-primary w140 ng-binding" type="button"
                                                            style="display: none;"
                                                            onclick="downloadFile();">
                                                        下载
                                                    </button>
                                                    <button class="ms-btn ms-btn-primary w140 ng-binding" type="button"
                                                            style="display: none;"
                                                            onclick="publish();">
                                                        发布
                                                    </button>
                                                </div>
                                            </div>
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix form-group">
        <label class="control-label col-sm-2"></label>
        <div class="warn-prompt-wrap1ass fl">
            <div class="warn-prompt-cont" style="padding:15px;text-align: left;">
              <p> 
                    本平台不支持以下类型应用：
                    <br>1.诈骗类应用 2.借贷类应用 3.博彩类应用 4.色情类应用 5.违规直播类应用 6.区块链虚拟币类应用 7.其他违法违规类应用，如有违反，我们将视情况封禁应用或账号，（<span style="color:red">均不做退款处理</span>）,严重者我们将上报有关部门,请您确认上传的应用符合《<a href="/index/about/specification" target="_blank" class="color-hover">应用审核规范</a>》，如果您已上传以上类型应用请尽快删除下架，自觉清理，避免违法行为。
                </p>   
            </div>
        </div>
    </div>
               <script>
$('#picker').colpick({
		layout:'hex',submit:0,colorScheme:'dark',
		onChange:function(hsb,hex,rgb,el,bySetColor){
			if(!bySetColor){
				$('#in_b_color').val(hex);
				$('#in_b_color').css('background-color','#'+hex);
			}
		}
	}).keyup(function(){
		$(this).colpickSetColor(this.value);
});
$(document).ready(function(){
	$("input[name='splash']").click(function(){
		if($(this).val()==1){
			$("#splash_box").show();
		}else{
			$("#splash_box").hide();
		}
	});
	$("input[name='bidtype']").click(function(){
		if($(this).val()==1){
			$("#bidtype_box").show();
		}else{
			$("#bidtype_box").hide();
		}
	});
	$("input[name='bidtypee']").click(function(){
		if($(this).val()==1){
			$("#bidtype_boxx").show();
		}else{
			$("#bidtype_boxx").hide();
		}
	});
	$("input[name='certype']").click(function(){
		if($(this).val()==1){
			$("#certype_box0").hide();
			$("#certype_box1").show();
		}else{
			$("#certype_box0").show();
			$("#certype_box1").hide();
		}
	});
});

</script>
            <?php 
		$this->footer();
		?>        </body>
        </html>

        <?php 
	}
}