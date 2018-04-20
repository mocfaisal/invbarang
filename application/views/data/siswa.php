<div class="table-responsive">
<table class="table" id="data-siswa">
	<thead>
		<tr>
			<th>No.</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Tools</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$i=1;
		$query = $this->db->query('SELECT * FROM t_siswa');
foreach ($query->result_array() as $data){
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$data['NIS']."</td>";
echo "<td>".$data['Nama']."</td>";
echo "<td><span class='pilih-siswa'><button class='btn btn-success'>Pilih</button></span></td>";
echo "</tr>";

$i++;
}
		 ?>
	</tbody>

</table>
</div>