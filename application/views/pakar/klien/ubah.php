<h3>Ubah klien</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="username_klien" value="<?php echo $klien["nama_klien"]; ?>">
	</div>
	<div class="form-group">
		<label>Nama Klien</label>
		<input type="text" class="form-control" name="nama_klien" value="<?php echo $klien["nama_klien"]; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select class="form-control" name="jenis_kelamin_klien">
				<option value="">Pilih jenis kelamin</option>
				<option value="laki-laki" <?php if($klien['jenis_kelamin_klien']=="laki-laki"){echo "selected";} ?> >Laki-laki</option>	
				<option value="perempuan" <?php if($klien['jenis_kelamin_klien']=="perempuan"){echo "selected";} ?> >Perempuan</option>
				</select>
	</div>
	<div class="form-group">
		<label>Nomor Telepon</label>
		<input type="text" class="form-control" name="telepon_klien" value="<?php echo $klien["telepon_klien"]; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat_klien" value="<?php echo $klien["alamat_klien"]; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal_lahir_klien" value="<?php echo $klien["tanggal_lahir_klien"]; ?>">
	</div>
	<div class="form-group">
		<label>Nomor Identitas</label>
		<input type="text" class="form-control" name="no_identitas_klien" value="<?php echo $klien["no_identitas_klien"]; ?>">
	</div>
	<button class="btn btn-primary">Ubah</button>
</form>