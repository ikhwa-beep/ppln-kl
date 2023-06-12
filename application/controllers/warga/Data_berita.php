<?php

class Data_berita extends CI_Controller{
    public function index(){
        $data['berita'] = $this->Model->get_data('berita')->result();
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Berita', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
    public function detail($id){
        $data['detail_berita'] = $this->Model->get_detail('berita', $id)->result();
        $data['berita_selain'] = $this->Model->get_berita_selain($id)->result();
        $data['konfigurasi'] = $this->Model->get_data('konfigurasi')->result();
        $this->load->view('layout_warga/Header', $data);
        $this->load->view('warga/Detail_berita', $data);
        $this->load->view('layout_warga/Footer', $data);
    }
}
?>