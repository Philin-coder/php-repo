<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class prof_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_a');
        $this->load->model('rk_prof_model');
        if(!empty($_POST)){
            $this->rk_prof_model->ins_prof_model($_POST['naim_o'],$_POST['naim_p']);
        }
        $data['prof']= $this->rk_prof_model->sel_grid_data();
        $this->load->view('prof',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>