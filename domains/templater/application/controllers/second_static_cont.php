<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class second_static_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('s_stat_index');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>