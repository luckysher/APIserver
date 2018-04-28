<?php
// import config Manager
include 'config/configManager.php';

class DesktopConfig{
    public $confname;

    public function __construct(){
       $this -> confname = 'Desktop Configurations';
       $this -> cm = new ConfigManager(null);
    }

    // method for getting configurations
    public function getDesktopConfigurations($type){
        $config = $this->cm->getConfigurations($type);
        return $config;
    }
}
?>