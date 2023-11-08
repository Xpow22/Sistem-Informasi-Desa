<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades_kematian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kematian');
        $this->load->model('M_global_model');
    }

    public function index()
    {
        $data['title']  = 'Kematian';
        $judul['Judul']  = 'Kematian';
        $queryAll = $this->Model_kematian->ambildata();
        $DATA = array('Kematian' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('kades/sidebar_kades');	
        $this->load->view('kades/kematian',$tampilan);	
        $this->load->view('template/footer');	
    }
}

/* End of file Kades_kematian.php and path \application\controllers\Kades_kematian.php */
