<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_author extends CI_Migration {
    public function up () {
        $this->dbforge->add_field (array(
            'ID_Author'=>array(
                'type'=>'INT',
                'constraint'=>11,
                'INT(11)'=>TRUE,
                'auto_increment'=>TRUE,
                'null'=>FALSE

            ),
            'Name_A'=> array(
                'type'=>'VARCHAR',
                'constraint'=>70,
                'null'=>FALSE
            ),

        ));
        $this->dbforge->add_key('ID_Author',TRUE);
        $this->dbforge->create_table('Author');

    }
    public function down () {
        $this->dbforge->drop_table('Author');
    }
}
?>