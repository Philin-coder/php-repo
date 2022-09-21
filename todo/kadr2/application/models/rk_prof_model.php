<?php
if (!defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_prof_model extends CI_Model{
    public function sel_rk_prof_model(){
        $this->db->select('id_p,naim_p,id_o');
        $this->db->from('prof');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_prof_model($naim_o,$naim_p){
        if(!empty($_POST)){
            $data=array(
                'id_o'=>$naim_o,
                'naim_p'=>$naim_p
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
public function sel_grid_data(){
    $this->db->select('naim_o, naim_p');
    $this->db->from('otrasl');
    $this->db->join('prof','otrasl.id_o=prof.id_o');
    $sql=$this->db->get();
    return $sql->result_array();

}

}
?>
