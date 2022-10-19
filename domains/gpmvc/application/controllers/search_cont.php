<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class search_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
        $this->load->model('rk_searcher_model');
        if (!empty($_POST)){
            $this->rk_searcher_model->finder($_POST['search']);
            //redirect(base_url().'search_cont/index','refresh');
        }
        if(!empty($_POST)){
            $data['find']=$this->rk_searcher_model->sel_grid_data($_POST['search']);
            $this->rk_searcher_model->sel_grid_data($_POST['search']);
        }
        //$this->load->view('soisk_s',$data);
        $this->load->view('soisk_s',$data);
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');
    }
}
?>