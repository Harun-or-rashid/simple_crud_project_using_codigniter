<?php
class User_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();

	}

	public function store($formdata)
	{
		$this->load->helper('url');
		$slug=url_title($this->input->post('name'),'dash',TRUE);
		$this->db->insert('users',$formdata);

	}
}
?>
