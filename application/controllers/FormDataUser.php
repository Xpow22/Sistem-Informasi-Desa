
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormDataUser extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('Model_user');
                $this->load->model('M_global_model');
            }

        public function index(){
                $data['title']  = 'Form Data User';
                $judul['Judul']  = 'Form Data User';
                $this->load->view('template/header',$data);	
                $this->load->view('template/sidebar');	
                $this->load->view('admin/form_datauser',$judul);	
                $this->load->view('template/footer');	
                
            }


            public function tambah_aksi()
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $role_id = $this->input->post('role_id');
                
              
                
                $data = array(
                        'username' => $username,
                        'password' => $password,
                        'role_id' => $role_id
                               
                );
        
                $query = $this->Model_user->input_data($data);
        
                if($query)
                {
                    $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
                }else{
                    $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
                        }
                redirect(base_url('KelolaDataUser'));
            }
}