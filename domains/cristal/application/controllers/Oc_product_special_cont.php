<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_special_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_special_model');
        $data['oc_product_special']=$this->oc_product_special_model->get_oc_product_special();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_special', $data);
        $this->load->view('footer');
    }
}
?>