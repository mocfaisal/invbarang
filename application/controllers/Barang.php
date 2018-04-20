<?php 

/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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

	function hapus($data){
	$this->b->delete($data);
}

	function daftar(){
		$data['alert']=$this->H->alert();
	$data['user']=$this->session->userdata('username');
	$data['jmlalert']=$this->H->jmlalert();
	$this->load->view('view_barang',$data);
	}

	function simpan(){
		$this->b->daftar();
	}

	function update(){
		$this->b->updatez();
		
	}

}

?>