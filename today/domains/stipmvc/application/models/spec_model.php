<?php
if(!defined('BASEPATH'))exit ('No Page');
class spec_model extends  CI_Model
{
    public function get_spec()
    {
        $sql=$this->db->select('spec_id,opis,shifr');
        $this->db->from('spec');
        $sql=$this->db->get();
        return $sql->result_array();

        
    }
    public function ins_spec($spec_id,$opis,$shifr)
    {
        $data=array(
            'opis'=>$opis,
            'shifr'=>$shifr


        )
        $this->db->insert('spec',$data);
    }
    public function upd_spec($spec_id,$opis,$shifr)
    {
        if(!empty($_POST))
        {
            $data=array(
                'opis'=>$opis,
                'shifr'=>$shifr
            );
            $this->db->where('spec_id',$date);
            $this->db->update('spec',$data);
        }

       
    }
    public function del_spec($spec_id)
    {
        $this->db->where('spec_id',$spec_id);
        $this->db->delete('spec');

    }
    
}
