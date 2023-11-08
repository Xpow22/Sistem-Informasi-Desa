<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pindahan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pindahan_model');
        $this->load->model('M_global_model');
    }

    public function index()
    {
        $data['title']  = 'Pindahan';
        $judul['Judul']  = 'Pindahan';
        $queryAll = $this->Pindahan_model->ambildata();
        $DATA = array('Pindahan' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/pindahan',$tampilan);	
        $this->load->view('template/footer');	
    }
    public function fungsiDelete($id)
    {
        $query = $this->Pindahan_model->delete($id);
        if($query){
            
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
        }
        redirect(base_url('pindahan'));
    }

    public function print(){
        $queryAll = $this->Pindahan_model->ambildata();
        $DATA = array('Pindahan' => $queryAll);
        
        $this->load->view('kades/print_pindahan',$DATA);
        	
    }
    
}

/* End of file Pindahan.php and path \application\controllers\Pindahan.php */
