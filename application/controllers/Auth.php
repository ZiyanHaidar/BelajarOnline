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
 public function aksi_login()
 {
  $email = $this->input->post('email', true);
  $password = $this->input->post('password', true);
  $data = [ 'email' => $email, ];
  $query = $this->m_model->getwhere('user', $data);
  $result = $query->row_array();

  if (!empty($result) && md5($password) === $result['password']) {
   $data = [
    'logged_in' => TRUE,
    'email' => $result['email'],
    'username' => $result['username'],
    'role' => $result['role'],
    'id' => $result['id'],
   ];
   $this->session->set_userdata($data);
   if ($this->session->userdata('role') == 'admin') {
    redirect(base_url()."admin");
   } elseif($this->session->userdata('role') == 'pelajar'){
    redirect(base_url()."pelajar") ;
   }
 else {
    redirect(base_url()."home");
   }
  } else {
   redirect(base_url()."home");
  }
 }
 public function register()
 {
  $this->load->view('auth/register');
 }
 public function aksi_register()
 {
     $email = $this->input->post('email', true);
     $username = $this->input->post('username', true);
 
     // Cek apakah email sudah digunakan
     $this->db->where('email', $email);
     $email_exists = $this->db->get('user')->num_rows();
 
     // Cek apakah username sudah digunakan
     $this->db->where('username', $username);
     $username_exists = $this->db->get('user')->num_rows();
 
     if ($email_exists > 0) {
         // Email sudah digunakan, beri pesan error
         $this->session->set_flashdata('error', 'Email sudah digunakan.');
         redirect(base_url() . "auth/register");
     } elseif ($username_exists > 0) {
         // Username sudah digunakan, beri pesan error
         $this->session->set_flashdata('error', 'Username sudah digunakan.');
         redirect(base_url() . "auth/register");
         
     }else {
         // Email dan username belum digunakan, lanjutkan dengan proses registrasi
         $password = md5($this->input->post('password', true));
         $username = $this->input->post('username', true);
         $role = 'pelajar';
         // Jika ada gambar diunggah
         if ($_FILES['image']['name']) {
             $config['upload_path'] = './path_to_upload_directory/'; // Ganti dengan lokasi direktori upload Anda
             $config['allowed_types'] = 'gif|jpg|png';
             $config['max_size'] = 2048; // Ukuran file maksimum (dalam KB)
 
             $this->load->library('upload', $config);
 
             if ($this->upload->do_upload('image')) {
                 $image_data = $this->upload->data();
                 $image = $image_data['file_name'];
             } else {
                 $image = 'User.png'; // Jika gagal mengunggah, menggunakan gambar default
             }
         } else {
             $image = 'User.png'; // Jika tidak ada gambar diunggah, menggunakan gambar default
         }
 
         $data = [
             'email' => $email,
             'username' => $username,
             'password' => $password,
             'role' => $role,
             'image' => $image // Ubah ini sesuai dengan variabel gambar yang Anda gunakan
         ];
 
         $table = 'user';
 
         $this->db->insert($table, $data);
 
         if ($this->db->affected_rows() > 0) {
            // Registrasi berhasil
            $this->session->set_userdata([
                'logged_in' => TRUE,
                'email' => $email,
                'username' => $username,
                'role' => $role,
                'image' => $image // Ubah ini sesuai dengan variabel gambar yang Anda gunakan
            ]);
            
            // Set session untuk pesan registrasi berhasil
            $this->session->set_flashdata('register_berhasil', 'Registrasi berhasil. Silakan login.');
            redirect(base_url() . "auth");
        } else {
            // Registrasi gagal
            redirect(base_url() . "auth/register");
        }
     }
 }
 function logout() {
  $this->session->sess_destroy(); // Menggunakan sess_destroy() untuk mengakhiri sesi
  redirect(base_url('./auth'));
 }

}