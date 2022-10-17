<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class reg_emp_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_users_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header_a');
        if(!empty($_POST)){
            $this->rk_users_model->ins_rk_users_model($_POST['login'],$_POST['password'],$_POST['fio'],$_POST['status']);
        }
        $data['user']=$this->rk_users_model->sel_grid_data();
        $this->load->view('reg_s',$data);
        $this->load->view('temp/footer_a');
        $this->load->view('temp/scripter');

    }
    }
?>