<?php
class News_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function getNews()
	{
		$query=$this->db->get('news',10);
		return $query->result();
		
	}

	public function set_news()
	{
		$this->load->helper('url');
		$slug=url_title($this->input->post('title'),'dash',TRUE);
		$data=array(
			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'text'=>$this->input->post('text')
		);
		return $this->db->insert('news',$data);
	}

	public function news($id)
	{
		$this->db->where('id',$id);

			$news=$this->db->get('news');
		return $news->row_array();

	}

	public function newsUpdate($id)
	{

		$this->db->where('id',$id);
		$this->load->helper('url');
		$slug=url_title($this->input->post('title'),'dash',TRUE);
		$formdata=array(
			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'text'=>$this->input->post('text')
		);


		return $this->db->update('news',$formdata);
	}
}
