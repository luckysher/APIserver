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
        $request_path = $s['REQUEST_PATH'];


        if($request_path == 'getconfig'){
            handle_get_request($s)
        }

        if($request_path == 'setconfig'){
            handle_set_request($s)
        }

        return $json;
    }
}
?>