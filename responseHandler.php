<?php

class ResponseHandler{
    public $status;
    public $message;
    public $code;
    public $availableUrls;

    public function __construct(){
        $this-> code = 200;
        $this-> status = "ok";
        $this->$message = "ok";
        $this->$availableUrls; = ["localhost/PHPapi/api.php/getconfig?type=desktop", "localhost/PHPapi/api.php/getconfig?type=game"];
    }

    public function getMessage($message = NULL, $code = NULL, $status = NULL){
        $this->$notFoundUrl = $nUrl;
    }

    // get success response message on GET/POST request
    public function getSuccessResp($message, $dataArray=NULL){
        $resMesg = $this->getMessage("success");
        if($dataArray){
            $resMesg["data"] = $dataArray;
        }
        return $resMesg;
    }

}
?>