<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_filter_model extends CI_Model{
    public function get_oc_product_filter()
    {
        $this->db->select('model, oc_product_filter.filter_id');
        $this->db->from('oc_product_filter');
        $this->db->join('oc_product','oc_product.product_id=oc_product_filter.product_id');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_oc_product_filter($filter_id)
    {
        if(!empty($_POST))
        {
            $data=array(
                'ilter_id'=>$filter_id
            );
        }
        $this->db->insert('oc_product_filter',$data);
    }
    public function upd_product_filter($filter_id)
    {
        $sql='update oc_product_filter set ilter_id=?';
        $this->db->query($sql, array($filter_id));

    }
    public function delete_oc_product_filter()
    {
        $this->db->empty_table('oc_product_filter');
    }

}
?>