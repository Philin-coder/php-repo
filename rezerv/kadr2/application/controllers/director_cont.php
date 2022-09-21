<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class director_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/nav_d');
        $this->load->view('dir');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');


    }

}
?>