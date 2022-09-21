<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Kart_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_u');
        $this->load->model('rk_soiskatel_model');
        if(!empty($_POST)){
            $this->rk_soiskatel_model->ins_soiskatel($_POST['data_reg'],$_POST['fio_s'],$_POST['data_rog'],$_POST['pol'],$_POST['gragd'],$_POST['adres_s'],$_POST['tel_s'],$_POST['obraz'],$_POST['stag'],$_POST['spec'],$_POST['sp']);
        }

        $data['soiskatel'] = $this->rk_soiskatel_model->sel_data_reg();
        $this->load->view('kart',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }

}
?>