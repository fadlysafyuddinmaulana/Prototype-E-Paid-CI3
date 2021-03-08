<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('server_spp') == null) {
			redirect('starter/login_user');
		}
	}

	public function index()
	{
		$user = $this->session->userdata('server_spp');

		if ($user['level'] == 'petugas') {
			redirect('Dashboard/dashboard_petugas');
		} else if ($user['level'] == 'admin') {
			redirect('Dashboard/dashboard_petugas');
		} else {
			redirect('Dashboard/dashboard_siswa');
		}
	}

	public function dashboard_siswa()
	{
		$user = $this->session->userdata('server_spp');
		$data['title'] 		= 'Pembayaran SPP';
		$data['aktif'] 		= 'dashboard';

		$data['profile']	= $this->db->get('siswa')->row_array();
		$data['data_spp'] 	= $this->M_sql->get_nisn($user['nisn'])->result();
		$data['jumlah_spp'] = $this->M_sql->get_nisn($user['nisn'])->num_rows();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dashboard/dashboard_siswa', $data);
		$this->load->view('template/footer', $data);
	}

	public function dashboard_petugas()
	{
		$data['title'] 		= 'Pembayaran SPP';
		$data['aktif'] 		= 'dashboard';

		$data['profile']	  = $this->db->get('petugas')->row_array();
		$data['jumlah_siswa'] = $this->db->get('siswa')->num_rows();
		$data['jumlah_kelas'] = $this->db->get('kelas')->num_rows();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dashboard/dashboard_petugas', $data);
		$this->load->view('template/footer', $data);
	}
}
