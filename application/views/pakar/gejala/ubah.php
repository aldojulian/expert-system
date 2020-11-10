<h3>Ubah Gejala</h3>

<form method="post">
	<div class="form-group">
		<label>Kode Gejala</label>
		<input type="text" class="form-control" name="kode_gejala" value="<?php echo $gejala["kode_gejala"]; ?>">
	</div>
	<div class="form-group">
		<label>Nama Gejala</label>
		<input type="text" class="form-control" name="nama_gejala" value="<?php echo $gejala["nama_gejala"]; ?>">
	</div>
	<button class="btn btn-primary">Ubah</button>
</form>