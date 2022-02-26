    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
        class oc_product_cont extends CI_Controller{
            public function index()
            {
                
                $this->load->view('head');
                $this->load->view('header');
                $this->load->view('view_crystal');// не нашел вида под продукт
                $this->load->view('footer');

            }

        }
    ?>