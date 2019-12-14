<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('TESTPAGE');
	}

	public function jadwal()

	{
		$this->load->view('jadwal');
	}

	public function sidebar()
	{
		$this->load->view('sidebar');
	}

	public function profil()
	{
		$this->load->view('profil');
	}

	public function dataiflab()
	{
		$this->load->view('dataiflab');
	}

	public function loginPage()
	{
		$this->load->view('loginPage');
	}

	public function home()
	{
		$this->load->view('v_Home');
	}

	public function MulaiPraktikum()
	{
		$this->load->view('v_MulaiPraktikum');
	}

	public function tesAwal()
	{
		$this->load->view('soalTesAwal');
	}

	public function jurnal()
	{
		$this->load->view('soalJurnal');
	}

	public function uploadJurnal()
	{
		$this->load->view('soalJurnalUpload');
	}

	public function uploadTA()
	{
		$this->load->view('uploadDariSoalTA');
	}

	public function tesAkhir()
	{
		$this->load->view('soalTesAkhir_1');
	}
	public function feedbackAsprak()
	{
		$this->load->view('feedbackAsprak');
	}
	public function uploadJawaban()
	{
		$this->load->view('UploadJwb');
	}
	public function History()
	{
		$this->load->view('History');
	}
}
