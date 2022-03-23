<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test_cont extends CI_Controller {

   public function index()
    {     
        $this->load->view('temp/head');
        $this->load->view('temp/nav');
        $this->load->view('view_about');
        
        $this->load->view('temp/footer');
    }
}


?>