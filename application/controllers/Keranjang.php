
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {


        public function index(){
                $data['title']  = 'UNGGULAN DESA';
                $this->load->view('keranjang',$data);	
            }


         
}