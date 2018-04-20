<?php 

/**
* 
*/
class MBarang extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	function delete($data){
		$tabel=array('tr_jenis_barang','tm_barang_inventaris');
		$this->db->where('jns_brg_kode',$data);
		$this->db->delete($tabel);
		if(true){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	function listz(){
		$query=$this->db->query("SELECT tmbrgi.br_kode, tmbrgi.br_nama, trjb.jns_brg_nama, tmbrgi.br_tgl_terima, tmbrgi.br_status AS `status`, tmbrgi.jns_brg_kode FROM tm_barang_inventaris AS tmbrgi INNER JOIN tr_jenis_barang AS trjb ON tmbrgi.jns_brg_kode = trjb.jns_brg_kode"); 
		$result=$query->result_array();
		return $result;
	}

	function daftar(){
		$user_id=$_SESSION['user_id'];
		$tgl = date('Y-m-d');
		$tgltm = date('Y-m-d H:i:s');
		$query1=array(
			'br_kode'=>$this->getautoinv(),
			'jns_brg_kode'=>$this->getautojnsbrg(),
			'user_id'=>$user_id,
			'br_nama'=>$this->input->post('nama'),
			'br_tgl_terima'=>$tgl,
			'br_tgl_entry'=>$tgltm,
			'br_status'=>$this->input->post('status')
		);
		$query2=array(
			'jns_brg_kode'=>$this->getautojnsbrg(),
			'jns_brg_nama'=>$this->input->post('jenis')
		);

		$proses1=$this->db->insert('tm_barang_inventaris',$query1);
		$proses2=$this->db->insert('tr_jenis_barang',$query2);
		if($proses2 OR $proses1){
			echo "Berhasil";
			
		}else{
			echo('Gagal');
		}
	}


	function updatez(){

		$query1=array(
			'br_nama'=>$this->input->post('nama'),
			'br_status'=>$this->input->post('status')
		);

		$this->db->where('br_kode',$this->input->post('kodebrg'));
		$this->db->update('tm_barang_inventaris',$query1);
		
		$query2=array(
			'jns_brg_nama'=>$this->input->post('jenis')
		);

		$this->db->where('jns_brg_kode',$this->input->post('kodejns'));

		$this->db->update('tr_jenis_barang',$query2);
		
		if(true){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}


	function getautoinv(){
		$thn_sekarang = date('Y');
		$today = date('Ym');
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTRING(br_kode, 9, 3)), 0 ) + 1 AS nourut FROM tm_barang_inventaris WHERE SUBSTRING(br_kode, 4, 4) = '".$thn_sekarang."'"); $data = $query->row_array();
		$no_urut = $data['nourut']+1;
		$kode="INV".$today.sprintf("%03s",$no_urut);
		return $kode;
	}

	function getautojnsbrg(){
		// $thn_sekarang = date('Y');
		// $today = date('Ym');
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTRING(jns_brg_kode,3,3)),0)+1 as 'nourut' FROM tr_jenis_barang");
		$data = $query->row_array();
		$no_urut = $data['nourut'];
		$kode="JB".sprintf("%03s",$no_urut);
		return $kode;
	}
}

?>