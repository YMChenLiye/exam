<?php

	class Login extends CI_Controller {

		public function index()
		{
			$this->load->model('user_model');
			$this->load->helper(array('form','url'));

			$this->load->library('form_validation');

			$this->load->library('session');

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			echo $this->session->username;
			echo $this->session->type;

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('exam/login');
			}
			else
			{
				$data = array(
					'username' => set_value('username'),
					'password' => set_value('password')
					);
				$result = $this->user_model->login($data);

				if($result['bSuccess'] == TRUE)
				{
					//login success
					echo "success";
					$sessionData = array(
						'username' => $result['username'],
						'type' => $result['type']
						);
					$this->session->set_userdata($sessionData);
					redirect('paper');
				}
				else
				{
					//login failed
					$this->session->unset_userdata('username');
					$this->session->unset_userdata('type');
					
					echo "username or password is wrong!!";
					$this->load->view('exam/login');
				}
			}
		}

		public function password_check($data)
		{
			$result = $this->user_model->login($data);
			if($result['bSuccess'] == FALSE)
			{
				$this->form_validation->set_message('password_check',"password is wrong!");
				return false;
			}
			else
			{
				return TRUE;
			}
		}
	}


