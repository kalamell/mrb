<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['rs'] = $this->db->order_by('id', 'asc')->get('news')->result();
		$this->render('news/index', $data);
		
	}

	public function add()
	{
		$this->render('news/add');

	}

	public function save()
	{
		$this->db->set('created_date', 'NOW()', false)->insert('news', array(
			'title' => $this->input->post('title'),
			'short_desc' => $this->input->post('short_desc'),
			'description' => $this->input->post('description'),
		));
		redirect('backend/news');
	}

	public function edit($id)
	{
		$data['r'] = $this->db->where('id', $id)->get('news')->row();
		$this->render('news/edit', $data);
	}

	public function update()
	{
		$this->db->set('updated_date', 'NOW()', false)->where('id', $this->input->post('id'))->update('news', array(
			'title' => $this->input->post('title'),
			'short_desc' => $this->input->post('short_desc'),
			'description' => $this->input->post('description'),
		));
		redirect('backend/news');
	}

	public function delete($id)
	{
		$this->db->where('id', $id)->delete('news');
		redirect('backend/news');

	}

	public function gallery($news_id)
	{
		$data['rs'] = $this->db->where('news_id', $news_id)->get('news_gallery')->result();
		$data['news_id'] = $news_id;
		$this->render('news/gallery', $data);
	}

	public function upload()
	{
		$this->load->library('upload');
		$config = array(
			'upload_path' => './upload/',
			'allowed_types' => 'jpg|JPG|jpeg|JPEG|gif|png',
			'file_name' => 'p-'.$this->input->post('news_id').'-'.date('His')
		);
		$this->upload->initialize($config);
	    if ($this->upload->do_upload('img_path')) {
	    	$data = $this->upload->data();
	    	$this->db->insert('news_gallery', array(
	    		'news_id' => $this->input->post('news_id'),
	    		'img_path' => $data['file_name']
	    	));
	    } 
	    redirect('backend/news/gallery/'.$this->input->post('news_id'));
	}

	public function delete_image($news_id, $gid)
	{
		$r = $this->db->where('gid', $gid)->get('news_gallery')->row();
		if ($r->img_path !='') {
			unlink('upload/'.$r->img_path);
		}
		$this->db->where('gid', $gid)->where('news_id', $news_id)->delete('news_gallery');
		redirect('backend/news/gallery/'.$news_id);
	}
	

}