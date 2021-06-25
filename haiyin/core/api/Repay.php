<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

class Repay extends ApiInterface
{
    protected $orderNo;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/pay/repay";
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
}