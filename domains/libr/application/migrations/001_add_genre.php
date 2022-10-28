<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_genre extends CI_Migration {
    public function up () { 
        $this->dbforge->add_field(array(
            'ID_Genre'=>array(
                'type'	=> 'INT',
                'constraint'=>11,
                'INT(11)'=>TRUE,
                'auto_increment'=>TRUE,
                'null'=>FALSE

            ),
            'Name_G'=>array(
                'type'=> 'VARCHAR',
                'constraint'=>70,
                'null'=>FALSE


            ),

            ));
            $this->dbforge->add_key('ID_Genre',TRUE);
            $this->dbforge->create_table('Genre');
    }
    public function down () {
        $this->dbforge->drop_table('Genre');
    }
}
?>