<?php
defined('BASEPATH') or exit('no page');
class del_usvercont extends CI_Controller{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library(['session','form_validation']);
    $this->load->database();
    }
    public function index()
    {
    $this->load->view('usver_header');
    $this->load->view('mnavbar_deluser');
    $this->load->view('del_usver_input');
    $this->load->view('usver_footer');
    }
}