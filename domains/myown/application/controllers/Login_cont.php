<?php
defined('BASEPATH') or exit('No page');
class Login_cont extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('Login_model','login');

    }
    public  function index(){
        // $logged_in=$this->sesion->userdata('logged_in');
        // if($logged_in){
        //redirect('welcome');
        // }
         $this->load->view('header.php');
         $this->load->view('log.php');
         $this->load->view('footer.php');
         
         
         
    }
    public function doLogin(){
        $usver_login=$this->input->post('usver_login');
        $usver_pass=$this->input->post('usver_pass');
        $chek_login=$this->login->chek_user($usver_login,$usver_pass);
        if($chek_login)
        {
            
            $this->session->set_userdata('logged_in',true);

            
        }
        else
        {
            $this->session->set_userdata('logged_in',false);
            $this->session->set_flashdata('msg', 'username/pass is wrong');
            redirect(base_url().'log');
        }



    }

public function logout()
{
    
    $this->session->unset_userdata('logged_in');
    redirect(base_url().'log');
    
}


}
