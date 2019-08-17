<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserModel extends CI_Model
{
    public function GetUsers()
    {
        $query = $this->db->get('users');
        if ($query->num_rows() == '0') {
            return false;
        } else {
            return $query->result();
        }
    }
    public function AddUser($data)
    {
        if ($this->db->insert('users', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteUsers($data)
    {
        $this->db->where('user_id', $data[ 'user_id' ]);
        if ($this->db->delete('users')) {
            return true;
        } else {
            return false;
        }
    }
    public function updateUsers($data)
    {
        $this->db->where('user_id', $data[ 'user_id' ]);
        if ($this->db->update('users', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
