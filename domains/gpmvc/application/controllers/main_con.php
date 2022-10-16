<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class main_con extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('index');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>