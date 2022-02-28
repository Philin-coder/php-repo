<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_to_layout_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_to_layout_model');
        $data['oc_product_to_layout'] = $this->oc_product_to_layout_model->get_oc_product_to_layout_model();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_to_layout',$data);
        $this->load->view('footer');
    }
}
?>