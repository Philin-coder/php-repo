<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rez_napr_cont extends CI_Controller {
    public function index () {
        $this->load->helper('url');
        $this->load->model('rk_rez_n_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
        if(!empty($_POST)){
            $this->rk_rez_n_model->upd_res($_POST['rezultat'],$_POST['prim'],$_POST['n_nn']);
        }
        if(!empty($_POST)){
            $this->rk_rez_n_model->ins_res($_POST['data_p'],$_POST['n_nn'],$_POST['prim']);
            //$this->rk_rez_n_model->upd_ins($_POST['data_p'],$_POST ['n_nn'],$_POST['rezultat'],$_POST['prim']);

        }
        $data['rez_n']=$this->rk_rez_n_model->sel_grid_data();
        $this->load->view('rez_n',$data);
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');

    }
}
?>