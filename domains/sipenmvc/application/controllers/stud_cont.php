<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class stud_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        $this->load->model('st_stud_model');
        if (!empty($_POST)){
            $this->st_stud_model->ins_stud($_POST['grup'],$_POST['fio'],$_POST['ball'],$_POST['data_p'],$_POST['date_o'],$_POST['nachislenno'],$_POST['udergano']);
        }
        $data['stud']=$this->st_stud_model->sel_data_grid();
        $this->load->view('stud',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>