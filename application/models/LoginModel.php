<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model
{
	public function validateUser($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('users');
        if($query->num_rows() == '0'){
            return false;
        } else {
            return true;
        }
	}
	public function UserDetails($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('users');
        if($query->num_rows() == '0'){
            return false;
        } else {
            return $query->result();
        }
	}
	public function Users()
	{
		$this->db->where('sl_no !=', '1');
		$query = $this->db->get('users');
        if($query->num_rows() == '0'){
            return false;
        } else {
            return $query->result();
        }
	}
	public function InsertUsers($data)
	{
        if($this->db->insert('users', $data)){
            return true;
        } else {
            return false;
        }
	}
	public function CheckUser($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('role', $data['role']);
		$query = $this->db->get('users');
        if($query->num_rows() == '0'){
            return true;
        } else {
            return false;
        }
	}
	public function UserData($data)
	{
		$this->db->where('sl_no', $data['sl_no']);
		$query = $this->db->get('users');
        if($query->num_rows() == '0'){
            return false;
        } else {
            return $query->result();
        }
	}
	public function ResetPassword($data)
	{
		$this->db->where('sl_no', $data['sl_no']);
        if($this->db->delete('users')){
            return true;
        } else {
            return false;
        }
	}
	public function UpdatePassword($data)
	{
		$this->db->where('sl_no', $data['sl_no']);
		$this->db->set('password', $data['password']);
		if($this->db->update('users')){
            return true;
        } else {
            return false;
        }
	}
}