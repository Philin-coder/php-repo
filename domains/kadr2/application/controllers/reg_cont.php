<?php 
class reg_cont extends CI_Controller {
    public function index() {
        $this->load->view('temp/head');
        $this->load->view('temp/nav_a');
        $this->load->view('registr');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>