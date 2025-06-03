<?php

class M_login extends CI_Model
{

    // Fungsi untuk proses login
    public function proses_login($user, $pass)
    {

        // Ambil data user berdasarkan username
        $this->db->where('username', $user);
        $query = $this->db->get('users');


        // Jika user ditemukan
        if ($query->num_rows() > 0) {
            $row = $query->row();  // Ambil row data user
            // Verifikasi password menggunakan password_verify
            if (password_verify($pass, $row->password)) {

                // // Jika password cocok, buat session
                $sess = array(
                    'id'       => $row->id,
                    'username' => $row->username,
                    'role' => $row->role,
                    'image' => $row->image,

                );
                $this->session->set_userdata($sess);
                // var_dump($this->session->userdata('role'));
                // die;
                // $this->session->set_userdata([
                //     'id' => $row->id,
                //     'username' => $row->username,
                //     'role' => $row->role
                // ]);
                // return redirect('catatan'); 
                // Redirect ke halaman catatan jika login berhasil
                return $row;
            } else {
                return false;
            }
        }
        return false;
        // Jika login gagal
        // $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Login Gagal, silahkan Periksa Username dan Password!</div>');
        // return redirect('login');  // Kembali ke halaman login jika gagal
    }
}
