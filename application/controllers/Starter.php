<?php

class Starter extends CI_Controller
{
    public function siswa()
    {
        $data['title'] = "SMK A";

        $this->load->view('template/header_login', $data);
        $this->load->view('starter_page/login_user');
        $this->load->view('template/footer_login', $data);
    }
    public function admin()
    {
        $data['title'] = "SMK A";

        $this->load->view('template/header_login', $data);
        $this->load->view('starter_page/login_petugas');
        $this->load->view('template/footer_login', $data);
    }
}
