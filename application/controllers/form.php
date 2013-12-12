<?php

class form extends CI_Controller {

	function index()
	{
		$this->load->dbforge();
		$this->load->model('user_model', 'User');
		$data = array('userList' => $this->User->get_all_users());
		$this->load->view('index',$data);
	}

	function edit() {
		$this->load->dbforge();
		$this->load->helper(array('form', 'url'));
		$this->load->model('user_model', 'User');

		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->uri->segment(3);
			$data = array('item_query'=>$this->User->get_user_details($id));
			$this->load->view('myform',$data);
		}
		else
		{
			$this->User->insert_entry();
			$this->load->view('formsuccess');
		}
	}

	function add()
	{
		$this->load->dbforge();
		$this->load->helper(array('form', 'url'));
		$this->load->model('user_model', 'User');

		$this->load->library('form_validation');

		/* This is commented, because we have mentioned in config file config/form_validation.php
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		*/
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->User->insert_entry();
			$this->load->view('formsuccess');
		}
	}
}
?>