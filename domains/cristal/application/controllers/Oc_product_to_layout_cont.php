<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_to_layout_cont extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('oc_product_to_layout_model');
        $data['oc_product_to_layout'] = $this->oc_product_to_layout_model->get_oc_product_to_layout_model();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_prod_to_layout',$data);
        $this->load->view('footer');
    }
    public function oc_product_to_layout_cont_get_report()
    {
        $this->load->helper('url');
        $this->load->dbutil();
        $this->load->model('oc_product_to_layout_model');
        $report=$this->oc_product_to_layout_model->oc_product_to_layout_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_to_layout_xml.xml',$new_report);
        // redirect('http://cristal:8080/index.php/oc_product_to_layout_cont/index','refresh');
        $this->index();
        
    }
}
?>