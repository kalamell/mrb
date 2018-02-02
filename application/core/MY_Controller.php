<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends CI_Controller {
	protected $id;
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) redirect('backend/auth');
		$this->id = $this->session->userdata('id');
	}	

	protected function render($view, $data = array())
	{
		$this->load->view('backend/header', $data);
		$this->load->view('backend/'.$view, $data);
		$this->load->view('backend/footer', $data);
	}

}