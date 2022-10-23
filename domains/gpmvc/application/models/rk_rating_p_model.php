<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_rating_p_model extends CI_Model{
    public function sel_grid_data($d1, $d2){
        $sql = 'select naim_o, naim_p, SUM(case when data_razm between '.$this->db->escape($d1). 'and '.$this->db->escape($d2). ' then 1 else 0 end) As \'kol_vak\',
        avg(case when data_razm between '.$this->db->escape($d1). 'and '.$this->db->escape($d2). ' then oklad end) AS \'sr_zp\', 
         SUM(case when data_p between '.$this->db->escape($d1).'and'.$this->db->escape($d2). ' and rezultat=\'Принят\' then 1 else 0 end) As \'kol_tr\'
         from otrasl, prof, vakansiya, napravlenie where otrasl.id_o=prof.id_o and vakansiya.id_v=napravlenie.id_v and prof.id_p=vakansiya.id_p
         group by naim_o, naim_p';		
    $query=$this->db->query($sql,array($d1,$d2));
    return $query->result_array();
    }
}
?>