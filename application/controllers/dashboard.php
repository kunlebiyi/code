<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard/inc/header-view');
        $this->load->view('dashboard/dashboard-view');
        $this->load->view('dashboard/inc/footer-view');
    }
    public function logout(){
        session_destroy();
        redirect('/');

        }
}
