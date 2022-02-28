<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Oc_product_reward_cont extends CI_Controller {
    public function index()
    {
        $this->load->model('oc_product_reward_model');
        $data['oc_product_reward']=$this->oc_product_reward_model->get_oc_product_reward();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('view_prod_reward',$data);
        $this->load->view('footer');
    }
}
?>