<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function press_and_media()
	{
		$data['rs'] = $this->db->order_by('id', 'asc')->get('media')->result();
		$this->load->view('media/press-and-media', $data);
	}

	public function detail($url)
	{
		$r = $this->db->where('url', $url)->Get('media');
		if ($r->num_rows()==0) redirect('press-and-media');

		$this->load->view('media/detail', array(
			'r' => $r->row()
		));
	}

}