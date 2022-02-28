<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_option_value_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_option_value_model');
        $data['oc_product_option_value']= $this->oc_product_option_value_model->get_oc_product_option_value_model();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_option_value',$data);
        $this->load->view('footer');
    }
}
?>