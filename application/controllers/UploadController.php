<?php

class UploadController extends CI_Controller {

        public function index()
        {
                $error = array('error' => '');
                $this->load->view('header');
                $this->load->view('upload',$error);
        }

        public function do_upload()
        {       

                $name = $this->input->post( 'name' );
                $description = $this->input->post( 'description' );
                $date = date('Y-m-d');

                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc|docx';
                $config['max_size']             = 1000;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('upload'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('header');
                        $this->load->view('upload', $error);
                }
                else
                {
                        
                        $data = array(
                                "name" => $name,
                                "description" => $description,
                                "date" => $date,
                                "path" => base_url()."uploads/".$this->upload->data()["file_name"],
                                "ext" =>$this->upload->data()["file_ext"]
                        );

                        $this->load->model( 'DataModel' );
                        $this->DataModel->storeUploadedFile( $data );
                        $error = array('error' => 'File Uploaded Successfully');
                        $this->load->view('header');
                        $this->load->view('upload', $error);
                }
        }
}
?>