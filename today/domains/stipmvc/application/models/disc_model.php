<?php
if(!defined('BASEPATH')) exit('No page');
class disc_model extends CI_Model
{
    public function get_disc()
    {
        $sql=$this->db->select('disc.disc_id, disc.naim_d, disc.opis, disc.kol_ch, prepod.fio');
        $this->db->from('disc');
        $this->db->join('prepod','prepod.prepod_id=disc.prepod_id');
        $this->db->where('1=1');
        $this->db->get();
        return $sql->result_array();
        
        
    }
    public function ins_disc($naim_d,$opis,$kol_ch,$prepod_id)
    {
        $data=array(
            'naim_d'=>$naim_d,
            'opis'=>$opis,
            'kol_ch'=>$kol_ch,
            'prepod_id'=>$prepod_id

        );
        $this->db->insert('disc',$date);

    }
    public function upd_disc($disc_id,$naim_d,$opis,$kol_ch,$prepod_id)
    {
        if(!$_POST)
        {
            $data=array(
                'naim_d'=>$naim_d,
                'opis'=>$opis,
                'kol_ch'=>$kol_ch,
                'prepod_id'=>$prepod_id
    
            );  
            $this->db->where('disc_id',$disc_id);
            $this->db->update('disc',$data);
        }
        
    }
    public function del_dsic($disc_id)
    {
        $this->db->where('disc_id',$disc_id);
        $this->db->delete('disc');
    }
}
