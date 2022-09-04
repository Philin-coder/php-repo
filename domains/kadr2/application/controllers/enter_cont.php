<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class enter_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav');
        $stat=$this->session->userdata('status');
        if(empty($stat)){
            $this->load->view('login');}
        else{
            switch($stat){
                case 'Администратор';
                    $stat='Администратор';
                    redirect(base_url().'admin_cont/index','refresh');
                    break;
                case 'Специалист';
                    $stat='Специалист';
                    redirect(base_url().'spec_cont/index','refresh');
                    break;
                case 'Директор';
                    $stat='Директор';
                    redirect(base_url().'director_cont/index','refresh');
                    break;


            }
        }
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');      

    }
    public function avtor(){
        if(!empty($POST)){
            $this->load->model('rk_users_model');
            $data=$this->rk_users_model->sel_rk_users_model();
            
        }
    }
}


?>