<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class reg_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->model('kr_user_model');
        if(!empty($_POST)){
            $this->kr_user_model->ins_user($_POST['fio'],$_POST['milo'],$_POST['login'],$_POST['pass'],$_POST['status']);
        }
        $data['user'] = $this->kr_user_model->sel_data_grid();
        $this->load->view('reg',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');




    }
}
?>