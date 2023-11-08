<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pendatang_model extends CI_Model 
{
    public function input_data($data)
    {
        return $this->db->insert('tb_pendatang', $data);
    }       
    
    function ambildata()
      {
        $query = $this->db->get('tb_pendatang');
        return $query->result();
      }

      function delete($id)
		{
			return $this->db->where('id', $id)->delete('tb_pendatang');
    }

    function getDataDetail($id) 
    {
			$this->db->where('id', $id);
			$query = $this->db->get('tb_pendatang');
			return $query->row();
		}
             
        function updateData($id, $data) {
			return $this->db->where('id', $id)->update('tb_pendatang', $data);
		}                        
                        
}


/* End of file Pendatang_model.php and path \application\models\Pendatang_model.php */
