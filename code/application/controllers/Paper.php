<?php

class Paper extends CI_Controller {
	
	public function index()
	{
		$this->load->model('paper_model');
		$this->load->helper('url');
		$this->load->library('session');

		if(!isset($this->session->username))
		{
			redirect('login');
		}
		echo '欢迎您,'.$this->session->username;
		echo "<br />";
		echo '你的用户类型是： '.$this->session->type;

		$allPaper['paper'] = $this->paper_model->get_all();
		$this->load->view('exam/paperList',$allPaper);
	}

	public function insert()
	{
		$this->load->model('paper_model');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title','Title',"callback_title_check");
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('exam/paperInsert.php');
		}
		else
		{
			$this->paper_model->insert(set_value('title'));

			redirect('paper');
		}
	}


	public function title_check($title = NULL)
	{
		if($title == NULL)
		{
			$this->form_validation->set_message('title_check',"title can't be empty!");
			return FALSE;
		}

		if($this->paper_model->is_exist($title))
		{
			$this->form_validation->set_message('title_check',"$title has exists!");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}

