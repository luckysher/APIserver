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

    public function getAllConfigurations(){
        $configurations = file_get_contents($this->cfile);
        return $configurations;
    }

}

?>