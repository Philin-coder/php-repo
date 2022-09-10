<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_discount_cont extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('oc_product_discount_model');
        $data['oc_product_discount']=$this->oc_product_discount_model->get_oc_product_discount();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_prod_discount', $data);
        $this->load->view('footer');
        $this->load->view('scripter');
    }
    public function oc_product_discount_cont_get_report()
    {
        $this->load->helper('url');
        $this->load->dbutil();
        $this->load->model('oc_product_discount_model');
        $report=$this->oc_product_discount_model->oc_product_discount_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('./xml_files/oc_product_discount_xml.xml',$new_report);
        $this->index();
        // redirect('http://cristal:8080/index.php/oc_product_discount_cont/index','refresh');

    }
    public function view_xml()
    {   
        header("Content-Type: application/xml; UTF-8");
        $xml_file=read_file('./xml_files/oc_product_discount_xml.xml');
        echo $xml_file;
        //return  $xml_file;

       

    }
}
?>