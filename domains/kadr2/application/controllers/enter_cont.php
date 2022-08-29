<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class enter_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav');
        $this->load->view('login');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>