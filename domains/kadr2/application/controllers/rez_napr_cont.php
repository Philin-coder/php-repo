<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rez_napr_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_u');
        $this->load->model('rk_napr_model');
        if(!empty($_POST)){
            $this->rk_napr_model->upd_res($_POST['rezultat'],$_POST['prim'],$_POST['n_nn']);
        }
        $data['napravlenie']=$this->rk_napr_model->sel_napr_grid();
        $this->load->view('rez_napr',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>