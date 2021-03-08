<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
	public function cek_siswa($u)
	{
		$this->db->where('nis', $u);

		return $this->db->get('siswa');
	}

	public function cek_petugas($u, $p)
	{
		$this->db->where('username', $u);
		$this->db->where('password', $p);

		return $this->db->get('petugas');
	}
}
