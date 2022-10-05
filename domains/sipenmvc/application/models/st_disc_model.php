<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_disc_model extends CI_Model{
    public function sel_disc(){
        $this->db->select('id_disc,naim_d,ocenka,fio');
        $this->db->from('disc');
        $this->db->join('stud','stud.id_stud=disc.id_stud');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_disc($naim_d,$ocenka, $stud){
        if(!empty($_POST)){
        $data=array(
            'naim_d'=>$naim_d,
            'ocenka'=>$ocenka, 
            'id_stud'=>$stud


        );
        $this->db->insert('disc',$data);
    }


    }
    public function upd_disc($naim_d,$ocenka, $stud){
        $sql='update disc set $naim_d=?,ocenka=?,id_stud=?';
        $this->db->query($sql,array($naim_d,$ocenka, $stud));
    }
    public function del_disc(){
        $this->db->empty_table('disc');
    }
}
?>