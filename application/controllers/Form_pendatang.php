<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pendatang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
		$this->load->model('Pendatang_model');
		$this->load->library('session');
    }

    public function index()
    {
        $data['title']  = 'Form Pendatang';
        $judul['Judul']  = 'Data Pendatang';
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/form_data_pendatang',$judul);	
        $this->load->view('template/footer');	
    }
    public function tambah_data(){

        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama'); 
        $alamat_asal = $this->input->post('alamat_asal');
        $alamat_sekarang = $this->input->post('alamat_sekarang');
        $pindah = $this->input->post('pindah');
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');
       
      
        
        $data = array(
            'nik' => $nik,
            'kk' => $kk,
            'nama' => $nama,
            'alamat_asal' => $alamat_asal,
            'alamat_sekarang' => $alamat_sekarang,
            'pindah' => $pindah,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan
           
        );

        $query = $this->Pendatang_model->input_data($data);

        if($query)
        {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
        }else{
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
        }
        redirect(base_url('pendatang'));
    }

    public function fungsiEdit()
    {
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama'); 
        $alamat_asal = $this->input->post('alamat_asal');
        $alamat_sekarang = $this->input->post('alamat_sekarang');
        $pindah = $this->input->post('pindah');
        $tanggal = $this->input->post('tanggal');
        $keterangan = $this->input->post('keterangan');

        $ArrUpdate = array(
            'nik' => $nik,
            'kk' => $kk,
            'nama' => $nama,
            'alamat_asal' => $alamat_asal,
            'alamat_sekarang' => $alamat_sekarang,
            'pindah' => $pindah,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan
           
        );

        $query = $this->Pendatang_model->updateData($id, $ArrUpdate);
        if($query){
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
        }
        redirect(base_url('pendatang'));

    }
    public function fungsiDelete($id)
{
    $query = $this->Pendatang_model->delete($id);
    if($query){
        
        $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
    } else {
        $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
    }
    redirect(base_url('pendatang'));
}

}

/* End of file Form_pendatang.php and path \application\controllers\Form_pendatang.php */
