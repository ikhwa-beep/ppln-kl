<?php

class Data_pertanyaan extends CI_Controller
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
        $data['pertanyaan'] = $this->Model->get_data('pertanyaan')->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_pertanyaan', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_pertanyaan()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_pertanyaan');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_pertanyaan_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_pertanyaan();
        } else {
            $pertanyaan = $this->input->post('pertanyaan');
            $jawaban = $this->input->post('jawaban');

            $data = array(
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban,
            );
            $this->Model->insert_data('pertanyaan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            pertanyaan Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_pertanyaan');
        }
    }
    public function edit_pertanyaan($id)
    {
        $data['pertanyaan'] = $this->Model->get_detail('pertanyaan', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_pertanyaan', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_pertanyaan_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_pertanyaan($id);
        } else {
            $pertanyaan = $this->input->post('pertanyaan');
            $jawaban = $this->input->post('jawaban');

            $data = array(
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban,
            );
            $this->Model->update_data('pertanyaan', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            pertanyaan Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_pertanyaan');
        }
    }
    public function hapus_pertanyaan($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('pertanyaan', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        pertanyaan Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_pertanyaan');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
    }
}
