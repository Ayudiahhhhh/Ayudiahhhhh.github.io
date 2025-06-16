<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Catatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->M_squrity->getSqurity();
        $this->load->model('m_catatan');
    }

    public function index()
    {
        $status = $this->input->get('status'); // Ambil status dari URL

        if ($this->session->userdata('role') == 'admin') {
            $query = $this->m_catatan->get_all_catatan();
        } else {
            $user_id = $this->session->userdata('id');
            $query = $this->m_catatan->get_user_catatan($user_id);
        }

        // Filter berdasarkan status jika ada
        if (!empty($status)) {
            $query = array_filter($query, function ($row) use ($status) {
                return strtolower($row->status) == strtolower($status);
            });
        }

        $data['catatan_kegiatan'] = $query;

        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('v_catatan_harian', $data);
        $this->load->view('templates/footer');
    }



    public function tambahcatatan()
    {
        $hari    = $this->input->post('hari');
        $tanggal = $this->input->post('tanggal');
        $catatan = $this->input->post('catatan');
        $status = $this->input->post('status');


        $data = [

            'hari'    => $hari,
            'tanggal' => $tanggal,
            'users_id' => $this->session->userdata('id'),
            'catatan' => $catatan,
            'status' => $status,

        ];

        $this->m_catatan->input_data($data, 'catatan_kegiatan');
        $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Tambah Data Berhasil",
  icon: "success"
});</script>');
        redirect('catatan');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_catatan->hapus_data($where, 'catatan_kegiatan');
        $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Hapus Data Berhasil",
  icon: "success"
});</script>');
        redirect('catatan/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['catatan_kegiatan'] = $this->m_catatan->edit_data($where, 'catatan_kegiatan')->result();
        $this->load->view('edit', $data);
    }

    public function updatecatatan()
    {
        $id                 = $this->input->post('id');
        $hari              = $this->input->post('hari');
        $tanggal            = $this->input->post('tanggal');
        $catatan            = $this->input->post('catatan');

        $data = array(
            'hari'          => $hari,
            'tanggal'       => $tanggal,
            'catatan'       => $catatan,
        );
        $where = array(
            'id'          => $id
        );
        $this->m_catatan->update_data($where, $data, 'catatan_kegiatan');
        $this->session->set_flashdata('message', '<script>Swal.fire({
  title: "Success!",
  text: "Edit Data Berhasil",
  icon: "success"
});</script>');
        redirect('catatan/index');
    }
    public function detail($id)
    {
        $cttan = $this->m_catatan->detail_data($id);
        $data['cttan'] = $cttan;
        $this->load->view('v_detail', $data);
    }
    public function pdf()
    {

        $this->load->library('pdfgenerator');
        $data['title'] = "Data Random";
        $data['catatan_kegiatan'] = $this->m_catatan->tampil_data('catatan_kegiatan')->result();
        $file_pdf = "test";
        $paper = 'A4';
        $orientation = "landscape";
        $html = $this->load->view('laporan_pdf', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function excel()
    {
        $data['catatan'] = $this->m_catatan->tampil_data('catatan_kegiatan')->result();

        // Membuat objek spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menetapkan properti file
        $spreadsheet->getProperties()->setCreator("Framework Dunia");
        $spreadsheet->getProperties()->setLastModifiedBy("Framework Dunia");
        $spreadsheet->getProperties()->setTitle("Daftar catatan");

        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'Hari');
        $sheet->setCellValue('C1', 'Tanggal');
        $sheet->setCellValue('D1', 'Catatan');
        $sheet->setCellValue('E1', 'Status');

        $baris = 2;
        $no = 1;

        foreach ($data['catatan'] as $cttan) {
            $sheet->setCellValue('A' . $baris, $no++);
            $sheet->setCellValue('B' . $baris, $cttan->hari);
            $sheet->setCellValue('C' . $baris, $cttan->tanggal);
            $sheet->setCellValue('D' . $baris, $cttan->catatan);
            $sheet->setCellValue('E' . $baris, $cttan->status);
            $baris++;
        }
        $filename = "Data catatan.xlsx";

        // Menyediakan file untuk diunduh oleh user
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Menulis file Excel dan mengirimkan ke browser
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function excel_html()
    {
        $data['catatan_kegiatan'] = $this->m_catatan->tampil_data('catatan_kegiatan')->result();
        $this->load->view('catatan_kegiatan_excel', $data);
    }
}
