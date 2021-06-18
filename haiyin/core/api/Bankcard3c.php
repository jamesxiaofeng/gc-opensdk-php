<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//人员银行卡三要素验证, 确保就业者信息真实性
class Bankcard3c extends ApiInterface
{
    protected $idCardNo;
    protected $bankCardNo;
    protected $name;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/common/bankcard/3c";
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

    /**
     * Get the value of bankCardNo
     */ 
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Set the value of bankCardNo
     *
     * @return  self
     */ 
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}