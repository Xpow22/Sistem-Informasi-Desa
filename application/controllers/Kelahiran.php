
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelahiran extends CI_Controller {

        function __construct()
	{
		parent::__construct();
		$this->load->model('M_global_model');
		$this->load->model('Model_kelahiran');
		$this->load->library('session');
	}
        public function index(){
                $data['title']  = 'Kelahiran';
                $judul['Judul']  = 'Data Kelahiran';
                $queryAll = $this->Model_kelahiran->ambildata();
                $DATA = array('Kelahiran' => $queryAll);
                $tampilan = $judul + $DATA;     
                $this->load->view('template/header',$data);	
                $this->load->view('template/sidebar');	
                $this->load->view('admin/kelahiran',$tampilan);	
                $this->load->view('template/footer');	
                
            }

            public function edit_page($id) 
                {
                    $data['title']  = 'Page Edit Data Siswa';
                 
                    $getData = $this->Model_kelahiran->ambildata();
                    $Tampil = array('Get_lahir' => $getData);
                    $queryDetail = $this->Model_kelahiran->getDataDetail($id);
                    $edit = array('queryEdit' => $queryDetail);
                    $tampilan = $Tampil + $edit;
                    $this->load->view('template/header',$data);	
                    $this->load->view('template/sidebar');	
                    $this->load->view('admin/form_edit_kelahiran',$tampilan);	
                    $this->load->view('template/footer');	

                }       

                public function print(){
                    $queryAll = $this->Model_kelahiran->ambildata();
                    $DATA = array('Kelahiran' => $queryAll);
                    
                    $this->load->view('kades/print_kelahiran',$DATA);
                        
                }
      
}