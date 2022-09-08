<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class enter_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav');
        $stat=$this->session->userdata('status');
        if(empty($stat)){
        $this->load->view('login');
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
    if(!empty($_POST['pswd'])and !empty($_POST['lgn'])){
        $this->load->model('rk_users_model');
        $data['status']=$this->rk_users_model->sel_stat($_POST['lgn'],$_POST['pswd']);
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
        redirect(base_url().'enter_cont/index');


    }
}




?>