<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Migration_add_del extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
            'ID_Delivery'=>array(
                'type' =>'INT(11)',
                'constraint' =>11,
                'auto_increment' =>TRUE,
                'null'=>FALSE,
                
            ),
            //3 last
            'ID_Doc'=>array(
                'type' =>'INT(11)',
                'constraint'=>11,
                'null'=>FALSE
            ),
            'CONSTRAINT produk_ibfk_4 FOREIGN KEY(`id_doc`) REFERENCES `doc`(`id_doc`) ON DELETE CASCADE ON UPDATE CASCADE',
            
            'ID_reader'=>array(
                'type' =>'INT(11)',
                'constraint'=>11,
                'null'=>FALSE
            ),
            'CONSTRAINT produk_ibfk_5 FOREIGN KEY(`ID_reader`) REFERENCES `Reader`(`ID_reader`) ON DELETE CASCADE ON UPDATE CASCADE',
            
            'Date_D'=>array(
                'type' =>'DATETIME',
                'null'=>FALSE
            ),
    'Date_Return_Plan'=>array(
        'type' =>'DATETIME',
        'null'=>FALSE
    ),
    'Date_Return_Fact'=>array(
        'type' =>'DATETIME',
        'null'=>FALSE
    )
        
        ));
        $this->dbforge->add_key('ID_Delivery',null);      
        $this->dbforge->add_key('ID_Doc');
        $this->dbforge->add_key('ID_reader');
        $this->dbforge->create_table('Delivery');

    }
    public function down(){
        $this->dbforge->drop_table('Delivery');
    }
}
?>