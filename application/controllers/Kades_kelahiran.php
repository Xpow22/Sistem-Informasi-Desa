<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades_kelahiran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kelahiran');
        $this->load->model('M_global_model');
    }

    public function index()
    {
        $data['title']  = 'Kelahiran';
        $judul['Judul']  = 'Kelahiran';
        $queryAll = $this->Model_kelahiran->ambildata();
        $DATA = array('Kelahiran' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('kades/sidebar_kades');	
        $this->load->view('kades/kelahiran',$tampilan);	
        $this->load->view('template/footer');	
    }
}

/* End of file Kades_kelahiran.php and path \application\controllers\Kades_kelahiran.php */
