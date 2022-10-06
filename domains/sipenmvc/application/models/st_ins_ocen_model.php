<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_ins_ocen_model extends CI_model {
    public function set_mark($sel_d,$ocen_d,$st){
        if (!empty($_POST)){
        $data =array(

            'naim_d'=>$sel_d,
            'ocenka'=>$ocen_d,
            'id_stud'=>$st
        );
        $this->db->insert('disc',$data);
    }

    }
    public function sel_data_grid(){
        $this->db->select('stud.fio,stud.id_grup,disc.naim_d,disc.ocenka,gruppa.name_grup');
        $this->db->from('stud');
        $this->db->join('gruppa','stud.id_grup = gruppa.id_grupp');
        $this->db->join('disc','stud.id_stud = disc.id_stud');
        $sql = $this->db->get();
        return $sql->result_array();
    }
}
?>