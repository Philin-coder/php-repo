<?php
if(!defined('BASEPATH')) exit('No page');
class stjurnal_model extends CI_Model
{
    public function get_stjurnal()
    {
        $sql=$this->db->select('stjurnal.stj_id, ocen.kind_oc, stud.fio, disc.naim_d, prepod.fio');
        $this->db->from('stjurnal');
        $this->db->join('ocen','ocen.ocen_id=stjurnal.ocen_id');
        $this->db->join('stud','stud.id_stud=stjurnal.id_stud');
        $this->db->join('disc','disc.disc_id=stjurnal.disc_id');
        $this->db->join('prepod','prepod.prepod_id=stjurnal.prepod_id');
        $this->db->where('1=1');
        $this->db->get();
        return $sql->result_array();

    }
    public function ins_stjurnal($ocen_id,$id_stud,$disc_id,$prepod_id)
    {
        $data=(
            'ocen_id'=>$ocen_id,
            'id_stud'=>$id_stud,
            'disc_id'=>$disc_id,
            'prepod_id'=>$prepod_id
        );
        $this->db->insert('stjurnal',$data);


    }
    public function  upd_stjurnal($stj_id,$ocen_id,$id_stud,$disc_id,$prepod_id)
    {
    if(!empty($_POST))
    {
        $data=(
            'ocen_id'=>$ocen_id,
            'id_stud'=>$id_stud,
            'disc_id'=>$disc_id,
            'prepod_id'=>$prepod_id
        );
        $this->db->where('stj_id',$stj_id);
        $this->db->update('stjurnal',$data);

    }

    }

    public function del_atj($stj_id){
        
     $this->db->where('stj_id',$stj_id);
     $this->db->delete('stjurnal');
    }

}