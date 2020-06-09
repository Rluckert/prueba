<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User');
	  }
   
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login/registry');
		$this->load->view('footer');
	}

	public function createUser(){
		$data = $this->input->post();
		$this->User->createUser($data);
		redirect('Log'); 
	}

	
}