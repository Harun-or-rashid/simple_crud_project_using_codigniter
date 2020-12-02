<?php
class News extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('News_model');
			$this->load->helper('url_helper');
		}

		public function index()
		{
			$data['news']=$this->News_model->getNews();

			$data['title']='News Archive';
		$this->load->view('templates/header',$data);
		$this->load->view('news/index',$data);
		$this->load->view('templates/footer',$data);
	}

	public function view($slug=NULL)
	{
		$data['news_item']=$this->news_model->getNews($slug);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('text','Text','required');
		if ($this->form_validation->run()===FALSE){
			$data['title']='Create News';
			$this->load->view('templates/header',$data);
			$this->load->view('news/create',$data);
			$this->load->view('templates/footer',$data);
		}else{
			$this->News_model->set_news();

			$this->session->set_flashdata('msg', 'News added');
			redirect('news/create');
		}

	}
}
