<?php
// import game config Manager
include 'config/configManager.php';

// Game config Manager
class GameConfig{
    public $confname;

    public function __construct(){
       $this -> confname = 'Game Configurations';
       $this -> cm = new ConfigManager(null);
    }

    public function getConfigurations($type){
        $config = $this->cm->getConfigs($type);
        return $config;
    }
}
?>