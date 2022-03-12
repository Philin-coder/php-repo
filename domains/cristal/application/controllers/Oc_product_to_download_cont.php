<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class oc_product_to_download_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_to_download_model');
        $data['oc_product_to_download'] = $this->oc_product_to_download_model->get_oc_product_to_download();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_to_download',$data);
        $this->load->view('footer');
    }
    public function oc_product_to_download_cont_get_report()
    {
        $this->load->dbutil();
        $this->load->model('oc_product_to_download_model');
        $report=$this->oc_product_to_download_model->oc_product_to_download_model_get_xml();
        $new_report=$this->dbutil->xml_from_result($report);
        write_file('oc_product_to_downloadel_xml.xml',$new_report);
        $this->index();
    }
}
?>