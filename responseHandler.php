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

    // function for making a response message
    public function getMessage($message = NULL, $code = NULL, $status = NULL){
        // Make a default message array
        $resMesg = Array();
        $resMesg["code"] = $this->code;
        $resMesg["status"] = $this->status;
        $resMesg["message"] = $this->message;
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