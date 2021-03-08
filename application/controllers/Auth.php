<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function proses_siswa()
    {
        $u         = $this->input->post('nis');
        $cek       = $this->M_login->cek_siswa($u);

        if ($cek->num_rows() > 0) {
            $user_data                  = $cek->row_array();
            $session['nisn']            = $user_data['nisn'];
            $session['nis']             = $user_data['nis'];
            $session['nama']            = $user_data['nama'];
            $session['id_spp']          = $user_data['id_spp'];
            $session['level']           = 'siswa';
            $this->session->set_userdata('server_spp', $session);
            redirect('dashboard-siswa');
        } else {
            redirect('siswa');
        }
    }

    public function proses_petugas()
    {

        $u      = $this->input->post('username');
        $p      = md5($this->input->post('password'));
        $cek    = $this->M_login->cek_petugas($u, $p);

        if ($cek->num_rows() > 0) {
            $user_data                  = $cek->row_array();
            $session['id_petugas']      = $user_data['id_petugas'];
            $session['nama_petugas']    = $user_data['nama_petugas'];
            $session['username']        = $user_data['username'];
            $session['password']        = $user_data['password'];
            $session['level']           = $user_data['level'];
            $this->session->set_userdata('server_spp', $session);
            redirect('dashboard-admin');
        } else {
            redirect('admin');
        }
    }

    public function register_proses()
    {
        $this->form_validation->set_rules(
            'val-nik',
            'NIK',
            'is_unique[penduduk.nik_account]',
            ['is_unique' => 'NIK ini sudah di gunakan']
        );

        $this->form_validation->set_rules(
            'val-password',
            'password',
            'required',
            [
                'required' => 'Password Wajib Di isi!'
            ]
        );

        $this->form_validation->set_rules(
            'val-password-verification',
            'Password Verification',
            'required|matches[val-password]',
            [
                'required' => 'Password Wajib Di isi!',
                'matches'  => 'Passwod Tidak Sama!'
            ]
        );

        $this->form_validation->set_rules(
            'terms',
            'Accept Rules',
            'required',
            [
                'required'  => 'Anda Harus Menyetujui Aturan ini'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title']         = 'Keluhan Masyarakat';

            $this->load->view('template/header_login', $data);
            $this->load->view('starter_page/register');
            $this->load->view('template/footer_login');
        } else {
            $nik = $this->input->post('val-nik');

            $cek_nik = $this->M_login->cek_register($nik)->num_rows();

            if ($cek_nik < 1) {
                $data['title']         = 'Keluhan Masyarakat';

                $this->load->view('template/header_login', $data);
                $this->load->view('starter_page/register');
                $this->load->view('template/footer_login');
            } else {
                $this->M_login->register($nik);
                redirect('Login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('siswa');
    }
}
