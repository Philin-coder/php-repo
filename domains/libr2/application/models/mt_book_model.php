<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class mt_book_model extends CI_Model {
    public function sel_book(){
        $this->db->select('ID_Book,Name_B,Source,Date_P,COUNT,Price,ID_Genre,ID_Author,Publisher,Number_of_P,Year_of_Pub');
        $this->db->from('Book');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_book($Name_B,$Source,$Date_P,$COUNT,$Price,$ID_Genre,$ID_Author,$Publisher,$Number_of_P,$Year_of_Pub){
        if (!empty($_POST)){
        $data=array(
            'Name_B'=>$Name_B,
            'Source'=>$Source,
            'Date_P'=>$Date_P,
            'COUNT'=>$COUNT,
            'Price'=>$Price,
            'ID_Genre'=>$ID_Genre,
            'ID_Author'=>$ID_Author,
            'Publisher'=>$Publisher,
            'Number_of_P'=>$Number_of_P,
            'Year_of_Pub'=>$Year_of_Pub

        );
        $this->db->insert('Book',$data);
    }
    }
    public function upd_book($Name_B,$Source,$Date_P,$COUNT,$Price,$ID_Genre,$ID_Author,$Publisher,$Number_of_P,$Year_of_Pub){
    $sql='update Book set Name_B=?, Source=?, Date_P=?, COUNT=?, Price=?, ID_Genre=?, ID_Author=?, Publisher=?, Number_of, Year_of_Pub=?';
    $this->db->query($sql,array($Name_B,$Source,$Date_P,$COUNT,$Price,$ID_Genre,$ID_Author,$Publisher,$Number_of_P,$Year_of_Pub));
    }
    public function del_book(){
        $this->db->empty_table('Book');
    }

}
?>