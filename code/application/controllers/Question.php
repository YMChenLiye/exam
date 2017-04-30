<?php 

class Question extends CI_Controller {
	public function index()
	{
		$this->load->model('question_model');
		$this->load->helper('url');
		$this->load->library('session');

		$this->load->helper('url');
		redirect('paper');
		return;
	}

	public function detail($paperID = NULL)
	{
		$this->load->model('question_model');
		$this->load->model('paper_model');
		if($paperID == NULL)
		{
			$this->load->helper('url');
			redirect('paper');
			return;
		}
		$result = $this->question_model->getAllQuestionByPaperID($paperID);
		$data['result'] = $result;
		$data['title'] = $this->paper_model->getTitleByID($paperID);
		$data['paperID'] = $paperID;
		if($data['title'] == "not found")
		{
			$this->load->helper('url');
			echo "paperID: $paperID , not exist!";
			redirect('paper');
			return;
		}
		
		$this->load->view('exam/questionDetail',$data);
	}

	public function insert()
	{
		$this->load->library('form_validation');
		$this->load->view('exam/questionInsert');
	}

	public function update($paperID = NULL)
	{
		$this->load->model('question_model');
		$this->load->model('paper_model');
		if($paperID == NULL)
		{
			$this->load->helper('url');
			redirect('paper');
			return;
		}
		$result = $this->question_model->getAllQuestionByPaperID($paperID);
		$data['result'] = $result;
		$data['title'] = $this->paper_model->getTitleByID($paperID);
		$data['paperID'] = $paperID;
		if($data['title'] == "not found")
		{
			$this->load->helper('url');
			echo "paperID: $paperID , not exist!";
			redirect('paper');
			return;
		}
		
		$this->load->view('exam/questionUpdate',$data);
	}
}




