<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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
		$this->H->getdatagrafikbarpinjam();
		$this->H->getdatagrafikbarkembali();
		$data['kembali']=$this->H->jmlkembali();
		$data['pinjam']=$this->H->jmlpinjam();
		$data['ratakembali']=$this->H->jmlkembali()/2;
		$data['ratapinjam']=$this->H->jmlpinjam()/2;
		$data['jmlbarang']=$this->H->jmlbarang();
		$data['user']=$this->session->userdata('username');
		$data['alert']=$this->H->alert();
		$data['jmlalert']=$this->H->jmlalert();
		$data['jmlbarang1']=$this->H->jmlbarangkondisi('1');
		$data['jmlbarang2']=$this->H->jmlbarangkondisi('2');
		$data['jmlbarang3']=$this->H->jmlbarangkondisi('3');
		$this->load->view('view_home2',$data);
		
	}
	function logout(){
		session_destroy();
	}
}


 ?>