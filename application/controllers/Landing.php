<?php
class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Landing');  // pastikan nama model sesuai dengan file model (case sensitive)
    }

    public function index()
    {
        // Ambil data catatan dengan status 'public' dari model
        $data['catatan_kegiatan'] = $this->M_Landing->getPublishedCatatan();
        $this->load->view('v_landing', $data);
    }
}
