<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dompdf_test extends CI_Controller
{

	/**
	 * Example: DOMPDF 
	 *
	 * Documentation: 
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */
	public function index()
	{
		// Load all views as normal
		$this->load->view('report/testreport');
		// Get output html
		$html = $this->output->get_output();

		// Load library
		$this->load->library('dompdf_gen');

		// Configuration Time
		date_default_timezone_set('Asia/Jakarta');
		$tanggal    = date('dmy');
		$waktu      = date('Hi');

		// Configuration Paper
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('Test_Report' . $tanggal . '' . $waktu . '.pdf', array('Attachment' => 0));
	}
}
