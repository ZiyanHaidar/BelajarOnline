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
		$data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/index', $data);
	}
	
	public function profile()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/profile', $data);
    }
	public function edit_profile()
	{
		$password = $this->input->post('password');
		$password_baru = $this->input->post('password_baru');
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');

		$data = array(
			'email' => $email,
			'username' => $username,
			'fullname' => $fullname,
		);

		$stored_password = $this->m_model->getPasswordById($this->session->userdata('id')); // Ganti dengan metode sesuai dengan struktur database Anda
        if (md5($password) != $stored_password) {
            $this->session->set_flashdata('kesalahan_password_lama', 'Password lama yang dimasukkan salah');
            redirect(base_url('pelajar/profile'));
        } else {
            if (!empty($password_baru)) {
                if ($password_baru === $konfirmasi_password) {
                    $data['password'] = md5($password_baru);
                    $this->session->set_flashdata('ubah_password', 'Berhasil mengubah password');
                } else {
                    $this->session->set_flashdata('kesalahan_password', 'Password baru dan Konfirmasi password tidak sama');
                    redirect(base_url('pelajar/profile'));
                }
            }
        }

		$this->session->set_userdata($data);
		$update_result = $this->m_model->update_data('user', $data, array('id' => $this->session->userdata('id')));

		if ($update_result) {
			$this->session->set_flashdata('update_user', 'Data berhasil diperbarui');
			redirect(base_url('pelajar/profile'));
		} else {
			$this->session->set_flashdata('gagal_update', 'Gagal memperbarui data');
			redirect(base_url('pelajar/profile'));
		}
	}

    public function edit_image()
    {
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];

        // Jika ada image yang diunggah
        if ($image) {
            $kode = round(microtime(true) * 1000);
            $file_name = $kode . '_' . $image;
            $upload_path = './images/user/' . $file_name;
            $this->session->set_flashdata('berhasil_ubah_foto', 'Foto berhasil diperbarui.');
            if (move_uploaded_file($image_temp, $upload_path)) {
                // Hapus image lama jika ada
                $old_file = $this->m_model->get_pelajar_image_by_id($this->input->post('id'));
                if ($old_file && file_exists('./images/user/' . $old_file)) {
                    unlink('./images/user/' . $old_file);
                }

                $data = [
                    'image' => $file_name
                ];
            } else {
                // Gagal mengunggah image baru
                redirect(base_url('pelajar/ubah_image/' . $this->input->post('id')));
            }
        } else {
            // Jika tidak ada image yang diunggah
            $data = [
                'image' => 'User.png'
            ];
        }

        // Eksekusi dengan model ubah_data
        $eksekusi = $this->m_model->ubah_data('user', $data, array('id' => $this->input->post('id')));

        if ($eksekusi) {
            redirect(base_url('pelajar/profile'));
        } else {
            redirect(base_url('pelajar/ubah_image/' . $this->input->post('id')));
        }
    }
	}