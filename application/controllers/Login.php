<?php 

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin','L');
		if($this->session->userdata('login') && 
			$this->uri->segment(2) != 'logout'){
			redirect('home');
		}
	}

function index(){
	$this->load->view('view_login');
}
function cek(){
	
	if($this->L->cek()){
		redirect('?');
	}
	else{
		redirect('?/login');
	}
}
function prosesdaftar(){
$this->L->daftar();
}

function daftar(){
$this->load->view('view_users');
}
function logout(){
		session_destroy();
		redirect('?/login');
	}

}

 ?>