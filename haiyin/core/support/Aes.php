<?php
namespace haiyin\core\support;

class Aes
{
    /**
     *
     * @param string $string 需要加密的字符串
     * @param string $key 密钥
     * @return string
     * */
     public static function encrypt($string, $key)
     {
        // openssl_encrypt 加密不同Mcrypt，对秘钥长度要求，超出16加密结果不变
        return openssl_encrypt($string, 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
    }
    /**
     * @param string $string 需要解密的字符串
     * @param string $key 密钥
     * @return string
     */
    public static function decrypt($string, $key)
    {
        $encrypted = base64_decode($string);
        return openssl_decrypt($encrypted, 'aes-128-ecb', $key, OPENSSL_RAW_DATA);
    }
}