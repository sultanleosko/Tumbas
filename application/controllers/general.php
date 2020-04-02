<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	function index()
	{
		$this->load->view('index_view');
	}

	function login() 
	{
		$this->load->view('login_view');
	}

	function register() 
	{
		$this->load->view('register_view');
	}
}
