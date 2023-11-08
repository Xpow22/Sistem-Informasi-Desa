<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Model_kematian extends CI_Model 
{
    public function input_data($data)
    {
        return $this->db->insert('tb_kematian', $data);
    }       
    
    function ambildata()
      {
        $query = $this->db->get('tb_kematian');
        return $query->result();
      }

      function delete($id)
		{
			return $this->db->where('id', $id)->delete('tb_kematian');
    }

    function getDataDetail($id) 
    {
			$this->db->where('id', $id);
			$query = $this->db->get('tb_kematian');
			return $query->row();
		}
             
        function updateData($id, $data) {
			return $this->db->where('id', $id)->update('tb_kematian', $data);
		}                   
                        
}


/* End of file Model_kematian_model.php and path \application\models\Model_kematian_model.php */
