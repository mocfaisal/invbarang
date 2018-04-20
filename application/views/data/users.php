<div class="table-responsive">
<table class="table" id="data-siswa">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Hak Akses</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$i=1;
		$query = $this->db->query("SELECT * FROM tm_user");
foreach ($query->result_array() as $data){
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$data['user_nama']."</td>";
if($data['user_hak']==0){
	echo "<td>Super User</td>";
}
elseif($data['user_hak']==1){
	echo "<td>Admin</td>";
}
elseif($data['user_hak']==2){
	echo "<td>Operator</td>";
}
echo "</tr>";

$i++;
}
		 ?>
	</tbody>

</table>
</div>