<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function createUser($data)
    {
        $this->db->insert('User', $data);
        return true;
    }
}