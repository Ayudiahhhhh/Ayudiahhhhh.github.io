<?php
class M_user extends CI_Model {

    public function tampil_data() 
    {
        return $this->db->get('users');
    }

    public function input_data($data, $table) 
{
    $this->db->insert($table, $data);
    
}


    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

  public function edit_data($where, $table)
    {
        $this->db->where($where); 
        return $this->db->get($table);
    }

   
    public function update_data($where, $data, $table)
    {  
        $this->db->where($where);
        $this->db->update($table, $data);

    }

    public function detail_data($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->or_like('username', $keyword);
        $this->db->or_like('role', $keyword);
        return $this->db->get()->result();
    }


    public function getUserById($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }
}
