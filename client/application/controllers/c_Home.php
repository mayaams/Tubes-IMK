<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function index()
	{
		$this->load->view('v_Home');
	}

	public function MulaiPraktikum()
	{
		$this->load->view('v_MulaiPraktikum');
	}
	
}
