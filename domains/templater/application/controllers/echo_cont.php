<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class echo_cont extends CI_Controller {
    public function echo_test(){
        if(!empty($_POST)){
        $im = $_POST['im'];
        return $im;
        }

    }
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $data['naim']=$this->echo_test();
        $this->load->view('ret_test',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>