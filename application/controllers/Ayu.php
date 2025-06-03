<?php
class Ayu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ayu');
    }

    public function index()
    {
        $data['profil'] = $this->M_ayu->tampil_data()->result(); 
    }

    public function tambah()
    {
        $nama             = $this->input->post('nama');
        $jk               = $this->input->post('jk');
        $tempat           = $this->input->post('tempat');
        $tgl_lahir        = $this->input->post('tgl_lahir');
        $anak_ke          = $this->input->post('anak_ke');
        $alamat           = $this->input->post('alamat');
        $cita_cita        = $this->input->post('cita_cita');
        $hobi             = $this->input->post('hobi');
        $warna_kesukaan   = $this->input->post('warna_kesukaan');
        
        $foto = '';
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = './assets/foto/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                redirect('ayu');
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama'            => $nama,
            'jk'              => $jk,
            'tempat'          => $tempat,
            'tgl_lahir'       => $tgl_lahir,
            'anak_ke'         => $anak_ke,
            'alamat'          => $alamat,
            'cita_cita'       => $cita_cita,
            'hobi'            => $hobi,
            'warna_kesukaan'  => $warna_kesukaan,
            'foto'            => $foto
        ];

        $this->m_ayu->input_data($data, 'profil_pribadi');
        $this->session->set_flashdata('message', 'Data anda berhasil ditambah!');
        redirect('ayu');
    }
}
