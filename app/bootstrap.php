<?php
    // Load Config
    require_once 'config/config.php';

   

    // Auto Load Core LIberaries
    spl_autoload_register(function($className){// whenever I use anyclass or create obj to a class it will get the name of the class
        require_once 'liberaries/' . $className . '.php';
    });