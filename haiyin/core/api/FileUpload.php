<?php
namespace haiyin\core\api;

use haiyin\core\impl\ApiInterface;

//文件上传
class FileUpload extends ApiInterface
{
    protected $fileContent; //文件的base64
    protected $fileType; // 业务类型 1:身份证正面照片 2:身份证反面照片 3:签字图片
    

    public function api()
    {
        return self::BASE_URL . "/open-api/v2/standard/common/file/upload";
    }

    /**
     * Get the value of fileContent
     */ 
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Set the value of fileContent
     *
     * @return  self
     */ 
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;

        return $this;
    }

    /**
     * Get the value of fileType
     */ 
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set the value of fileType
     *
     * @return  self
     */ 
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }
}