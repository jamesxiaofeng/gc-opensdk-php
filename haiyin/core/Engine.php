<?php
namespace haiyin\core;

use haiyin\core\impl\ConfigInterface;
use haiyin\core\impl\ApiInterface;
use haiyin\core\support\Aes;
use haiyin\core\support\Rsa;
use haiyin\core\support\Support;

class Engine
{
    /**
	 * 以post方式提交数据到对应的接口url
	 * 
	 * @param string $body  需要post的body数据
	 * @param array $header header
	 * @param string $url  url
	 * @param int $second   url执行超时时间，默认30s
	 * @throws \Exception
	 */
	protected static function jsonPost($body, $header, $url, $second = 30)
	{		
		$ch = curl_init();

		//设置超时
		curl_setopt($ch, CURLOPT_TIMEOUT, $second);
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, 2);//严格校验
		//设置header
		array_push($header, "content-type:application/json;charset=utf-8;");
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_HEADER, 0);//返回response头部信息
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//post提交方式
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		//运行curl
		$data = curl_exec($ch);
		//返回结果
		if($data){
			curl_close($ch);
			return $data;
		} else { 
			$error = curl_errno($ch);
			curl_close($ch);
			throw new \Exception("haiyin curl error:$error");
		}
	}

	/**
	 * 加密数据然后post发送数据
	 * 
	 * @param ConfigInterface $config  配置对象
	 * @param ApiInterface $api api对象
	 * @param string $seqID 请求序列号,服务端会对该序列号做幂等性校验,24小时内不允许出现重复的序列号
	 */
    public static function query($config, $api, $seqID)
    {
		//build body
		$params = $api->request();
		$encryptMsg = self::encryptMsg($params, $config->getAesKey()); //生成encryptMsg
		$encryptKey = self::encryptKey($config->getAesKey(), $config->getGcPubKey());
		$sign = self::sign($encryptMsg, $config->getGcPubKey());
		$body = [
			"encryptMsg" => $encryptMsg,
			"encryptKey" => $encryptKey,
			"sign" => $sign,
		];
		$body64 = base64_encode(json_encode($body));
		//build header
		$timestamp = Support::getTimestamp();
		$header = [
			"x-cp-apikey" .":". $config->getApiKey(),
			"x-cp-secret" .":". md5($config->getApiSecret() . $timestamp . $seqID),
			"x-cp-timestamp" .":". $timestamp,
			"x-cp-seqid" .":". $seqID,
			"x-cp-version" .":". $config->getVersion(),
			"x-cp-encrypt" .":". $config->getCryptType(),
		];

		return $api->response(self::jsonPost($body64, $header, $api->api()), $config);
    }

	protected static function encryptMsg($data, $aesKey)
	{
		return base64_encode(Aes::encrypt(json_encode($data), $aesKey));
	}

	protected static function encryptKey($aesKey, $gcPublicKey)
	{
		return base64_encode(Rsa::encrypt($aesKey, $gcPublicKey));
	}

	protected static function sign($encryptMsg, $gcPublicKey)
	{
		return base64_encode(Rsa::encrypt(md5($encryptMsg), $gcPublicKey));
	}
}