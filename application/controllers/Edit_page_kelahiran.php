<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_page_kelahiran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('M_global_model');
		$this->load->model('Model_kelahiran');
		$this->load->library('session');
    }

     function edit_page($id) 
                {
                    $data['title']  = 'Page Edit Data Siswa';
                    $judul['Judul']  = 'Edit Data Kelahiran';
                    // $getData = $this->Model_kelahiran->ambildata();
                    // $Tampil = array('Get_lahir' => $getData);
                    $queryDetail = $this->Model_kelahiran->getDataDetail($id);
                    $edit = array('queryEdit' => $queryDetail);
                    $tampilan = $edit + $judul;
                    $this->load->view('template/header',$data);	
                    $this->load->view('template/sidebar');	
                    $this->load->view('admin/form_edit_kelahiran',$tampilan);	
                    $this->load->view('template/footer');	

                }       
}

/* End of file Edit_page_kelahiran.php.php and path \application\controllers\Edit_page_kelahiran.php.php */
