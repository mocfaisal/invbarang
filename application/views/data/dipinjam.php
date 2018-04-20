<div class="table-responsive">
<table class="table" id="data-siswa">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>No Siswa</th>
			<th>Nama Peminjam</th>
			<th>Tgl Pinjam</th>
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		<?php 
		$i=1;
		$query = $this->db->query("SELECT * FROM v_barang_dipinjam");
foreach ($query->result_array() as $data){

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$data['br_kode']."</td>";
echo "<td>".$data['br_nama']."</td>";
echo "<td>".$data['pb_no_siswa']."</td>";
echo "<td>".$data['pb_nama_siswa']."</td>";
echo "<td>".$data['tanggal_pinjam']."</td>";
// echo "<td>".anchor('transaksi/cetakalert/'.$data['br_kode'],'<span class="cetakalert"><button class="btn btn-success">Cetak</button></span>','target="_blank"')."</td>";
echo "</tr>";
$i++;

}


		 ?>
	</tbody>

</table>
</div>