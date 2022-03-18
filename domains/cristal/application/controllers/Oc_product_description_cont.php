<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_description_cont extends CI_Controller {
    public function index()
    {
        $this->load->helper('url'); 
        $this->load->model('oc_product_description_model');
        $data['oc_product_description']=$this->oc_product_description_model->get_oc_product_description();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_prod_description',$data);
        $this->load->view('footer');
    }
    public function oc_product_description_get_report()
    {
        $this->load->helper('url'); 
        $this->load->dbutil();
        $this->load->model('oc_product_description_model');
        $report=$this->oc_product_description_model->oc_product_description_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_description_xml.xml'.'<?xml version="1.0" encoding="UTF-8?">'.'&#xA;',$new_report);
        $this->index();
        // redirect('http://cristal:8080/index.php/oc_product_description_cont/index','refresh');
    }
}
?>