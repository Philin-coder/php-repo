<?php
if(!defined('BASEPATH')) exit('No Page');
class social_model extends CI_Model
{
    public function get_social()
    {
        $sql=$this->db->select('social.soc_id, social.fio, social.pdata, social.comp, usver.login');
        $this->db->from('social');
        $this->db->join('usver','social.usver_id=usver.usver_id');
        $this->db->where('1=1');
        $this->db->get();
        return $sql->result_array();
        
    }
    public function ins_social($fio,$pdata,$comp,$usver_id)
    {
        $data=array(

            'fio'=>$fio,
            'pdata'=>$pdata,
            'comp'=>$comp,
            'usver_id'=>$usver_id
        );
        $this->db->insert('social',$data);
    }
    public function upd_social($soc_id,$fio,$pdata,$comp,$usver_id)
    {
        if(!empty($_POST))
        {
        $data=array(

            'fio'=>$fio,
            'pdata'=>$pdata,
            'comp'=>$comp,
            'usver_id'=>$usver_id
        );
    
        $this->db->where('soc_id',$data);
        $this->db->update('social',$data);
    }
    }
    public function del_social($soc_id)
    {
        $this->db->where('soc_id',$soc_id);
        $this->db->delete('social');
    }


}
