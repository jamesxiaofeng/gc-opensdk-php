<?php
namespace haiyin\core\support;

class Rsa
{
    public static function encrypt($data, $pubKey)
    {
        $encrypted = "";
        $pubKey = "-----BEGIN PUBLIC KEY-----\n" . wordwrap($pubKey, 64, "\n", true) . "\n-----END PUBLIC KEY-----";
        openssl_public_encrypt($data, $encrypted, $pubKey);
        return $encrypted;
    }

    public static function decrypt($data, $priKey)
    {
        $decrypted = "";
        $priKey = "-----BEGIN RSA PRIVATE KEY-----\n" . wordwrap($priKey, 64, "\n", true) . "\n-----END RSA PRIVATE KEY-----";
        openssl_private_decrypt(base64_decode($data), $decrypted, $priKey);//私钥解密  
        return $decrypted;
    }
}