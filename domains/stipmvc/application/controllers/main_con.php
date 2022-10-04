<?php
class main_con extends CI_Controller{
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        $this->load->view('index');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
        
    }
}

?>