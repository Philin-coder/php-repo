<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rpv_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        $this->load->model('st_rpv_model');
        $data['rpv']=$this->st_rpv_model->sel_data_grid($oc_mat=4, $oc_inf=3, $oc_angl=2);
        $this->load->view('ved',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>