<?php
// config manager class for fetching and
// setting configurations in .json file

class ConfigManager{

    public function __construct($confile){
        // select appropriate config file user provided/default
        $cfile = 'configurations.json';

        if $confile:
            $cfile = $confile;
        endif;
    }

    public get allConfigurations(){

    }

}

?>