<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class woekrs_list_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_d');
        $this->load->model('rk_woekrs_list_model');
        if (!empty($_POST)){
            $data['report']=$this->rk_woekrs_list_model->sel_data_grid($_POST['d1'],$_POST['d2']);
        }
        $this->load->view('otchet_s',$data);
        $this->load->view('temp/footer_d');
        $this->load->view('temp/scripter');
    }
}
?>