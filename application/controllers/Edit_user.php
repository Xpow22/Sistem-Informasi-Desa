
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('M_global_model');
    }



public function fungsiEdit()
	{
				$id = $this->input->post('id');
				$username = $this->input->post('username');
                $password = $this->input->post('password');
                $role_id = $this->input->post('role_id');
                
              
                
                $data = array(
                        'username' => $username,
                        'password' => $password,
                        'role_id' => $role_id
                               
                );
        
                $query = $this->Model_user->updateData($id, $data);

		
		
		if($query){
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil update data', 'success');
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Gagal update data', 'error');
		}
		redirect(base_url('KelolaDataUser'));

	}

    public function fungsiDelete($id)
	{
		$query = $this->Model_user->delete($id);
		if($query){
			
			$this->M_global_model->ntf_swal('Informasi', 'Berhasil hapus data', 'success');
		} else {
			$this->M_global_model->ntf_swal('Informasi', 'Gagal hapus data', 'error');
		}
		redirect(base_url('KelolaDataUser'));
    }
}