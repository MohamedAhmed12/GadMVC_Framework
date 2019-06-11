<?php
    /*
    * App Core Class
    * Create URL & Loads Core Controller
    * URL FORMAT - /controller/method/param
    */

    class Core{
        protected $currentController = 'Pages';// default value pages
        protected $currentMethod    = 'index';// default value index
        protected $params           = [];     // default empty array 
        
        public function __construct(){
           // print_r($this->getUrl());
            
            $url = $this->getUrl();
            
           var_dump($_GET['url']);
        }
        
        public function getUrl(){ // fetch the URL
           if(isset($_GET['url'])){// $_GET['variable'] will get any variabe that passed through the url
                $url = rtrim($_GET['url'], '/'); // rtrim('the content', 'what we wanna trim of the content')
                $url = filter_var($url, FILTER_SANITIZE_URL);// filter_var($variable, type of filter ) used to filter values
                $url = explode('/', $url); // explode('character we wanna explode at', 'the var to explode') to explode string to array
                return $url;
           }
        }
    }