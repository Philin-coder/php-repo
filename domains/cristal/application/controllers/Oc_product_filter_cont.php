<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_filter_cont extends CI_Controller {
    public function index()
    {

        $this->load->model('oc_product_filter_model');
        $data['oc_product_filter']=$this->oc_product_filter_model->get_oc_product_filter();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_filter',$data);
        $this->load->view('footer');
    }
}
?>