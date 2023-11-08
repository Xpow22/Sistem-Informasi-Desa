
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_global_model');
                    $this->load->model('Register_model');
                    $this->load->library('session');
        }
        public function index(){
                $data['title']  = 'SPEKTAKULA';
                $this->load->view('register',$data);	
            }


            public function tambah_data(){

                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $confirm = $this->input->post('confirm');
              
                
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'username' => $username,
                    'password' => $password,
                    'confirm' => $confirm
                );
        
                $query = $this->Register_model->input_data($data);
        
                if($query)
                {
                    $this->M_global_model->ntf_swal('Informasi', 'Berhasil simpan data', 'success'); 
                }else{
                    $this->M_global_model->ntf_swal('Informasi', 'Gagal simpan data', 'error');
                }
                redirect(base_url('Welcome'));
            }  
}