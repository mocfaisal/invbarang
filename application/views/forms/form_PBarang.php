<!-- <form class="form-horizontal" role="form" id="form-barang" action="?" method="post"> -->
	<div class="form-horizontal">

	<div class="form-group">
 	<label for="No Transaksi" class="col-sm-2 control-label">No Transaksi</label>
 	<div class="col-sm-4">
 		<input class="form-control" type="text" name="pb_id" id="pb_id" readonly value="<?php echo $kode_tr; ?>">
 	</div>
</div>

<div class="form-group">
 	<label for="Tanggal Kembali" class="col-sm-2 control-label">Tanggal Sekarang</label>
 	<div class="col-sm-4">
 		<input class="form-control" type="text" name="tglsekarang" id="tglsekarang" value='<?php echo date('Y-m-d'); ?>' readonly>

 	</div>
</div>

<div class="form-group">
 	<label for="Tanggal Kembali" class="col-sm-2 control-label">Hari</label>
 	<div class="col-sm-4">
 		<input class="form-control" type="number" min="0" max="100" name="tglhari" id="tglhari" value="0">

 	</div>
</div>

<div class="form-group">
 	<label for="Tanggal Kembali" class="col-sm-2 control-label">Tanggal Kembali</label>
 	<div class="col-sm-4">
 		<input class="form-control" type="text" name="tglbalik" id="tglbalik" readonly value="<?php echo date('Y-m-d'); ?>">
 		<!-- <input class="form-control" type="time" name="jambalik" id="jambalik"> -->
 	</div>
</div>
</div>
<!-- </form> -->