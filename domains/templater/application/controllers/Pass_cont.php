<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class Pass_cont extends CI_Controller {
    public function pas_gen(){
        //$w=$_POST['sym'];
        if (isset($_POST['sym'])){
            $w=$_POST['sym'];
$w=date("m");
$w=$w.'a';
$w=md5($w);
//$w=$_SERVER['REMOTE_ADRESS'].$w;
$w=$_SERVER['REMOTE_ADDR'].$w;
$w=base64_encode($w);
$w=md5($w);
$w=base64_encode($w);
$w=md5($w);
return 'Ваш пароль это'.' '. $w;
}

}
public function write_pass(){
    $data=$this->pas_gen();
    if(!write_file('./public/files/pass.txt',$data)){
        return 'не удалось найти файл';
    }
    else{
        return 'запись прошла успешно';
    }
}
public function reader_file(){
     $file_path='./public/files/pass.txt';
     $size=filesize($file_path);
     $file_contents=readfile($file_path);
     if(file_exists($file_path)){
        $f='Содержимое файла'.' '.file_get_contents('./public/files/pass.txt');
        return 'файл на месте'.'<br>'.$f.' '.'<br>'.' '.'<br>'.'размер файла='.' '.$size;
     }   
}
    
    public function index(){
    $this->load->helper('url');
    $this->load->helper('file');
    $this->load->view('temp/head');
    $this->load->view('temp/navbar');
    $data['pass']=$this->pas_gen();
    $data['fp']=$this->write_pass();
    $data['content']=$this->reader_file();
    $this->load->view('Passgener',$data);
    $this->load->view('temp/footer');
    $this->load->view('temp/scripter');
    }
}
?>