<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class M_akun extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
}