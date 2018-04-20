<div class="table-responsive">
	<table class="table" id="data-barang">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Kondisi</th>
				<th>Tools</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=1;
			$query = $this->db->query("SELECT * FROM v_valid_barang WHERE status = 1 OR status = 2");

			foreach ($query->result_array() as $data){

			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['br_kode']."</td>";
			echo "<td>".$data['br_nama']."</td>";

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
// echo "<td>".$data['status']."</td>";
			echo "<td><span class='pilih-barang'><button class='btn btn-success'>Pilih</button></span></td>";
			echo "</tr>";
			
			$i++;
}
			?>
		</tbody>

	</table>
</div>