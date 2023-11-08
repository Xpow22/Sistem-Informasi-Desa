
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


        public function index(){
                $data['title']  = 'UNGGULAN DESA';
                $this->load->view('template/header',$data);	
                $this->load->view('template/sidebar');	
                $this->load->view('admin/main_content');	
                $this->load->view('template/footer');	
                
            }
}