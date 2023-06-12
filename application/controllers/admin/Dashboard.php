<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('Auth/login');
        }

        $session_admin = $this->session->userdata('role_id');
        if ($session_admin != 1) {
            $this->session->sess_destroy();
            redirect('Auth/login');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Kamu Perlu Masuk Sebagai Admin Untuk Mengakses Halaman Ini!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
    }
    public function index()
    {
        $data['total_berita'] = $this->Model->get_data('berita')->num_rows();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Dashboard', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function konfigurasi()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Konfigurasi');
        $this->load->view('layout_admin/Footer');
    }
}
