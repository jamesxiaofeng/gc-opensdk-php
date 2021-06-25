<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

class ChangeAccountPay extends ApiInterface
{
    protected $orderNo;
    protected $payeeAccountNo;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/pay/changeAccountPay";
    }

    /**
     * Get the value of orderNo
     */ 
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set the value of orderNo
     *
     * @return  self
     */ 
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

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
}