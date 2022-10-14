<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class text_area_reader_cont extends CI_Controller{
    public function file_write(){
        //дописать
    }
    public function index(){
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('abot_film');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>