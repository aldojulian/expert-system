<h3>Detail Pakar</h3>
<hr>
<a href="<?php echo base_url("admin/pakar/") ?>" class="btn btn-primary">Kembali</a>
<br>
<br>
<table class="table table-bordered">
	<tr>
		<th width="40$">Username</th>
		<th width="1$">:</th>
		<td><?php echo $pakar['username_pakar'] ?></td>
	</tr>
	<tr>
		<th>Nama</th>
		<th>:</th>
		<td><?php echo $pakar['nama_pakar'] ?></td>
	</tr>
	<tr>
		<th>Nomor Telepon</th>
		<th>:</th>
		<td><?php echo $pakar['telepon_pakar'] ?></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<th>:</th>
		<td><?php echo $pakar['alamat_pakar'] ?></td>
	</tr>
</table>