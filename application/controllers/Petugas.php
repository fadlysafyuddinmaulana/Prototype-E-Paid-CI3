<?php
class Petugas extends CI_Controller
{
    public function index()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'petugas';

        $data['profile']      = $this->db->get('petugas')->row();
        $data['petugas']      = $this->db->get('petugas')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('template/footer', $data);
    }


    public function add_petugas()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'petugas';

        $data['profile']    = $this->db->get('petugas')->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('petugas/add_petugas', $data);
        $this->load->view('template/footer', $data);
    }

    public function edit_petugas($idp)
    {
        $data['title']         = 'Pembayaran SPP';
        $data['aktif']         = 'petugas';
        $where = array(
            'id_petugas' => $idp
        );

        $data['profile']    = $this->db->get('petugas')->row();
        $data['petugas'] = $this->M_sql->pick_data($where, 'petugas')->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('petugas/edit_petugas', $data);
        $this->load->view('template/footer', $data);
    }

    public function proses_add_petugas()
    {
        $idp                = random_string('numeric', 8);
        $username           = $this->input->post('username');
        $password           = md5($this->input->post('password'));
        $nama_petugas       = $this->input->post('nama_petugas');
        $level_role         = $this->input->post('level');

        $this->form_validation->set_rules(
            'verification-password',
            'Verification Password',
            'required',
            [
                'required' => 'Password tidak ada!'
            ]
        );

        $data = array(
            'id_petugas'     => $idp,
            'username'       => $username,
            'password'       => $password,
            'nama_petugas'   => $nama_petugas,
            'level'          => $level_role
        );

        $this->M_sql->insert_table($data, 'petugas');
        redirect('petugas');
    }

    public function proses_edit_petugas()
    {
        $idp            = $this->input->post('idp');
        $username       = $this->input->post('username');
        $password_hidden    = $this->input->post('password');
        $password           = md5($this->input->post('password'));
        $nama_petugas   = $this->input->post('nama_petugas');
        $level_role     = $this->input->post('level');

        $where = array(
            'id_petugas' => $idp
        );

        if ($password_hidden == '') {
            $data = array(
                'id_petugas'     => $idp,
                'username'       => $username,
                'nama_petugas'   => $nama_petugas,
                'level'          => $level_role
            );
        } else {
            $data = array(
                'id_petugas'     => $idp,
                'username'       => $username,
                'password'       => $password,
                'nama_petugas'   => $nama_petugas,
                'level'          => $level_role
            );
        }

        $this->M_sql->update_record($where, $data, 'petugas');
        redirect('petugas');
    }

    public function delete_petugas($idp)
    {
        $where = array('id_petugas' => $idp);
        $this->M_sql->delete_record($where, 'petugas');
        redirect('petugas');
    }
}
