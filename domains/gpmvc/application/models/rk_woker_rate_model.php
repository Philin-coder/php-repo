<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_woker_rate_model extends CI_Model{
    public function sel_data_grid($d1, $d2){
        // $sql = "select naim_r, SUM(case when data_razm between '$d1' and '$d2' then 1 else 0 end) As 'Кол-во вакансий',
    // avg(case when data_razm between '$d1' and '$d2' then oklad end) AS 'Средняя зарплата' 
    // from rabotodatel, vakansiya, napravlenie where vakansiya.id_v=napravlenie.id_v and rabotodatel.id_r=vakansiya.id_r
    // group by naim_r  ";		
		
        $sql='select naim_r, SUM(case when data_razm between '.$this->db->escape($d1).' and '.$this->db->escape(d2).' then 1 else 0 end) As \'Кол-во вакансий\',
        avg(case when data_razm between'.$this->db->escape($d1).' and '.$this->db->escape($d2).' then oklad end) AS \'Средняя зарплата\' 
        from rabotodatel, vakansiya, napravlenie where vakansiya.id_v=napravlenie.id_v and rabotodatel.id_r=vakansiya.id_r
        group by naim_r  ';
        $query=$this->db->query($sql,array($d1,$d2));
        return $query->result_array();

    }
}
?>