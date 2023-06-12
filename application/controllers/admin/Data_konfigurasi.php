<?php

class Data_konfigurasi extends CI_Controller
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
        $data['konfigurasi'] = $this->Model->get_detail('konfigurasi', 1)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_konfigurasi', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_konfigurasi_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $jam_kerja = $this->input->post('jam_kerja');
            $map = $this->input->post('map');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $no_kesekretariatan = $this->input->post('no_kesekretariatan');
            $pesan_wa = $this->input->post('pesan_wa');
            $judul_welcome = $this->input->post('judul_welcome');
            $isi_welcome = $this->input->post('isi_welcome');
            $image = str_replace(' ', '_', $_FILES['image']['name']);

            if ($image == '') {
                $image = 'logo.png';
            } else {
                $config['upload_path']     = './assets/upload/konfigurasi';
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
                'logo_web' => $image,
                'jam_kerja' => $jam_kerja,
                'map' => $map,
                'email' => $email,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'no_kesekretariatan' => $no_kesekretariatan,
                'pesan_wa' => $pesan_wa,
                'judul_welcome' => $judul_welcome,
                'isi_welcome' => $isi_welcome,
            );
            $this->Model->update_data('konfigurasi', $data, array('id' => 1));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Konfigurasi Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Dashboard');
        }
    }
    public function hapus_konfigurasi($id)
    {
        $where = array('id' => $id);
        $this->Model->delete_data('konfigurasi', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Konfigurasi Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_konfigurasi');
    }
    public function reset_konfigurasi(){

        $data = array(
            'logo_web' => 'logo.png',
            'jam_kerja' => 'Senin - Sabtu, 08:00 - 22:00',
            'map' => 'kbri kuala lumpur',
            'email' => 'pplnkualalumpur2023@kpu.go.id',
            'alamat' => 'No. 233, Jln Tun Razak, Imbi, 50400 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur',
            'no_hp' => '+60167347441',
            'no_kesekretariatan' => '+60176450129',
            'pesan_wa' => 'Halo kak, mau nanya seputar tentang PPLN KL, Pantarlih dan KPU dong kak!.',
            'judul_welcome' => 'Welcome to PPLN KL',
            'isi_welcome' => 'Panitia Pemilihan Luar Negeri dan Kelompok Penyelenggara Pemungutan Suara Luar Negeri yang selanjutnya masing-masing disebut PPLN dan KPPSLN adalah penyelenggara pemilihan umum di luar negeri dan di Tempat Pemungutan Suara di luar negeri yang bertugas membantu KPU.',
        );
        $this->Model->update_data('konfigurasi', $data, array('id' => 1));
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Konfigurasi Berhasil Direset!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/Data_konfigurasi');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('jam_kerja', 'Jam Kerja', 'required');
        $this->form_validation->set_rules('map', 'Lokasi Di Map', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP PPLN KL', 'required');
        $this->form_validation->set_rules('no_kesekretariatan', 'No HP Kesekretariatan', 'required');
        $this->form_validation->set_rules('pesan_wa', 'Isi Pesan WhatsApp', 'required');
        $this->form_validation->set_rules('judul_welcome', 'Judul Pesan Pembuka', 'required');
        $this->form_validation->set_rules('isi_welcome', 'Isi Pesan Pembuka', 'required');
    }
}
