<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class kl_cont extends CI_Controller {
    public function index () {
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/nav_d');
        $this->load->model('rk_soiskatel_model');
        if (!empty($_POST)){
            $s=$_POST['searcher'];	
            $s = trim($s);
            $s = strip_tags($s);

        }
        $data['s']=$this->rk_soiskatel_model->sel_report_grid($s);
        $this->load->view('klient',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>