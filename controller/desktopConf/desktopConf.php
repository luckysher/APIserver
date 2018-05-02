<?php
// import config Manager
include 'config/configManager.php';

class DesktopConfig{
    public $confname;
    public $type;

    public function __construct(){
       $this -> confname = 'Desktop Configurations';
       $this -> type = 'desktop';
       $this -> cm = new ConfigManager(null);
    }

    // method for getting configurations
    public function getDesktopConfigurations($type){
        $config = $this->cm->getConfigs($type);
        return $config;
    }
}
?>