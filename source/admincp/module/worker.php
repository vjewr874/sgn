<?php


namespace app\admin;

class worker extends Base
{
	public $workerlog = IN_TMP_PATH . "worker/worker.log";
	public $worker_statuslog = IN_TMP_PATH . "worker/worker_status.log";
	function initialize()
	{
		parent::initialize();
		@creatdir(IN_TMP_PATH . "worker/");
	}
	function index()
	{
		if (in_array($this->action, ["start", "restart", "stop"])) {
			exec("php worker.php " . $this->action . " -d", $_var_0);
			$_var_0 = json_encode($_var_0);
			if ($this->action == "start") {
				@file_put_contents($this->workerlog, "");
				@file_put_contents($this->worker_statuslog, 1);
				if (strstr($_var_0, "Start success")) {
					return reJSON("签名服务启动成功", 1);
				}
				if (strstr($_var_0, "already running")) {
					return reJSON("签名服务已经启动了，请勿重复", 1);
				}
				return reJSON("启动失败", 0);
			} elseif ($this->action == "restart") {
				@file_put_contents($this->workerlog, "");
				@file_put_contents($this->worker_statuslog, 1);
				if (strstr($_var_0, "Start success")) {
					return reJSON("签名服务重启成功", 1);
				}
				return reJSON("重启失败", 0);
			} elseif ($this->action == "stop") {
				@file_put_contents($this->worker_statuslog, 0);
				if (strstr($_var_0, "stop success")) {
					return reJSON("签名服务停止成功", 0);
				}
				if (strstr($_var_0, "not run")) {
					return reJSON("签名服务已经是停止状态了", 0);
				}
				return reJSON("停止失败", 0);
			}
		} else {
			if ($this->action == "logs") {
				$_var_1 = @file_get_contents($this->workerlog);
				$_var_1 = str_replace("\n", "<br>", $_var_1 ?: "暂无日志");
				return reJSON($_var_1, $this->workerlog);
			}
		}
		$_var_1 = @file_get_contents($this->worker_statuslog);
		return reJSON($_var_1);
	}
}