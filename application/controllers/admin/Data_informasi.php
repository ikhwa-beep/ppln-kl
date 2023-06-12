<?php

class Data_informasi extends CI_Controller
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
        $data['informasi'] = $this->Model->get_data('informasi')->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_informasi', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_informasi()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_informasi');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_informasi_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_informasi();
        } else {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
            );
            $this->Model->insert_data('informasi', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            informasi Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_informasi');
        }
    }
    public function edit_informasi($id)
    {
        $data['informasi'] = $this->Model->get_detail('informasi', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_informasi', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_informasi_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_informasi($id);
        } else {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
            );
            $this->Model->update_data('informasi', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            informasi Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_informasi');
        }
    }
    public function hapus_informasi($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('informasi', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        informasi Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_informasi');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi Informasi', 'required');
    }
}
