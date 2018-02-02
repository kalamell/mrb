<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['rs'] = $this->db->order_by('id', 'asc')->get('media')->result();
		$this->render('media/index', $data);
		
	}

	public function add()
	{
		$this->render('media/add');

	}

	public function save()
	{
		$this->db->set('created_date', 'NOW()', false)->insert('media', array(
			'title' => $this->input->post('title'),
			'url' => url_title(strtolower($this->input->post('title'))),
			'shortly' => $this->input->post('shortly'),
			'description' => $this->input->post('description'),
			'youtubeid' => $this->input->post('youtubeid')
		));
		redirect('backend/media');
	}

	public function edit($id)
	{
		$data['r'] = $this->db->where('id', $id)->get('media')->row();
		$this->render('media/edit', $data);
	}

	public function update()
	{
		$this->db->set('updated_date', 'NOW()', false)->where('id', $this->input->post('id'))->update('media', array(
			'title' => $this->input->post('title'),
			'url' => url_title(strtolower($this->input->post('title'))),
			'shortly' => $this->input->post('shortly'),
			'description' => $this->input->post('description'),
			'youtubeid' => $this->input->post('youtubeid')
		));
		redirect('backend/media');
	}

	public function delete($id)
	{
		$this->db->where('id', $id)->delete('media');
		redirect('backend/media');

	}

	

}