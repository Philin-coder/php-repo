<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class otr_cont extends CI_Controller{
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_a');
        $this->load->view('otrasl');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');


    }

}
?>