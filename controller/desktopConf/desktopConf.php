<?php

class DesktopConfig{
    public $confname;
    public $type;

    public function __construct(){
       $this -> confname = 'Desktop Configurations';
       $this -> type = 'desktop';
       $this -> cm = new ConfigManager(null);
    }

    // method for getting configurations
    public function getConfigurations(){
        $config = $this->cm->getConfigs($this -> type);
        return $config;
    }

    // method for setting desktop configs
    public function setConfigurations($cn, $config){
        $this->cm->setConfigs($this -> type, $cn, $config);
    }
}
?>