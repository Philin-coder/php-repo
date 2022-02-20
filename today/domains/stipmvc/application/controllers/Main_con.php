<?php
define('BASEPATH') OR exit('No direct script access allowed');
class Main_con extends CI_Controller {
    public function Index()
    {
        $this->load->view('test');
    }
}

?>