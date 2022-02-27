<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_attribute_model extends CI_Model{ 
    public function get_oc_product_attribute_model()
    {
        
    //    $this->db->select('oc_product_attribute.product_id,
    //    oc_product_attribute.attribute_id, oc_product_attribute.language_id,oc_product_attribute.text');
    //    $this->db->from('oc_product_attribute');
    //    $this->db->get('oc_product_attribute');

        $sql=$this->db->get('oc_product_attribute');
        return $sql->result_array();

    }
    
    
    public function ins_oc_product_attribute($attribute_id,$language_id,$text){
        if(!empty($_POST))
        {
            $data=array(
                'attribute_id'=>$attribute_id,
                'language_id'=>$language_id, 
                'text'=>$text

            );
            $this->db->insert('oc_product_attribute');

        }
    }
    public function upd_oc_product_attribute($attribute_id,$language,$text)
    {
        $sql='update oc_product_attribute set attribute_id=?,language=?,$text=?';
        $this->db->query($sql,array($attribute_id,$language,$text));
    }

    public function  del_oc_product_attribute()
    {
        $this->db->empty_table('oc_product_attribute');
        
    }
   
}
   

    
?>