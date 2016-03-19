<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function sendmail()
	{
		$this->load->library('email');

		$this->email->from('client@test.com', 'Jackson Brown');
		$this->email->to('your@email.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

		echo $this->email->print_debugger();
	}

}
