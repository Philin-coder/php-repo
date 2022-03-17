<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_recurring_cont extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('oc_product_recurring_model');
        $data['oc_product_recurring']=$this->oc_product_recurring_model->get_oc_product_recurring_model();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('view_prod_recurring',$data);
        $this->load->view('footer');
    }
    public function oc_product_recurring_cont_get_report()
    {
        $this->load->helper('url');
        $this->load->dbutil();
        $this->load->model('oc_product_recurring_model');
        $report=$this->oc_product_recurring_model->oc_product_recurring_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_recurring_xml.xml',$new_report);
        // redirect('http://cristal:8080/index.php/oc_product_recurring_cont/index','refresh');
        $this->index();

    }
}
?>