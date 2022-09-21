<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class otr_cont extends CI_Controller{
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_a');
        $this->load->model('rk_otrasl_model');
        if(!empty($_POST)){
            $this->rk_otrasl_model->ins_otrasl_model($_POST['naim_o']);
        }
        $data['msg']='отрасль введена';
        $data['otrasl']=$this->rk_otrasl_model->sel_otrasl_model();
        $this->load->view('otrasl',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');


    }

}
?>