<?php
    class Pages extends Controller{
        public function __construct(){
        }
        
        public function index(){
            $data =[
                'title' => 'GadMVC'
            ]; 
            
            $this->view('pages/index', $data);
        }
        
        public function about(){
            $data= [
                'title' => 'About Page'
            ];
            
             $this->view('pages/about', $data);
        }
    }