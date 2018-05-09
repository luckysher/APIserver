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

    // get all configurations for e.g. game, desktop
    public function getConfigs($type){
        $configs = null;
        $configurations = $this->getAllConfigurations();
        $config_json = json_decode($configurations);
        if($config_json->{$type}){
            $configs = $config_json->{$type};
        }
        return $configs;
    }

    // set configurations using config manager
    public function setConfigs($type, $cn, $configs){
            $conf = $this -> getConfigs($type);
            if (key_exists($cn, $type)){
                $conf = json_decode(json_encode($conf),  true);

                // set all settings in loop
                foreach($configs as $k => $v){
                    $conf[$cn][$k] = $v;
                }
                 $configurations = $this->getAllConfigurations();
                $config_json = json_decode($configurations);
            }
            else{
                echo 'config not found';
            }
    }
}

?>