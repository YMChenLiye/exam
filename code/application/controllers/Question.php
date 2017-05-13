<?php 

class Question extends CI_Controller {
	public function index()
	{
		$this->load->model('question_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');

		$this->load->helper('url');
		redirect('paper');
		return;
	}

	public function detail($paperID = NULL)
	{
		$this->load->helper('form');
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

	public function insert($paperID = NULL) 
	{
		if($paperID == NULL)
		{
			$this->load->helper('url');
			redirect('paper');
			return;
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('paperID','PaperID','required');
		$this->form_validation->set_rules('questionNum','QuestionNum','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('questionDescribe','QuestionDescribe','required');
		$this->form_validation->set_rules('score','Score','required');
		$this->form_validation->set_rules('answer','Answer','required');
		$data['paperID'] = $paperID;
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('exam/questionInsert',$data);
		}
		else
		{
			$this->load->model('question_model');
			$data['paperID'] = $this->input->post('paperID');
			$data['questionNum'] = $this->input->post('questionNum');
			$data['type'] = $this->input->post('type');
			$data['questionDescribe'] = $this->input->post('questionDescribe');
			$data['score'] = $this->input->post('score');
			$data['answer'] = $this->input->post('answer');
			$data['optionA'] = $this->input->post('optionA') == "" ? NULL : $this->input->post('optionA');
			$data['optionB'] = $this->input->post('optionB') == "" ? NULL : $this->input->post('optionB');
			$data['optionC'] = $this->input->post('optionC') == "" ? NULL : $this->input->post('optionC');
			$data['optionD'] = $this->input->post('optionD') == "" ? NULL : $this->input->post('optionD');
			$data['optionE'] = $this->input->post('optionE') == "" ? NULL : $this->input->post('optionE');
			$data['optionF'] = $this->input->post('optionF') == "" ? NULL : $this->input->post('optionF');
			$this->question_model->insert($data);
		}
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




