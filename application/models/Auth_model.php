<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Auth_model extends CI_Model 
{
    function login($username, $password)
      {
        return $this->db->query("SELECT * FROM tb_users WHERE username='$username' AND password='$password'")->row();
      }  

}
/* End of file Auth_model.php and path \application\models\Auth_model.php */
