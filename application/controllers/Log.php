<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Loging');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login/login');
		$this->load->view('footer');
	}

	public function Verify()
	{
		$data = $this->input->post();
		$user = $this->Loging->verify($data["identification"]);
		if ($user != null) {
			$newdata = array(
				'id'  => $user[0]["id"],
			);
			$this->session->set_userdata($newdata);
			redirect('Home');
		}
	}

	public function SignOut(){
		$this->session->unset_userdata('id');
		redirect("Log");
	}
}
