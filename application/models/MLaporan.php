<?php 

/**
* 
*/
class MLaporan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function datakembali($status){
$query=$this->db->query("SELECT DISTINCT tmp.pb_id, tmp.pb_no_siswa, tmp.pb_nama_siswa, tmp.pb_tgl, tmp.pb_harus_kembali_tgl, tdpb.pdb_sts AS `status` FROM tm_peminjaman AS tmp INNER JOIN td_peminjaman_barang AS tdpb ON tmp.pb_id = tdpb.pb_id WHERE tdpb.pdb_sts =".$status);
	$result=$query->result_array();
	//return $result;
	$i=1;
foreach ($result as $data) {
	echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$data['pb_id']."</td>";
echo "<td>".$data['pb_no_siswa']."</td>";
echo "<td>".$data['pb_nama_siswa']."</td>";
echo "<td>".$data['pb_tgl']."</td>";
echo "<td>".$data['pb_harus_kembali_tgl']."</td>";
echo "</tr>";
	$i++;
		
		}


	}

function alert($idpinjam){
	$query = $this->db->query("SELECT DISTINCT tmp.pb_id, tmp.user_id, tmp.pb_tgl, tmp.pb_no_siswa, tmp.pb_nama_siswa, tmp.pb_harus_kembali_tgl, tdpb.pdb_sts AS `status` FROM tm_peminjaman AS tmp INNER JOIN td_peminjaman_barang AS tdpb ON tmp.pb_id = tdpb.pb_id WHERE tdpb.pdb_sts = 1 and tmp.pb_id='".$idpinjam."'");
$result=$query->result_array();
	return $result;
}

}

 ?>