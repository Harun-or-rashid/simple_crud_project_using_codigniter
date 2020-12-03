<?php
class Auth extends CI_Controller{

	public function __construct()
	{
		$this->load->database();
	}

	public function login()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation','session'));

		$email=$this->form_validation->set_rules('email','Email','required');
		$password=$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()===TRUE){
			$quearray=array('email'=>$email, 'password'=>$password);

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where($quearray);
			$query=$this->db->get();
			$user=$query->row();

			if ($user->email){
				$this->session->set_flashdata('success',"you're Logged In");
				$_SESSION['user_logged']==TRUE;
				$_SESSION['username']=$user->name;
				redirect('user/profile');
			}


		}else{
			$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			$this->load->view('auth/login',$data);

		}

	}
}
