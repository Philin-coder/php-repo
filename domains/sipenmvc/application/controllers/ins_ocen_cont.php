<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class ins_ocen_cont extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $this->load->view('temp/header');
        $this->load->model('st_ins_ocen_model');
        if(!empty($_POST)){
            $this->st_ins_ocen_model->set_mark($_POST['sel_d'],$_POST['ocen_d'],$_POST['st']);
        }
        $data['disc']=$this->st_ins_ocen_model->sel_data_grid();
        //select stud.fio, stud.id_grup,d.naim_d,d.ocenka,g.name_grup 
        //from stud 
        // join gruppa g on stud.id_grup = g.id_grupp 
        // join disc d on stud.id_stud = d.id_stud
        $this->load->view('vvodoc',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
        
    
    }
}
?>