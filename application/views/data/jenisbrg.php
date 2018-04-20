<div class="table-responsive">
	<table class="table" id="data-jenisbrg">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Barang</th>
				<th>Nama Jenis Barang</th>
				</tr>
		</thead>
		<tbody>
			<?php 
			$i=1;
			$query = $this->db->query("SELECT * FROM tr_jenis_barang");

			foreach ($query->result_array() as $data){

			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['jns_brg_kode']."</td>";
			echo "<td>".$data['jns_brg_nama']."</td>";
			echo "</tr>";
			
			$i++;
}
			?>
		</tbody>

	</table>
</div>