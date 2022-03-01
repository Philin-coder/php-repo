<?php
if(!defined('BASEPATH')) exit('No page');
class prepod_model extends CI_Model
{
    public function get_prepod()
    {
        $sql=$this->db->select('prepod.prepod_id, prepod.fio, prepod.kval, usver.login');
        $this->db->from('prepod');
        $this->db->join('usver','usver.usver_id=prepod.usver_id');
        $this->db->where('1=1');
        $this->db->get();
        return $sql->result_array();
        

    }
    public function ins_prepod($fio,$kval,$usver_id)
    {
        $data=array(
            'fio'=>$fio,
            'kval'=>$kval,
            'usver_id'=>$usver_id

        );
        $this->db->insert('prepod',$data);
    }
    public function upd_prepod($prepod_id,$fio,$kval,$usver_id)
    {
        if(!empty($_POST))
        {
            $data=array(
                'fio'=>$fio,
                'kval'=>$kval,
                'usver_id'=>$usver_id
    
            );
            $this->db->where('prepod_id',$data);  
            $this->db->update('prepod',$data);
        }

    }
    public function del_prepod($prepod_id)
    {
        $this->db->where('prepod_id',$prepod_id);
        $this->db->delete('prepod');
    }
}