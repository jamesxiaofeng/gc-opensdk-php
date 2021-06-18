<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//就业者签约
class PersonSign extends ApiInterface
{
    protected $levyCompanyNo;
    protected $employCompanyNo;
    protected $idCardNo;
    protected $name;
    protected $fileNo;
    protected $remark;

    

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/person/sign2104";
    }

    /**
     * Get the value of levyCompanyNo
     */ 
    public function getLevyCompanyNo()
    {
        return $this->levyCompanyNo;
    }

    /**
     * Set the value of levyCompanyNo
     *
     * @return  self
     */ 
    public function setLevyCompanyNo($levyCompanyNo)
    {
        $this->levyCompanyNo = $levyCompanyNo;

        return $this;
    }

    /**
     * Get the value of employCompanyNo
     */ 
    public function getEmployCompanyNo()
    {
        return $this->employCompanyNo;
    }

    /**
     * Set the value of employCompanyNo
     *
     * @return  self
     */ 
    public function setEmployCompanyNo($employCompanyNo)
    {
        $this->employCompanyNo = $employCompanyNo;

        return $this;
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
     * Get the value of fileNo
     */ 
    public function getFileNo()
    {
        return $this->fileNo;
    }

    /**
     * Set the value of fileNo
     *
     * @return  self
     */ 
    public function setFileNo($fileNo)
    {
        $this->fileNo = $fileNo;

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