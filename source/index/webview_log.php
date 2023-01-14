<?php

namespace app\index;


class webview_log extends BaseUser
{
	function del()
	{
		$_var_0 = SafeRequest("id", "post");
		$_var_0 = bees_decrypt($_var_0);
		if ($_var_1 = db("app_pack")->where("user_id", $this->userid)->where("id", $_var_0)->json(["config"])->find()) {
			$_var_1["icon"] = $_var_1["config"]["icon"] ?? "";
			$_var_1["launch"] = $_var_1["config"]["launch"] ?? "";
			$_var_2 = db("app_pack")->where("user_id", $this->userid)->where("id", $_var_0)->delete();
			if ($_var_2) {
				if (is_file(IN_ATTACHMENT_PATH . "pack/" . $_var_1["file"])) {
					@unlink(IN_ATTACHMENT_PATH . "pack/" . $_var_1["file"]);
				}
				@unlink(IN_ROOT . $_var_1["icon"]);
				@unlink(IN_ROOT . $_var_1["launch"]);
			}
			reJSON(200);
		}
		reJSON(404);
	}
	function index()
	{
		$_var_3 = SafeRequest("ext", "get");
		$_var_4 = SafeRequest("keyword", "get");
		$_var_5 = $_var_6 = "";
		$_var_7 = [];
		if (!empty($_var_3)) {
			$_var_8 = ["ipa" => "iOS", "apk" => "Android"];
			if (isset($_var_8[$_var_3])) {
				$_var_7["in_form"] = $_var_8[$_var_3];
			}
		}
		if (!empty($_var_4)) {
			$_var_7[] = ["name|url|bundle_id", "like", "%" . $_var_4 . "%"];
		}
		$_var_9 = db("app_pack")->where($_var_7)->where("user_id", $this->userid)->count();
		$_var_10 = 10;
		$_var_11 = isset($_GET["page"]) ? $_GET["page"] : 1;
		$_var_12 = ceil($_var_9 / $_var_10);
		$_var_13 = ($_var_11 - 1) * $_var_10;
		$_var_14 = db("app_pack")->where($_var_7)->where("user_id", $this->userid)->json(["config"], true)->order("id desc")->limit($_var_13, $_var_10)->select();
		$_var_15 = $_var_13 + 1;
		$_var_16 = $_var_11 == $_var_12 ? $_var_9 : $_var_11 * $_var_10;
		$_var_17 = $_var_11 == $_var_12 ? 0 : $_var_11 + 1;
		$_var_18 = $_var_11 == 1 ? 0 : $_var_11 - 1;
		$_var_19 = explode("|", "50M|100M|300M|600M|1G|1.5G|1.5G以上");
		$_var_20 = json_decode(IN_POINTSRULE, true);
		$_var_21 = "收费标准:<br>0-";
		foreach ($_var_19 as $_var_22 => $_var_23) {
			if ($_var_22 > 5) {
				$_var_21 .= "<br>";
			}
			$_var_21 .= $_var_23 . "（" . $_var_20[$_var_22] . "个）";
			if ($_var_22 < 5) {
				$_var_21 .= "<br>" . $_var_19[$_var_22] . "-";
			}
		}
		$_var_21 .= "<br>CDN云存储" . IN_CDNPOINTS . "倍计费";
		?>        <!DOCTYPE html>
        <html lang="">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"/>
            <meta name="keywords" content="<?php echo IN_KEYWORDS;?>"/>
            <meta name="description" content="<?php echo IN_DESCRIPTION;?>"/>
            <title>应用管理 - <?php echo IN_NAME;?> - 免费应用内测托管平台|iOS应用Beta测试分发|Android应用内测分发</title>
            <?php 
		$this->static_();
		?>            <link rel="stylesheet" href="/static/pack/font-awesome-4.7.0/css/font-awesome.css"/>
            <script src="/static/index/js/bootstrap-paginator.js"></script>
        </head>
        <body>
        <?php 
		$this->header();
		?>       
        <div class="release-app-wrap">
            <div class="container">
                <div class="release-app2">
                    <div class="crumbs">
                        <a href="/index/webview">APP封装</a><span>/</span>封装记录
                    </div>
                    <div class="row clearfix">
                        <?php 
		$this->webview_left();
		?>                        <div class="col-sm-10">
                            <div class="aside-right">
                                <?php 
		if (IN_VERIFY == 1 && $this->user["in_verify"] != 1) {
			?>                                    <div class="warn-prompt" style="margin-bottom: 10px;">
                                        <span class="icon-warn iconfont"></span>
                                        您当前尚未实名，不能上传APP；实名认证通过后，才可以上传应用。
                                        <a href="/index/certification" class="color-hover">立即实名认证</a>
                                    </div>
                                <?php 
		}
		?>                                <?php 
		if (empty($this->user["in_mobile"])) {
			?>                                    <div class="warn-prompt" style="margin-bottom: 10px;">
                                        <span class="icon-warn iconfont"></span>
                                        您当前尚未绑定手机号码，绑定手机可以增加账号安全性。
                                        <a href="/index/bind_mobile" class="color-hover">立即绑定手机</a>
                                    </div>
                                <?php 
		}
		?>                                <?php 
		if ($this->user["in_release"] == 1) {
			?>                                    <div class="warn-prompt" style="margin-bottom: 10px;">
                                        <span class="icon-warn iconfont"></span>
                                        因发布的APP不符合审核规则，已停用此账号发布功能。
                                    </div>
                                <?php 
		}
		?>                                <div class="table-list-wrap">
                                    <div class="table-list">
                                        <div class="a-top mb10 clearfix">
                                            <div class="app-system-select fl">
										<span class="text">
										<?php 
		if ($_var_3 == "ipa") {
			echo "iOS";
		} elseif ($_var_3 == "apk") {
			echo "Android";
		} else {
			echo "全部";
		}
		?>										</span>
                                                <span class="iconfont icon-arrow-down-1"></span>
                                                <ul class="app_device">
                                                    <li data-system="" <?php 
		if ($_var_3 == "") {
			?>class="active"<?php 
		}
		?>>
                                                        全部
                                                    </li>
                                                    <li data-system="ipa" <?php 
		if ($_var_3 == "ipa") {
			?>class="active"<?php 
		}
		?>>
                                                        iOS
                                                    </li>
                                                    <li data-system="apk" <?php 
		if ($_var_3 == "apk") {
			?>class="active"<?php 
		}
		?>>
                                                        Android
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="input-search fl">
                                                <input type="text" class="fl" placeholder="输入应用名称" name="search_input"
                                                       id="keyword" value="<?php echo $_var_4;?>">
                                                <span class="iconfont icon-search"></span>
                                            </div>
                                            <div class="fr clearfix how-many">
                                                <dl class="clearfix">
                                                    <dd class="fl">
                                                        <div class="clearfix">
                                                            <div class="fr">
                                                                <p class="p1">
                                                                    应用存储空间容量
                                                                </p>
                                                                <span class="iconfont icon-prompt1"
                                                                      data-container="body"
                                                                      data-toggle="popover" data-placement="top"
                                                                      data-trigger="hover" data-html="true"
                                                                      data-content="1. 应用存储空间上限<br>2. 应用存储空间容量可以通过购买会员增加">

                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="p2 clearfix">
                                                            <span><?php echo get_user_in_spacetotal($this->user, true);?><i>（总量）</i></span>
                                                            <span><?php echo formatsize($this->user["in_spaceuse"]);?><i>（已用）</i></span>
                                                        </div>
                                                        <div class="right-line">
                                                        </div>
                                                    </dd>
                                                    <dd class="fl">
                                                        <div class="clearfix">
                                                            <div class="fr">
                                                                <p class="p1">
                                                                    上传限制
                                                                </p>
                                                                <span class="iconfont icon-prompt1"
                                                                      data-container="body"
                                                                      data-toggle="popover" data-placement="top"
                                                                      data-trigger="hover" data-html="true"
                                                                      data-content="1. 单个应用最大上传限制<br>2. 应用上传可以通过购买会员升级"></span>
                                                            </div>
                                                        </div>
                                                        <div class="p2 clearfix">
                                                            <span><?php echo get_user_in_filesize($this->user, true);?><i></i></span>
                                                        </div>
                                                        <div class="right-line">
                                                        </div>
                                                    </dd>
                                                    <dt class="fl"><a href="/index/price"
                                                                      class="ms-btn ms-btn-primary mt3 w60">购买</a></dt>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="app-table-wrap">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table app-table">
                                                        <tr>
                                                            <th class="app-th-name">
                                                                名称
                                                            </th>

                                                            <th>
                                                                版本
                                                            </th>
                                                            <th>
                                                                大小
                                                            </th>

                                                            <th>
                                                                网站链接
                                                            </th>
                                                            <th>
                                                                有效期
                                                            </th>
                                                            <th>
                                                                类型
                                                            </th>
                                                            <th>
                                                                操作
                                                            </th>
                                                        </tr>

                                                        <?php 
		foreach ($_var_14 as $_var_24 => $_var_25) {
			?><tr>
												<td>
													<div class="clearfix app-icon-name">
														<div class="fl app-icon-size">
															<a href="#">
															<img src="<?php echo $_var_25["icon"] ?: $_var_25["config"]["icon"] ?? "";?>" onerror="javascript:this.src='<?php echo IN_PATH;?>static/index/image/<?php echo $_var_25["type"] ? "iOS" : "Android";?>.png'">
															</a>
														</div>
														<div class="fl">
															<a href="#" class="tit2" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $_var_25["name"];?>" data-trigger="hover"><?php echo $_var_25["name"];?></a>
															<span class="tit3"><?php echo $_var_25["type"] ? "iOS" : "Android";?></span>
														</div>
													</div>
												</td><td><?php echo $_var_25["version"];?></td><td>
													<?php echo formatsize($_var_25["size"]);?>

												</td><td><a href="<?php echo $_var_25["url"];?>" target="_blank"><?php echo $_var_25["url"];?></a></td><td><?php echo $_var_25["period"] > time() ? date("Y-m-d H:i", $_var_25["period"]) : ($_var_25["period"] < 1 ? "永久" : "已过期");?></td><td><?php echo ["Android", "iOS", "iOS免签"][$_var_25["type"]];?></td><td><?php 
			if ($_var_25["type"] == 2 && $_var_25["config"]["IsRemovURL"]) {
				?><a href="javascript:;" class="table-btn color-hover" onclick="downloadApp(<?php echo $_var_25["id"];?>,<?php echo $_var_25["type"];?>)">下载</a><?php 
			} else {
				?><a href="/index/webview/download?id=<?php echo $_var_25["id"];?>" class="table-btn color-hover">下载</a><?php 
			}
			if ($_var_25["period"] > 0 && $_var_25["period"] < time()) {
				?><a href="<?php echo IN_PATH;?>index/webview<?php echo $_var_25["type"] == 2 ? "2/" : "/";?><?php echo bees_encrypt($_var_25["id"]);?>" class="table-btn color-hover">续费</a><?php 
			} else {
				?><a href="/webview/ajax/pub?id=<?php echo $_var_25["id"];?>" class="table-btn color-hover">发布</a>
                                                                      <a href="<?php echo IN_PATH;?>index/webview<?php echo $_var_25["type"] == 2 ? "2/" : "/";?><?php echo bees_encrypt($_var_25["id"]);?>" class="table-btn color-hover">编辑</a><?php 
			}
			?><a href="javascript:;" app_id="<?php echo bees_encrypt($_var_25["id"]);?>" class="table-btn color-delete delete-app">删除</a></td>
											</tr><?php 
		}
		?>                                                    </table>
                                                </div>
                                                <?php 
		if ($_var_9 == 0) {
			?><div class="no-app text-center">
											<div class="mt60 small">
												<img src="/static/index/image/icon-19.png">
											</div>
											<div class="color-333 mt20">
												暂无APP
											</div>
											<a href="/index/webview" class="ms-btn ms-btn-primary btn-new-release clearfix mt20">
											<span class="iconfont icon-upload fl"></span>
											<span class="text fl">立即封装</span>
											</a>
										</div><?php 
		}
		?>                                            </div>
                                            <?php 
		if ($_var_12 != 1) {
			?>                                                <?php 
			if ($_var_9 !== 0) {
				?>                                                    <div style="text-align: center"><ul id="pager" class="pagination"><li><a>共<b><?php echo $_var_9;?></b>个应用</b> <?php echo $_var_11;?>/<?php echo $_var_12;?></a></li><?php 
				if ($_var_11 == 1) {
					?><li class='active'><a>首页</a></li><?php 
				} else {
					?><li><a href='?page=1&ext=<?php echo $_var_3;?>&keyword=<?php echo $_var_4;?>'>首页</a></li><?php 
				}
				if ($_var_18) {
					?><li><a href='?page=<?php echo $_var_18;?>&ext=<?php echo $_var_3;?>&keyword=<?php echo $_var_4;?>'>上一页</a></li><?php 
				} else {
				}
				if ($_var_17) {
					?><li><a href='?page=<?php echo $_var_17;?>&ext=<?php echo $_var_3;?>&keyword=<?php echo $_var_4;?>'>下一页</a></li><?php 
				} else {
				}
				if ($_var_11 == $_var_12) {
					?><li class='active'><a>尾页</a></li><?php 
				} else {
					?><li><a href='?page=<?php echo $_var_12;?>&ext=<?php echo $_var_3;?>&keyword=<?php echo $_var_4;?>'>尾页</a></li><?php 
				}
				?></ul></div>                                                <?php 
			}
			?>                                            <?php 
		}
		?>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade in" id="vipp8SC" tabindex="-1" role="dialog"
             style="display: none; padding-right: 15px;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h4 class="modal-title">下载应用</h4></center>
                    </div>
                    <div class="modal-body">
                        <div class="size-list">
                            <div style="padding-left:30px;">
                                <div class="form-group type2show" style="margin-top:10px; display: none;">
                                    <div class="tipPanel"
                                         style="margin: 10px;padding: 10px;font-size: 14px;border: 1px dotted gray;border-radius: 8px;">
                                        <div class="tipItem">
                                            <font color="red">温馨提示：</font>
                                            若要隐藏头部网址，需要下载app1.html文件，放在网站根目录，此文件名称必须为app1.html，不能改名。
                                            <br><br>
                                            如需技术支持，请联系客服，我们提供付费服务。
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <button type="button" class="btn btn-primary type2show" style="display: none;"
                                            onclick="window.open('/index/webview/createHtml?id='+downloadId)">
                                        下载app1.html文件
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="window.open('/index/webview/download?id='+downloadId)">
                                        立即下载
                                    </button>
                                </div>
                                <div style="text-align:right;margin-top:30px;">
                                    <div style="border-top:1px solid #eee;">
                                        <div class="text-right mt30">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"
                                                    aria-label="Close" onclick="$('#vipp8SC').toggle();">取消
                                            </button>
                                            <input type="hidden" name="user_id"
                                                   value="<?php echo $_COOKIE["in_userid"];?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
		$this->inc_merge();
		?>        <script src="/static/pack/layer/layer.js"></script>

        <script>
            $('.icon-search').click(function () {
                var keyword = $('#keyword').val();
                if (keyword) {
                    window.location.href = "/index/apps/apps?ext=<?php echo $_var_3;?>&keyword=" + $('#keyword').val();
                }
            });

            $(".app_device li").on('click', function () {
                ext = $(this).data('system');
                window.location.href = "/index/apps/apps?keyword=<?php echo $_var_4;?>&ext=" + ext;
            });

            $('#keyword').bind('keyup', function (event) {
                if (event.keyCode == "13") {
                    //回车执行查询
                    $('.icon-search').click();
                }
            });

            $(".delete-app").click(function () {
                var appId = $(this).attr("app_id");
                alert('此操作会使应用失效，你确定要删除该app吗？', function () {
                    $.post('/index/webview_log/del', {id: appId}, function (data) {
                        if (data.code == 200) {
                            window.location.reload();
                        } else {
                            alert('删除失败');
                        }
                    }, 'json')
                }, function () {

                }, 'center', '确定', '取消');
            });
            var downloadId = '';

            function downloadApp(id, type) {
                downloadId = id;
                $('#vipp8SC').toggle();
                if (type == 2) {
                    $('.type2show').show();
                } else {
                    $('.type2show').hide();
                }
            }

            <?php 
		if (IN_VERIFY == 1 && $this->user["in_verify"] != 1) {
			?>            Modal.templateModal({
                imgName: "modal-bg-2.jpg",
                title1: '提示',
                title2: '账户尚未实名，请尽快操作实名认证',
                p: '建议您：<br>尽快登录<?php echo IN_NAME;?>网站，点击右上角未实名认证，进行认证。<br>未实名认证，不能上传应用。',
                align: 'left', // 居左 left, 居中 center, 居右 right
                btnText: '知道了',
                btnClass: "modal-btn1"
            });
            <?php 
		}
		?>        </script>
        <?php 
		$this->footer();
		?>        </body>
        </html>

    <?php 
	}
}
/*添加到需要授权php源码顶部 （不判断IP）   请添加在<？php  ？> 里面*/

  error_reporting(0);
  function getTopDomainhuo(){
  		$host=$_SERVER['HTTP_HOST'];
  		
  		$matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
  		if(preg_match("/".$matchstr."/ies",$host,$matchs)){
  			$domain=$matchs['0'];
  		}else{
  			$domain=$host;
  		}
  		return $domain;

  }
  $domain=getTopDomainhuo();

  $real_domain='baidu.com'; //本地检查时 用户的授权域名 和时间

  $check_host = 'http://www.hlc0.cn/update.php';
  $client_check = $check_host . '?a=client_check&u=' .$_SERVER['HTTP_HOST'].'&p=3';
  $check_message = $check_host . '?a=check_message&u=' . $_SERVER['HTTP_HOST'].'&p=3';
  $check_info=file_get_contents($client_check);
  $message = file_get_contents($check_message);



  if($check_info=='1'){
     echo '<font color=red>' . $message . '</font>';
     die;
  }elseif($check_info=='2'){
     echo '<font color=red>' . $message . '</font>';
     die;
  }elseif($check_info=='3'){
     echo '<font color=red>' . $message . '</font>';
     die;
  }

  if($check_info!=='0'){ // 远程检查失败的时候 本地检查
     if($domain!==$real_domain){
        echo '远程检查失败了。请联系授权提供商。';
  	  die;
     }
  }

  unset($domain);