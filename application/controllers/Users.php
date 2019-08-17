<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function home()
    {
        if ($this->session->userdata('role') === "admin" && $this->session->userdata('logged_in') == true) {
            if ($this->input->post()) {
                $name = $this->input->post('name');
                $username = $this->input->post('user');
                $pwd = md5($this->input->post('pwd'));
                $role = $this->input->post('role');
                $email = $this->input->post('email');
                $empid = $this->input->post('empid');
                $userID = md5($name . time());
                $credentials = array(
                        'user_id' => $userID,
                        'Name' => $name,
                        'username' => $username,
                        'password' => $pwd,
                        'role' => $role,
                        'email' => $email,
                        'empid' => $empid,
                        'status' => 1
                         );
                $this->load->model('UserModel');
                if ($this->UserModel->AddUser($credentials)) {
                    $this->session->set_flashdata('msg-true', "User Added Successfully");
                    redirect(base_url() . "user");
                } else {
                    $this->session->set_flashdata('msg-false', "Failed to add user");
                    redirect(base_url() . "user");
                }
            } else {
                $this->load->model('UserModel');
                $data = array(
                    'users' => $this->UserModel->GetUsers(),
                     );
                $this->load->view('header');
                $this->load->view('userManagement', $data);
                // $this->load->view('footer');
            }
        } else {
            redirect(base_url());
        }
    }
    public function deleteUser()
    {
        $user_id = $this->uri->segment(2);
        $data = array(
            'user_id' => $user_id
        );
        $this->load->model('UserModel');
        if ($this->UserModel->deleteUsers($data)) {
            redirect('user', 'refresh');
        } else {
            $this->load->model('UserModel');
            $data = array(
                    'users' => $this->UserModel->GetUsers(),
                     );
            $this->load->view('header');
            // $this->load->view('nav');
            $this->load->view('userManagement', $data);
            // $this->load->view('footer');
        }
    }
    public function userStatus()
    {
        $option = $this->uri->segment(2);
        $user_id = $this->uri->segment(3);
        $data = array(
            'status' => $option,
            'user_id' => $user_id
        );
        $this->load->model('UserModel');
        if ($this->UserModel->updateUsers($data)) {
            $this->session->set_flashdata('success', 'User Updated successfully');
            redirect('user', 'refresh');
        } else {
            $this->session->set_flashdata('error', 'Something is wrong.');
            $this->load->model('UserModel');
            $data = array(
                    'users' => $this->UserModel->GetUsers(),
                     );
            $this->load->view('header');
            // $this->load->view('nav');
            $this->load->view('userManagement', $data);
            // $this->load->view('footer');
        }
    }
}