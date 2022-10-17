<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class spec_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
        $this->load->view('spec');
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');


    }
}
?>