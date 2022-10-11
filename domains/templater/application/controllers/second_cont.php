<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class second_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('foreicher');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');


    }
}
 ?>