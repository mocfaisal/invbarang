<form class="form-horizontal" role="form" id="form-barang" action="<?php echo base_url(); ?>?/barang/simpan" method="post">
<div class="form-horizontal">
	 <div class="form-group">
	<label for="nama" class="col-sm-4 control-label">Nama Barang</label>
 	<div class="col-sm-8">
 		<input class="form-control" type="text" name="nama" id="nama">
 	</div>
 
</div>
 
 <div class="form-group">
 	<label for="jenis" class="col-sm-4 control-label">Nama Jenis Barang</label>
 	<div class="col-sm-8">
 		<input class="form-control" type="text" name="jenis" id="jenis">
 	</div>
</div>
<div class="form-group" hidden>
 	<label for="jenis" class="col-sm-4 control-label">Kode Barang</label>
 	<div class="col-sm-8">
 		<input class="form-control" type="text" name="kodebrg" id="kodebrg">
 	</div>
</div>
<div class="form-group" hidden>
 	<label for="jenis" class="col-sm-4 control-label">Kode Jenis Barang</label>
 	<div class="col-sm-8">
 		<input class="form-control" type="text" name="kodejns" id="kodejns">
 	</div>
</div>

<div class="form-group">
 	<label for="status" class="col-sm-4 control-label">Status</label>
 	<div class="col-sm-8">
 		<select class="form-control" id="status" name="status">
 			<option value="1">Baik</option>
 			<option value="2">Rusak(Diperbaiki)</option>
 			<option value="3">Rusak Parah</option>

 		</select>
 		
 	</div>
</div>

</div>

<!-- <input type="submit" name="submit-siswa"> -->
</form>