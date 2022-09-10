<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_attribute_cont extends CI_Controller {
    public function index()
    {
        $this->load->helper('url'); 
        $this->load->model('oc_product_attribute_model');
        $data['oc_product_attribute']=$this->oc_product_attribute_model->get_oc_product_attribute_model();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_prod_attribute',$data);
        $this->load->view('footer');
        $this->load->view('scripter');
    }
    public function oc_product_attribute_cont_get_report()
    {
        
        $this->load->dbutil();
        $this->load->helper('url'); 
        $this->load->model('oc_product_attribute_model');
        $report=$this->oc_product_attribute_model->oc_product_attribute_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('./xml_files/oc_product_attribute.xml',$new_report);
        redirect(base_url().'oc_product_attribute_cont/index','refresh');
        
        

    }
    public function view_xml()
    {   
        header("Content-Type: application/xml; UTF-8");
        $xml_file=read_file('./xml_files/oc_product_attribute.xml');
        echo $xml_file;
        //return  $xml_file;

       

    }
    
}
?>