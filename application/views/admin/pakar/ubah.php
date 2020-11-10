<h3>Ubah pakar</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="username_pakar" value="<?php echo $pakar["username_pakar"]; ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama_pakar" value="<?php echo $pakar["nama_pakar"]; ?>  ">
	</div>
	<div class="form-group">
		<label>Nomor Telepon</label>
		<input type="text" class="form-control" name="telepon_pakar" value="<?php echo $pakar["telepon_pakar"]; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat_pakar" value="<?php echo $pakar["alamat_pakar"]; ?>">
	</div>
	<button class="btn btn-primary">Ubah</button>
</form>