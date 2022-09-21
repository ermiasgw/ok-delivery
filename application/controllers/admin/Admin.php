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

	public function about()
	{
		$this->load->view('admin/base/Base');
		$this->load->view('admin/About');
		$this->load->view('admin/base/Footer');
	}

	public function hero_view()
	{
		$this->load->view('admin/base/Base');
		$this->load->view('admin/hero/hero_view');
		$this->load->view('admin/base/Footer');
	}

	public function hero_add()
	{
		$this->load->view('admin/base/Base');
		$this->load->view('admin/hero/hero_add');
		$this->load->view('admin/base/Footer');
	}

	public function hero_edit()
	{
		$this->load->view('admin/base/Base');
		$this->load->view('admin/hero/hero_edit');
		$this->load->view('admin/base/Footer');
	}
	
}
