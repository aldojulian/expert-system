<h3>Hasil</h3>
<p>Dalam  melakukan proses diagnosis klien <b><?php echo $diagnosa['nama_klien'] ?></b>, gejala yang sebelumnya diinputkan ke dalam sistem adalah :</p>
<ol>
	<?php foreach ($detail as $key => $value): ?>
		<li><?php echo $value['nama_gejala'] ?></li>
	<?php endforeach ?>
</ol>
<p>Proses diagnosis dilakukan dengan cara melakukan perhitungan terhadap gejala yang sudah diinput pada sistem. Proses perhitungan menggunakan metode Certainty Factor berdasarkan pemahaman medis oleh pakar. Maka dari itu nilai CF dari proses diagnosis adalah penyakit <?php echo $hasil['nama_penyakit'] ?> dengan nilai persentase <?php echo round($hasil['cf_hasil']*100) ?>%</p>

<p>	Saran : <?php echo 	$hasil['saran_hasil'] ?></p>