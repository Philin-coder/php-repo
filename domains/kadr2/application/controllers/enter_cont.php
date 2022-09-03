<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class enter_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_users_model');
        //$temp = array('name'=>'John Doe','login'=>1);

        $this->session->set_userdata('details',$temp);
        print_r($this->session->userdata('details'));
        $details = $this->session->userdata('details');
        echo $details['name'];
        
        
        
        // $this->load->view('temp/head');
        // $this->load->view('temp/nav');
        // $this->load->view('login');
        // $this->load->view('temp/footer');
        // $this->load->view('temp/scripter');

    }
}


?>