<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class report_work_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_d');
        $this->load->model('rk_report_work_model');
        if(!empty($_POST)){
            $data['report']=$this->rk_report_work_model->sel_data_grid($_POST['d_r']);
        }
        $this->load->view('otchet_r',$data);
        $this->load->view('temp/footer_d');
        $this->load->view('temp/scripter');


    }
}
?>