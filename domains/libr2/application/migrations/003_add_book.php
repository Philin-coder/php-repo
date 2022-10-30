<?php
class Migration_add_book extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
         'ID_Book'=>array(
            'type' =>'INT',
            'constraint'=> 11,
            'auto_increment' =>TRUE,
            'unsigned' =>TRUE,
            'Null'=>FALSE
         ),
         'Name_B'=>array(
            'type' => 'VARCHAR',
            'constraint' =>150,
            'Null' =>FALSE

         ),
         'Source'=>array(
            'type' => 'VARCHAR',
            'constraint' =>70,
            'NULL'=>TRUE
         ),
         'Date_P'=>array(
            'type' => 'Datetime',
            'null' =>FALSE

         ),
         'COUNT'=>array(
            'type' => 'INT',
            'constraint' =>11,
            'null'=>FALSE
         ),
         'Price'=>array(
            'type' => 'FLOAT',
            'constraint' =>5.2,
            'null'=>FALSE
         ),

        ));

    }
    public function down(){

    }
}
?>