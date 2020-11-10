<h3>Diagnosis</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Klien</label>
		<input readonly="" class="form-control" value="<?php echo $klien['nama_klien'] ?>">
	</div>
	<div class="form-group">
		<label>Pilih Gejala yang diderita klien</label>
		<?php foreach ($gejala as $key => $value): ?>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="data[<?php echo $key ?>]" value="<?php echo $value['id_gejala'] ?>"> <?php echo $value['nama_gejala'] ?>
				</label>
			</div>
		<?php endforeach ?>
	</div>

	<div class="form-group">
		<button class="btn btn-primary">Jalankan Diagnosis</button>
	</div>
</form>
