<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_disc_model extends CI_Model{
    public function sel_disc(){
        $this->db->select('id_disc,naim_d,ocenka,id_stud');
        $this->db->from('disc');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_disc($naim_d,$ocenka,$id_stud){
        if(!empty($_POST)){
            $data=array(
                'naim_d'=>$naim_d,
                'ocenka'=>$ocenka,
                'id_stud'=>$id_stud

            );
            $this->db->insert('disc',$data);
        }

    }
    public function udp_dis(){
        
    }
}
?>