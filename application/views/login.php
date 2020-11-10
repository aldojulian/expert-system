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
						<h3 class="panel-title text-center">Login</h3>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-primary">Login</button>
								<a href="<?php echo base_url("welcome/daftar") ?>" class="btn btn-primary pull-right">Daftar</a>
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
<script>
	CKEDITOR.replace("theeditor");
</script>

<script src="<?php echo base_url("assets/js/sendiri.js") ?>"></script>
</body>
</html>