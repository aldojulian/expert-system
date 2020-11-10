<h3>Halaman Profil</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input readonly="" name="username_admin" class="form-control" value="<?php echo $admin['username_admin'] ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input readonly="" name="nama_admin" class="form-control" value="<?php echo $admin['nama_admin'] ?>">
	</div>
	<div class="form-group">
		<a href="<?php echo base_url("admin/profil/ubah") ?>" class="btn btn-primary">Ubah Profil</a>
	</div>

</form>