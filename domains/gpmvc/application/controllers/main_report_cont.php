<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class main_report_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_d');
        $this->load->model('rk_main_report_model');
        if(!empty($_POST)){
            $data['report']=$this->rk_main_report_model->sel_grid_data($_POST['d1'],$_POST['d2']);
        }
        $this->load->view('sv',$data);
        $this->load->view('temp/footer_d');
        $this->load->view('temp/scripter');
    }

}

?>