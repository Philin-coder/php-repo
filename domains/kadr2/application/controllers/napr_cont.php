<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class napr_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_u');
        $this->load->model('rk_napr_model');
        if(!empty($_POST)){
        $this->rk_napr_model->ins_napravlenie_model($_POST['n_n'],$_POST['id_v'],$_POST['id_s'],$_POST['data_n'],$_POST['data_p']);
        }
        $data['msg']='Направление введено';
        $data['napravlenie']= $this->rk_napr_model->sel_data_grid();
        $this->load->view('napr',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }

}
?>