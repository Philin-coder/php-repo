<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_description_cont extends CI_Controller {
    public function index()
    {
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_product_description');
        $this->load->view('footer');
    }
}
?>