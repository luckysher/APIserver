<?php
 include 'gameConf/gameConf.php';


// API controller
class Controller{
    public $contname;
    public $grh;

    // constructor for controller
    public function __construct(){
       // controller name
       $this -> contname = 'API Controller';
       // Game request handler
       $this -> grh = new GameConfig;
    }

    // Method for getting configurations
    public function getConfigurations($qs){
        $config = null;
        $qsd = explode("=", $qs);
        $ctype = $qsd[1];
        //get config based upon type
        if(strtolower($ctype) === 'game'){
            $config = $this -> grh -> getGameConfigurations();
        }
        if(strtolower($ctype) === 'desktop'){

        }
        return $config;
    }

    // Method for setting configurations
    public function setConfigurations($qs){
        //set config based upon type
        if(strtolower($ctype) === 'game'){

        }
        if(strtolower($ctype) === 'desktop'){

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