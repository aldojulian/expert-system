<h3>Ubah Profil</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username_pakar" class="form-control" value="<?php echo $pakar['username_pakar'] ?>">
	</div>
	<div class="form-group">
		<label>Password Lama</label>
		<input type="password" name="password_lama" class="form-control">
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
			<input type="password" name="password_baru" class="form-control">
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
				<input type="password" name="password_konfirmasi" class="form-control">
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
					<input type="text" name="nama_pakar" class="form-control" value="<?php echo $pakar['nama_pakar'] ?>">
				</div>
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="telepon_pakar" class="form-control" value="<?php echo $pakar['telepon_pakar'] ?>">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat_pakar" class="form-control" value="<?php echo $pakar['alamat_pakar'] ?>">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Ubah Profil</button>
				</div>
			</form>