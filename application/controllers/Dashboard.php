
<?php
class Dashboard extends CI_Controller{

    public function index()
    {
        $this->M_squrity->getSqurity();

        $this->load->model('m_dashboard');
     

        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        if ($this->session->userdata('role') == 'admin') {
               $data = $this->m_dashboard->getDashboardData();
            $this->load->view('v_dashboard', $data);            # code...
        }else{
               $data = $this->m_dashboard->getDashboardDataByUser();
            //    var_dump($data);
            //    die;
            $this->load->view('v_dashboarduser', $data);   
        }
        $this->load->view('templates/footer');
    }
}
