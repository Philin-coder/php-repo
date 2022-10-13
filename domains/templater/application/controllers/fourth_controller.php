<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class fourth_controller extends CI_Controller {
    public function get_ip() {
        $adress=getenv("REMOTE_ADDR");
        return 'ваш ip это'.' '.$adress;
    }
public function get_agent() {
$agent=getenv("HTTP_USER_AGENT");
if(preg_match("/MSIE/i","$agent")){
return "Вы используете браузер Microsoft internet Explorer";
}	
elseif(preg_match("/Mozilla/i","$agent")){
return "Вы используете браузер Netscape";
}
elseif(preg_match("/Google/i","$agent")){
return "Пользуетесь хромом";
}
else {	
return "Вы используете $agent";
}
}
public function create_file() {
    $data=$this->get_agent();
        if(!write_file('./public/files/agent.txt',$data)){
            return 'не удалось найти файл';
        }
        else{
            return 'Запись прошла успешно';
        }
    }
    public function index(){
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->view('temp/head');
        $data['ip']=$this->get_ip();
        $data['agent']=$this->get_agent();
        $data['fp']=$this->create_file();
        $this->load->view('temp/navbar');
        $this->load->view('ip_getter',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>