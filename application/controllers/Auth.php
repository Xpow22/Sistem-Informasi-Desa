
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

        function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('M_global_model');
             
		
	}
        public function index(){
                $data['title']  = 'SPEKTAKULA';
                $this->load->view('auth',$data);	
            }

            public function proses_login()
            {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
    
                    $cek_login = $this->Auth_model->login($username,$password);
    
                    if(empty($cek_login))
                    {
                            $this->M_global_model->ntf_swal('Informasi', 'Maap! Username atau Password yang ada masukan salah', 'error');
                            redirect('auth');
                    }elseif($password == $cek_login->password)
                    {
                            if($cek_login->role_id == '1')
                            {
                                    $data_session = array(
                                            'role_id' => $cek_login->role_id,
                                            'username' => $cek_login->username,
                                            'password' => $cek_login->password
                                    );
                                    $this->session->set_flashdata($data_session);
                                    $this->M_global_model->ntf_swal('Informasi', 'Selamat Anda Berhasil Login', 'success'); 
                                    redirect('Dashboard');
                                    
                            }elseif($cek_login->role_id == '2')
                            {
                                    $data_session = array(
                                            'role_id' => $cek_login->role_id,
                                            'username' => $cek_login->username,
                                            'password' => $cek_login->password
                                    );
                                    $this->session->set_flashdata($data_session);
                                    redirect('KepalaDesa');
                            }elseif($cek_login->role_id == '3')
                            {
                                    $data_session = array(
                                            'role_id' => $cek_login->role_id,
                                            'username' => $cek_login->username,
                                            'password' => $cek_login->password
                                    );
                                    $this->session->set_flashdata($data_session);
                                    redirect('User');
                            }
                    }
            }
    
            function logout(){
            $this->M_global_model->ntf_swal('Informasi', 'Selamat Anda Berhasil Logout', 'info'); 
            redirect('auth');
            
        }
        
    }


