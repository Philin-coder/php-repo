<?
defined('BASEPATH') OR exit('No direct script access allowed');
class test_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_napr_model');
        $data['napravlenie']=$this->rk_napr_model->sel_napravlenie_model();
        $this->load->view('temp/head');
        $this->load->view('temp/nav');
        $this->load->view('temp/header');
        $this->load->view('index',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');






    }

}
?>