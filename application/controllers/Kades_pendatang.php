<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades_pendatang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendatang_model');
        $this->load->model('M_global_model');
    }

    public function index()
    {
        $data['title']  = 'Pendatang';
        $judul['Judul']  = 'Pendatang';
        $queryAll = $this->Pendatang_model->ambildata();
        $DATA = array('Pendatang' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('kades/sidebar_kades');	
        $this->load->view('kades/pendatang',$tampilan);	
        $this->load->view('template/footer');	
    }

    
}

/* End of file Kades_pendatang.php and path \application\controllers\Kades_pendatang.php */
