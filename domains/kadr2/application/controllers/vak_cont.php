<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class vak_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_u');
        $this->load->model('rk_vakansiya_model');
        if(!empty($_POST)){
            $this->rk_vakansiya_model->ins_rk_vakansiya_model($_POST['naim_r'],$_POST['dolgn'],$_POST['k_mest'],$_POST['oklad'],$_POST['tip_zan'],$_POST['data_razm'],$_POST['naim_p']);
        }
        $data['vakansiya']= $this->rk_vakansiya_model->sel_grid_data();
        $this->load->view('vak',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }

}
?>