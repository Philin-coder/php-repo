<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_author extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
            'ID_Genre'=>array(
                'type'=>'INT',
                'constraint'=> 11,
                'NULL'=>FALSE,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE

            ),
            'Name_A' =>array(
                'type' => 'VARCHAR',
                'null'=>FALSE,
                'constraint'=>70



            )
                

        ));
        $this->dbforge->add_key('ID_Genre',null);
        $this->dbforge->create_table('Genre');
    }
    public function down(){
        $this->dbforge->drop_table('Genre');
    }
}
?>