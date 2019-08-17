<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function home()
    {
        if ($this->session->userdata("logged_in") && $this->session->userdata("role") === "employee") {
            $data = array(
                'access' => $this->session->userdata('name'),
            );
            $this->load->model( 'DataModel' );
            $data[ 'fileDetails' ] = $this->DataModel->getAllFileDetails();           
            $this->load->view('header');
            $this->load->view('home',$data);
        } else {
            redirect(base_url());
        }
    }

    
    public function adminHome()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            $data = array(
                'user' => $this->session->userdata('name'),
            );
            $this->load->model( 'DataModel' );
            $data[ 'fileDetails' ] = $this->DataModel->getAllFileDetails();
            $this->load->view( 'header' );
            $this->load->view( 'dashboard' , $data );

        } else {
            redirect(base_url());
        }
    }

    public function editFileData()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            
            if( $this->input->post(  ) ){
                $name = $this->input->post( 'name' );
                $slno = $this->uri->segment(2);
                $description = $this->input->post( 'description' );
                $data = array(
                    'name' => $name,
                    'description' => $description
                );
                $this->load->model( 'DataModel' );
                $this->DataModel->editFileDetails( $data , $slno );
                $this->session->flashdata('success',"Updated Successfully");
                redirect(base_url());
            } else {
                redirect(base_url());
            }

        } else {
            redirect(base_url());
        }
    }

    public function deleteFileData()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata("role") === "admin") {
            
            if( $this->uri->segment(2) ){
               
                $slno = $this->uri->segment(2);
        
                $this->load->model( 'DataModel' );
                $this->DataModel->deleteFileDetails( $slno );
                $this->session->flashdata('success',"Deleted Successfully");
                redirect(base_url());
            } else {
                redirect(base_url());
            }

        } else {
            redirect(base_url());
        }
    }
}
