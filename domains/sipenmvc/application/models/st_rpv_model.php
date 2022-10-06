<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_rpv_model extends CI_Model{
    public function sel_data_grid($oc_mat, $oc_inf, $oc_angl){
        //select fio,name_grup,oc_mat,oc_inf,oc_angl,(oc_mat+oc_inf+oc_angl)/3 as sr_bal 
        //from student,gruppa,ocenka 
        //where student.id_grup=gruppa.id_grup 
        //and ocenka.id_stud=student.id_stud
        $this->db->select('fio,name_grup.'$this->db->escape($oc_mat)'.',','.$this->db->escape($oc_inf)'.'$this->db->escape($oc_angl),',($oc_mat+$oc_inf+$oc_angl)/3 as sr_bal');
        $this->db->from('stud');
        $this->db->join('gruppa','stud.id_grup=gruppa.id_grup');
        $this->db->join('disc','disc.id_stud=stud.id_stud');
        $sql=$this->db->get();
        return $sql->result_array();
    }
}
?>