<?php
class Login_model extends CI_Model
{
    public function chek_user($usver_login,$usver_pass)
    {
        $this->db->where('usver_login',$usver_login);
        $this->db->where('usver_pass',$usver_pass);
        $query=$this->db->get('usver');
        return $query->num_rows();
        
    }
    
}

