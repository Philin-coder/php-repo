<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_option_value_cont extends CI_Controller {
    public function index()
    {
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_option_value');
        $this->load->view('footer');
    }
}
?>