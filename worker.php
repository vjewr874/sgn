<?php


include_once "source/system/db.class.php";
use Workerman\WebServer;
use GatewayWorker\Gateway;
use GatewayWorker\BusinessWorker;
use GatewayWorker\Register;
use Workerman\Autoloader;
class worker extends \Workerman\Worker
{
	function __construct()
	{
		self::$stdoutFile = IN_TMP_PATH . "worker/worker.log";
		self::startBusinessWorker();
		self::startRegister();
		self::startGateWay();
		self::runAll();
	}
	function startBusinessWorker()
	{
		$_var_0 = new BusinessWorker();
		$_var_0->name = "SignBusinessWorker";
		$_var_0->count = IN_SIGN_WORKER_COUNT ?: 4;
		$_var_0->registerAddress = "127.0.0.1:1238";
	}
	function startGateWay()
	{
		$_var_1 = new Gateway("websocket://0.0.0.0:" . (IN_SIGN_WORKER_PORT ?: "8282"));
		$_var_1->name = "SignGateway";
		$_var_1->count = 1;
		$_var_1->lanIp = "10.0.8.3";
		$_var_1->startPort = 2901;
		$_var_1->registerAddress = "127.0.0.1:1238";
	}
	function startRegister()
	{
		$_var_2 = new Register("text://0.0.0.0:1238");
		$_var_2->name = "SignRegister";
	}
}
$worker = new worker();