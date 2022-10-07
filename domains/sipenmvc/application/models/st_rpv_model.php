<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_rpv_model extends CI_Model{
    //SELECT stud.fio,gruppa.name_grup,disc.naim_d,disc.ocenka,AVG(disc.ocenka) AS 'sr' 
    //FROM stud 
    // JOIN gruppa ON stud.id_grup=gruppa.id_grupp 
    // JOIN disc ON disc.id_stud=stud.id_stud 
    //WHERE 'sr'<3 GROUP BY fio,name_grup,naim_d,ocenka; 
    public function sel_data_grid(){
        $this->db->select('stud.fio,gruppa.name_grup,disc.naim_d,disc.ocenka,stud.nachislenno');
        $this->db->select_avg('ocenka','\'sr\'');
        $this->db->from('stud');
        $this->db->join('gruppa','stud.id_grup=gruppa.id_grupp');
        $this->db->join('disc','stud.id_stud=disc.id_stud');
        $this->db->where('\'sr\'<',3);
        $this->db->group_by(array('fio','name_grup','naim_d','ocenka'));
        $sql=$this->db->get();
        return $sql->result_array();


        // $sql=$this->db->query('SELECT stud.fio,gruppa.name_grup,disc.naim_d,disc.ocenka,AVG(disc.ocenka) AS sr, stud.nachislenno
        // FROM stud 
        // JOIN gruppa ON stud.id_grup=gruppa.id_grupp 
        // JOIN disc ON disc.id_stud=stud.id_stud 
        // WHERE \'sr\'<3 GROUP BY fio,name_grup,naim_d,ocenka');
        // return $sql->result_array();

        
        
    }
}
?>