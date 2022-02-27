<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_description_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_description_model');
        $data['oc_product_description']=$this->oc_product_description_model->get_oc_product_description();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_description',$data);
        $this->load->view('footer');
    }
}
?>