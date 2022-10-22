<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class list_model extends CI_Model{
    public function sel_grid_data($prof){
        //$sql="SELECT fio_s, tel_s, spec, stag, obraz, pol, sp 
        //FROM soiskatel WHERE  spec LIKE '%".$prof."%'"; 
        $this->db->select('fio_s, tel_s, spec, stag, obraz, pol, sp');
        $this->db->from('soiskatel');
        $this->db->like('spec',$prof);
        $sql=$this->db->get();
        return $sql->result_array();
    }
}
?>