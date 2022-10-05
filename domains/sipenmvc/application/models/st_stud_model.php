<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_stud_model extends CI_Model{
   public function sel_stud(){
    $this->db->select('id_stud,name_grup,fio,oсenka,data_p,date_o,nachislenno, udergano'); 
    $this->db->from('stud');
    $this->db->join('gruppa','stud.id_grup=gruppa.id_grupp');
    $sql = $this->db->get();
    return $sql->result_array();
   }
   public function ins_stud($id_grup,$fio,$ball,$data_p,$date_o,$nachislenno, $udergano){
    if (!empty($_POST)){
        $data=array(
            'id_grup'=>$id_grup,
            'fio'=>$fio,
            'oсenka'=>$ball,
            'data_p'=>$data_p,
            'date_o'=>$date_o,
            'nachislenno'=>$nachislenno, 
            'udergano'=>$udergano

        );
        $this->db->insert('stud',$data);
    }
    
   }
   public function upd_stud($id_grup,$fio,$oсenka,$data_p,$date_o,$nachislenno, $udergano){
    $sql='update stud set id_grup=?,fio=?,ball=?,data_p=?, date_o=?,nachislenno=?,udergano=?';
    $this->db->query($sql,array($id_grup,$fio,$ball,$data_p,$date_o,$nachislenno, $udergano));
   }
   public function del_stud(){
    $this->db->empty_table('stud');
   }
   public function sel_data_grid(){
    $this->db->select('id_stud,fio,oсenka,data_p,date_o,nachislenno,udergano');
    $this->db->from('stud');
    $sql=$this->db->get();
    return $sql->result_array();
   }

}
?>