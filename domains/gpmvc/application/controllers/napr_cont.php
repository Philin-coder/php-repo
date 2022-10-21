<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class napr_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
        $this->load->model('rk_napr_model');
        if(!empty($_POST)){
            $this->rk_napr_model->ins_napr($_POST['n_n'],$_POST['id_v'],$_POST['id_s'],$_POST['data_n']);
        }
        $data['napr']=$this->rk_napr_model->sel_grid_data();
        $this->load->view('napr',$data);
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');
    }
}
?>