<?php

class Data_user extends CI_Controller
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
        $data['user'] = $this->Model->get_data('user')->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_user', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_user()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_user');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_user_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_user();
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'username' => $username,
                'password' => md5($password),
                'role_id' => 1,
            );
            $this->Model->insert_data('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            User Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_user');
        }
    }
    public function edit_user($id)
    {
        $data['user'] = $this->Model->get_detail('user', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_user', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_user_aksi($id)
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_user($id);
        } else {
            $username = $this->input->post('username');

            $data = array(
                'username' => $username,
            );
            $this->Model->update_data('user', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            User Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_user');
        }
    }
    public function hapus_user($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('user', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        User Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_user');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}
