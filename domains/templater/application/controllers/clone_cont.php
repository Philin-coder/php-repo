<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class clone_cont extends CI_Controller {
    public function get_web(){
        // дописать 
    }
    public function index () {
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('cloner');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>