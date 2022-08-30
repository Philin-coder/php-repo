<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class enter_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav');
        $tole=$this->session->userdata('role');
        if(empty($tole)){
        $this->load->view('login');
        }else{
            switch($role){
                case 'Администратор';
                $role='Администратор';
                redirect(base_url().'admin_cont/index', 'refresh');
                break;
                case 'Специалист';
                $role='Специалист';
                redirect(base_url().'spec_cont/index', 'refresh');
                break;
                case 'Директор';
                $role='Директор';
                redirect(base_url().'director_cont/index', 'refresh');

                
            }
        }
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>