<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//开票状态查询
class OrderQueryInvoice extends ApiInterface
{
    protected $levyCompanyNo;
    protected $employCompanyNo;
    protected $applyNo;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/order/queryInvoice";
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
     * Get the value of applyNo
     */ 
    public function getApplyNo()
    {
        return $this->applyNo;
    }

    /**
     * Set the value of applyNo
     *
     * @return  self
     */ 
    public function setApplyNo($applyNo)
    {
        $this->applyNo = $applyNo;

        return $this;
    }
}
