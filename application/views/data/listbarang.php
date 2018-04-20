<div id='table-responsive'>
	<table class='table' id='data-listbarang'>
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Tanggal Barang</th>
				<th>Kondisi Barang</th>
				<th hidden>Kode Jenis Barang</th>
				<th>Aksi</th>

			</tr>
		</thead>		

		<tbody id='dlistbarang'>

			<?php 
			$i=1;
			
			$barang=$this->load->b->listz();
			foreach($barang as $data){
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$data['br_kode']."</td>";
				echo "<td>".$data['br_nama']."</td>";
				echo "<td>".$data['jns_brg_nama']."</td>";
				echo "<td>".$data['br_tgl_terima']."</td>";

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
				echo "<td hidden>".$data['jns_brg_kode']."</td>";
				echo "<td>".anchor('barang/hapus/'.$data['jns_brg_kode'],'<span class="glyphicon glyphicon-remove"></span>',"class='remove-data'");

				echo "<a href='#edit' class='btn-edit'><span class='glyphicon glyphicon-edit'></span></a></td>";


				echo "</tr>";

				$i++;
			}

			?>
		</tbody>

	</table>
</div>