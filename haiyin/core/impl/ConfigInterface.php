<?php
namespace haiyin\core\impl;
/**
* 	配置账号信息
*/

abstract class ConfigInterface
{

	//=======【基本配置信息】=====================================
	public abstract function getApiKey();
	public abstract function getApiSecret();
	public abstract function getAesKey();
	public abstract function getCryptType();
	public abstract function getVersion();
	public abstract function getEcryptFlag();
	public abstract function getGcPubKey();
	public abstract function getSelfPrivateKey();

}
