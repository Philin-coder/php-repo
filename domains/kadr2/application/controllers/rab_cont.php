<?
class rab_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_u');
        $this->load->view('rab');
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>