<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('cart');
		$this->load->model('M_global_model');
		$this->load->model('Produk_model');
	
    }

	public function index()
	{
		$data['title']  = 'UNGGULAN DESA';
		$judul['Judul'] = 'Input Produk';
		$queryAll = $this->Produk_model->ambildata();
		$DATA = array('produk' => $queryAll);
		$tampilan = $judul + $DATA + $data;   
		$this->load->view('landing_page',$tampilan);
	}
	
	public function tambah_ke_keranjang($id){

		$produk = $this->Produk_model->find($id);
		$data = array(
			'id'      => $produk->id,
			'qty'     => 1,
			'price'   => $produk->harga,
			'name'    => $produk->nama,
			
	);
	
	$this->cart->insert($data);
	redirect('welcome');
	}	
	
	
}
