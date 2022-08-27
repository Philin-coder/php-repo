<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_napr_model extends CI_Model{
    public function sel_napravlenie_model(){
        $this->db->select('id_n,n_n,id_v,id_s,data_n,data_p,rezultat,prim');
        $this->db->from('napravlenie');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_napravlenie_model($n_n,$id_v,$id_s,$data_n,$data_p,$rezultat,$prim){
        if(!empty($_POST))
        {
            $data=array(
                'n_n'=>$n_n,
                'id_v'=>$id_v,
                'id_s'=>$id_s,
                'data_n'=>$data_n,
                'data_p'=>$data_p,
                'rezultat'=>$rezultat,
                'prim'=>$prim
            );
            $this->db->insert('napravlenie');    

        }

        
    }

public function upd_napravlenie_model($n_n,$id_v,$id_s,$data_n,$data_p,$rezultat,$prim)
        {
            $sql='update napravlenie set n_n=?,id_v=?,id_s=?,data_n=?,data_p=?,rezultat=?,prim=?';
            $this->db->query($sql,array($n_n,$id_v,$id_s,$data_n,$data_p,$rezultat,$prim));


        }
        public function del_napravlenie(){
        $this->db->empty_table('napravlenie'); 
        }

}
?>