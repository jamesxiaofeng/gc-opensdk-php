<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//开具发票申请
class OrderInvoice extends ApiInterface
{
    protected $levyCompanyNo;
    protected $employCompanyNo;
    protected $applyNo;
    protected $startDate;
    protected $endDate;
    protected $withoutOrder;
    protected $invoiceAmount;
    protected $invoiceType;
    protected $invoiceContentNo;
    protected $remark;
    protected $address;
    protected $linkman;
    protected $phone;

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/order/invoice";
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

    /**
     * Get the value of startDate
     */ 
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */ 
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of withoutOrder
     */ 
    public function getWithoutOrder()
    {
        return $this->withoutOrder;
    }

    /**
     * Set the value of withoutOrder
     *
     * @return  self
     */ 
    public function setWithoutOrder($withoutOrder)
    {
        $this->withoutOrder = $withoutOrder;

        return $this;
    }

    /**
     * Get the value of invoiceAmount
     */ 
    public function getInvoiceAmount()
    {
        return $this->invoiceAmount;
    }

    /**
     * Set the value of invoiceAmount
     *
     * @return  self
     */ 
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->invoiceAmount = $invoiceAmount;

        return $this;
    }

    /**
     * Get the value of invoiceType
     */ 
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * Set the value of invoiceType
     *
     * @return  self
     */ 
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    /**
     * Get the value of invoiceContentNo
     */ 
    public function getInvoiceContentNo()
    {
        return $this->invoiceContentNo;
    }

    /**
     * Set the value of invoiceContentNo
     *
     * @return  self
     */ 
    public function setInvoiceContentNo($invoiceContentNo)
    {
        $this->invoiceContentNo = $invoiceContentNo;

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

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of linkman
     */ 
    public function getLinkman()
    {
        return $this->linkman;
    }

    /**
     * Set the value of linkman
     *
     * @return  self
     */ 
    public function setLinkman($linkman)
    {
        $this->linkman = $linkman;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}