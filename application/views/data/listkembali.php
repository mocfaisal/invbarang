<div class="table-responsive">
<table class="table" id="data-siswa">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID Peminjam</th>
			<th>No Peminjam</th>
			<th>Nama Peminjam</th>
			<th>Tgl Pinjam</th>
			<th>Tgl Berakhir</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$i=1;
		$query = $this->db->query("SELECT DISTINCT tmp.pb_id, tmp.pb_no_siswa, tmp.pb_nama_siswa, tmp.pb_tgl, tmp.pb_harus_kembali_tgl, tdpb.pdb_sts AS `status` FROM tm_peminjaman AS tmp INNER JOIN td_peminjaman_barang AS tdpb ON tmp.pb_id = tdpb.pb_id WHERE tdpb.pdb_sts = 0"); 
		foreach ($query->result_array() as $data){
if(substr($data['pb_harus_kembali_tgl'],0,10) == date('Y-m-d',strtotime('+3 days'))){
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$data['pb_id']."</td>";
echo "<td>".$data['pb_no_siswa']."</td>";
echo "<td>".$data['pb_nama_siswa']."</td>";
echo "<td>".$data['pb_tgl']."</td>";
echo "<td>".$data['pb_harus_kembali_tgl']."</td>";
echo "<td>".anchor('transaksi/cetakalert/'.$data['pb_id'],'<span class="cetakalert"><button class="btn btn-success">Cetak</button></span>','target="_blank"')."</td>";
echo "</tr>";
$i++;
}
}


		 ?>
	</tbody>

</table>
</div>