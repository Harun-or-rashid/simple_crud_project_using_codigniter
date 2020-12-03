<?php
class Login_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function logged()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('email');
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		$user=$query->num_rows();


	}
}
