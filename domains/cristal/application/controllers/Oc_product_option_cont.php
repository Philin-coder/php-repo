<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_option_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_option_model');
        $data['oc_product_option']=$this->oc_product_option_model->get_oc_product_option();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_option',$data);
        $this->load->view('footer');
    }
}
?>