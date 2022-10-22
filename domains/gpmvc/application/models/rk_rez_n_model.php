<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_rez_n_model extends CI_Model{
    public function upd_res($rezultat,$prim,$n){
        if(!empty($_POST)){
            $data=array(
                'rezultat'=>$rezultat,
                'prim'=>$prim,
                'n'=>$n
                

            );
            $this->db->where('id_n',$n);
            $this->db->update('napravlenie',$data);

        }
    }
    public function ins_res($data_p,$n,$rezultat,$prim){
        if(!empty($_POST)){
            $data=array(
                'data_p'=>$data_p,
                'n'=>$n,
                'rezultat'=>$rezultat,
                'prim'=>$prim
            );
            $this->db->insert('napravlenie',$data);
        }
    }
    public function sel_grid_data(){
        //select n_n, dolgn, fio_s, data_n, data_p, rezultat, prim from napravlenie, 
        //vakansiya, soiskatel 
    // where vakansiya.id_v=napravlenie.id_v and soiskatel.id_s=napravlenie.id_s ";		
    $this->db->select('n_n, dolgn, fio_s, data_n, data_p, rezultat, prim');
    $this->db->from('napravlenie');
    $this->db->join('vakansiya','vakansiya.id_v=napravlenie.id_v');
    $this->db->join('soiskatel','soiskatel.id_s=napravlenie.id_s');
    $sql = $this->db->get();
    return $sql->result_array();
    }
    public function upd_ins($data_p,$n,$rezultat,$prim){
        if(!empty($_POST)){
            $data=array(
                'rezultat'=>$rezultat,
                'prim'=>$prim,
                'n'=>$n
                

            );
            $data1=array(
                'data_p'=>$data_p,
                'n'=>$n,
                'rezultat'=>$rezultat,
                'prim'=>$prim
            );
            $this->db->where('id_n',$n);
            $this->db->update('napravlenie',$data);
            $this->db->insert('napravlenie',$data1);

        }
    }
}
?>