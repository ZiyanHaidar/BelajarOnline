<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
		$this->load->library('form_validation'); // Memuat pustaka form_validation
		if ($this->session->userdata('logged_in')  != true && $this->session->userdata('role') != 'pelajar') {
			redirect(base_url() . 'home');
		}
	}
	
//pelajar
	public function index()
	{
        $this->load->view('pelajar/index');
	}
	
	public function Profile()
	{
        $this->load->view('pelajar/Profile');
	}
	}