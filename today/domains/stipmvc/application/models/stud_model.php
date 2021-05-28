<?php
if(!defined('BASEPATH'))exit('No Page'))
class stud_Model extends CI_Model{
    public function get_stud()
    {
        
    $sql=$this->db->select('*');
    $this->db->from('stud');
    $this->db->join('usver','stud.usver_id=usver.usver_id');
    $this->db->get();
    return $sql->result_array();
    
    }


}
