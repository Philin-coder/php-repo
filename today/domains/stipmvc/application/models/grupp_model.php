<?php
if(!defined('BASEPATH')) exit( 'No Page');
class grupp_model extends CI_Model{
    public function get_grupp()
        {
            $sql=$this->db->select('gruppa.grupp_id, gruppa.naim, gruppa.opis, spec.opis, social.fio');
            $this->db->from('  gruppa');
            $this->db->join('spec','spec.spec_id=gruppa.spec_id');
            $this->db->join('social','social.soc_id=gruppa.soc_id');
            $this->db->where('1=1');
            $this->db->get();
            return $sql->result_array();
        }
        public function ins_grupp($naim,$opis,$spec_id, $soc_id)
        {
            $data=array(
                'naim'=>$naim,
                'opis'=>$opis,
                'spec_id'=>$spec_id, 
                'soc_id'=>$soc_id
            );
            $this->db->insert('gruppa',$data);

        }
        public function upd_stud($grupp_id, $naim,$opis,$spec_id, $soc_id)
        {
            $data=array(
                'naim'=>$naim,
                'opis'=>$opis,
                'spec_id'=>$spec_id, 
                'soc_id'=>$soc_id
            );
            $this->db->where('grupp_id',$data);
            $this->db->update('gruppa',$data);
        }
       public function del_gruppa($grupp_id)
       {
        $this->db->where('grupp_id',$grupp_id);
        $this->db->delete('gruppa');
       }

}

