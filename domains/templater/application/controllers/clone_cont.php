<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class clone_cont extends CI_Controller {
    public function get_web(){
        $lnk='http://jewishjokes.narod.ru/chelovekizakon.htm';
        //$link=$_POST['link'];
        if (isset($_POST['link'])) {
            $link=$_POST['link'];
            $cont=file_get_contents($link);
            return $cont;
        }
        
    }
    public function writer(){
        if (isset($_POST['link'])) {
            $data=file_get_contents($_POST['link']);
            if(!write_file('./public/files/page777.html',$data)) {
                return 'не удалось найти файл'.'<br>';
            }
            else{
                return 'запись прошла успешно'.'<br>';
            }
         
        }

    }
    public function index () {
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $data['fp']=$this->get_web();
        $data['fp1']=$this->writer();
        $this->load->view('cloner',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>