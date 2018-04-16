<?php

class Error{
    $status;
    $message;
    $notFoundUrl;
    $availableUrls;

    public function __construct($notFoundUrl){
        $this-> status = 404;
        $this->$message = "URL not available";

    }

}
?>