<?php

class Server{
    public $appname;

    public function __contruct(){
     $this -> appname = 'API Server';
    }

    public function process_request(post, get){
        $json = [];
        if(post){
           $json = [array('method' => 'post')];
        }
        elseif(get){
                $json = [array('method' => 'get')];
        }else {
                $json = [array('Request error' => 'invalid request')];
            }
       return $json;
}

?>