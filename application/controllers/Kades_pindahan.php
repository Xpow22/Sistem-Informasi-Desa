<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades_pindahan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pindahan_model');
        $this->load->model('M_global_model');
    }

    public function index()
    {
        $data['title']  = 'Pendatang';
        $judul['Judul']  = 'Pendatang';
        $queryAll = $this->Pindahan_model->ambildata();
        $DATA = array('Pindahan' => $queryAll);
        $tampilan = $judul + $DATA;     
        $this->load->view('template/header',$data);	
        $this->load->view('kades/sidebar_kades');	
        $this->load->view('kades/pindahan',$tampilan);	
        $this->load->view('template/footer');	
    }
}

/* End of file Kades_pindahan.php and path \application\controllers\Kades_pindahan.php */
