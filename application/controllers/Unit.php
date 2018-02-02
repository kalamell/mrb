<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function layout()
	{

		$this->load->view('unit/unit-layout');

	}

	public function details($type)
	{
		$this->load->view('unit/unit-layout-details-'.$type);
	}

}