<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_dock extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
            'ID_Doc'=>array(
                'type' =>'INT(11)',
                'constraint'=>11,
                'auto_increment' =>TRUE,
                'null'=>FALSE
            ),
            'id_Book' =>array(
                'type' =>'INT(11)',
                'constraint' =>11,
                'null'=>FALSE,
                

            ),
            'CONSTRAINT produk_ibfk_3 FOREIGN KEY(`id_book`) REFERENCES `Book`(`id_book`) ON DELETE CASCADE ON UPDATE CASCADE',
            'status' =>array(
                'type' =>'INT(11)',
                'constraint' =>11,
                'null'=>FALSE,
                'default' =>0
            )

        ));
        $this->dbforge->add_key('ID_Doc',null);
        $this->dbforge->add_key('id_Book');
        $this->dbforge->create_table('doc');

    }
    public function down(){
        $this->dbforge->drop_table('doc');
    }
}
?>