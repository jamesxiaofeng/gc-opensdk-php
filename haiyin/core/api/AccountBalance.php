<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//账户余额查询
class AccountBalance extends ApiInterface
{
    protected $levyCompanyNo;
    protected $employCompanyNo;
    protected $channelNo;
    protected $accountNo;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/account/balance";
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
     * Get the value of channelNo
     */ 
    public function getChannelNo()
    {
        return $this->channelNo;
    }

    /**
     * Set the value of channelNo
     *
     * @return  self
     */ 
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;

        return $this;
    }

    /**
     * Get the value of accountNo
     */ 
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Set the value of accountNo
     *
     * @return  self
     */ 
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;

        return $this;
    }
}