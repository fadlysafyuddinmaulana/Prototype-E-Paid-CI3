<?php
class Siswa extends CI_Controller
{
    // start siswa
    public function data_siswa()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'siswa';

        $data['profile']    = $this->db->get('petugas')->row();
        $data['siswa']      = $this->M_sql->get_siswa()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function add_siswa()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'siswa';

        $data['profile']    = $this->db->get('petugas')->row();
        $data['kelas']      = $this->db->get('kelas')->result();
        $data['spp']        = $this->db->get('spp')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('siswa/add_siswa', $data);
        $this->load->view('template/footer', $data);
    }

    public function edit_siswa($nisn)
    {
        $data['title']         = 'Pembayaran SPP';
        $data['aktif']         = 'siswa';

        $data['profile']    = $this->db->get('petugas')->row();
        $data['siswa']      = $this->M_sql->get_one($nisn)->row();
        $data['kelas']      = $this->db->get('kelas')->result();
        $data['spp']        = $this->db->get('spp')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('siswa/edit_siswa', $data);
        $this->load->view('template/footer', $data);
    }

    public function proses_siswa()
    {
        $nisn       = $this->input->post('nisn');
        $nis        = $this->input->post('nis');
        $nama       = $this->input->post('nama');
        $id_kelas   = $this->input->post('kelas');
        $id_spp     = $this->input->post('spp');
        $alamat     = $this->input->post('alamat');
        $no_telp    = $this->input->post('no_telp');

        $data       = array(
            'nisn'      => $nisn,
            'nis'       => $nis,
            'nama'      => $nama,
            'id_kelas'  => $id_kelas,
            'alamat'    => $alamat,
            'no_telp'   => $no_telp,
            'id_spp'    => $id_spp,
        );

        $this->M_sql->insert_table($data, 'siswa');
        redirect('data-siswa');
    }

    public function proses_edit_siswa()
    {
        $nisn       = $this->input->post('nisn');
        $nis        = $this->input->post('nis');
        $nama       = $this->input->post('nama');
        $id_kelas   = $this->input->post('kelas');
        $alamat     = $this->input->post('alamat');
        $no_telp    = $this->input->post('no_telp');
        $id_spp     = $this->input->post('spp');

        $where = array(
            'nisn'  => $nisn
        );

        $data = array(
            'nisn'      => $nisn,
            'nis'       => $nis,
            'nama'      => $nama,
            'id_kelas'  => $id_kelas,
            'alamat'    => $alamat,
            'no_telp'   => $no_telp,
            'id_spp'    => $id_spp,
        );

        $this->M_sql->update_record($where, $data, 'siswa');
        redirect('data-siswa');
    }

    public function delete_siswa($nisn)
    {
        $where = array(
            'nisn' => $nisn
        );

        $this->M_sql->delete_record($where, 'siswa');
        redirect('data-siswa');
    }

    // end siswa

    // start kelas
    public function data_kelas()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'kelas';

        $data['kelas']      = $this->db->get('kelas')->result();
        $data['profile']    = $this->db->get('petugas')->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function add_kelas()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'kelas';
        $data['profile']    = $this->db->get('petugas')->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('kelas/add_kelas', $data);
        $this->load->view('template/footer', $data);
    }

    public function edit_kelas($id_kelas)
    {
        $data['title']         = 'Pembayaran SPP';
        $data['aktif']         = 'kelas';

        $where = array(
            'id_kelas' => $id_kelas
        );

        $data['profile']    = $this->db->get('petugas')->row();
        $data['kelas']      = $this->M_sql->pick_data($where, 'kelas')->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('kelas/edit_kelas', $data);
        $this->load->view('template/footer', $data);
    }

    public function proses_kelas()
    {
        $nama_kelas         = $this->input->post('nama_kelas');
        $k_keahlian         = $this->input->post('kompetensi_keahlian');

        $data = array(
            'nama_kelas'            => $nama_kelas,
            'kompetensi_keahlian'   => $k_keahlian
        );

        $this->M_sql->insert_table($data, 'kelas');
        redirect('data-kelas');
    }

    public function proses_edit_kelas()
    {
        $idk                = $this->input->post('id_kelas');
        $nama_kelas         = $this->input->post('nama_kelas');
        $k_keahlian         = $this->input->post('kompetensi_keahlian');

        $where = array(
            'id_kelas'  => $idk
        );

        $data = array(
            'nama_kelas'            => $nama_kelas,
            'kompetensi_keahlian'  => $k_keahlian
        );

        $this->M_sql->update_record($where, $data, 'kelas');
        redirect('data-kelas');
    }

    public function delete_kelas($idk)
    {
        $where = array(
            'id_kelas' => $idk
        );

        $this->M_sql->delete_record($where, 'kelas');
        redirect('data-kelas');
    }

    // end kelas

    // start spp

    public function data_spp()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'spp';

        $data['profile']    = $this->db->get('petugas')->row();
        $data['spp']        = $this->db->get('spp')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('spp/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function add_spp()
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'spp';

        $data['profile']      = $this->db->get('petugas')->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('spp/add_spp', $data);
        $this->load->view('template/footer', $data);
    }

    public function edit_spp($id_spp)
    {
        $data['title']         = 'Pembayaran SPP';
        $data['aktif']         = 'siswa';

        $where = array(
            'id_kelas' => $id_spp
        );

        $data['siswa'] = $this->M_sql->pick_data($where, 'siswa')->row();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('spp/edit_spp', $data);
        $this->load->view('template/footer', $data);
    }

    public function proses_spp()
    {
        $tahun          = $this->input->post('tahun');
        $nominal        = $this->input->post('nominal');

        $data = array(
            'tahun'     => $tahun,
            'nominal'   => $nominal
        );

        $this->M_sql->insert_table($data, 'spp');
        redirect('data-spp');
    }

    public function proses_edit_spp()
    {
        $ids            = $this->input->post('id_spp');
        $tahun          = $this->input->post('tahun');
        $nominal        = $this->input->post('nominal');

        $where = array(
            'id_kelas'  => $ids
        );

        $data = array(
            'tahun'            => $tahun,
            'nominal'          => $nominal
        );

        $this->M_sql->update_record()($where, $data, 'spp');
        redirect('data-spp');
    }

    public function delete_spp($ids)
    {
        $where = array(
            'id_spp' => $ids
        );

        $this->M_sql->delete_record($where, 'spp');
        redirect('data-spp');
    }

    // end spp
}
