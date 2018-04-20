<body onload="window.print();">
<?php  

foreach($dataalert as $data){
echo "Kepada "; 
echo "<b>".$data['pb_nama_siswa']."</b>";  
echo "<br> Dengan No Peminjaman : "; 
echo "<b>".$data['pb_id']."</b>";  
echo "<br>
Untuk segera mengembalikan barang pada waktu yang telah ditetapkan sebelumnya";
}

?>
</body>