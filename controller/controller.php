<?php
 include 'gameConf/gameConf.php';


// API controller
class Controller{
    public $contname;
    public $grh;

    // constructor for controller
    public function __contruct(){
       $this -> contname = 'API Controller';
       $this -> grh = new GameConfig;
    }

    // Method for getting configurations
    public function getConfigurations($qs){
        $qsd = explode("=", $qs);
        $ctype = $qsd[1];
         echo 'Request for configuration type: '.$ctype.'';
    }

    // Method for setting configurations
    public function setConfigurations($qs){

    }


    // Request Mapping
    public function process_request($s){
        $json = [];
        $pi = $s['PATH_INFO'];

        switch($pi){
            case '/getconfig':
                echo '<h3 style="color:red;">Getting config:</h3>';
                $qs = $s['QUERY_STRING'];
                getConfigurations($qs);
                break;
            case '/setconfig':
                echo '<h3 style="color:red;">setting config:</h3>';
                setConfigurations($qs);
                break;
            default:
                echo '<h3 style="color:red;">Available urls are:</h3>';
        }
        return $json;
    }
 }
?>