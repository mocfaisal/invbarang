<?php 

/**
* 
*/
class MUser extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function daftar(){
		$query=array(
'nis'=>$this->input->post('nis'),
'nama'=>$this->input->post('nama')
		);
		$this->db->insert('t_siswa',$query);
	}
}

 ?>