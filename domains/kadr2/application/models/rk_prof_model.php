<?php
if (!defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_prof_model extends CI_Model{
    public function sel_rk_prof_model(){
        $this->db->select('id_p','naim_p','id_o');
        $this->db->from('prof');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_prof_model($naim_p,$id_p){
        if(!empty($_POST)){
            $data=array(
                'naim_p'=>$naim_p,
                'id_p'=>$id_p
            );
            $this->db->insert('prof',$data);
        }

    }
    public function upd_prof_model($naim_p,$id_p){
        $sql='update prof set naim_p=?,id_p=?';
        $this->db->query($sql,array($naim_p,$id_p));
    }

public function del_prof_model(){
    $this->db->empty_table('prof');
}
}
?>
