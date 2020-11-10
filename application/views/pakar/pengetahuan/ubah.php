<h3>Ubah Pengetahuan</h3>
<hr>

<form method="post">
	<div class="form-group">
		<label>Penyakit</label>
		<select name="id_penyakit" class="form-control">
			<option value="">Pilih Penyakit</option>
			<?php foreach ($penyakit as $key => $value): ?>
				<option 
				value="<?php echo $value['id_penyakit'] ?>"
				<?php if ($pengetahuan['id_penyakit']==$value['id_penyakit']){echo "selected";} ?>>
				<?php echo $value['nama_penyakit'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Gejala</label>
		<select name="id_gejala" class="form-control">
			<option value="">Pilih gejala</option>
			<?php foreach ($gejala as $key => $value): ?>
				<option 
				value="<?php echo $value['id_gejala'] ?>"
				<?php if ($pengetahuan['id_gejala']==$value['id_gejala']){echo "selected";} ?>>
				<?php echo $value['nama_gejala'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>MB Pengetahuan</label>
		<input type="number" name="mb_pengetahuan" class="form-control" step="any" value="<?php echo $pengetahuan['mb_pengetahuan'] ?>">
	</div>
	<div class="form-group">
		<label>MD Pengetahuan</label>
		<input type="number" name="md_pengetahuan" class="form-control" step="any" value="<?php echo $pengetahuan['md_pengetahuan'] ?>">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
	</div>
</form>
</form>