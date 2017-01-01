<?php
/**
 * 
 * 微信支付API异常类
 * @author widyhu
 *
 */
namespace mkui\wechatpay\lib;

use yii\base\Exception;

class WxPayException extends Exception {
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
