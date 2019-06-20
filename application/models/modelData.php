<?php
class ModelData extends CI_Model
{
    function showData()
    {
        return $this->db->get('pelanggan');
    }
    function showSingleData($noPelanggan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('noPelanggan', $noPelanggan);

        return $this->db->get();
    }
    function checkExist($noPelanggan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('noPelanggan', $noPelanggan);

        if ($this->db->get()->num_rows() > 0) {
            return true;
        } else {
            return false;
        };
    }

    function getTarif()
    {
        $query = $this->db->query('SELECT tipe FROM tarif');
        return $query->result();
    }
}
