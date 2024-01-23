<?php

class M_model extends CI_Model{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }
    function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }
    public function getPasswordById($id)
    {
        $this->db->select('password');
        $this->db->where('id', $id);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row->password;
        } else {
            return false;
        }
    }
    public function getUserById($id) {
        // Assuming 'users' is your table name, adjust it accordingly
        $this->db->where('id', $id);
        $query = $this->db->get('user');

        // Check if a user with the given ID exists
        if ($query->num_rows() > 0) {
            // Return the user data as an object
            return $query->row();
        } else {
            // Return null if the user with the given ID is not found
            return null;
        }
    }
    public function updateUserData($id, $data) {
        // Assuming 'users' is your table name, adjust it accordingly
        $this->db->where('id', $id);
        $this->db->update('user', $data);

        // Return the number of affected rows after the update
        return $this->db->affected_rows();
    }

    public function getPasswordByIdd($id)
    {
        $this->db->select('password');
        $this->db->where('id', $id);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row->password;
        } else {
            return false;
        }
    }
    function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function get_by_id($table, $id_column, $id) { 
        $data = $this->db->where($id_column, $id)->get($table); 
        return $data; 
    }

    public function ubah_data($table, $data, $where) { 
        $this->db->update($table, $data, $where); 
        return $this->db->affected_rows(); 
    }

    public function register_user($data) {
        // Masukkan data ke dalam tabel 'user' dan kembalikan hasilnya
            return $this->db->insert('user', $data);
    }
    public function get_user_by_id($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function get_pelajar_image_by_id($id)
    {
        $this->db->select('image');
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->image;
        } else {
            return false;
        }
    }
    public function update_image($akun_id, $new_image)
    {
        $data = array(
            'image' => $new_image
        );

        $this->db->where('id', $akun_id); // Sesuaikan dengan kolom dan nama tabel yang sesuai
        $this->db->update('user', $data); // Sesuaikan dengan nama tabel Anda

        return $this->db->affected_rows(); // Mengembalikan jumlah baris yang diupdate
    }

    public function get_current_image($akun_id)
    {
        $this->db->select('image');
        $this->db->from('user'); // Gantilah 'akun_table' dengan nama tabel Anda
        $this->db->where('id', $akun_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->image;
        }

        return null; // Kembalikan null jika data tidak ditemukan
    }
}