<?php

class Data_anggota extends CI_Controller
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
        $data['anggota'] = $this->Model->get_data('anggota')->result();

        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_anggota', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_anggota()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_anggota');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_anggota_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_anggota();
        } else {
            $nama = $this->input->post('nama');
            $jabatan = $this->input->post('jabatan');
            $image = str_replace(' ', '_', $_FILES['image']['name']);
            if ($image == '') {
                $image = 'logo_KPU.png';
            } else {
                $config['upload_path']     = './assets/upload/anggota';
                $config['allowed_types']   = '*';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    echo "image Gagal DiUpload!";
                    die();
                } else {
                    $image = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'gambar' => $image,
            );
            $this->Model->insert_data('anggota', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anggota Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_anggota');
        }
    }
    public function edit_anggota($id)
    {
        $data['anggota'] = $this->Model->get_detail('anggota', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_anggota', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_anggota_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_anggota($id);
        } else {
            $nama = $this->input->post('nama');
            $jabatan = $this->input->post('jabatan');
            $image = str_replace(' ', '_', $_FILES['image']['name']);
            if ($image == '') {
                $image = 'logo_KPU.png';
            } else {
                $config['upload_path']     = './assets/upload/anggota';
                $config['allowed_types']   = '*';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    echo "image Gagal DiUpload!";
                    die();
                } else {
                    $image = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'gambar' => $image,
            );
            $this->Model->update_data('anggota', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anggota Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_anggota');
        }
    }
    public function hapus_anggota($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('anggota', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        anggota Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_anggota');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
    }
}
