<?php 

/**
* 
*/
class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MLaporan','L');
		$this->load->model('MBarang','b');
		$this->load->model('MHome','H');

		if(!$this->session->userdata('login')){
			if($this->session->userdata('level')!='0' && $this->session->userdata('level')!='1' && $this->session->userdata('level')!='2'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}


function alert(){
	$data['alert']=$this->H->alert();
	$data['jmlalert']=$this->H->jmlalert();
	$data['user']=$this->session->userdata('username');
		$this->load->view('view_lalert',$data);
	}

function kembali(){
	$data['alert']=$this->H->alert();
	$data['jmlalert']=$this->H->jmlalert();
	$data['user']=$this->session->userdata('username');
	$this->load->view('view_kembali',$data);
}
function getdatakembali($status){
	$this->L->datakembali($status);
}

function barang(){
	$data['alert']=$this->H->alert();
	$data['jmlalert']=$this->H->jmlalert();
	$data['user']=$this->session->userdata('username');
	$this->load->view('view_databarang',$data);
}
function cetakalert($idpinjam){
	$data['dataalert']=$this->L->alert($idpinjam);
	$this->load->view('data/cetak',$data);


	}
	
	function jenisbrg(){
	$data['alert']=$this->H->alert();
	$data['jmlalert']=$this->H->jmlalert();
	$data['user']=$this->session->userdata('username');
	$this->load->view('view_jenisbrg',$data);
	}

	function users(){
	$data['alert']=$this->H->alert();
	$data['jmlalert']=$this->H->jmlalert();
	$data['user']=$this->session->userdata('username');
	$this->load->view('view_users',$data);
	}



}

 ?>