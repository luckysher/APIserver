<?php
 include 'gameConf/gameConf.php'

class Server{
    public $appname;
    public $grh;

    public function __contruct(){
       $this -> appname = 'API Server';
       $this -> grh = new GameConfig;
    }

    public function handle_post_request($s){

    }

    public function handle_get_request($s){

    }

    public function process_request($s){
        $json = [];
        $request_method = $s['REQUEST_METHOD'];

        if(request_method == 'GET'){

        }if(request_method == 'POST'){

        }

        return $json;
    }
}
?>