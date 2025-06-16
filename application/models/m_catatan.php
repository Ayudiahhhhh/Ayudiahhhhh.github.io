<?php
class M_Catatan extends CI_Model
{

    public function tampil_data()
    {
        if ($this->session->userdata('role') != "admin") {
            return $this->db->get_where('catatan_kegiatan', ['users_id' => $this->session->userdata('id')]);
        }

        return $this->db->get('catatan_kegiatan');
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


    public function detail_data($id)
    {
        // tambahkan script begini ketika ingin mengjoinkan tabeldb
        $this->db->select('catatan_kegiatan.*, users.username');
        $this->db->from('catatan_kegiatan');
        $this->db->join('users', 'users.id = catatan_kegiatan.users_id');
        $this->db->where('catatan_kegiatan.id', $id);
        return $this->db->get()->row();
    }


    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('catatan_kegiatan');
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('no_telp', $keyword);
        return $this->db->get()->result();
    }

    public function get_user_catatan($user_id)
    {
        $this->db->select('catatan_kegiatan.*, users.username');
        $this->db->from('catatan_kegiatan');
        $this->db->join('users', 'catatan_kegiatan.users_id = users.id');
        $this->db->where('catatan_kegiatan.users_id', $user_id);
        return $this->db->get()->result();
    }

    public function get_all_catatan()
    {
        $this->db->select('catatan_kegiatan.*, users.username');
        $this->db->from('catatan_kegiatan');
        $this->db->join('users', 'catatan_kegiatan.users_id = users.id');
        return $this->db->get()->result();
    }

    public function get_all_catatan_by_status($status)
{
    $this->db->select('catatan_kegiatan.*, users.username');
    $this->db->from('catatan_kegiatan');
    $this->db->join('users', 'catatan_kegiatan.users_id = users.id');
    $this->db->where('status', $status);
    return $this->db->get()->result();
}

public function get_user_catatan_by_status($user_id, $status)
{
    $this->db->select('catatan_kegiatan.*, users.username');
    $this->db->from('catatan_kegiatan');
    $this->db->join('users', 'catatan_kegiatan.users_id = users.id');
    $this->db->where('catatan_kegiatan.users_id', $user_id);
    $this->db->where('catatan_kegiatan.status', $status);
    return $this->db->get()->result();
}

}
