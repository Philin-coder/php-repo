<?php
if(!defined('BASEPATH')) exit('No page');
class ocen_model extends CI_Model
{
    public function get_ocen()
    {
        $sql=$this->db->select('ocen.ocen_id,ocen.kind_oc, prepod.fio, stud.fio, disc.naim_d');
        $this->db->from('ocen');
        $this->db->join('stud','stud.id_stud=ocen.id_stud');
        $this->db->join('disc','disc.disc_id=ocen.disc_id');
        $this->db->where(1=1);
        $this->db->get();
        return $sql->result_array();
    }
    public function ins_ocen($kind_oc,$prepod_id,$id_stud, $disc_id)
    {
        $data=array(
            'kind_oc'=>$kind_oc,
            'prepod_id'=>$prepod_id,
            'id_stud'=>$id_stud, 
            'disc_id'=>$disc_id

        );
        $this->$this->db->insert('ocen', $data);
        
    }
    public function upd_ocen($id_ocen,$kind_oc,$prepod_id,$id_stud, $disc_id)
    {
        if (!empty($_POST)) {
            $data=array(
                'kind_oc'=>$kind_oc,
                'prepod_id'=>$prepod_id,
                'id_stud'=>$id_stud, 
                'disc_id'=>$disc_id
    
            );
            $this->db->where('id_ocen',$id_ocen);
            $this->db->update('ocen',$data);
            
        }
        
    }
    public function del_ocen($id_ocen)
    {
    $this->db->where('id_ocen',$id_ocen);
    $this->db->delete('ocen');
    }

}