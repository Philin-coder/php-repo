<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_napr_model extends CI_Model{
    public function ins_napr($n_n,$id_v,$id_s,$data_n){
        if(!empty($_POST)){
            $data=array(
                'n_n'=>$n_n,
                'id_v'=>$id_v,
                'id_s'=>$id_s,
                'data_n'=>$data_n

            );
            $this->db->insert('napravlenie',$data);
        }

    }
    public function sel_grid_data(){
        // "select n_n, dolgn, fio_s, data_n, naim_r 
        //from napravlenie, vakansiya, soiskatel, rabotodatel  where
	// vakansiya.id_v=napravlenie.id_v 
    //and soiskatel.id_s=napravlenie.id_s  
    //and rabotodatel.id_r=vakansiya.id_r ";
    $this->db->select('n_n, dolgn, fio_s, data_n, naim_r');
    $this->db->from('napravlenie');
    $this->db->join('vakansiya','vakansiya.id_v=napravlenie.id_v');
    $this->db->join('soiskatel','soiskatel.id_s=napravlenie.id_s');
    $this->db->join('rabotodatel','rabotodatel.id_r=vakansiya.id_r');
    $sql = $this->db->get();
    return $sql->result_array();
    }
}
?>