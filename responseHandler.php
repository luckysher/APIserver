<?php

// class for handling responses like error, success etc.
class ResponseHandler{
    public $status;
    public $message;


    // constructor
    public function __construct(){
       $this->$availableUrls; = ["localhost/PHPapi/api.php/getconfig?type=desktop", "localhost/PHPapi/api.php/getconfig?type=game"];
    }

    // function for making a response message
    public function getMessage($message = NULL, $code = NULL, $status = NULL){

    }

    // get success response message on GET/POST request
    public function getSuccessResp($message, $dataArray=NULL){

        return $resMesg;
    }

}
?>