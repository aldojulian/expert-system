<h3>Ubah Penyakit</h3>

<form method="post">
	<div class="form-group">
		<label>Kode Penyakit</label>
		<input type="text" class="form-control" name="kode_penyakit" value="<?php echo $penyakit["kode_penyakit"]; ?>">
	</div>
	<div class="form-group">
		<label>Nama Penyakit</label>
		<input type="text" class="form-control" name="nama_penyakit" value="<?php echo $penyakit["nama_penyakit"]; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Penyakit</label>
		<input type="text" class="form-control" name="deskripsi_penyakit" value="<?php echo $penyakit["deskripsi_penyakit"]; ?>">
	</div>
	<button class="btn btn-primary">Ubah</button>
</form>