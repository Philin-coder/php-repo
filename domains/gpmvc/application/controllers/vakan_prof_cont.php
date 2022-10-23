<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class vakan_prof_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_d');
        $this->load->model('rk_vak_pr_model');
        if(!empty($_POST)){
        $data['reports']=$this->rk_vak_pr_model->reports($_POST['proff'],$_POST['d_v']);
        }
        $this->load->view('vak_po_pr',$data);
        $this->load->view('temp/footer_d');
        $this->load->view('temp/scripter');

    }
}
?>