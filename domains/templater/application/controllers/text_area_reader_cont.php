<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class text_area_reader_cont extends CI_Controller {
    public function echo_test(){
        if(!empty($_POST)){
        $im = $_POST['im'];
        return $im.'<br>';
        }
    }
    public function create_file() {
        $data=$this->echo_test();
        if (!write_file('./public/files/about.txt',$data)) {
            return 'не удалось найти файл'.'<br>';
        }
        else {
            return 'запись прошла успешно'.'<br>';
        }

    }
    public function set_cont(){
        $fpath='./public/files/about.txt';
        $ab=file_get_contents($fpath);
        return $ab;
    }
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $data['naim']=$this->echo_test();
        $data['fp']=$this->create_file();
        $data['ab']=$this->set_cont();
        $this->load->view('abot_film',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');
    }
}
?>