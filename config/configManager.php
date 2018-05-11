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

    // set all configurations
    public function setAllConfigurations($config_str){
        $success = file_get_contents($this->cfile, $config_str);
        return $success;
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
                $newConf = json_decode(json_encode($conf),  true);

                // set all settings in loop
                foreach($configs as $k => $v){
                    $newConf[$cn][$k] = $v;
                }
                $configurations = $this->getAllConfigurations();
                $config_json = json_decode($configurations, true);
                $config_json[$type][$cn] = $newConf[$cn];
                $set = $this->setAllConfigurations(json_encode($config_json));

            }
            else{
                echo 'config not found';
            }
    }
}

?>