<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_author extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
            'ID_Author'=>array(
                'type' =>'INT(11)',
                'constraint' =>11,
                'auto_increment' =>TRUE,
                'NULL' =>FALSE

            ),
            'Name_A'=>array(
                'type' => 'VARCHAR',
                'constraint' =>70,
                'NULL' =>FALSE

            ),
        ));
        $this->dbforge->add_key('ID_Author',null);
        $this->dbforge->create_table('Author');
    }
    public function down(){
        $this->dbforge->drop_table('Author');
    }
}
?>