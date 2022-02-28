<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_to_download_model extends CI_Model{
    public function get_oc_product_to_download()
    {
        $this->db->select('oc_product_to_download.product_id, 
        oc_product_to_download.download_id');
        $this->db->from('oc_product_to_download');
        $this->db->join('oc_product','oc_product.product_id=oc_product_to_download.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_to_download($download_id)
    {
        if(!empty($_POST))
        {
        $data=array(
            'download_id'=>$download_id
        );
        $this->db->insert('oc_product_to_download',$data);
    }
    }
     public function upd_oc_product_to_download($download_id)
     {
         $sql='update oc_product_to_download set download_id=?';
         $this->db->query($sql,array($download_id));

     }
      public function del_oc_product_to_download()
      {
          $this->db->empty_table('oc_product_to_download');
      }

}
?>