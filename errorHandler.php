<?php

class Error{
    $status;
    $message;
    $notFoundUrl;
    $availableUrls;

    public function __construct($notFoundUrl){
        $this-> status = 404;
        $this->$message = "URL not available";
        $this->$notFoundUrl->$notFoundUrl;
        $this->$availableUrls; = ["localhost/PHPapi/api.php/getconfig?type=desktop", "localhost/PHPapi/api.php/getconfig?type=game"];
    }

    public function setNotFound($nUrl){
        $this->$notFoundUrl = $nUrl;
    }

    // get success response message
    public function getSuccessResponse($status, $code, $message){
        $resMesg = array();
        $resMesg["status_code"] = $code;
        $resMesg["status"] = $status;
        $resMesg["message"] = $message;
    }

}
?>