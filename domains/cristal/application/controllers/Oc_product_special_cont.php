<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_special_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_special_model');
        $data['oc_product_special']=$this->oc_product_special_model->get_oc_product_special();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_special', $data);
        $this->load->view('footer');
    }
    public function oc_product_special_cont_get_report()
    {
        $this->load->dbutil();
        $this->load->model('oc_product_special_model');
        $report=$this->oc_product_special_model->oc_product_special_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_special_xml.xml',$new_report);
        redirect('http://cristal:8080/index.php/oc_product_special_cont/index','refresh');
        //$this->index();
        

    }
}
?>