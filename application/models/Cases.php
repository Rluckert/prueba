<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cases extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function createCase($data)
    {
        $data["id_user"] = $this->session->userdata('id');
        $this->db->insert('Case', $data);
        return true;
    }
    
    function getCases(){
        $this->db->where('id_user', $this->session->userdata('id'));
        $query = $this->db->get('Case');
        return $query;
    }
    
    function deleteCase($id)
    {
        $this->db->where('Id', $id);
        $this->db->delete('Case');
        return true;
    }
    
}
