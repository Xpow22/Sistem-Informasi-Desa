<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Kematian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_global_model');
		$this->load->model('Model_kematian');
		$this->load->library('session');
    }

    public function index()
    {
        $data['title']  = 'Form Kematian';
        $judul['Judul']  = 'Data Kematian';
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/form_data_kematian',$judul);	
        $this->load->view('template/footer');	
    }
}

/* End of file Form_Kematian.php and path \application\controllers\Form_Kematian.php */
