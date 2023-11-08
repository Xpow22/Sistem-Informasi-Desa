<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendatang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendatang_model');
        $this->load->model('M_global_model');
    }

    public function index()
    {
        $data['title']  = 'Pendatang';
        $judul['Judul']  = 'Pendatang';
        $queryAll = $this->Pendatang_model->ambildata();
        $DATA = array('Pendatang' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/pendatang',$tampilan);	
        $this->load->view('template/footer');	
    }
    public function fungsiDelete($id)
    {
        $query = $this->Pendatang_model->delete($id);
        if($query){
            
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
        }
        redirect(base_url('pindahan'));
    }

    public function print(){
        $queryAll = $this->Pendatang_model->ambildata();
        $DATA = array('Pendatang' => $queryAll);
        
        $this->load->view('kades/print_pendatang',$DATA);
        	
    }
}

/* End of file Pendatang.php and path \application\controllers\Pendatang.php */
