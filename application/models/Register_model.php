<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Register_model extends CI_Model 
{
    function input_data($data)
    {
      return $this->db->insert('tb_register', $data);
    }   
                   
                        
}


/* End of file Register_model.php and path \application\models\Register_model.php */
