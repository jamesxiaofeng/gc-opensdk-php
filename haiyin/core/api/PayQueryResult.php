<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//订单状态查询
class PayQueryResult extends ApiInterface
{
    protected $levyCompanyNo;
    protected $employCompanyNo;
    protected $employOrderNo;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/pay/queryResult";
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
     * Get the value of employOrderNo
     */ 
    public function getEmployOrderNo()
    {
        return $this->employOrderNo;
    }

    /**
     * Set the value of employOrderNo
     *
     * @return  self
     */ 
    public function setEmployOrderNo($employOrderNo)
    {
        $this->employOrderNo = $employOrderNo;

        return $this;
    }
}