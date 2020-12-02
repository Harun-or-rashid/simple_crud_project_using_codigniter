<?php
class User extends CI_Controller{

	public function index()
	{
		$data['title']="Users";
		$this->load->view('templates/header',$data);
		$this->load->view('users/index');
		$this->load->view('templates/footer',$data);

	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library(array(
			'form_validation','session'
		));

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('address','Address','required');

		if ($this->form_validation->run()===FALSE) {

			$data['title'] = "Users";
			$this->load->view('templates/header', $data);
			$this->load->view('users/create');
			$this->load->view('templates/footer', $data);


		}else{
			$formdata=array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'mobile'=>$this->input->post('mobile'),
				'password'=>$this->input->post('password'),
				'address'=>$this->input->post('address'),
			);
			$data['title'] = "Users";
			$this->load->view('templates/header', $data);
			$this->load->view('users/create');
			$this->load->view('templates/footer', $data);
$this->load->model('User_model');
$this->User_model->store($formdata);
			redirect('user/create');
		}
	}
}
