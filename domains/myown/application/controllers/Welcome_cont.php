<?php
defined('BASEPATH') or exit('Np page');
class Welcome_cont  extends CI_Controller{
public function index(){
    $this->load->view('header');
    $this->load->view('mwelcome_message');
    $this->load->view('footer');
}
}