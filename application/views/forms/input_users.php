<form class="form-horizontal" role="form" id="form-users" action="<?php echo base_url(); ?>?/login/prosesdaftar" method="post">
<div class="form-horizontal">
	 
 
 <div class="form-group">
 	<label for="Nama" class="col-sm-2 control-label">Username</label>
 	<div class="col-sm-4">
 		<input class="form-control" type="text" name="nama" id="nama">
 	</div>
</div>

<div class="form-group">
	<label for="pass" class="col-sm-2 control-label">Password</label>
 	<div class="col-sm-4">
 		<input class="form-control" type="password" name="pass" id="pass">
 	</div>
 	</div>

 	<div class="form-group">
 	<label for="Nama" class="col-sm-2 control-label">Hak Akses</label>
 	<div class="col-sm-4">
 		<select name="hak">
 			<option value="0">Super User</option>
 			<option value="1">Admin</option>
 			<option value="2">Operator</option>
 		</select>
 	</div>
</div>

</div>
<input type="submit" name="submit-users">
</form>