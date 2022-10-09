<?php 
class reg_cont extends CI_Controller {
    public function index() {
        $this->load->view('temp/head');
        $this->load->view('temp/nav_a');
        $this->load->model('rk_users_model');
        if(!empty($_POST)){
            $this->rk_users_model->ins_rk_users_model($_POST['login'],$_POST['password'],$_POST['fio'],$_POST['status']);
        }
        $data['users'] = $this->rk_users_model->sel_grid_data();
        $this->load->view('registr',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>