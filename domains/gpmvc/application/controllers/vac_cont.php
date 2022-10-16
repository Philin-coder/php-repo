<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class vac_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_iface_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $data['res'] =$this->rk_iface_model->sel_iface();
        $data['sel_vak']=$this->rk_iface_model->sel_grid_data();
        $this->load->view('vak',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>