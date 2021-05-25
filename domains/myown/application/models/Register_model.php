<?php
class Register_model extends CI_Model 
{
    public function add_usver($data)
    {
    return $this->db->insert('usver',$data);
    }
}
