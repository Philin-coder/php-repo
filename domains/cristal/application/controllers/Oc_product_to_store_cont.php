<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_to_store_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_to_store_model');
        $data['oc_product_to_store']=$this->oc_product_to_store_model->get_oc_product_to_store();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_to_store',$data);
        $this->load->view('footer');
    }
}
?>