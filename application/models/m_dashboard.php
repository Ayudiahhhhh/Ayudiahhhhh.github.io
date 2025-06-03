<?php
class M_dashboard extends CI_Model
{

    public function getDashboardData()
    {
        return [
            'total_users' => $this->db->count_all('users'),
            'total_catatan' => $this->db->count_all('catatan_kegiatan')
        ];
    }

    public function getDashboardDataByUser()
    {
       
        return [
            'total_catatan' => $this->db->where('users_id', $this->session->userdata('id'))->count_all_results('catatan_kegiatan'), // count with conditions
            'catatan' => $this->db->where('users_id', $this->session->userdata('id'))->get('catatan_kegiatan')->result() // Fetch the data from the table
        ];
    }
}
