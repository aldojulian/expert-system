<h3>Tambah Penyakit</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Kode Penyakit</label>
		<input type="text" name="kode_penyakit" class="form-control">
		<p><small class="text-danger"><i><?php echo form_error("kode_penyakit") ?></i></small></p>
	</div>
	<div class="form-group">
		<label>Nama Penyakit</label>
		<input type="text" name="nama_penyakit" class="form-control">
	<div class="form-group">
		<label>Deskripsi Penyakit</label>
		<input type="text" name="deskripsi_penyakit" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
	</div>
</form>
</form>