<?php
defined('BASEPATH') or exit('no page');
class MainCont extends CI_Controller{
    public function __construct()
    {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library(['session','form_validation']);
    $this->load->database();
    //$this->load->model('usver_model');
    

}
public function index(){
    if(!empty($_POST))
    {
        $usver_pass=$_POST['usver_pass'];
        $usver_login=$_POST['usver_login'];
        $this->load->model('usver_model');
        $data['rows']=$this->usver_model->ins_user($usver_pass,$usver_login);// то,что уходит в insert  
        $data['rows']=$this->db->get('sm.usver')->result_array();// то, что смотрим в моделм
               
    }
    
        //echo '<a href="http://gameland:8080/endcont">endcont</a>';
    $this->load->view('usver_header');
    $this->load->view('mnavbar');
    $this->load->view('usver_input',$data);
    $this->load->view('usver_footer');
    
}


}

