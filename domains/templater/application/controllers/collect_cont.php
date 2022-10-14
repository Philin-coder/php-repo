<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class collect_cont extends CI_Controller {
    public function get_html (){
        $lnk='http://jewishjokes.narod.ru/chelovekizakon.htm';
        if(isset($_POST['link'])){
            $link=$_POST['link'];
            $data=file_get_contents($link);
            if(!write_file('./public/files/page.txt',$data)) {
                return 'не удалось найти файл'.'<br>';
            }
            else{
                return 'запись прошла успешно'.'<br>';
            }
            
        }   

    }
    public function copy_file(){
        $filePath = './public/files/page.txt';
        $dist='./public/files/page1.txt';
        if (!copy($filePath,$dist)) {
            return 'файл на удалось скопировать';
        }
        else{
            return 'файл был успешно скопирован';
        }
    }
    public function index () {
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $data['fp']=$this->get_html();
        $data['copy'] =$this->copy_file();
        $this->load->view('collector',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }
}
?>