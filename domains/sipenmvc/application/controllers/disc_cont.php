<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class disc_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        $this->load->model('st_disc_model');
        if(!empty($_POST)){
            $this->st_disc_model->ins_disc($_POST['naim_d'],$_POST['ocenka'],$_POST['stud']);
        }
        
        $data['disc']=$this->st_disc_model->sel_disc();
        $this->load->view('disc',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>