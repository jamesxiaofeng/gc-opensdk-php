<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//单笔发单
class PayOrder extends ApiInterface
{
    protected $levyCompanyNo;
    protected $employCompanyNo;
    protected $employOrderNo;
    protected $orderAmount;
    protected $orderType;
    protected $orderContent;
    protected $orderDate;
    protected $channelNo;
    protected $draweeAccountNo;
    protected $payeeAccountNo;
    protected $idCardNo;
    protected $name;
    protected $extData;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/pay/order";
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

    /**
     * Get the value of orderAmount
     */ 
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Set the value of orderAmount
     *
     * @return  self
     */ 
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    /**
     * Get the value of orderType
     */ 
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set the value of orderType
     *
     * @return  self
     */ 
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get the value of orderContent
     */ 
    public function getOrderContent()
    {
        return $this->orderContent;
    }

    /**
     * Set the value of orderContent
     *
     * @return  self
     */ 
    public function setOrderContent($orderContent)
    {
        $this->orderContent = $orderContent;

        return $this;
    }

    /**
     * Get the value of orderDate
     */ 
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set the value of orderDate
     *
     * @return  self
     */ 
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

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
     * Get the value of draweeAccountNo
     */ 
    public function getDraweeAccountNo()
    {
        return $this->draweeAccountNo;
    }

    /**
     * Set the value of draweeAccountNo
     *
     * @return  self
     */ 
    public function setDraweeAccountNo($draweeAccountNo)
    {
        $this->draweeAccountNo = $draweeAccountNo;

        return $this;
    }

    /**
     * Get the value of payeeAccountNo
     */ 
    public function getPayeeAccountNo()
    {
        return $this->payeeAccountNo;
    }

    /**
     * Set the value of payeeAccountNo
     *
     * @return  self
     */ 
    public function setPayeeAccountNo($payeeAccountNo)
    {
        $this->payeeAccountNo = $payeeAccountNo;

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
     * Get the value of extData
     */ 
    public function getExtData()
    {
        return $this->extData;
    }

    /**
     * Set the value of extData
     *
     * @return  self
     */ 
    public function setExtData($extData)
    {
        $this->extData = $extData;

        return $this;
    }
}