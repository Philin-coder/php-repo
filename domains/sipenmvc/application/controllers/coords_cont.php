<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class coords_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        $this->load->model('st_grup_model');
        if(!empty($_POST)){
            $this->st_grup_model->change_spec($_POST['specsel'],$_POST['grupsel'],$_POST['upd_spec']);
            
        }
        $data['gruppa']=$this->st_grup_model->sel_grup();
        $this->load->view('kords',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>