<h3>Tambah detail pengetahuan</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>pengetahuan</label>
		<input readonly="" class="form-control" value="<?php echo $detail_pengetahuan['nama_pengetahuan'] ?>">
	</div>
	<div class="form-group">
		<label>Nama detail pengetahuan</label>
		<input type="text" name="nama_detail_pengetahuan" class="form-control" value="<?php echo $detail_pengetahuan['nama_detail_pengetahuan'] ?>">
	</div>
	<div class="form-group">
		<label>Nilai detail pengetahuan</label>
		<input type="text" name="nilai_detail_pengetahuan" class="form-control" value="<?php echo $detail_pengetahuan['nilai_detail_pengetahuan'] ?>">
	</div>
		<div class="form-group">
			<button class="btn btn-primary">Simpan</button>
	</div>
</form>