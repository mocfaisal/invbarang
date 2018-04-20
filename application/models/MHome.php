<?php 

/**
* 
*/
class MHome extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function getdatagrafikbarpinjam(){
// $data = array(
// 		'GBarPinjamJan' => $this->grafikBarpinjam('01'),
// 		'GBarPinjamFeb' => $this->grafikBarpinjam('02'),
// 		'GBarPinjamMar' => $this->grafikBarpinjam('03'),
// 		'GBarPinjamApr' => $this->grafikBarpinjam('04'),
// 		'GBarPinjamMei' => $this->grafikBarpinjam('05'),
// 		'GBarPinjamJun' => $this->grafikBarpinjam('06'),
// 		'GBarPinjamJul' => $this->grafikBarpinjam('07'),
// 		'GBarPinjamAgu' => $this->grafikBarpinjam('08'),
// 		'GBarPinjamSep' => $this->grafikBarpinjam('09'),
// 		'GBarPinjamOkt' => $this->grafikBarpinjam('10'),
// 		'GBarPinjamNov' => $this->grafikBarpinjam('11'),
// 		'GBarPinjamDes' => $this->grafikBarpinjam('12')
		
// 	);
 $data2=array($this->grafikBarpinjam('01'),
		 $this->grafikBarpinjam('02'),
		 $this->grafikBarpinjam('03'),
		 $this->grafikBarpinjam('04'),
		 $this->grafikBarpinjam('05'),
		 $this->grafikBarpinjam('06'),
		 $this->grafikBarpinjam('07'),
		 $this->grafikBarpinjam('08'),
		 $this->grafikBarpinjam('09'),
		 $this->grafikBarpinjam('10'),
		 $this->grafikBarpinjam('11'),
		 $this->grafikBarpinjam('12'));
		
	// $this->session->set_userdata($data);
$_SESSION['datapinjam'] = json_encode($data2);
return json_encode($data2);

	}
	function grafikBarpinjam($bulan){
		$tgl=date('Y-'.$bulan);
$query=$this->db->query("SELECT substr(pb_tgl, 1, 10) AS recordTgl, count(substr(pb_tgl, 1, 10)) AS record FROM tm_peminjaman where substr(pb_tgl, 1, 10) like '%".$tgl."%' GROUP BY recordTgl ");
$jml=$query->num_rows(); 
return $jml;
}

function getdatagrafikbarkembali(){
// $data = array(
// 		'GBarKembaliJan' => $this->grafikBarkembali('01'),
// 		'GBarKembaliFeb' => $this->grafikBarkembali('02'),
// 		'GBarKembaliMar' => $this->grafikBarkembali('03'),
// 		'GBarKembaliApr' => $this->grafikBarkembali('04'),
// 		'GBarKembaliMei' => $this->grafikBarkembali('05'),
// 		'GBarKembaliJun' => $this->grafikBarkembali('06'),
// 		'GBarKembaliJul' => $this->grafikBarkembali('07'),
// 		'GBarKembaliAgu' => $this->grafikBarkembali('08'),
// 		'GBarKembaliSep' => $this->grafikBarkembali('09'),
// 		'GBarKembaliOkt' => $this->grafikBarkembali('10'),
// 		'GBarKembaliNov' => $this->grafikBarkembali('11'),
// 		'GBarKembaliDes' => $this->grafikBarkembali('12')
		
// 	);

$data2 = array(
		 $this->grafikBarkembali('01'),
		 $this->grafikBarkembali('02'),
		 $this->grafikBarkembali('03'),
		 $this->grafikBarkembali('04'),
		 $this->grafikBarkembali('05'),
		 $this->grafikBarkembali('06'),
		 $this->grafikBarkembali('07'),
		 $this->grafikBarkembali('08'),
		 $this->grafikBarkembali('09'),
		 $this->grafikBarkembali('10'),
		 $this->grafikBarkembali('11'),
		 $this->grafikBarkembali('12')
		
	);
$_SESSION['datakembali'] = json_encode($data2);
return json_encode($data2);
	// $this->session->set_userdata($data);
	}
	function grafikBarkembali($bulan){
		$tgl=date('Y-'.$bulan);
$query=$this->db->query("SELECT substr(kembali_tgl, 1, 10) AS recordTgl, count(substr(kembali_tgl, 1, 10)) AS record FROM tm_pengembalian where substr(kembali_tgl, 1, 10) like '%".$tgl."%' GROUP BY recordTgl "); 
$jml=$query->num_rows();
return $jml;
}

function jmlkembali(){
$query=$this->db->query("SELECT count(kembali_tgl) as kembali FROM tm_pengembalian GROUP BY kembali_tgl"); 
$jml=$query->num_rows();
	return $jml;
}

function jmlpinjam(){
$query=$this->db->query("SELECT count(pb_tgl) as pinjam FROM tm_peminjaman GROUP BY pb_tgl"); 
$jml=$query->num_rows();
	return $jml;
}

function jmlbarang(){
	$query=$this->db->query("SELECT count(br_kode) as jml FROM tm_barang_inventaris GROUP BY br_kode"); 
$jml=$query->num_rows();
return $jml;
}

function alert(){
	$query = $this->db->query("SELECT DISTINCT tmp.pb_id, tmp.user_id, tmp.pb_tgl, tmp.pb_no_siswa, tmp.pb_nama_siswa, tmp.pb_harus_kembali_tgl, tdpb.pdb_sts AS `status` FROM tm_peminjaman AS tmp INNER JOIN td_peminjaman_barang AS tdpb ON tmp.pb_id = tdpb.pb_id WHERE tdpb.pdb_sts = 1");
$result=$query->result_array();
	return $result;
}
function jmlalert(){
	date_default_timezone_set('Asia/Jakarta');
$query=$this->db->query("SELECT DISTINCT tmp.pb_id, tmp.user_id, tmp.pb_tgl, tmp.pb_no_siswa, tmp.pb_nama_siswa, tmp.pb_harus_kembali_tgl, tdpb.pdb_sts AS `status` FROM tm_peminjaman AS tmp INNER JOIN td_peminjaman_barang AS tdpb ON tmp.pb_id = tdpb.pb_id WHERE tdpb.pdb_sts = 1 AND SUBSTR(tmp.pb_harus_kembali_tgl,1,10)='".date('Y-m-d',strtotime('+3 days'))."'");
return $query;
}

function jmlbarangkondisi($kondisi){
	$query=$this->db->query("SELECT * FROM v_status_barang WHERE br_status='".$kondisi."'");
	$result=$query->num_rows();
	return $result;
}
}

 ?>