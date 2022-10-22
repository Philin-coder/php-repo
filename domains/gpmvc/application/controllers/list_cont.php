<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class list_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_d');
        $this->load->model('list_model');
        if(!empty($_POST)){
            $this->list_model->sel_grid_data($_POST['prof']);
        }
        $data['list']=$this->list_model->sel_grid_data($_POST['prof']);
        $this->load->view('spisok_s',$data);
        $this->load->view('temp/footer_d');

    }
}

?>