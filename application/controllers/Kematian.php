<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
		$this->load->model('Model_kematian');
		$this->load->library('session');
    }

    public function index()
    {
        $data['title']  = 'Kematian';
        $judul['Judul']  = 'Kematian';
        $queryAll = $this->Model_kematian->ambildata();
        $DATA = array('Kematian' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/kematian',$tampilan);	
        $this->load->view('template/footer');	
    }

    public function edit_page($id) 
    {
        $data['title']  = 'Page Edit Data';
     
        $getData = $this->Model_kematian->ambildata($id);
        $Tampil = array('Get_lahir' => $getData);
        $queryDetail = $this->Model_kematian->getDataDetail($id);
        $edit = array('queryEdit' => $queryDetail);
        $tampilan = $Tampil + $edit;
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/form_edit_kematian',$tampilan);	
        $this->load->view('template/footer');	

    }       


    public function tambah_data(){

        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama');
        $tanggal = $this->input->post('tanggal');
        $alamat = $this->input->post('alamat');
      
        
        $data = array(
            'nik' => $nik,
            'kk' => $kk,
            'nama' => $nama,
            'tanggal' => $tanggal,
            'alamat' => $alamat
        );

        $query = $this->Model_kematian->input_data($data);

        if($query)
        {
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
        }else{
            $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
        }
        redirect(base_url('kematian'));
    }

    public function fungsiEdit()
    {
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama');
        $tanggal = $this->input->post('tanggal');
        $alamat = $this->input->post('alamat');
      

        $ArrUpdate = array(
            'nik' => $nik,
            'kk' => $kk,
            'nama' => $nama,
            'tanggal;' => $tanggal,
            'alamat' => $alamat
        );

        $query = $this->Model_kematian->updateData($id, $ArrUpdate);
        if($query){
            $this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
        } else {
            $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
        }
        redirect(base_url('kematian'));

    }
    public function fungsiDelete($id)
{
    $query = $this->Model_kematian->delete($id);
    if($query){
        
        $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
    } else {
        $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
    }
    redirect(base_url('kematian'));
}


public function print(){
    $queryAll = $this->Model_kematian->ambildata();
    $DATA = array('Kematian' => $queryAll);
    
    $this->load->view('kades/print_kematian',$DATA);
        
}
    
}

/* End of file Kematian.php and path \application\controllers\Kematian.php */
