<?php
    class M_Ayu extends CI_Model {
        
        public function tampil_data() 
        {
            return $this->db->get('profil_pribadi');
        }

        public function input_data($data, $table) 
        {
            return $this->db->insert($table, $data);
        }

        public function hapus_data($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function edit_data($where,$table)
        {
            $this->db->where($where); 
            return $this->db->get($table,$where);
        }
        public function update_data($where,$data,$table)
        {
            $this->db->where($where);
            $this->db->update($table,$data);

        }

         public function detail_data($id) {
        return $this->db->get_where('profil_pribadi', ['id' => $id])->row();
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('profil_pribadi');
        $this->db->like('nama', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('no_telp', $keyword);
        return $this->db->get()->result();
    }
    }

       
