<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OCDiagnose</title>
  <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("fontawesome-free-5.13.0-web/css/all.css") ?>">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/sendiri.css"); ?>">

</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="margin-top: 50px">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Daftar</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Username Klien</label>
							<input type="text" name="username_klien" class="form-control" value="<?php echo set_value("username_klien") ?>">
							<small class="text-danger"><i><?php echo form_error("username_klien") ?></i></small>
						</div>
						<div class="form-group">
							<label>Password Klien</label>
							<input type="password" name="password_klien" class="form-control"value="<?php echo set_value("password_klien") ?>">
							<small class="text-danger"><i><?php echo form_error("password_klien") ?></i></small>
						</div>
						<div class="form-group">
							<label>Nama Klien</label>
							<input type="text" name="nama_klien" class="form-control" value="<?php echo set_value("nama_klien") ?>">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jenis_kelamin_klien" class="form-control"> 
								<option value="">Pilih</option>
								<option value="laki-laki" <?php echo set_select('jenis_kelamin_klien','laki-laki') ?>>Laki-Laki</option>
								<option value="perempuan" <?php echo set_select('jenis_kelamin_klien','perempuan') ?>>Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nomor Telepon</label>
							<input type="text" name="telepon_klien" class="form-control" value="<?php echo set_value("telepon_klien") ?>">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea name="alamat_klien" class="form-control"><?php echo set_value("alamat_klien") ?></textarea>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tanggal_lahir_klien" class="form-control" value="<?php echo set_value("tanggal_lahir_klien") ?>">
						</div>
						<div class="form-group">
							<label>Nomor Identitas</label>
							<input type="text" name="no_identitas_klien" class="form-control" value="<?php echo set_value("no_identitas_klien") ?>">
							<small class="text-danger"><i><?php echo form_error("no_identitas_klien") ?></i></small>
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Simpan</button>
						</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
  <script>

    $(document).ready(function() {
      $('#thetable').DataTable();
    } );
  </script>

  <script src="<?php echo base_url("assets/ckeditor/ckeditor.js") ?>"></script>
  <scrip
    CKEDITOR.replace("theeditor");
  </script>

  <script src="<?php echo base_url("assets/js/sendiri.js") ?>"></script>
</body>
</html>