<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_reward_model  extends CI_Model {
    public function get_oc_product_reward()
    {
        $this->db->select('oc_product_reward.product_reward_id, 
        model, 
        oc_product_reward.customer_group_id,
        oc_product_reward.points');
        $this->db->from('oc_product_reward');
        $this->db->join('oc_product','oc_product.product_id=oc_product_reward.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_reward($product_id, $customer_group_id,$points)
    {
        if(!empty($_POST))
        {
            $data=array(

                'product_id'=>$product_id, 
                'customer_group_id'=>$customer_group_id,
                'points'=>$points
            );
            $this->db->insert('oc_product_reward',$data);
        }
    }
    public function upd_oc_product_reward($product_id, $customer_group_id,$points)
    {
        $sql='update oc_product_reward set product_id=?, customer_group_id=?,points=?';
        $this->db->query($sql,array($product_id, $customer_group_id,$points));
    }
    public function del_oc_product_reward(){
        $this->db->empty_table('oc_product_reward');
    }

}
?>