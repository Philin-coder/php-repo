<?php 
if ( ! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class fith_cont extends CI_Controller {
    public function get_time (){
        return date("H:i:s");
    }
    public function index() {
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $data['dt']=$this->get_time();
        $this->load->view('dater',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');


    }
}
?>