<div class="table-responsive">
	<table class="table" id="data-pinjam">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID Peminjaman</th>
				<th>No Peminjam</th>
				<th>Nama Peminjam</th>
				<th>Tanggal Peminjam</th>
				<th>Tgl Akhir Pinjam</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=1;
			$query = $this->db->query("SELECT DISTINCT tmp.pb_id, tmp.user_id, tmp.pb_tgl, tmp.pb_no_siswa, tmp.pb_nama_siswa, tmp.pb_harus_kembali_tgl, tdpb.pdb_sts AS `status` FROM tm_peminjaman AS tmp INNER JOIN td_peminjaman_barang AS tdpb ON tmp.pb_id = tdpb.pb_id WHERE tdpb.pdb_sts = 1"); 
			foreach ($query->result_array() as $data){
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$data['pb_id']."</td>";
// echo "<td>".$data['user_id']."</td>";
				echo "<td>".$data['pb_no_siswa']."</td>";
				echo "<td>".$data['pb_nama_siswa']."</td>";
				echo "<td>".$data['pb_tgl']."</td>";
				echo "<td>".$data['pb_harus_kembali_tgl']."</td>";
// echo "<td>".$data['pb_stat']."</td>";

				echo "<td><span class='pilih-pinjam'><button class='btn btn-success'>Pilih</button></span></td>";
				echo "</tr>";

				$i++;
			}
			?>
		</tbody>

	</table>
</div>