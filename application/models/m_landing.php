<?php
class M_Landing extends CI_Model {

    // Ambil data catatan yang statusnya 'public'
    public function getPublishedCatatan()
    {
        $this->db->where('status', 'public'); // ubah sesuai kebutuhan: 'publish' atau 'public'
        $query = $this->db->get('catatan_kegiatan');
        return $query->result();
    }

    // Hapus fungsi yang tidak terpakai
}
