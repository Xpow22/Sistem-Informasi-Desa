<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Model_kelahiran extends CI_Model 
{
    public function input_data($data)
    {
        return $this->db->insert('tb_kelahiran', $data);
    }       
    
    function ambildata()
      {
        $query = $this->db->get('tb_kelahiran');
        return $query->result();
      }

      function delete($id)
		{
			return $this->db->where('id', $id)->delete('tb_kelahiran');
    }

    function getDataDetail($id) 
    {
			$this->db->where('id', $id);
			$query = $this->db->get('tb_kelahiran');
			return $query->row();
		}
             
      function updateData($id, $data) {
			return $this->db->where('id', $id)->update('tb_kelahiran', $data);
		}
}


/* End of file Model_kelahiran_model.php and path \application\models\Model_kelahiran_model.php */
