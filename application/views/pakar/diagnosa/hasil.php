





<h3>Hasil</h3>
<p>Dalam  melakukan proses diagnosis klien <b><?php echo $diagnosa['nama_klien'] ?></b>, gejala yang dialami oleh klien adalah :</p>
<ol>
	<?php foreach ($detail as $key => $value): ?>
		<li><?php echo $value['nama_gejala'] ?></li>
	<?php endforeach ?>
</ol>
<p>Proses diagnosis dilakukan dengan cara melakukan perhitungan terhadap gejala yang sudah diinput pada sistem. Jenis penyakit yang diderita oleh klien adalah penyakit <?php echo $hasil['nama_penyakit'] ?> dengan nilai kepastian <?php echo round($hasil['cf_hasil']*100) ?>%</p>

<form method="post">
	<div class="form-group">
		<label>Saran</label>
			<textarea class="form-control" name="saran_hasil"><?php echo $hasil['saran_hasil'] ?></textarea>
		</div>
	<div class="form-group">
			<button class="btn btn-primary">Simpan</button>
		</div>
	</div>
</form>