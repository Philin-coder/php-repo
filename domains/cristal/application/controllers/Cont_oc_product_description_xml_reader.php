<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cont_oc_product_description_xml_reader extends CI_Controller {
    
    public function view_xml()
    {   
        header("Content-Type: application/xml; UTF-8");
        $xml_file=read_file('./xml_files/oc_product_description_xml.xml');
        echo $xml_file;
        return  $xml_file;

       

    }
    public function xml_reader()
    {
        
        $xml_data=$this->view_xml();
        $this->load->view('view_oc_product_description_for_xml', $xml_data);

    }
    public function index()
    {
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_oc_prod_description_xml_read_starter');
        $this->load->view('footer');
    }

    
}
?>