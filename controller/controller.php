<?php
 include 'gameConf/gameConf.php'

class Controller{
    public $contname;
    public $grh;

    public function __contruct(){
       $this -> contname = 'API Controller';
       $this -> grh = new GameConfig;
    }

    public function process_request($s){
        $json = [];
        $request_path = $s['REQUEST_PATH'];

        switch($request_path){
            case 'getconfig':
                echo '<h3 style="color:red;">Getting config:</h3>';
            case 'setconfig':
                echo '<h3 style="color:red;">setting config:</h3>';
            defualt:
                echo '<h3 style="color:red;">Available urls are:</h3>';
        }
        return $json;
    }
 }
?>