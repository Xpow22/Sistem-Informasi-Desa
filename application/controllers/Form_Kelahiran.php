<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_kelahiran extends CI_Controller {


    function __construct()
	{
		parent::__construct();
		$this->load->model('M_global_model');
		$this->load->model('Model_kelahiran');
		$this->load->library('session');
	}
        public function index(){
                        $data['title']  = 'Form Kelahiran';
                        $judul['Judul']  = 'Data Kelahiran';
                        $this->load->view('template/header',$data);	
                        $this->load->view('template/sidebar');	
                        $this->load->view('admin/form_data_kelahiran',$judul);	
                        $this->load->view('template/footer');	
                }

                public function edit_page($id) 
                {
                    $data['title']  = 'Page Edit Data Siswa';
                    $judul['Judul']  = 'Edit Data Kelahiran';
                    $getData = $this->Model_kelahiran->ambildata($id);
                    $Tampil = array('Get_lahir' => $getData);
                    $queryDetail = $this->Model_kelahiran->getDataDetail($id);
                    $edit = array('queryEdit' => $queryDetail);
                    $tampilan = $Tampil + $edit + $judul;
                    $this->load->view('template/header',$data);	
                    $this->load->view('template/sidebar');	
                    $this->load->view('admin/form_edit_kelahiran',$tampilan);	
                    $this->load->view('template/footer');	

                }          
            

        public function tambah_data(){

            $nik = $this->input->post('nik');
            $kk = $this->input->post('kk');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $alamat = $this->input->post('alamat');
          
            
            $data = array(
                'nik' => $nik,
                'kk' => $kk,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat
            );
    
            $query = $this->Model_kelahiran->input_data($data);
    
            if($query)
            {
                $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
            }else{
                $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
            }
            redirect(base_url('kelahiran'));
        }

        public function fungsiEdit()
        {
            $id = $this->input->post('id');
            $nik = $this->input->post('nik');
            $kk = $this->input->post('kk');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $alamat = $this->input->post('alamat');
          
    
            $ArrUpdate = array(
                'nik' => $nik,
                'kk' => $kk,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat
            );
    
            $query = $this->Model_kelahiran->updateData($id, $ArrUpdate);
            if($query){
                $this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
            } else {
                $this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
            }
            redirect(base_url('kelahiran'));
    
        }
        public function fungsiDelete($id)
	{
		$query = $this->Model_kelahiran->delete($id);
		if($query){
			
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
		}
		redirect(base_url('kelahiran'));
    }
    }