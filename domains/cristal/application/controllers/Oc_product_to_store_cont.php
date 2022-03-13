<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_to_store_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_to_store_model');
        $data['oc_product_to_store']=$this->oc_product_to_store_model->get_oc_product_to_store();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_to_store',$data);
        $this->load->view('footer');
    }
    public function oc_product_to_store_cont_get_report()
    {
        $this->load->dbutil();
        $this->load->model('oc_product_to_store_model');
        $report=$this->oc_product_to_store_model->oc_product_to_store_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_to_store_xml.xml',$new_report);
        redirect('http://cristal:8080/index.php/oc_product_to_store_cont/index','refresh');
        //$this->index();

    }
}
?>