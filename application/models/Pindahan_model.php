<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pindahan_model extends CI_Model 
{
    public function input_data($data)
    {
        return $this->db->insert('tb_pindahan', $data);
    }       
    
    function ambildata()
      {
        $query = $this->db->get('tb_pindahan');
        return $query->result();
      }

      function delete($id)
		{
			return $this->db->where('id', $id)->delete('tb_pindahan');
    }

    function getDataDetail($id) 
    {
			$this->db->where('id', $id);
			$query = $this->db->get('tb_pindahan');
			return $query->row();
		}
             
        function updateData($id, $data) {
			return $this->db->where('id', $id)->update('tb_pindahan', $data);
		}                   
                           
                        
}


/* End of file Pindahan_model.php and path \application\models\Pindahan_model.php */
