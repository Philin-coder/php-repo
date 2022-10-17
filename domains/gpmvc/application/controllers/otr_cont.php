<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class otr_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_otr_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header_a');
        if(!empty($_POST)){
            $this->rk_otr_model->ins_otr($_POST['naim_o']);
        }
        $data['otr']=$this->rk_otr_model->sel_grid_data();
        $this->load->view('otr',$data);
        $this->load->view('temp/footer_a');
        $this->load->view('temp/scripter');


    }
}
?>