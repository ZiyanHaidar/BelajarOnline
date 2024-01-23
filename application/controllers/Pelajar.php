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
        if ($this->session->userdata('logged_in') != true && $this->session->userdata('role') != 'pelajar') {
            redirect(base_url() . 'home');
        }
    }

    //pelajar
    public function index()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/index', $data);
    }
    public function matematika()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/matematika', $data);
    }
    public function pertambahan()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/mtk/pertambahan', $data);
    }
    public function perkalian()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/mtk/perkalian', $data);
    }
    public function pembagian()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/mtk/pembagian', $data);
    }
    public function sains()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/sains', $data);
    }
    public function sejarah()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/sejarah', $data);
    }
    public function inggris()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/inggris', $data);
    }

    public function profile()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/profile', $data);
    }
    public function diskusi()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/diskusi', $data);
    }
    public function post_comment()
    {
        $data['akun'] = $this->m_model->get_by_id('user', 'id', $this->session->userdata('id'))->result();
        $this->load->view('pelajar/post_comment', $data);
    }
    public function aksi_ubah_password()
    {
        $old_password = $this->input->post('password_lama');
        $password_baru = $this->input->post('password_baru');
        $konfirmasi_password = $this->input->post('konfirmasi_password');

        $current_user = $this->m_model->get_user_by_id($this->session->userdata('id'));

        if (!empty($password_baru)) {
            if (!$current_user || password_verify($old_password, $current_user->password)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password lama tidak sesuai
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>Password lama tidak sesuai');
                redirect(base_url('pelajar/profile'));
            }

            if ($password_baru !== $konfirmasi_password) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password baru dan konfirmasi password harus sama
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
                redirect(base_url('pelajar/profile'));
            }

            $this->updatePassword($password_baru);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Password baru tidak boleh kosong
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
            redirect(base_url('pelajar/profile'));
        }
    }

    private function updatePassword($new_password)
    {
        $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);

        $update_result = $this->m_model->ubah_data('user', $data, array('id' => $this->session->userdata('id')));

        if ($update_result) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Berhasil Merubah password
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
            redirect(base_url('pelajar/profile'));
        } else {
            $this->session->set_flashdata('message', 'Gagal merubah password');
            redirect(base_url('pelajar/profile'));
        }
    }

    public function aksi_ubah_profile()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        // Check if form validation passes
        if ($this->form_validation->run() === FALSE) {
            // Validation failed, set flash message with error details
            $this->session->set_flashdata('message', validation_errors());
            redirect(base_url('pelajar/profile'));
        }

        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $username = $this->input->post('username');
        $fullname = $this->input->post('fullname');

        $data['email'] = $email;
        $data['gender'] = $gender;
        $data['username'] = $username; // Add username field
        $data['fullname'] = $fullname; // Add fullname field

        $update_result = $this->m_model->ubah_data('user', $data, array('id' => $this->session->userdata('id')));

        if ($update_result) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Merubah data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect(base_url('pelajar/profile'));
        } else {
            $this->session->set_flashdata('message', 'Gagal merubah data');
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
    public function delete_image()
{
    // Get the user ID
    $id = $this->input->post('id');

    // Get the user data from the database
    $user = $this->m_model->getUserById($id); // Replace 'your_model_name' with your actual model name

    if ($user) {
        // Get the current profile picture filename
        $currentImage = $user->image;

        // Delete the image file from the server
        $imagePath = FCPATH . 'images/user/' . $currentImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Get the default image filename from configuration or other source
        $defaultImage = 'User.png'; // Replace with the dynamic way of getting the default image filename

        // Update the user's data to remove the reference to the deleted image
        $data = array('image' => $defaultImage);
        $this->m_model->updateUserData($id, $data); // Replace 'your_model_name' with your actual model name

        // Optionally, you can add a success flash message
        $this->session->set_flashdata('berhasil_hapus_foto', 'Foto profil berhasil dihapus');
    } else {
        // Optionally, you can add an error flash message
        $this->session->set_flashdata('gagal_hapus_foto', 'Gagal menghapus foto profil');
    }

    // Redirect back to the profile page
    redirect('pelajar/profile');
}
}