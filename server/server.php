<?php
 include 'gameConf/gameConf.php'

class Server{
    public $appname;
    public $grh;



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