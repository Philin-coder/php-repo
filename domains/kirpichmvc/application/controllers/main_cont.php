<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class main_cont extends CI_Controller{
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->model('rk_tovar_model');
        $data['tovar']=$this->rk_tovar_model->sel_grid_data();
        $this->load->view('index',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>