<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation','session'));

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()===TRUE){
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$quearray=array('email'=>$email, 'password'=>$password);
//var_dump($quearray).die();
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where($quearray);

			$query=$this->db->get();
			$user=$query->row();
			if ($user->email){
				var_dump("logged").die();
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
