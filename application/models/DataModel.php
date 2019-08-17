
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model {

	public function storeUploadedFile( $data )
	{
		$this->db->insert( 'files' , $data );
	}
	public function getAllFileDetails()
	{
		return $this->db->get('files')->result_array();
	}
	public function editFileDetails( $data , $slno)
	{
		$this->db->where( 'slno' , $slno );
		$this->db->update( 'files' , $data );
	}
	public function deleteFileDetails( $slno)
	{
		$this->db->where( 'slno' , $slno );
		$this->db->delete( 'files' );
	}
}
