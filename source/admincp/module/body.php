<?php


namespace app\admin;

class body extends Base
{
	public function initialize()
	{
		parent::initialize();
		$this->Administrator(1);
	}
	function index()
	{
		$this->header();
		?>        <div class="container">
            <div class="itemtitle"><h3><?php echo IN_NAME;?>管理中心</h3></div>
            
<table class="tb tb2 nobdb fixpadding"><tbody>
<tr><th colspan="15" class="partition"><font size="4" color="#FF0000">快捷方式</font></th></tr>
<tr>
<td><a href="?c=config_setting&amp;a=pay"><font size="2" color="#b902f5">支付配置</font></a></td>
<td><a href="?c=config_setting&amp;a=extend"><font size="2" color="#b902f5">扩展配置</font></a></td>
<td><a href="?c=config_setting&amp;a=site"><font size="2" color="#b902f5">站点配置</font></a></td>
<td><a href="?c=config_setting&amp;a=upload"><font size="2" color="#b902f5">云储存配置</font></a></td>
<td><a href="?c=config_setting&amp;a=sms"><font size="2" color="#b902f5">短信配置</font></a></td>
<td><a href="?c=config_setting&amp;a=credit"><font size="2" color="#b902f5">业务配置</font></a></td>
<td><a href="?c=item&amp;a=index"><font size="2" color="#b902f5">价格配置</font></a></td>
<td><a href="?c=super_cert&amp;a=index"><font size="2" color="#b902f5">P8证书配置（超级签）</font></a></td>
<td><a href="?c=cert&amp;a=index"><font size="2" color="#b902f5">P12证书配置（企业签）</font></a></td>
</tr>
<tr>
<td><a href="?c=report&amp;a=index"><font size="2" color="#b902f5">举报管理</font></a></td>
<td><a href="?c=signlog&amp;a=index"><font size="2" color="#b902f5">签名记录</font></a></td>
<td><a href="?c=sign&amp;a=index"><font size="2" color="#b902f5">签名管理</font></a></td>
<td><a href="?c=super_sign&amp;a=index"><font size="2" color="#b902f5">超级签名记录</font></a></td>
<td><a href="?c=super_code&amp;a=index"><font size="2" color="#b902f5">授权码</font></a></td>
<td><a href="?c=config_setting&amp;a=sign"><font size="2" color="#b902f5">签名配置</font></a></td>
</tr>
</tbody>
</table>
            
            <?php 
		$_var_0 = [];
		$_var_1 = db("user")->where("in_verify", "2")->count();
		$_var_1 && ($_var_0[] = ["待审核认证", "?c=user&a=verify", $_var_1]);
		$_var_2 = db("appid")->where("in_applock", "-1")->count();
		$_var_2 && ($_var_0[] = ["待审核应用", "?c=app&a=check", $_var_2]);
		$_var_3 = db("sign")->alias("s")->join("appid a", "s.in_aid=a.in_id", "left")->where("s.in_status", "<", "5")->where("a.in_sign", ">", "0")->count();
		$_var_3 && ($_var_0[] = ["企业正在签名", "?c=sign&status=1", $_var_3]);
		$_var_4 = db("super_sign")->where("status", "<", "5")->where("status", ">", "2")->count();
		$_var_4 && ($_var_0[] = ["超级正在签名", "?c=super_sign&status=1", $_var_4]);
		$_var_5 = db("user_cash")->where("status", "0")->count();
		$_var_5 && ($_var_0[] = ["待处理提现", "?c=user_cash&status=1", $_var_5]);
		$_var_6 = db("user")->count();
		$_var_7 = db("appid")->count();
		$_var_8[0][] = ["用户", "?c=user&a=index", $_var_6];
		$_var_8[0][] = ["应用", "?c=app&a=index", $_var_7];
		$_var_8[0][] = ["充值", "?c=paylog&a=index", db("paylog")->where("pay_time", ">", 0)->sum("pay_money") . "元"];
		$_var_8[0][] = ["佣金提现", "?c=user_cash&a=index", db("user_cash")->where("status", "1")->sum("money") . "元"];
		$_var_8[0][] = ["分发下载", "?c=app_downlog&a=index", db("downhistory")->sum("down")];
		$_var_8[0][] = ["分发偷量", "?c=app_downlog&a=index", db("downhistory")->sum("steal")];
		$_var_8[0][] = ["超级安装", "?c=super_device&a=index", db("ios_device")->where("app_id", ">", "0")->where("steal_time", "0")->count()];
		$_var_8[0][] = ["超级偷量", "?c=super_device&a=index", db("ios_device")->where("app_id", ">", "0")->where("steal_time", ">", "0")->count()];
		$_var_8[0][] = ["证书消耗", "?c=super_device&a=index", db("ios_device")->group("udid,cert_iss")->count()];
		$_var_8[1][] = ["今日注册", "?c=user&a=index", db("user")->whereTime("in_regdate", "today")->count()];
		$_var_8[1][] = ["今日上传", "?c=app&a=index", db("appid")->whereTime("in_addtime", "today")->count()];
		$_var_8[1][] = ["今日充值", "?c=paylog&a=index", db("paylog")->whereTime("pay_time", "today")->sum("pay_money") . "元"];
		$_var_8[1][] = ["今日提现", "?c=user_cash&a=index", db("user_cash")->whereTime("create_time", "today")->whereTime("status", "1")->sum("money") . "元"];
		$_var_8[1][] = ["今日下载", "?c=app_downlog&a=index", db("downhistory")->whereTime("addtime", "today")->sum("down")];
		$_var_8[1][] = ["今日偷量", "?c=app_downlog&a=index", db("downhistory")->whereTime("addtime", "today")->sum("steal")];
		$_var_8[1][] = ["今日安装", "?c=super_device&a=index", db("ios_device")->whereTime("create_time", "today")->where("app_id", ">", "0")->where("steal_time", "0")->count()];
		$_var_8[1][] = ["今日偷量", "?c=super_device&a=index", db("ios_device")->whereTime("create_time", "today")->where("app_id", ">", "0")->where("steal_time", ">", "0")->count()];
		$_var_8[1][] = ["今日消耗", "?c=super_device&a=index", db("ios_device")->whereTime("create_time", "today")->where("cert_dec", "1")->count()];
		
		$_var_9["程序版本"] = "FenfaCMS " . IN_VERSION . " 简体中文" . strtoupper(IN_CHARSET) . " " . IN_BUILD;
	
		$_var_11 = PHP_OS . " / PHP v" . PHP_VERSION;
		$_var_9["服务器系统及 PHP"] = $_var_11 .= @ini_get("safe_mode") ? " Safe Mode" : NULL;
		$_var_9["服务器软件"] = $_var_12 = $_SERVER["SERVER_SOFTWARE"];
		$_var_9["磁盘空间"] = $_var_13 = function_exists("disk_free_space") ? floor(disk_free_space(IN_ROOT) / 1048576) . "M" : "<span style=\"color:#C00\">unknow</span>";
		$_var_9["附件上传"] = $_var_14 = @ini_get("file_uploads") ? ini_get("upload_max_filesize") : "<span style=\"color:#C00\">unknow</span>";
		$_var_9["mbstring"] = $_var_15 = extension_loaded("mbstring") ? "<span style=\"color:#090\">[√]</span>" : "<span style=\"color:#C00\">[×]</span>";
		$_var_9["pdo_mysql"] = $_var_16 = extension_loaded("pdo_mysql") ? "<span style=\"color:#090\">[√]</span>" : "<span style=\"color:#C00\">[×]</span>";
		$_var_9["allow_url_fopen"] = $_var_17 = @ini_get("allow_url_fopen") ? "<span style=\"color:#090\">[√]</span>" : "<span style=\"color:#C00\">[×]</span>";
		$_var_9["fsockopen()"] = $_var_18 = function_exists("fsockopen") ? "<span style=\"color:#090\">[√]</span>" : "<span style=\"color:#C00\">[×]</span>";
		$_var_9["curl_init()"] = $_var_19 = function_exists("curl_init") ? "<span style=\"color:#090\">[√]</span>" : "<span style=\"color:#C00\">[×]</span>";
	
		$_var_21 = [["title" => "系统信息", "list" => $_var_9], ["title" => "旗舰版（无需授权）", "list" => $_var_20]];
		if ($_var_0) {
			?><table class="tb tb2 nobdb fixpadding"><tr><td><h3 class="left margintop">待处理事项:</h3><?php 
			foreach ($_var_0 as $_var_22 => $_var_23) {
				?><p class="left difflink"><a href="<?php echo $_var_23[1];?>"><?php echo $_var_23[0];?></a>(<?php echo lightnum($_var_23[2]);?>)</p><?php 
			}
			?><div class="clear"></div></td></tr></table><?php 
		}
		if ($_var_8) {
			?><table class="tb tb2 nobdb fixpadding"><tr><th colspan="15" class="partition"><font size="4" color="#FF0000">数据统计</font></th></tr><?php 
			foreach ($_var_8 as $_var_24) {
				?><tr><?php 
				foreach ($_var_24 as $_var_23) {
					?><td><a href="<?php echo $_var_23[1];?>"><?php echo $_var_23[0];?></a>(<?php echo lightnum($_var_23[2]);?>)</td><?php 
				}
				?></tr><?php 
			}
			?></table><?php 
		}
		foreach ($_var_21 as $_var_25) {
			?><table class="tb tb2 fixpadding"><tr><th colspan="15" class="partition"><?php echo $_var_25["title"];?></th></tr><?php 
			foreach ($_var_25["list"] as $_var_22 => $_var_23) {
				?><tr><td class="vtop td24 lineheight"><?php echo $_var_22;?></td><td class="lineheight smallfont"><?php echo $_var_23;?></td></tr><?php 
			}
			?></table><?php 
		}
		?>        </div>
        <script src="static/admincp/js/ajax.js"></script>
        <script>
            window.onload = CheckBuild;
        </script>
        <?php 
		$this->footer();
	}
}