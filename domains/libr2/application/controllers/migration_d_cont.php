<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class migration_d_cont extends CI_Controller {
    public function index(){
        $this->load->library('migration');
        if ($this->migration->current() === FALSE)
        {
                show_error($this->migration->error_string());
        }
        else echo('dock_table_created');
    }
    
}
?>