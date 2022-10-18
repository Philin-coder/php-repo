<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class  work_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_work_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
        if(!empty($_POST)){
            $this->rk_work_model->ins_rab($_POST['d_r'],$_POST['naim_r'],$_POST['tel_r'],$_POST['kl_d'],$_POST['kl_fio'],$_POST['adres_r']);
        }
        $data['rab']=$this->rk_work_model->sel_grid_data();
        $this->load->view('rab',$data);
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');

    }
}
?>