<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('backend/auth/login');
	}

	public function login()
	{
		$this->load->view('backend/auth/login');
	}

	public function do_login()
	{
		$config = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			),
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run()) {
			$rs = $this->db->where(array(
				'username' => $this->input->post('username'),
				'password' => do_hash( $this->input->post('password') )
			))->get('admin');
			if ($rs->num_rows()>0) {
				$this->session->set_userdata('id', $rs->row()->id);
			}
		}
		redirect('backend');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('backend');
	}

}