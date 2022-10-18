<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class vakan_add_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('rk_add_vakan_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header_s');
        if(!empty($_POST)){
            $this->rk_add_vakan_model->ins_vakasia($_POST['naim_r'],$_POST['dolgn'],$_POST['k_mest'],$_POST['oklad'],$_POST['tip_zan'],$_POST['data_razm'],$id_p=$_POST['naim_p']);
        }
        $data['vak']=$this->rk_add_vakan_model->sel_grid_data();
        $this->load->view('vak_s',$data);
        $this->load->view('temp/footer_s');
        $this->load->view('temp/scripter');


    }
}
?>
