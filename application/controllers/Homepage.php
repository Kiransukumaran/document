<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function home()
    {
        if ($this->session->userdata('logged_in') &&  $this->session->userdata("role") === "employee") {
            redirect(base_url()."dashboard");
        } elseif ($this->session->userdata('logged_in') &&  $this->session->userdata("role") === "admin") {
            redirect(base_url()."admin");
        } elseif ($this->session->userdata('logged_in') &&  $this->session->userdata("role") === "entry") {
            redirect(base_url()."entry");
        } else {
            $this->load->view('login');
        }
    }
    public function login()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'UserName', 'required|alpha_dash');
            $this->form_validation->set_rules('password', 'Password', 'required|alpha_dash');
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('errorMsg', 'Invalid Username or Password');
                redirect(base_url());
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $credentials = array(
                    'username' => $username,
                    'password' => md5($password),
                     );
                $this->load->model('LoginModel');
                if ($this->LoginModel->validateUser($credentials)) {
                    $UserData = $this->LoginModel->UserDetails($credentials);
                    if ($UserData['0']->status == 2) {
                        $this->session->set_flashdata('errorMsg', 'Your account has been disabled by the Admin');
                        redirect(base_url());
                    } else {
                        $sessionData = array(
                        'id' => $UserData['0']->slno,
                        'name' => $UserData['0']->Name,
                        'role' => $UserData['0']->role,
                        'username' => $UserData['0']->username,
                        'email' => $UserData['0']->email,
                        'designation' => $UserData['0']->designation,
                        'logged_in' => true,
                         );
                        $this->session->set_userdata($sessionData);
                        if ($sessionData['role'] == 'admin') {
                            redirect(base_url()."admin");
                        } elseif ($sessionData['role'] == 'entry') {
                            redirect(base_url()."entry");
                        } else {
                            redirect(base_url()."dashboard");
                        }
                    }
                } else {
                    $this->session->set_flashdata('errorMsg', 'Invalid Username or Password');
                    redirect(base_url());
                }
            }
        } else {
            redirect(base_url());
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
