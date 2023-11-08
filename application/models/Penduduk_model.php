<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Penduduk_model extends CI_Model 
{

    function ambildata()
      {
        $query = $this->db->get('tb_penduduk');
        return $query->result();
      }

    function updateData($id, $data) {
        return $this->db->where('id', $id)->update('tb_penduduk', $data);

    }                    
                        
}


/* End of file Penduduk_model.php and path \application\models\Penduduk_model.php */
