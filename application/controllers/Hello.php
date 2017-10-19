<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {





	public function index()
	{
		$this->load->model('user_model', '', TRUE);
		$data['users'] = $this->user_model->get_users();
		$this->load->view('hello', $data);
	}
}
