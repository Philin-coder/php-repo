<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_a extends CI_Controller {
    public function index(){
        $this->load->library('migration');
        if ($this->migration->current()===FALSE) {
            show_error($this->migration->eror_string());
        }
        else {
            echo('author table created');
        }
    }
}
?>