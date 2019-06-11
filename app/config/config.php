<?php
    // DataBase Parameters
    define('DB_HOST', 'localhost');
    define('DB_USER', 'YOUR_USERNAME');
    define('DB_PASS', 'YOUR_PASSWORD');
    define('DB_NAME', 'YOUR_DBNAME');


    /* App Root is The actual rooth/path of directory => (C:\xampp\htdocs\GadMVC\app\config\config.php)
    * dirname => give us the parent folder
    * define => used to define constant and all const shoud be all caps
    */

    // App Root
    define('APPROOT', dirname( dirname( __FILE__ ) ));
    // URL Root
    define('URLROOT', 'YOUR_URL');
    // Site Name
    define('SITENAME', 'YOUR_SITENAME');