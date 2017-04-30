<?php

class Paper_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all()
	{
		$query = $this->db->get('paper');
		return $query->result_array();
	}

	public function insert($title)
	{
		$data = array(
			'title' => $title
			);
		$this->db->insert('paper',$data);
	}

	public function update($data)
	{
		$id = $data['id'];
		$this->db->update('paper',$data['title'],"id = '$id'");
	}

	public function getTitleByID($paperID)
	{
		$query = $this->db->query("SELECT title FROM paper where id = $paperID");
		$row = $query->row_array(1);
		if(isset($row))
		{
			return $row['title'];
		}
		else
		{
			return "not found";
		}
	}

	public function is_exist($title)
	{
		$sql = "SELECT title FROM paper WHERE title = '$title'";
		echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() >= 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

