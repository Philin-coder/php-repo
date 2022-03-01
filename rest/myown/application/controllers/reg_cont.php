<?php
class  reg_cont extends CI_Controller
{

    public function __construct()
    {
        $this->load->helper('url');
        $this->load->library(['session','form_validation']);
        $this->load->database();
        $this->load->model('Register_model','reg_cont');
    }
    public function index(){
        if($this->session->)
    }

}