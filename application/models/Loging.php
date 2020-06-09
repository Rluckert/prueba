<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Loging extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function verify($identification)
    {
        $this->db->where('identification', $identification);
        $query = $this->db->get('User');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }
}
