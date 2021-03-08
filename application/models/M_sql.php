<?php

class M_sql extends CI_Model
{
    public function get_data()
    {
        $this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
        $this->db->join('spp', 'spp.id_spp = pembayaran.id_spp');
        return $this->db->get('pembayaran');
    }
    public function get_nisn($nisn)
    {
        $this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
        $this->db->join('spp', 'spp.id_spp = pembayaran.id_spp');
        $this->db->where('siswa.nisn', $nisn);
        return $this->db->get('pembayaran');
    }

    public function get_siswa()
    {
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('spp', 'spp.id_spp = siswa.id_spp');
        return $this->db->get('siswa');
    }

    public function get_one($nisn)
    {
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('spp', 'spp.id_spp = siswa.id_spp');
        $this->db->where('siswa.nisn', $nisn);
        return $this->db->get('siswa');
    }

    public function get_data_report()
    {
        $this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
        return $this->db->get('pembayaran');
    }

    // public function get_nisn($nisn)
    // {
    //     $q = $this->db->query(
    //         "SELECT * FROM pembayaran 
    //         JOIN siswa ON siswa.nisn = pembayaran.nisn 
    //         JOIN kelas ON kelas.id_kelas = siswa.id_kelas 
    //         JOIN petugas ON petugas.id_petugas = pembayaran.id_petugas 
    //         JOIN spp ON spp.id_spp = pembayaran.id_spp and siswa.nisn = '$nisn'"
    //     );
    //     return $q;
    // }

    public function get_profile()
    {
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        return $this->db->get('siswa');
    }

    // SQLDATA MANIPULATION
    public function insert_table($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_record($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_record($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function pick_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
