<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class about_us_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('onas');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>