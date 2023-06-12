<?php

class Data_tugas extends CI_Controller
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
        $data['tugas'] = $this->Model->get_data('tugas')->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_tugas', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_tugas()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_tugas');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_tugas_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_tugas();
        } else {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $icon = $this->input->post('icon');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'icon' => $icon,
            );
            $this->Model->insert_data('tugas', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Tugas Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_tugas');
        }
    }
    public function edit_tugas($id)
    {
        $data['tugas'] = $this->Model->get_detail('tugas', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_tugas', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_tugas_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_tugas($id);
        } else {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $icon = $this->input->post('icon');

            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'icon' => $icon,
            );
            $this->Model->update_data('tugas', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Tugas Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_tugas');
        }
    }
    public function hapus_tugas($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('tugas', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Tugas Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_tugas');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
    }
}
