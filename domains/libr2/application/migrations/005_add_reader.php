<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_reader extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
            'ID_Reader'=>array(
                'type'=>'INT',
                'constraint'=>11,
                'auto_increment'=>TRUE,
                'null'=>FALSE,
                'unsigned'=>TRUE

            ),
            'Name_R'=>array(
                'type'=>'VARCHAR',
                'constraint'=>50,
                'null'=>FALSE

            ),
            'Date_B'=>array(
                'type'=>'DATETIME',
                'null'=>TRUE
            ),
            'Adres'=>array(
            'type' =>'VARCHAR',
            'constraint' =>70,
            'null'=>FALSE   
            ),
            'Tel'=>array(
                'type' =>'VARCHAR',
                'constraint' =>15,
                'null'=>TRUE
            ),
            'Date_R'=>array(
                'type'=>'DATETIME',
                'null'=>TRUE

            )
        ));
        $this->dbforge->add_key('ID_Reader', null );
        $this->dbforge->create_table('Reader');

 
        
    }
    public function down(){
        $this->dbforge->drop_table('Reader');
    }
}
?>