    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
        class Oc_product_cont extends CI_Controller{
            public function index()
            {
            $this->load->helper('url'); 
            $this->load->model('oc_product_model');
            $data['oc_product']=$this->oc_product_model->get_oc_product();
            $this->load->view('head');
            $this->load->view('header');
            $this->load->view('view_nav_main');
            $this->load->view('view_crystal',$data);
            $this->load->view('footer');

            }
            public function oc_product_cont_get_report()
            {
                $this->load->helper('url'); 
                $this->load->dbutil();
                $this->load->model('oc_product_model');
                $report=$this->oc_product_model->oc_product_model_get_xml();
                $new_report=$this->dbutil->xml_from_result($report);
                write_file('oc_product.xml',$new_report);
                //`$this->index();
                redirect('http://cristal:8080/','refresh');
            }

        }
    ?>