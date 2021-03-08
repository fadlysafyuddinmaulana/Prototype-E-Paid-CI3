<?php
class Pembayaran extends CI_Controller
{
    public function index()
    {
        $user = $this->session->userdata('server_spp');

        if ($user == 'siswa') {
            redirect('data_pembayaran/history');
        }

        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'paid';

        $data['profile']        = $this->db->get('petugas')->row();
        $data['siswa']      = $this->M_sql->get_siswa()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function data_pembayaran()
    {
        $user = $this->session->userdata('server_spp');

        if ($user == 'siswa') {
            redirect('data_pembayaran/history');
        }

        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'history';

        $data['profile']        = $this->db->get('petugas')->row();
        $data['pembayaran']     = $this->M_sql->get_data()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('pembayaran/history', $data);
        $this->load->view('template/footer', $data);
    }

    public function history_siswa()
    {
        $user = $this->session->userdata('server_spp');

        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'history';

        $data['profile']    = $this->db->get('siswa')->row();
        $data['siswa']      = $this->M_sql->get_nisn($user['nisn'])->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('pembayaran/history_siswa', $data);
        $this->load->view('template/footer', $data);
    }

    public function transaksi($nisn)
    {
        $data['title']      = 'Pembayaran SPP';
        $data['aktif']      = 'paid';
        // $data['siswa']      = $this->M_sql->get_siswa()->row();

        $data['profile']    = $this->db->get('petugas')->row();
        $data['siswa']      = $this->M_sql->get_one($nisn)->row();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('pembayaran/transaksi', $data);
        $this->load->view('template/footer', $data);
    }

    public function add_pembayaran()
    {
        $user           = $this->session->userdata('server_spp');
        date_default_timezone_get('Asia/Jakarta');

        $id_pembayaran  = random_string('numeric', 11);
        $id_petugas     = $user['id_petugas'];
        $nisn           = $this->input->post('nisn');
        $nominal        = $this->input->post('nominal');
        $tgl            = date('d-m-y');
        $bulan_bayar    = $this->input->post('bulan');
        $tahun_bayar    = $this->input->post('tahun');
        $id_spp         = $this->input->post('id_spp');
        $tarif          = $this->input->post('tarif');

        if ($nominal < $tarif) {
            $data = array(
                'id_pembayaran'     => $id_pembayaran,
                'id_petugas'        => $id_petugas,
                'nisn'              => $nisn,
                'bulan_dibayar'     => $bulan_bayar,
                'tgl_bayar'         => $tgl,
                'tahun_dibayar'     => $tahun_bayar,
                'id_spp'            => $id_spp,
                'jumlah_bayar'    => $tarif
            );
        } else {
            $this->session->set_flashdata('message_fail', '<div class="alert mt-2 alert-danger" role="alert">jumlah tunai yang dimasukkan Kurang!</div>');
            redirect('data-pembayaran');
        }

        $this->M_sql->insert_table($data, 'pembayaran');
        redirect('transaksi');
    }

    public function proses_edit_petugas()
    {
        $id_petugas     = $this->input->post('idp');
        $bulan_bayar    = $this->input->post('bulan_bayar');
        $tahun_bayar    = $this->input->post('tahun_bayar');
        $jumlah_bayar   = $this->input->post('tahun_bayar');

        $where = array(
            'id_petugas' => $id_petugas
        );

        $data = array(
            'bulan_dibayar'         => $bulan_bayar,
            'tahun_bayar'           => $tahun_bayar,
            'jumlah_bayar'          => $jumlah_bayar
        );

        $this->M_sql->update($where, $data, 'siswa');
        redirect('petugas');
    }

    public function delete_pembayaran($id)
    {
        $where = array(
            'id_pembayaran' => $id
        );

        $this->M_sql->delete_record($where, 'pembayaran');
        redirect('data-pembayaran');
    }

    public function report_spp()
    {
        $this->load->library('dompdf_gen');

        $data['spp'] = $this->M_sql->get_data()->result();

        $this->load->view('report/report_spp', $data);

        date_default_timezone_set('Asia/Jakarta');
        $tanggal    = date('dmy');
        $waktu      = date('Hi');

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Report_Pengaduan_' . $tanggal . '' . $waktu . '.pdf', array('Attachment' => 0));
    }
}
