<section class="container mh-1">
	<h3>Ubah Profil</h3>
	<hr>

	<form method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username_klien" class="form-control" value="<?php echo set_value("username_klien", $klien['username_klien']) ?>"> <small class="text-danger"><i><?php echo form_error('username_klien') ?></i></small>
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input type="password" name="password_lama" class="form-control" value="<?php echo set_value('password_lama') ?>">
			<?php if (!$pesan): ?>
				<p class="text-info"><small><i>*Kosongkan jika tidak mengubah password</i></small></p>
				<?php else: ?>
					<?php if ($pesan=="pesan_1"): ?>
						<p class="text-danger"><small><i>*Password lama salah</i></small></p>
					<?php endif ?>
				<?php endif ?>
			</div>
			<div class="form-group">
				<label>Password Baru</label>
				<input type="password" name="password_baru" class="form-control" value="<?php echo set_value('password_baru') ?>">
				<?php if (!$pesan): ?>
					<p class="text-info"><small><i>*Kosongkan jika tidak mengubah password</i></small></p>
					<?php else: ?>
						<?php if ($pesan=="pesan_2"): ?>
							<p class="text-danger"><small><i>*Password baru harus di isi.</i></small></p>
						<?php endif ?>
						<?php if ($pesan=="pesan_3"): ?>
							<p class="text-danger"><small><i>*Password baru harus sama dengan password konfirmasi.</i></small></p>
						<?php endif ?>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label>Konfirmasi Password Baru</label>
					<input type="password" name="password_konfirmasi" class="form-control" value="<?php echo set_value('password_konfirmasi') ?>">
					<?php if (!$pesan): ?>
						<p class="text-info"><small><i>*Kosongkan jika tidak mengubah password</i></small></p>
						<?php else: ?>
							<?php if ($pesan=="pesan_2"): ?>
								<p class="text-danger"><small><i>*Password konfirmasi harus di isi.</i></small></p>
							<?php endif ?>
							<?php if ($pesan=="pesan_3"): ?>
								<p class="text-danger"><small><i>*Password baru harus sama dengan password konfirmasi.</i></small></p>
							<?php endif ?>
						<?php endif ?>
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama_klien" class="form-control" value="<?php echo $klien['nama_klien'] ?>">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin_klien" class="form-control"> 
							<option value="">Pilih</option>
							<option value="laki-laki" <?php echo set_select('jenis_kelamin_klien','laki-laki', (!empty($klien['jenis_kelamin_klien']) && $klien['jenis_kelamin_klien'] == "laki-laki" ? TRUE : FALSE)) ?>>Laki-Laki</option>
							<option value="perempuan" <?php echo set_select('jenis_kelamin_klien','perempuan', (!empty($klien['jenis_kelamin_klien']) && $klien['jenis_kelamin_klien'] == "perempuan" ? TRUE : FALSE)) ?>>Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nomor Telepon</label>
						<input type="text" name="telepon_klien" class="form-control" value="<?php echo set_value("telepon_klien", $klien['telepon_klien']) ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat_klien" class="form-control"><?php echo set_value("alamat_klien",$klien['alamat_klien']) ?></textarea>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir_klien" class="form-control" value="<?php echo set_value("tanggal_lahir_klien", $klien['tanggal_lahir_klien']) ?>">
					</div>
					<div class="form-group">
						<label>No Identitas</label>
						<input type="text" name="no_identitas_klien" class="form-control" value="<?php echo set_value("no_identitas_klien", $klien['no_identitas_klien']) ?>">
						<small class="text-danger"><i><?php echo form_error("no_identitas_klien") ?></i></small>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</section>