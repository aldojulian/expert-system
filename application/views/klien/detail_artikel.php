<section class="container mh-1">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="text-center"><?php echo $artikel['judul_artikel'] ?></h3>
			<p class="text-center"><small><i><?php echo $artikel['tanggal_artikel'] ?></i></small></p>
			<div class="text-center">
				<img src="<?php echo base_url("assets/img/artikel/".$artikel['foto_artikel']) ?>" width="80%">
			</div>
			<div style="margin-top: 25px">
				<p><?php echo $artikel['isi_artikel'] ?></p>
			</div> 
		</div>
	</div>

</section>