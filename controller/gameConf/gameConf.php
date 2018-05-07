<?php

// Game config Manager
class GameConfig{
    public $confname;
    public $type;

    public function __construct(){
       $this -> confname = 'Game Configurations';
       $this -> type = 'game';
       $this -> cm = new ConfigManager(null);

    }

    public function getConfigurations(){
        $config = $this->cm->getConfigs($this -> type);
        return $config;
    }

    public function setConfigurations(){
       $this->cm->setConfigs($this -> type, $config);
    }
}
?>