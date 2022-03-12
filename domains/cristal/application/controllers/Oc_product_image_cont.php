<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_image_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_image_model');
        $data['oc_product_image'] = $this->oc_product_image_model->get_oc_product_image();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_image',$data);
        $this->load->view('footer');
    }
    public function oc_product_image_cont_get_report()
    {
        $this->load->dbutil();
        $this->load->model('oc_product_image_model');
        $report=$this->oc_product_image_model->oc_product_image_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_image_xml.xml',$new_report);
        $this->index();

    }
    
}
?>