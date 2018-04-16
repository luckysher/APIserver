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
        if(strtolower($ctype) === 'game'){

        }
        if(strtolower($ctype) === 'dektop'){

        }
    }

    // Method for setting configurations
    public function setConfigurations($qs){
        if(strtolower($ctype) === 'game'){

        }
        if(strtolower($ctype) === 'dektop'){

        }
    }

    // Method for handling not found requests.
    public function handleNotFound(){

    }

    // Request Mapping
    public function process_request($s){
        $json = [];
        $pi = $s['PATH_INFO'];

        switch($pi){
            case '/getconfig':
                $qs = $s['QUERY_STRING'];
                $this->getConfigurations($qs);
                break;
            case '/setconfig':
                $this->setConfigurations($qs);
                break;
            default:
                $this->handleNotFound();
        }
        return $json;
    }
 }
?>