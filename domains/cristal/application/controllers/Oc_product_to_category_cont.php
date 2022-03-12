<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_to_category_cont extends CI_Controller {
    public function index()
    {
        
        $this->load->model('oc_product_to_category_model');
        $data['oc_product_to_category']=$this->oc_product_to_category_model->get_oc_product_to_category();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_to_category',$data);
        $this->load->view('footer');
    }
    public function oc_product_to_category_cont_get_report()
    {
        $this->load->dbutil();
        $this->load->model('oc_product_to_category_model');
        $report=$this->oc_product_to_category_model->oc_product_to_category_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_to_category_xml.xml');
        $this->index();

    }
}
?>