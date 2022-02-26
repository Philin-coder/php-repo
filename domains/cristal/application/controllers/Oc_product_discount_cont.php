<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_description_cont extends CI_Controller {
    public function index()
    {
        $this->load->view('head');
        $this->load->view('headwer');
        $this->load->view('view_prod_discount');
        $this->load->view('footer');
    }
}
?>