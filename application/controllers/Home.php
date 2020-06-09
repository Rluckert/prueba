<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Cases');
	  }
   
	public function index()
	{
		if($this->session->userdata('id') != null){
			$this->load->view('header');
			$this->load->view('navbar');
			$data['cases'] = $this->Cases->getCases();
			$this->load->view('principal/principal', $data);
			$this->load->view('footer');
		}else{
            echo "Unauthorized";
		}
	}

	public function createCase(){
		$data = $this->input->post();
		$this->Cases->createCase($data);
		redirect('Home');
	}

	public function deleteCase(){
		$idCase = $this->uri->segment(3);
		$this->Cases->deleteCase($idCase);
		redirect('Home');
	}

	public function getCase(){
		$idCase = $this->uri->segment(3);
		$datos = $this->Cases->getCase($idCase);
		echo json_encode($datos);
	}

	public function updateCase(){
		$data = $this->input->post();
		$idCase = $this->uri->segment(3);
		$datos = $this->Cases->updateCase($idCase, $data);
		redirect('Home');
	}
}