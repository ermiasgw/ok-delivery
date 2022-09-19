<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		
		$this->load->helper('url');
	}

	
	public function index()
	{
		$this->load->view('admin/base/Base');
		$this->load->view('admin/Main');
		$this->load->view('admin/base/Footer');
	}

	public function login()
	{
		$this->load->view('login');
	}
}
