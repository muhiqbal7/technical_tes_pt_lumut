<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($username)
    {
        $user = $this->db->get_where('account', ['username' => $username])->row_array();
        return $user;
    }
}