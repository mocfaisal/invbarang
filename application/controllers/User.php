<?php 

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MUser','U');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('level')!='0' && $this->session->userdata('level')!='1' && $this->session->userdata('level')!='2'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

function prosesdaftar(){
$this->U->daftar();
}
function daftar(){
	$data['jmlalert']=$this->H->jmlalert();
	$data['user']=$this->session->userdata('username');
	$data['alert']=$this->H->alert();
	$this->load->view('view_user',$data);
}
}

 ?>