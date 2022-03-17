<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cont_test extends CI_Controller {
    public function index()
    {
        $this->load->helper('url'); 
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_nav_main');
        $this->load->view('footer');
    }
    
}
?>