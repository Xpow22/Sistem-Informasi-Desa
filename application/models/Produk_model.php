<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Produk_model extends CI_Model 
{
    function input_data($data)
    {
      return $this->db->insert('tb_produk', $data);
    }   
    
    function ambildata()
      {
        $query = $this->db->get('tb_produk');
        return $query->result();
      }

      function delete($id)
		{
			return $this->db->where('id', $id)->delete('tb_produk');
    }

    public function find($id){
      $result = $this->db->where('id', $id)
                        ->limit(1)
                        ->get('tb_produk');

      if($result->num_rows() > 0){
        return $result->row();
      }else{
        return array();
      }
    }
                        
}


/* End of file Produk_model_model.php and path \application\models\Produk_model_model.php */
