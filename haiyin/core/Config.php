<?php
namespace haiyin\core;

use haiyin\core\impl\ConfigInterface;

class Config extends ConfigInterface {

    const VERSION = "2.0";
    const CRYPT_TYPE = "rsa";

    protected $_api_key = "";
    protected $_api_secret = "";
    protected $_aes_key = "";
    protected $_gc_pub_key = "";
    protected $_self_priv_key = "";
    protected $_encrypt_flag = false;

    public function getApiKey()
    {
        return $this->_api_key;
    }

    public function getApiSecret()
    {
        return $this->_api_secret;
    }

    public function getAesKey()
    {
        return $this->_aes_key;
        //return substr(openssl_digest(openssl_digest($this->_aes_key, 'sha1', true), 'sha1', true), 0, 16);
    }

    public function getCryptType() 
    {
        return self::CRYPT_TYPE;
    }


    public function getVersion()
    {
        return self::VERSION;
    }

    public function getEcryptFlag()
    {
        return $this->_encrypt_flag;
    }

    public function getSelfPrivateKey()
    {
        return $this->_self_priv_key;
    }

    public function getGcPubKey()
    {
        return $this->_gc_pub_key;
    }

    public function setApiKey($apiKey)
    {
        $this->_api_key = $apiKey;
        return $this;
    }

    public function setApiSecret($apiSecret)
    {
        $this->_api_secret = $apiSecret;
        return $this;
    }

    public function setAesKey($aesKey)
    {
        $this->_aes_key = $aesKey;
        return $this;
    }

    public function setGcPubKey($gcPubKey)
    {
        $this->_gc_pub_key = $gcPubKey;
        return $this;
    }

    public function setSelfPrivatekey($priKey)
    {
        $this->_self_priv_key = $priKey;
        return $this;
    }

    /**
     * @param bool $encryptFlag "true: 返回数据会加密 false:返回数据不加密,取决于自己业务对安全性的要求"
     */
    public function setEncryptFlag($encryptFlag)
    {
        $this->_encrypt_flag = $encryptFlag ? 'true' : 'false';
        return $this;
    }
}