<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');

class another_counter_cont extends CI_Controller {
    public function calc(){
        if (isset($_POST['num1'])){ 
            $result=0;
          $num1=$_POST['num1'];
          $num2=$_POST['num2'];
          $sign=$_POST['sign'];
          switch($sign){
            case '+':$result=$num1+$num2; break;
            case '-':$result=$num1-$num2;break;
            case '*':$result=$num1*$num2;break;
            case '/':if($num2!=0){$result=$num1/$num2;
            }else{
              $result='деление на 0';
            };
            break;
          default:$result='Неизвестное действие';
          }
          if($result){
            return $result;
          }
          
          }
          
    }
    public function index(){
        $this->load->helper('url');
        $this->load->view('temp/head');
        $this->load->view('temp/navbar');
        $data['res']=$this->calc();
        $this->load->view('another_counter',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>