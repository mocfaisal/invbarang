<?php 

/**
* 
*/
class MTransaksi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	
	function proseskembali(){
		$user_id=$_SESSION['user_id'];
		$kodebalik=$this->tr->getKodeKembali();
		$tgl = date('Y-m-d H:i:s');
		$query = array(
'kembali_id'=>$kodebalik,
'pb_id'=>$this->input->post('idpinjam'),
'user_id'=>$user_id,
'kembali_tgl'=>$tgl,
'kembali_sts'=>1
		);

		$insert=$this->db->insert('tm_pengembalian',$query);
		if($insert){
			return $value=$kodebalik;
			redirect('?');
		}else{
			return $value='';
		}
	}
	function prosespinjam(){
		date_default_timezone_set('Asia/Jakarta');
		$user_id=$_SESSION['user_id'];
		$check = $this->input->post('nis');
		$tgl = date('Y-m-d H:i:s');
		$statusPinjamDet='1';
		$status='1';
		
		if($check = 0){
			return false;
		}
		else{
			$kodetr = $this->getidtransaksi();
		//tm_peminjaman | 1 insert
			$query1 = array(
				'pb_id' => $kodetr,
				'user_id' => $user_id,
				'pb_tgl' => $tgl,
				'pb_no_siswa' => $this->input->post('nis'),
				'pb_nama_siswa' => $this->input->post('nama'),
				'pb_harus_kembali_tgl' => date('Y-m-d H:i:s', strtotime($this->input->post('tglbalik')." 00:00:00")),
				'pb_stat' => $status
			);
// $this->db->insert('tm_peminjaman',$query1);
		//td_peminjaman_barang | Multiple insert
		
			foreach ($this->input->post('kode') as $key => $value){

				$query2 = array(
					'pbd_id'=>$this->KodeOtomatisDetPinjam($kodetr,$key),
					'pb_id'=>$kodetr,
					'br_kode'=>$value,
					'pdb_tgl'=>$tgl,
					'pdb_sts'=>$statusPinjamDet
				);
				$this->db->insert('td_peminjaman_barang',$query2);
			}

		}
		$insert=$this->db->insert('tm_peminjaman',$query1);
		
		// $insertDet=$this->db->insert('td_peminjaman_barang',$query2);
		 if($insert){
			return $value=$kodetr;
			redirect('?');
		}else{
			return $value='';
		}

	}	

	function getidtransaksi(){
		$thn_sekarang = date('Y');
		$today = date('Ym');
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTRING(pb_id,10,3)),0)+1 as nourut FROM tm_peminjaman WHERE SUBSTRING(pb_id,3,4)='".$thn_sekarang."'");
		$data = $query->row_array();
		$no_urut = $data['nourut'];
		$kode="PJ".$today.sprintf("%03s",$no_urut);
		return $kode;
	}
	
	function KodeOtomatisDetPinjam($kode,$key){
		$pb_id = $kode;
		$lastNourut=substr($pb_id,11,3);
		$nextNoUrut=$lastNourut+$key+1;

		$nextNoTransaksi=$pb_id.sprintf('%03s',$nextNoUrut);
		return $nextNoTransaksi;
	}

function getKodeBarang(){
		$thn_sekarang = date('Y');
		$today = date('Ym');
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTRING(br_kode,8,5)),0)+1 as nourut FROM tm_barang_inventaris WHERE SUBSTRING(br_kode,4,4)='".$thn_sekarang."'");
		$data = $query->row_array();
		$no_urut = $data['nourut'];
		$kode="INV".$today.sprintf("%03s",$no_urut);
		return $kode;
	}

function getKodeKembali(){
		$thn_sekarang = date('Y');
		$today = date('Ym');
		$query = $this->db->query("SELECT IFNULL(MAX(SUBSTRING(kembali_id,10,3)),0)+1 as nourut FROM tm_pengembalian WHERE SUBSTRING(kembali_id,3,4)='".$thn_sekarang."'");
		$data = $query->row_array();
		$no_urut = $data['nourut'];
		$kode="KB".$today.sprintf("%03s",$no_urut);
		return $kode;
	}

	function getpinjamdetail($idna){
		// $idna=$this->input->post('idpinjam');
			
		$query=$this->db->query("SELECT tdpb.pb_id, tmbrgi.br_kode, tmbrgi.br_nama, trjb.jns_brg_nama, tmbrgi.br_status as 'status' FROM tr_jenis_barang AS trjb INNER JOIN tm_barang_inventaris AS tmbrgi ON trjb.jns_brg_kode = tmbrgi.jns_brg_kode INNER JOIN td_peminjaman_barang AS tdpb ON tmbrgi.br_kode = tdpb.br_kode WHERE tdpb.pb_id='".$idna."'");
		
		$arr=$query->result_array();
		$i=1;

foreach($arr as $data){

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$data['br_kode']."</td>";
echo "<td>".$data['br_nama']."</td>";
echo "<td>".$data['jns_brg_nama']."</td>";

if ($data['status'] == 1){
        echo "<td>Kondisi Baik</td>"; 
      }elseif($data['status'] == 2){
        echo "<td>Kondisi Rusak, Bisa Diperbaiki</td>"; 
      }
      elseif($data['status'] == 3){
        echo "<td>Kondisi Rusak Parah</td>";  
      }
      elseif($data['status'] == 0){
        echo "<td>Barang tidak tersedia</td>";  
      }
      // echo "<td><span class='hapuspinjam'><button class='btn btn-danger'>Hapus</button></span></td>";
echo "</tr>";

$i++;
}
		// return $query->result_array();

	}

}

?>