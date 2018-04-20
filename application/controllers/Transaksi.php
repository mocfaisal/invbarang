<?php 

/**
* 
*/
class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MTransaksi','tr');
		$this->load->model('MHome','H');
		if(!$this->session->userdata('login')){
			if($this->session->userdata('level')!='0' && $this->session->userdata('level')!='1' && $this->session->userdata('level')!='2'){
			// redirect('forbidden');
				redirect('login');
			}
			redirect('login');
		}
	}

	function index(){

	}


	function pinjam(){
		$data['jmlalert']=$this->H->jmlalert();
		$data['alert']=$this->H->alert();
		$data['user']=$this->session->userdata('username');
		$data['kode_tr']=$this->tr->getidtransaksi();
		$this->load->view('view_trpinjam',$data);
	}

	function kembali(){
		$data['jmlalert']=$this->H->jmlalert();
		$data['alert']=$this->H->alert();
		$data['user']=$this->session->userdata('username');
		$this->load->view('view_trkembali',$data);
	}

	function simpan(){
		if($this->tr->prosespinjam()){
			echo "Insert";
			redirect('?');
		}else{
			echo "Gagal";
		}
	}
	function balik(){
		if($this->tr->proseskembali()){
			echo "Insert";
			redirect('?');
		}
		else{
			echo "Gagal";
		}
	}

	function datadetpinjam($idna){
		$this->tr->getpinjamdetail($idna);
	}


	function dipinjam(){
		$data['jmlalert']=$this->H->jmlalert();
		$data['user']=$this->session->userdata('username');
		$data['alert']=$this->H->alert();
	$this->load->view('view_dipinjam',$data);
}
}

?>