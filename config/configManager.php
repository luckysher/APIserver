<?php
// config manager class for fetching and
// setting configurations in .json file

class ConfigManager{

    public function __construct($confile){
        // select appropriate config file user provided/default
        $this->cfile = 'config/configurations.json';

        if ($confile):
            $this->cfile = $confile;
        endif;
    }

    // load and get all configurations
    public function getAllConfigurations(){
        $configurations = file_get_contents($this->cfile);
        return $configurations;
    }

    // get all game configurations
    public function getGameConfigs(){
        $gameConfigs = null;
        $configurations = $this->getAllConfigurations();
    }

}

?>