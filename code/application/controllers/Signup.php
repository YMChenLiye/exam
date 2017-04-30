<?php

	class Signup extends CI_Controller {

		public function index()
		{
			$this->load->model('user_model');
			$this->load->helper(array('form','url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('username','Username','callback_username_check');
			$this->form_validation->set_rules('password','Password','required',array('required' => 'You must provide a %s.')
			);
			$this->form_validation->set_rules('passconf','Password Confirmation','required|matches[password]');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('exam/signup');
			}
			else
			{
				//insert
				$data = array(
					'username' => set_value('username'),
					'password' => md5(set_value('password')),
					'type' => 1
					);
				$this->user_model->insert($data);

				$this->load->view('exam/formsuccess');
			}

		}

		public function username_check($str)
		{
			if($this->user_model->is_exist($str))
			{
				$this->form_validation->set_message('username_check',"$str has exists!");
				return false;
			}
			else
			{
				return TRUE;
			}
		}
	}

			
