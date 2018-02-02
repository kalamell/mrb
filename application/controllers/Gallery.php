<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('gallery/gallery');
	}

	public function interior()
	{

		$this->load->view('gallery/interior');

	}

	public function exterior()
	{
		$this->load->view('gallery/exterior');
	}

}