<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_theirsystem_properties_cont extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('oc_product_theirsystem_properties_model');
        $data['oc_product_theirsystem_properties'] = $this->oc_product_theirsystem_properties_model->get_oc_product_theirsystem_properties();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_prod_theirsystem_properties',$data);
        $this->load->view('footer');
        $this->load->view('scripter');
    }
    public function oc_product_theirsystem_properties_cont_get_report()
    {
        $this->load->helper('url');
        $this->load->dbutil();
        $this->load->model('oc_product_theirsystem_properties_model');
        $report=$this->oc_product_theirsystem_properties_model->oc_product_theirsystem_properties_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('./xml_files/oc_product_theirsystem_properties_xml.xml',$new_report);
         redirect(base_url().'oc_product_theirsystem_properties_cont/index','refresh');
        //$this->index();

    }
    public function view_xml()
    {   
        header("Content-Type: application/xml; UTF-8");
        $xml_file=read_file('./xml_files/oc_product_theirsystem_properties_xml.xml');
        echo $xml_file;
        //return  $xml_file;

       

    }
}
?>