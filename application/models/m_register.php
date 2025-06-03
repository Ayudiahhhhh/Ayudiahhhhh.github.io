<?php

class M_register extends CI_Model {

    // Fungsi untuk proses register
    public function proses_register($user, $pass, $role)
    {
        // Data yang akan disimpan ke dalam tabel users
        $data = array(
            'username' => $user,
            'password' => $pass,
            'role' => $role
        );

        // Menyimpan data ke dalam tabel users
        return $this->db->insert('users', $data);
    }
}
