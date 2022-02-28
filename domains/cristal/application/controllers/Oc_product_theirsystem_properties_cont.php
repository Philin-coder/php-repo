<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_theirsystem_properties_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_theirsystem_properties_model');
        $data['oc_product_theirsystem_properties'] = $this->oc_product_theirsystem_properties_model->get_oc_product_theirsystem_properties();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_theirsystem_properties',$data);
        $this->load->view('footer');
    }
}
?>