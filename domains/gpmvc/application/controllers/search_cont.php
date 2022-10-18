<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class search_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_search_resume_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
       
        $this->load->view('soisk_s');
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');
    }
}
?>