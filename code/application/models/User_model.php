<?php
class User_model extends CI_Model{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function is_exist($username)
	{
		$sql = "SELECT username FROM user WHERE username = '$username'";
		
		//echo $sql;

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

	public function insert($data)
	{
		$this->db->insert('user',$data);
	}

	public function login($data)
	{
		$username = $data['username'];
		$password = $data['password'];
		$passwordMd5 = md5($password);

		$sql = "SELECT * FROM user WHERE username = '$username' and password = '$passwordMd5'";

		$query = $this->db->query($sql);

		if($query->num_rows() != 1)
		{
			//login failed
			$result = array(
				'bSuccess' => FALSE
				);
			return $result;

		}
		else
		{
			$row = $query->row();
			//login success
			$result = array(
				'username' => $row->username,
				'type' => $row->type,
				'bSuccess' => TRUE
				);
			return $result;
		}
	}



}

