<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_to_store_cont extends CI_Controller {
    public function index()
    {
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_to_store');
        $this->load->view('footer');
    }
}
?>