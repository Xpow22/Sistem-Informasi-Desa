<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pindahan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
		$this->load->model('Pindahan_model');
		$this->load->library('session');
    }

    public function index()
    {
        $data['title']  = 'Form Pindahan';
        $judul['Judul']  = 'Data Pindahan';
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/form_data_pindahan',$judul);	
        $this->load->view('template/footer');	
    }
    public function tambah_data(){

        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama'); 
        $alamat = $this->input->post('alamat');
        $pindah = $this->input->post('pindah');
        $tanggal = $this->input->post('tanggal');
        $alasan_pindah = $this->input->post('alasan_pindah');
       
      
        
        $data = array(
            'nik' => $nik,
            'kk' => $kk,
            'nama' => $nama,
            'alamat' => $alamat,
            'pindah' => $pindah,
            'tanggal' => $tanggal,
            'alasan_pindah' => $alasan_pindah
           
        );

        $query = $this->Pindahan_model->input_data($data);

        if($query)
        {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
        }else{
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
        }
        redirect(base_url('pindahan'));
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


}

/* End of file Form_pindahan.php and path \application\controllers\Form_pindahan.php */
