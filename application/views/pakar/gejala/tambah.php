<h3>Tambah Gejala</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Kode Gejala</label>
		<input type="text" name="kode_gejala" class="form-control">
		<p><small class="text-danger"><i><?php echo form_error("kode_gejala") ?></i></small></p>
	</div>
	<div class="form-group">
		<label>Nama Gejala</label>
		<input type="text" name="nama_gejala" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
	</div>
</form>
</form>