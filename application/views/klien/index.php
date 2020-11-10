
	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6">
					

				</div>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<?php foreach ($artikel as $key => $value): ?>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<a href="<?php echo base_url("klien/artikel/detail/".$value['id_artikel']) ?>" style="text-decoration: none; color: #222;">
						<div class="panel panel-default">
							<div class="panel-heading" style="padding: 0px;">
								<div style="height: 100px; overflow: hidden;">
									<img src="<?php echo base_url("assets/img/artikel/".$value['foto_artikel']) ?>" width="100%">
								</div>
							</div>
							<div class="panel-body">
								<p><small><?php echo $value['tanggal_artikel'] ?></small></p>
								<p><b><?php echo $value['judul_artikel'] ?></b></p>
								<p><?php echo $value['deskripsi_artikel'] ?></p>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</section>