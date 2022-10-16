<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class add_resume_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_add_resume_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        if (!empty($_POST)){
            $this->rk_add_resume_model->ins_resume($_POST['data_reg'],$_POST['fio_s'],$_POST['data_rog'],$_POST['pol'],$_POST['gragd'],$_POST['adres_s'],$_POST['tel_s'],$_POST['obraz'],$_POST['stag'],$_POST['spec'],$_POST['sp']);
        }
        $this->load->view('soisk');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>