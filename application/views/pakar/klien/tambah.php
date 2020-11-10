<h3>Tambah klien</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username_klien" class="form-control">
		<p><small class="text-danger"><i><?php echo form_error("username_klien") ?></i></small></p>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password_klien" class="form-control">
		<p><small class="text-danger"><i><?php echo form_error("password_klien") ?></i></small></p>
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama_klien" class="form-control">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select class="form-control" name="jenis_kelamin_klien">
			<option value="">Pilih jenis kelamin</option>
			<option value="laki-laki">laki-laki</option>	
			<option value="perempuan">perempuan</option>
		</select>
	</div>
	<div class="form-group">
		<label>Nomor Telepon</label>
		<input type="text" name="telepon_klien" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat_klien" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir_klien" class="form-control">
	</div>
	<div class="form-group">
		<label>Nomor Identitas</label>
		<input type="text" name="no_identitas_klien" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
	</div>
</form>
</form>