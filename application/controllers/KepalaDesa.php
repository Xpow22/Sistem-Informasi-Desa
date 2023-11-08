
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepalaDesa extends CI_Controller {


        public function index(){
                $data['title']  = 'UNGGULAN DESA';
                $this->load->view('template/header',$data);	
                $this->load->view('kades/sidebar_kades');	
                $this->load->view('kades/main_content');	
                $this->load->view('template/footer');	
                
            }
}