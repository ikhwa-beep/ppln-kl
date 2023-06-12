<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['partai'] = $this->Model->get_data('partai')->result();
        $data['tugas'] = $this->Model->get_data('tugas')->result();
        $data['berita'] = $this->Model->get_data('berita')->result();
        $data['anggota'] = $this->Model->get_data('anggota')->result();
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Dashboard', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
    public function peta()
    {
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $data['peta'] = $this->Model->get_detail('peta', 1)->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Peta', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
    public function peta_sebaran(){
        $peta_sebaran = $this->Model->get_detail('peta', 1)->result();
        // $data = $peta_sebaran->result_array();

        echo json_encode($peta_sebaran, JSON_HEX_TAG);
    }
    public function cek_dpt()
    {
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Cek_dpt', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
    public function informasi()
    {
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $data['informasi'] = $this->Model->get_data('informasi')->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Informasi', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
    public function kontak()
    {
        $data['pertanyaan'] = $this->Model->get_data('pertanyaan')->result();
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Kontak', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
    public function kirim_email()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('isi');

        $isi = $message . "\n\nSender Name :" . $name;

        $this->email->from('a167473@siswa.ukm.edu.my', 'Your Name');
        $this->email->to($email);

        $this->email->subject($subject);
        $this->email->message($isi);

        $this->email->send();
    }
}
