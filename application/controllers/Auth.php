<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

 function __construct()
 {
  parent::__construct();
  $this->load->model('m_model');
  $this->load->helper('my_helper');
 }

 public function index()
 {
  $this->load->view('auth/login');
 }
 public function register()
 {
  $this->load->view('auth/register');
 }

 function logout() {
  $this->session->sess_destroy(); // Menggunakan sess_destroy() untuk mengakhiri sesi
  redirect(base_url('./auth'));
 }

}