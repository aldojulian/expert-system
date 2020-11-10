<h3>Halaman Profil</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input readonly="" name="username_pakar" class="form-control" value="<?php echo $pakar['username_pakar'] ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input readonly="" name="nama_pakar" class="form-control" value="<?php echo $pakar['nama_pakar'] ?>">
	</div>
	<div class="form-group">
		<a href="<?php echo base_url("pakar/profil/ubah") ?>" class="btn btn-primary">Ubah Profil</a>
	</div>

</form>