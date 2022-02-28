<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_related_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_related_model');
        $data['oc_product_related']=$this->oc_product_related_model->get_oc_product_related();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_related',$data);
        $this->load->view('footer');
    }
}
?>