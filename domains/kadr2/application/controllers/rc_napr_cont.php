<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
class rc_napr_cont extends CI_Controller {
    public function index(){
        $this->load->database(); 
        $this->load->helper('url','html');
        $this->load->model('rk_napr_model');
        $data['rk_napr_model']=$this->rk_napr_model->sel_napravlenie_model();
        
   

    }
}
?>