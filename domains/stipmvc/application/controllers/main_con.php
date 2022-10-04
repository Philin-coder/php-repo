<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class main_con extends CI_Controller{
    public function index(){
        $this->load->helper('url');
        $this->load->model('st_grup_model');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        if(!empty($_POST)){
            $this->st_grup_model->ins_grup($_POST['name_grup'],$_POST['spec']);
        }
        $data['gruppa']=$this->st_grup_model->sel_grup();
        $this->load->view('index',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
        
    }
}

?>