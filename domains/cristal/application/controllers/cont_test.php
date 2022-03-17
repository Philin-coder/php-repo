<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cont_test extends CI_Controller {
    public function index()
    {
        $this->load->helper('url'); 
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('footer');
    }
    public function view_xml(){
        xml_header("Content-type:text/xml");
        $xml_file=file_get_contents('oc_product_description_xml.xml');
        echo xml_file;

    }

    
}
?>