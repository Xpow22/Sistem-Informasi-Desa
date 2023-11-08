<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_form_produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title']  = 'Input Form Produk';
        $judul['Judul'] = 'Input Form Produk';
        $this->load->view('template/header',$data);	
        $this->load->view('template/sidebar');	
        $this->load->view('admin/input_form_produk',$judul);	
        $this->load->view('template/footer');	
    }

  
}

/* End of file Input_form_produk.php and path \application\controllers\Input_form_produk.php */
