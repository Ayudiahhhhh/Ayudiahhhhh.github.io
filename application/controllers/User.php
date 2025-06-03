<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->M_squrity->getSqurity();
        $this->load->model('m_user');
    }

    public function index()
    {
        $data['users'] = $this->m_user->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('v_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambahuser()
    {
        $username    = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');


        $data = [

            'username'    => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role

        ];

        $this->m_user->input_data($data, 'users');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       Data berhasil ditambah aken !</div>');
        redirect('user');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_user->hapus_data($where, 'users');
        redirect('user');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['users'] = $this->m_user->edit_data($where, 'users')->result();
        $this->load->view('edit', $data);
    }

    public function updateuser()
    {
        $id                 = $this->input->post('id');
        $username            = $this->input->post('username');
        $password            = $this->input->post('password');
        $role          = $this->input->post('role');
        $image          = $this->input->post('image');

        $data = array(
            'username'          => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT),
            'role'       => $role,
            'image'       => $image,
        );
        $where = array(
            'id'          => $id
        );
        $this->m_user->update_data($where, $data, 'users');
         $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Edit User Berhasil",
  icon: "success"
});</script>');
        redirect('user');
    }


    public function editpp() {
    $user_id = $this->session->userdata('user_id'); 

    $this->load->model('m_user');

    $data['users'] = $this->m_user->getUserById($user_id);
    $this->load->view('templates/header');
    $this->load->view('templates/aside');
    $this->load->view('v_myprofil', $data);
    $this->load->view('templates/footer');
}


public function updateuserpp() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // Upload konfigurasi
    $config['upload_path'] = './assets/foto/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 2048; // 2MB

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        $upload_data = $this->upload->data();
        $image = $upload_data['file_name'];

        // Update session image jika upload berhasil
        $this->session->set_userdata('image', $image);
    } else {
        // Jika tidak upload gambar baru, gunakan yang lama
        $image = $this->session->userdata('image');
    }

    $data = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'image'    => $image
    ];

    $where = ['id' => $this->session->userdata('id')];

    $this->m_user->update_data($where, $data, 'users');

    $this->session->set_flashdata('message', '<script>Swal.fire({
        title: "Success!",
        text: "Edit Profile Berhasil",
        icon: "success"
    });</script>');

    redirect('user/editpp');
}
public function pdf()
    {

        $this->load->library('pdfgenerator');
        $data['title'] = "Data Random";
        $data['users'] = $this->m_user->tampil_data('users')->result();
        $file_pdf = "test";
        $paper = 'A4';
        $orientation = "landscape";
        $html = $this->load->view('laporan_pdf_users', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

   public function excel_html()
{
    $data['users'] = $this->m_user->tampil_data('users')->result();
    $this->load->view('catatan_kegiatan_users', $data);
}
}