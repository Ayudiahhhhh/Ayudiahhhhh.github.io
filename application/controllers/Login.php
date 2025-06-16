<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->M_squrity->getSqurity();
        $this->load->model('m_login');
        $this->load->model('m_user');
    }

    public function index()
    {

        $this->session->set_flashdata('swal_title', 'Title Swal');
        $this->session->set_flashdata('swal_text', 'Text Swal');
        $this->session->set_flashdata('swal_icon', 'success');
        $data['users'] = $this->m_user->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('v_login', $data);
    }



    public function proses_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->m_login->proses_login($username, $password); // pastikan ini return data user
        // Di controller login

        if ($user) {
            // $this->session->set_userdata($user);
            // session_write_close();
            // echo '<pre>';
            // var_dump($this->session->all_userdata());
            // echo '</pre>';
            // die;
            // var_dump($this->session->userdata('user')->id);
            // die;
            // Login berhasil
            // echo "Login Berhasil"; // Cek apakah ini muncul
            $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Login Berhasil",
  icon: "success"
});</script>');
            if ($user->role == 'admin') {
                return redirect('dashboard');
            }
            return redirect('catatan');
        } else {
            // Login gagal
            echo "Login Gagal"; // Cek apakah ini muncul
            $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Failed!",
  text: "Login Gagal",
  icon: "error"
});</script>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Logout Berhasil",
  icon: "success"
});</script>');
        redirect('login');
    }
}
