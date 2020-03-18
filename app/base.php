<?php 
    //Load Libraries
    //CONFIG FILE
    require_once "config/config.cfg.php";

    // LIBRARIES autoload
    spl_autoload_register(function($className){
        require_once "libraries/" .$className . ".lib.php";
    });

    //Load helper functions
    require_once "utils/helpers.inc.php";
    require_once "utils/session.inc.php";