<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//认证状态查询
class PersonAuthStatus extends ApiInterface
{
    protected $idCardNo;
    

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/person/auth2101/status";
    }
    /**
     * Get the value of idCardNo
     */ 
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Set the value of idCardNo
     *
     * @return  self
     */ 
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;

        return $this;
    }
}