
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OCDiagnose</title>
  <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("assets/fontawesome-free-5.13.0-web/css/all.css") ?>">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/sendiri.css"); ?>">

</head>
<body>

  <div id="wrapper">
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url("pakar") ?>">OCDiagnose</a>
      </div> 
    </nav>
    <nav class="navbar-default navbar-side"> 
      <div class="sidebar-collapse">
        <div class="user">
          <img src="<?php echo base_url("assets/img/user.png") ?>" alt="">
          <h3><?php echo nama_pakar() ?></h3>
          <p>Pakar</p>
        </div>
        <ul class="nav" id="main-menu">
          <li><a href="<?php echo base_url("pakar") ?>"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="<?php echo base_url("pakar/profil") ?>"><i class="fas fa-user"></i> Profil</a></li>
          <li><a href="<?php echo base_url("pakar/klien") ?>"><i class="fas fa-cube"></i> Klien</a></li>
          <li class="tr-tree">
            <a href="#"><i class="fas fa-cube"></i> Data Master <i class="pull-right fas fa-angle-right"></i></a>
            <ul class="tr-tree-menu">
              <li><a href="<?php echo base_url("pakar/penyakit") ?>">Penyakit</a></li>
              <li><a href="<?php echo base_url("pakar/gejala") ?>">Gejala</a></li>
              <li><a href="<?php echo base_url("pakar/pengetahuan") ?>">Pengetahuan</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url("pakar/diagnosa") ?>"><i class="fas fa-cube"></i> Diagnosis</a></li>
          <li><a href="<?php echo base_url("pakar/logout") ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </div>
    </nav>
    <div id="page-wrapper">
      <div id="page-inner">