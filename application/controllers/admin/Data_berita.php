<?php

class Data_berita extends CI_Controller
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
        $data['berita'] = $this->Model->get_data('berita')->result();

        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Data_berita', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_berita()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_tambah_berita');
        $this->load->view('layout_admin/Footer');
    }
    public function tambah_berita_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_berita();
        } else {
            $judul = $this->input->post('judul');
            $isi_singkat = $this->input->post('isi_singkat');
            $isi = $this->input->post('isi');
            $image = str_replace(' ', '_', $_FILES['image']['name']);
            if ($image == '') {
                $image = 'logo_KPU.png';
            } else {
                $config['upload_path']     = './assets/upload/berita';
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
                'judul' => $judul,
                'isi_singkat' => $isi_singkat,
                'isi' => $isi,
                'gambar' => $image,
            );
            $this->Model->insert_data('berita', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berita Berhasil Ditambah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_berita');
        }
    }
    public function edit_berita($id)
    {
        $data['berita'] = $this->Model->get_detail('berita', $id)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_berita', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_berita_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->edit_berita($id);
        } else {
            $judul = $this->input->post('judul');
            $isi_singkat = $this->input->post('isi_singkat');
            $isi = $this->input->post('isi');
            $image = str_replace(' ', '_', $_FILES['image']['name']);
            if ($image == '') {
                $image = 'logo_KPU.png';
            } else {
                $config['upload_path']     = './assets/upload/berita';
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
                'judul' => $judul,
                'isi_singkat' => $isi_singkat,
                'isi' => $isi,
                'gambar' => $image,
            );
            $this->Model->update_data('berita', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berita Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_berita');
        }
    }
    public function hapus_berita($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('berita', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Berita Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_berita');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi_singkat', 'Isi Singkat', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
    }
}
