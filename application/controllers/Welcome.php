<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
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
}
