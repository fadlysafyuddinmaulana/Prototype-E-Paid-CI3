<?php
class Report extends CI_Controller
{
    public function report_spp()
    {
        $this->load->library('dompdf_gen');

        date_default_timezone_set('Asia/Jakarta');
        $tanggal    = date('dmy');
        $waktu      = date('Hi');

        $data['title']     = $tanggal . $waktu;
        $data['spp']       = $this->M_sql->get_data()->result();

        $this->load->view('report/report_spp', $data);



        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan_spp' . $tanggal . '' . $waktu . '.pdf', array('Attachment' => 0));
    }
}
