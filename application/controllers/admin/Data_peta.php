<?php

class Data_peta extends CI_Controller
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
        $data['peta'] = $this->Model->get_detail('peta', 1)->result();
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_update_peta', $data);
        $this->load->view('layout_admin/Footer');
    }
    public function edit_peta_aksi($id)
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $kuala_lumpur = $this->input->post('kuala_lumpur');
            $putrajaya = $this->input->post('putrajaya');
            $selangor = $this->input->post('selangor');
            $perak = $this->input->post('perak');
            $kelantan = $this->input->post('kelantan');
            $terengganu = $this->input->post('terengganu');

            $data = array(
                'kuala_lumpur' => $kuala_lumpur,
                'putrajaya' => $putrajaya,
                'selangor' => $selangor,
                'perak' => $perak,
                'kelantan' => $kelantan,
                'terengganu' => $terengganu,
            );
            $this->Model->update_data('peta', $data, array('id' => $id));
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            peta Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_peta');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('kuala_lumpur', 'Kuala Lumpur', 'required');
        $this->form_validation->set_rules('putrajaya', 'Putrajaya', 'required');
        $this->form_validation->set_rules('selangor', 'Selangor', 'required');
        $this->form_validation->set_rules('perak', 'Perak', 'required');
        $this->form_validation->set_rules('kelantan', 'Kelantan', 'required');
        $this->form_validation->set_rules('terengganu', 'Terengganu', 'required');
    }
}
