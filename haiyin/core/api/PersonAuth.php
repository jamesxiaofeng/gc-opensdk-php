<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;
// 就业者认证

class PersonAuth extends ApiInterface
{
    protected $idCardNo;
    protected $name;
    protected $idCardFrontNo;
    protected $idCardBackNo;
    protected $mobile;
    protected $remark;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/person/auth2101";
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

    /**
     * Get the value of idCardFrontNo
     */ 
    public function getIdCardFrontNo()
    {
        return $this->idCardFrontNo;
    }

    /**
     * Set the value of idCardFrontNo
     *
     * @return  self
     */ 
    public function setIdCardFrontNo($idCardFrontNo)
    {
        $this->idCardFrontNo = $idCardFrontNo;

        return $this;
    }

    /**
     * Get the value of idCardBackNo
     */ 
    public function getIdCardBackNo()
    {
        return $this->idCardBackNo;
    }

    /**
     * Set the value of idCardBackNo
     *
     * @return  self
     */ 
    public function setIdCardBackNo($idCardBackNo)
    {
        $this->idCardBackNo = $idCardBackNo;

        return $this;
    }

    /**
     * Get the value of mobile
     */ 
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set the value of mobile
     *
     * @return  self
     */ 
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get the value of remark
     */ 
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set the value of remark
     *
     * @return  self
     */ 
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }
}