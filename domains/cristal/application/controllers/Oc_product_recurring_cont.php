<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_recurring_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_recurring_model');
        $data['oc_product_recurring']=$this->oc_product_recurring_model->get_oc_product_recurring_model();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_recurring',$data);
        $this->load->view('footer');
    }
}
?>