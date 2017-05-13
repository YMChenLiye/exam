<?php
class Score extends CI_Controller {
	public function index()
	{
		foreach ($_POST as $key => $entry)
		{
			if(is_array($entry)){
				print $key . ": " . implode(',',$entry) . "<br>";
			}
			else {
				print $key . ": " . $entry . "<br>";
			}
		}
		return ;
	}

	public function count($paperID = NULL)
	{
		$this->load->model('question_model');
		if($paperID == NULL)
		{
			$this->load->helper('url');
			redirect('paper');

			return;
		}
		$result = $this->question_model->getAnswerByPaperID($paperID);
		//print_r($_POST);

		$totalScore = 0;
		foreach($result as $answer)
		{
			$tmp = 0;
			if($this->input->post($answer['questionNum'] != NULL))
			{
				if( "A" == $this->input->post($answer['questionNum']))
				{
					$tmp = 1;
				}
				if( "B" == $this->input->post($answer['questionNum']))
				{
					$tmp = 1<<1;
				}
				if( "C" == $this->input->post($answer['questionNum']))
				{
					$tmp = 1<<2;
				}
				if( "D" == $this->input->post($answer['questionNum']))
				{
					$tmp = 1<<3;
				}
			}
			if($tmp == $answer['answer'])
			{
				$totalScore += $answer['score'];
			}
		}
		echo "totalScore = " .$totalScore;
	}
};
