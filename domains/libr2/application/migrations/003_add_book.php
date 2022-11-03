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
         'ID_Genre'=>array(
            'type' => 'INT',
            'constraint' =>11,
            'null'=>FALSE,
            'unsigned'=>TRUE
         ),
         'CONSTRAINT produk_ibfk_1 FOREIGN KEY(`id_author`) REFERENCES `Author`(`id_author`) ON DELETE CASCADE ON UPDATE CASCADE',
         'CONSTRAINT produk_ibfk_2 FOREIGN KEY(`id_genre`) REFERENCES `Genre`(`ID_Genre`)ON DELETE CASCADE ON UPDATE CASCADE',
         'ID_Author'=>array(
            'type' => 'INT',
            'constraint' =>11,
            'null'=>FALSE,
            'unsigned'=>TRUE
            
         ),
         'Publisher'=>array(
            'type' => 'VARCHAR',
            'constraint' =>50,
            'null'=>FALSE
            
         ),
         'Number_of_P'=>array(
            'type' =>'INT',
            'constraint' =>11,
            'null'=>FALSE
         ),

         'Year_of_Pub'=>array(
            'type' => 'INT',
            'constraint'=>11,
            'null'=>TRUE
         )

        ));
    $this->dbforge->add_key('ID_Book',null);
    $this->dbforge->add_key('iD_Author');
    $this->dbforge->add_key('iD_Genre');
    
    $this->dbforge->create_table('Book');

    }
    public function down(){
        $this->dbforge->drop_table('Book');
    }
}
?>