<?php

class Data_partai extends CI_Controller
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
        $data['partai'] = $this->Model->get_data('partai')->result();

        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_partai', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_partai()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_partai');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_partai_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_partai();
        } else {
            $nama = $this->input->post('nama');
            $kepanjangan = $this->input->post('kepanjangan');
            $web = $this->input->post('web');
            $image = str_replace(' ', '_', $_FILES['image']['name']);
            if ($image == '') {
                $image = 'logo_KPU.png';
            } else {
                $config['upload_path']     = './assets/upload/partai';
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
                'kepanjangan' => $kepanjangan,
                'web' => $web,
                'gambar' => $image,
            );
            $this->Model->insert_data('partai', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Partai Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_partai');
        }
    }
    public function edit_partai($id)
    {
        $data['partai'] = $this->Model->get_detail('partai', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_partai', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_partai_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_partai($id);
        } else {
            $nama = $this->input->post('nama');
            $kepanjangan = $this->input->post('kepanjangan');
            $web = $this->input->post('web');
            $image = str_replace(' ', '_', $_FILES['image']['name']);
            if ($image == '') {
                $image = 'logo_KPU.png';
            } else {
                $config['upload_path']     = './assets/upload/partai';
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
                'kepanjangan' => $kepanjangan,
                'web' => $web,
                'gambar' => $image,
            );
            $this->Model->update_data('partai', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Partai Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_partai');
        }
    }
    public function hapus_partai($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('partai', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        partai Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_partai');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kepanjangan', 'Kepanjangan', 'required');
        $this->form_validation->set_rules('web', 'Web Partai', 'required');
    }
}
