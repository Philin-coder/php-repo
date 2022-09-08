<?
class rab_cont extends CI_Controller {
    public function index(){
        $this->load->view('temp/head');
        $this->load->view('temp/nav_u');
        $this->load->model('rk_rabotodatel_model');
        if(!empty($_POST)){
            $this->rk_rabotodatel_model->ins_rabotodatel_model($_POST['naim_r'],$_POST['tel_r'],$_POST['kl_d'],$_POST['kl_fio'],$_POST['adres_r']);

        }
        $data['rabotodatel']=$this->rk_rabotodatel_model->sel_grid_data();
        $this->load->view('rab',$data);
        $this->load->view('temp/footer');
        $this->load->view('temp/scripter');

    }

}
?>