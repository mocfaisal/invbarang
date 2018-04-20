<?php 

/**
* 
*/
class MLogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

function cek(){
	$this->db->select('*');
	$this->db->where('user_nama',$this->input->post('user'));
	$this->db->where('user_pass',$this->input->post('pass'));
	$this->db->from('tm_user');
	$query=$this->db->get();
	$hasil=$query->num_rows();
	if($hasil==1){
		$row=$query->row_array();
		$data=array(
			'user_id'=>$row['user_id'],
			'username'=>$row['user_nama'],
			'level'=>$row['user_hak'],
			'login'=>true

		);
		$this->session->set_userdata($data);
		return true;
		
	}
	else{
		return false;
	}
}

function getautoid(){

	$query = $this->db->query("SELECT IFNULL(MAX(SUBSTRING(user_id,4,7)),0)+1 as nourut FROM tm_user");
		$data = $query->row_array();
		$no_urut = $data['nourut'];
		$kode="USR".sprintf("%07s",$no_urut);
		return $kode;
}

function daftar(){
	$query=array(
		'user_id'=>$this->getautoid(),
		'user_nama'=>$this->input->post('nama'),
		'user_pass'=>$this->input->post('pass'),
		'user_hak'=>$this->input->post('hak'),
		'user_sts'=>1
	);
if($this->db->insert('tm_user',$query)){
	echo "Berhasil";

}
else{
	echo "Gagal";
}
}

}

 ?>