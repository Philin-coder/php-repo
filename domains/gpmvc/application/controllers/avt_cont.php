<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class avt_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->model('rk_users_model');
        $stat=$this->session->userdata('status');
        if(empty($stat)){
        $this->load->view('avt');
        }else{
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
public function autor(){
    if(!empty($_POST['password'])and !empty($_POST['password'])){
        $this->load->model('rk_users_model');
        $data['status']=$this->rk_users_model->sel_stat($_POST['login'],$_POST['password']);
        if(!empty($data['status'])){
        $new_data=array(
            'id_user'=>$data['status']->id_user,
            'login'=>$data['status']->login,
            'password'=>$data['status']->password,
            'fio_user'=>$data['status']->fio_user,
            'status'=>$data['status']->status

        );
        $this->session->set_userdata($new_data);
        switch ($data['status']->status){
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
          
        }
    }
    public function logout(){
        $this->session->unset_userdata('status');
        redirect(base_url().'avt_cont/index');


    }
}
?>