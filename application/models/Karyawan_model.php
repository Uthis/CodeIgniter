<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $Karyawan_id;
    public $Karyawan_nama;
    public $Karyawan_address;
    public $Karyawan_phone;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}
