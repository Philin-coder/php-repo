<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_woekrs_list_model extends CI_Model {
public function sel_data_grid($d1, $d2){
    $sql='select fio_s, tel_s, spec, naim_r from soiskatel, 
    rabotodatel, napravlenie, vakansiya 
    where soiskatel.id_s=napravlenie.id_s 
    and vakansiya.id_v=napravlenie.id_v and rabotodatel.id_r=vakansiya.id_r  
    and   data_p>=?  and data_p<=? and rezultat=\'Принят\' ';		
    $query=$this->db->query($sql,array($d1,$d2));
    return $query->result_array();
    
    
    
}

}
?>