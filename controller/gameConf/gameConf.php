<?php

// Game config Manager
// for managing the game related function
class GameConfig{
    public $confname;
    public $type;

    public function __construct(){
       $this -> confname = 'Game Configurations';
       $this -> type = 'game';
       $this -> cm = new ConfigManager(null);

    }

    // get game configurations
    public function getConfigurations(){
        $config = $this->cm->getConfigs($this -> type);
        return $config;
    }

    // set game configurations
    public function setConfigurations($cn, $config){
       $this->cm->setConfigs($this -> type, $cn, $config);
    }
}
?>