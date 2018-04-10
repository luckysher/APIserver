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
        $path_info = $s['PATH_INFO'];

        switch($path_info){
            case '/getconfig':
                echo '<h3 style="color:red;">Getting config:</h3>';
                break;
            case '/setconfig':
                echo '<h3 style="color:red;">setting config:</h3>';
                break;
            default:
                echo '<h3 style="color:red;">Available urls are:</h3>';
        }
        return $json;
    }
 }
?>