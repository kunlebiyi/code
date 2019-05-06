<?php

class Home extends CI_Controller {
    private $database;
    
    public function __construct() {
        parent::__construct();
        $dns = "dbdriver://admin:''@127.0.0.1/code";
        $this->database = $this->load->database($dns);
    }
       
    public function index() {
       
        $this->load->view('home/inc/header-view');
        $this->load->view('home/home-view', ["database" => $this->database]);
        $this->load->view('home/inc/footer-view');
        
    }
}

