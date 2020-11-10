<h3>Ubah Artikel</h3>

<form method="post">
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul_artikel" value="<?php echo $artikel["judul_artikel"]; ?>">
	</div>
		<div class="form-group">
		<label>Tanggal</label>
		<input type="date" name="tanggal_artikel" class="form-control" value="<?php echo $artikel["tanggal_artikel"];?>">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<input type="text" name="deskripsi_artikel" class="form-control" value="<?php echo $artikel["deskripsi_artikel"];?>">
	</div>
	<div class="form-group">
		<label>Isi Artikel</label>
		<input type="text" class="form-control" name="isi_artikel" value="<?php echo $artikel["isi_artikel"]; ?>  ">
	</div>
	<div class="form-group">
		<label>Foto Artikel</label>
		<input type="text" class="form-control" name="foto_artikel" value="<?php echo $artikel["foto_artikel"]; ?>">
	</div>
	<button class="btn btn-primary">Ubah</button>
</form>

