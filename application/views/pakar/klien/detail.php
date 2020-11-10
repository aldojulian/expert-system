<h3>Detail Klien</h3>
<hr>

<a href="<?php echo base_url("admin/klien/") ?>" class="btn btn-primary">Kembali</a>
<br>
<br>
<table class="table table-bordered">
	<tr>
		<th width="40$">Username</th>
		<th width="1$">:</th>
		<td><?php echo $klien['username_klien'] ?></td>
	</tr>
	<tr>
		<th>Nama</th>
		<th>:</th>
		<td><?php echo $klien['nama_klien'] ?></td>
	</tr>
	<tr>
		<th>Jenis Kelamin</th>
		<th>:</th>
		<td><?php echo $klien['jenis_kelamin_klien'] ?></td>
	</tr>
	<tr>
		<th>Nomor Telepon</th>
		<th>:</th>
		<td><?php echo $klien['telepon_klien'] ?></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<th>:</th>
		<td><?php echo $klien['alamat_klien'] ?></td>
	</tr>
	<tr>
		<th>Tanggal Lahir</th>
		<th>:</th>
		<td><?php echo $klien['tanggal_lahir_klien'] ?></td>
	</tr>
	<tr>
		<th>Nomor Identitas</th>
		<th>:</th>
		<td><?php echo $klien['no_identitas_klien'] ?></td>
	</tr>
</table>