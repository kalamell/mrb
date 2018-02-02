<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Happenings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['rs'] = $this->db->select('*,( SELECT img_path FROM news_gallery WHERE news_id = news.id limit 1) as img_path')->get('news')->result();
		$this->load->view('happenings/happenings', $data);
	}

	public function detail($news_id)
	{
		$data['r'] = $this->db->where('id', $news_id)->get('news')->row();
		$data['images'] = $this->db->where('news_id', $news_id)->get('news_gallery')->result();
		$this->load->view('happenings/detail', $data);
	}

}