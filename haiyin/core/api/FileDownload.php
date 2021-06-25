<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

class FileDownload extends ApiInterface
{
    protected $fileNo;
    protected $expireDateTime;


    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/common/file/download";
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
     * Get the value of expireDateTime
     */ 
    public function getExpireDateTime()
    {
        return $this->expireDateTime;
    }

    /**
     * Set the value of expireDateTime
     *
     * @return  self
     */ 
    public function setExpireDateTime($expireDateTime)
    {
        $this->expireDateTime = $expireDateTime;

        return $this;
    }
}