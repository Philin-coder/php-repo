<?php
if(!defined('BASEPATH'))exit('No Page'))
class stud_Model extends CI_Model{
    public function get_stud()
    {
        
    $sql=$this->db->select('stud.id_stud, stud.fio, stud.kurs,gruppa.naim, stud.kont_data, usver.login');
    $this->db->from('stud');
    $this->db->join('usver','stud.usver_id=usver.usver_id');
    $this->db->join('gruppa','gruppa.grupp_id=stud.grupp_id');
    $this->db->where('1=1');
    $this->db->get();
    return $sql->result_array();
    }
    public function ins_stud($fio,$kurs,$grupp_id, $kont_data,$usver_id)
    {
        $data=(
            'fio'=>$fio,
            'kurs'=>$kurs,
            'grupp_id'=>$grupp_id, 
            'kont_data'=>$kont_data,
            'usver_id'=>$usver_id

        );
        $this->db->insert('stud',$data);

    }
    public function upd_stud($id_stud,$fio,$kurs,$grupp_id, $kont_data,$usver_id)
    {
        if (!empty($_POST)) {
            $data=(
                'fio'=>$fio,
                'kurs'=>$kurs,
                'grupp_id'=>$grupp_id, 
                'kont_data'=>$kont_data,
                'usver_id'=>$usver_id
    
            );
            $this->db->where('id_stud',$data);
            $this->db->update('stud',$data);
        }
        
    }
    public function del_stud($id_stud)
    {
    $this->db->where('id_stud',$id_stud);
    $this->db->delete('stud');
    }


}
