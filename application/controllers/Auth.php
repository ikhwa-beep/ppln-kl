<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout_admin/Header');
            $this->load->view('admin/Login_form');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->Model->cek_login($username, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Salah!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('Auth/login');
            } else {
                $this->session->set_userdata('id', $cek->id);
                $this->session->set_userdata('id_absen', $cek->id_absen);
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                // var_dump($cek);
                // die;
                switch ($cek->role_id) {
                    case 0:
                        redirect('warga/Dashboard');
                        break;
                    case 1:
                        redirect('admin/Dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }
    public function ganti_password()
    {
        $this->load->view('layout_admin/Header');
        $this->load->view('layout_admin/Sidebar');
        $this->load->view('admin/Form_ganti_password');
        $this->load->view('layout_admin/Footer');
    }
    public function ganti_password_aksi()
    {
        $password_lama = $this->input->post('pass');
        $password_baru = $this->input->post('pass1');
        $ulang_password_baru = $this->input->post('pass2');
        $username = $this->session->userdata('username');

        $this->form_validation->set_rules('pass', 'Password Lama', 'required');
        $this->form_validation->set_rules('pass1', 'Password Baru', 'required');
        $this->form_validation->set_rules('pass2', 'Ulangi Password Baru', 'required|matches[pass1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout_admin/Header');
            $this->load->view('layout_admin/Sidebar');
            $this->load->view('admin/Form_ganti_password');
            $this->load->view('layout_admin/Footer');
        } else {
            $cek = $this->ModelApp->cek_login($username, $password_lama);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password Lama Salah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
                redirect('admin/Dashboard/ganti_password');
            } else {
                $data = array('password' => md5($password_baru));
                $id = array('id' => $this->session->userdata('id'));

                $this->ModelApp->update_data('user', $data, $id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Password Berhasil Diupdate, Silahkan Login!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('Auth/login');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/login');
    }
    public function reset_password($id)
    {
        $data = array('password' => md5(123456));
        $where = array('id' => $id);
        $this->Model->update_data('user', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Password Berhasil Direset ke "123456"
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/Data_user');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
}
