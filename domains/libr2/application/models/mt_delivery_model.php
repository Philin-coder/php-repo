<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class mt_delivery_model extends CI_Model {
    public function sel_delivery() {
        $this->db->select('ID_Delivery,ID_Doc,ID_reader,Date_D,Date_Return_Plan,Date_Return_Fact');
        $this->db->from('delivery');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_delivery($ID_Doc,$ID_reader,$Date_D,$Date_Return_Plan,$Date_Return_Fact) {
        if (!empty($_POST)){
            $data=array(
                'ID_Doc'=>$ID_Doc,
                'ID_reader'=>$ID_reader,
                'Date_D'=>$Date_D,
                'Date_Return_Plan'=>$Date_Return_Plan,
                'Date_Return_Fact'=>$Date_Return_Fact
            );
            $this->db->insert('delivery',$data);
        }
    }
        public function upd_delivery($ID_Doc,$ID_reader,$Date_D,$Date_Return_Plan,$Date_Return_Fact){
            $sql='update delivery set ID_Doc=?,ID_reader=?,Date_D=?,Date_Return_Plan=?,Date_Return_Fact=?';
            $this->db->query($sql,array($ID_Doc,$ID_reader,$Date_D,$Date_Return_Plan,$Date_Return_Fact));
        }

    
}
?>