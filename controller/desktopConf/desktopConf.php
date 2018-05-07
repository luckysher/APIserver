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

    public function setConfigurations(){
        $config = null;
        $this->cm->getConfigs($this -> type, $config);
    }
}
?>