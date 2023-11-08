
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDataUser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
    }
        public function index(){
                $data['title']  = 'Kelola Data User';
                $judul['Judul']  = 'Kelola Data User';
                $getUser = $this->Model_user->get_users();
                $Tampil = array('Users' => $getUser);
                $tampilan = $judul + $Tampil;
                $this->load->view('template/header',$data);	
                $this->load->view('template/sidebar');	
                $this->load->view('admin/kelola_datauser',$tampilan);	
                $this->load->view('template/footer');	
                
            }

            
            
}