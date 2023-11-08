<?php
class Model_user extends CI_Model {

    
    public function get_users() {
        $query = $this->db->get('tb_users');
        return $query->result();
    }
    function updateData($id, $data) {
        return $this->db->where('id', $id)->update('tb_users', $data);
    }

    function input_data($data)
    {
      return $this->db->insert('tb_users', $data);
    }
    function delete($id)
        {
        return $this->db->where('id', $id)->delete('tb_users');
        }
      

}