
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Penduduk_model');
            $this->load->model('M_global_model');
            $this->load->helper('url', 'form');
        }
    
       
   

        public function index(){
                $data['title']  = 'UNGGULAN DESA';
                $judul['Judul']  = 'Data Kelahiran';
                $queryAll = $this->Penduduk_model->ambildata();
                $DATA = array('user' => $queryAll);
                $tampilan = $judul + $DATA;     
                $this->load->view('template/header',$data);	
                $this->load->view('user/sidebar_user');	
                $this->load->view('user/main_content',$tampilan);	
                $this->load->view('template/footer');	
                
            }

        
            public function fungsiEdit()
            {
                $id = $this->input->post('id');
                $nik = $this->input->post('nik');
                $kk = $this->input->post('kk');
                $nama = $this->input->post('nama'); 
                $alamat = $this->input->post('alamat');
                $pindah = $this->input->post('pindah');
                $tanggal = $this->input->post('tanggal');
                $alasan_pindah = $this->input->post('alasan_pindah');
               
        
                $ArrUpdate = array(
                    'nik' => $nik,
                    'kk' => $kk,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'pindah' => $pindah,
                    'tanggal' => $tanggal,
                    'alasan_pindah' => $alasan_pindah
                   
                );
        
                $query = $this->Pindahan_model->updateData($id, $ArrUpdate);
                if($query){
                    $this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
                } else {
                    $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
                }
                redirect(base_url('pindahan'));
        
            }


}