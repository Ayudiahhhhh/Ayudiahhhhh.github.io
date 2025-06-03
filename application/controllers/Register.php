<?php

class Register extends CI_Controller {

    public function __construct()
    {  
        parent::__construct();
        
        $this->load->model('m_register');    
        $this->load->model('m_catatan'); 
    }

    public function index()
    {
        $data['users'] = $this->m_catatan->tampil_data()->result(); 
        $this->load->view('templates/header');
        $this->load->view('v_register', $data);
    }

    public function proses_register()   
    {
        // Mengambil data dari form
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $role = $this->input->post('role');

        // Hash password sebelum disimpan
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Memanggil model untuk melakukan proses register
        $this->m_register->proses_register($user, $hashed_password, $role);

        // Redirect atau beri informasi setelah proses selesai
        $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Register Berhasil",
  icon: "success"
});</script>');
 redirect('login');  // Redirect ke halaman login setelah berhasil register
    }
}
