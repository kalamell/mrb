<?php 
function getName()
{
	$ci =& get_instance();
	$id = $ci->session->userdata('id');
	$rs = $ci->db->where('id', $id)->get('admin');
	return $rs->row()->name;
}