<?php

class AlipayService
{
    public $appId;
    public $returnUrl;
    public $notifyUrl;
    public $signType;
    public $privateKey;
    public $publicKey;

    public function __construct($config)
    {
        $this->appId = isset($config['appId']) ? $config['appId'] : '';
        $this->notifyUrl = isset($config['notifyUrl']) ? $config['notifyUrl'] : '';
        $this->signType = $config['signType'];
        $this->privateKey = isset($config['privateKey']) ? $config['privateKey'] : '';
        $this->publicKey = $config['publicKey'];
    }

    /**
     * AopClient初始化
     * @return AopClient
     */
    private function aop_init($isData = true)
    {
        require_once __DIR__ . '/aop/AopClient.php';
        $aop = new AopClient();
        if ($isData) {
            $this->data_init($aop);
        }
        return $aop;
    }

    private function data_init($aop)
    {
        $aop->appId = $this->appId;
        $aop->rsaPrivateKey = $this->privateKey;
        $aop->alipayrsaPublicKey = $this->publicKey;
        $aop->signType = $this->signType;
        return $aop;
    }

    public function qrpay(array $data)
    {
        require_once __DIR__ . '/AopSdk.php';
        $aop = $this->aop_init();
        $request = new AlipayTradePrecreateRequest();
        $request->setNotifyUrl($this->notifyUrl);
        $body = [
            'body' => $data['body'],
            'subject' => $data['subject'],
            'out_trade_no' => $data['out_trade_no'],
            'timeout_express' => '5m',
            'total_amount' => $data['total_amount'],
            'store_id' => 'FF_001'
        ];
        $request->setBizContent(json_encode($body));
        $result = $aop->execute($request, "POST");
        $response = $result->alipay_trade_precreate_response;
        return ['code' => $response->code, 'msg' => $response->msg, 'out_trade_no' => $response->out_trade_no, 'qr_code' => $response->qr_code];
    }

    /**
     * 验签方法
     * @param $arr 验签支付宝返回的信息，使用支付宝公钥。
     * @return boolean
     */
    public function check($arr)
    {
        $aop = $this->aop_init(false);
        $aop->alipayrsaPublicKey = $this->publicKey;
        //dump($aop);exit;
        $result = $aop->rsaCheckV1($arr, $this->publicKey, $this->signType);
        return $result;
    }
}