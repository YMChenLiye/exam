<?php
class Question_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function getAllQuestionByPaperID($paperID)
	{
		$sql = "SELECT * FROM question WHERE paperID = '$paperID' ORDER BY `questionNum` ASC";

		$query = $this->db->query($sql);

		return $query->result_array();
	}
}

