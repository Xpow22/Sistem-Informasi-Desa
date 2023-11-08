<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InputProduk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->model('M_global_model');
        $this->load->helper('url', 'form');
    }

   
        public function index(){

            $data['title']  = 'UNGGULAN DESA';
            $judul['Judul'] = 'Input Produk';
            $queryAll = $this->Produk_model->ambildata();
            $DATA = array('produk' => $queryAll);
            $tampilan = $judul + $DATA;     
            $this->load->view('template/header',$data);	
            $this->load->view('template/sidebar');	
            $this->load->view('admin/input_produk',$tampilan);	
            $this->load->view('template/footer');	
            
        }

        public function tambah_data()
        {
            $produk = $this->input->post('produk');
            $harga = $this->input->post('harga');
            $gambar = $_FILES['gambar']['name'];
            $deskripsi = $this->input->post('deskripsi');
            
            
            if($gambar=''){}else{
              $config['upload_path'] = './assets/uploads';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              
              $this->load->library('upload', $config);
              if(!$this->upload->do_upload('gambar')){
                $this->M_global_model->ntf_swal('Informasi', 'Silahkan Upload Gambar', 'error');
              }else{
                
                  $gambar=$this->upload->data('file_name');
              }
            }  
      
            $data = array(
              'produk' => $produk,
              'harga' => $harga,
              'gambar' => $gambar,
              'deskripsi' => $deskripsi,
            );
      
           $query = $this->Produk_model->input_data($data,'tb_bukti');
            if($query){
                   
                $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
            } else {
                $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
            }
            redirect('InputProduk');
            
           } 


           public function fungsiDelete($id)
           {
               $query = $this->Produk_model->delete($id);
               if($query){
                   
                   $this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
               } else {
                   $this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
               }
               redirect(base_url('InputProduk'));
           }
        }
    
/* End of file InputProduk.php and path \application\controllers\InputProduk.php */
