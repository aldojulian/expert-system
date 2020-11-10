<section class="container mh-1">
	<h3>Riwayat</h3>

	<div class="table-responsive">
		<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Pakar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($riwayat as $key => $value): ?>
				<tr>
					<td><?php echo $key+=1 ?></td>
					<td><?php echo $value['tanggal_diagnosa'] ?></td>
					<td><?php echo $value['nama_pakar'] ?></td>
					<td>
						<a href="<?php echo base_url("klien/riwayat/detail/".$value['id_diagnosa']) ?>" class="btn btn-info">Detail</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
		</table>
	</div>
</section>