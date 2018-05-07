<?php
 // import config Manager
 include 'config/configManager.php';

 include 'gameConf/gameConf.php';
 include 'desktopConf/desktopConf.php';


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
       // Desktop request handler
       $this -> drh = new DesktopConfig;
    }

    // Method for getting configurations
    public function getConfigurations($qs){
        $config = null;
        $qsd = explode("=", $qs);
        $ctype = $qsd[1];
        //get config based upon type
        if(strtolower($ctype) === 'game'){
            $config = $this -> grh -> getConfigurations();
        }
        if(strtolower($ctype) === 'desktop'){
          $config = $this -> drh -> getConfigurations();
        }
        return $config;
    }

    // Method for setting configurations
    public function setConfigurations($qs){
        $qsd = explode("=", $qs);
        $ctype = $qs;
        //set config based upon type
        if(strtolower($ctype) === 'game'){
           $this -> grh -> setConfigurations();
        }
        if(strtolower($ctype) === 'desktop'){
            $this -> drh -> setConfigurations();
        }
    }

    // Method for handling not found requests.
    public function handleNotFound(){

    }

    // Request Mapping
    public function process_request($s){
        $json = [];
        $pi = $s['PATH_INFO'];
        $qs = $s['QUERY_STRING'];

        switch($pi){
            case '/getconfig':
                $json = $this->getConfigurations($qs);
                break;
            case '/setconfig':
                $this->setConfigurations($qs);
                break;
            default:
                $json = $this->handleNotFound();
        }
        return $json;
    }
 }
?>