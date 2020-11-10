<section class="container mh-1">
	<h3>Halaman Profil</h3>
	<hr>


	<form method="post">
		<div class="form-group">
			<label>Username</label>
			<input readonly="" name="username_klien" class="form-control" value="<?php echo $klien['username_klien'] ?>">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input readonly="" name="nama_klien" class="form-control" value="<?php echo $klien['nama_klien'] ?>">
		</div>
		<div class="form-group">
			<a href="<?php echo base_url("klien/profil/ubah") ?>" class="btn btn-primary">Ubah Profil</a>
		</div>

	</form>
</section>