<?php require_once "../_config/conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-Appointment</title>
	<!-- Bootstrap Core CSS -->
	<link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
	<link href="<?=base_url('_assets/favicon.ico');?>" rel="icon">
</head>
<body>
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
	<script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
	<nav class="navbar navbar-inverse navbar-fixed-top bg-dark">
        <div class="container">
            <a href="#menu-toggle" class="navbar-brand" id="menu-toggle"><i class="glyphicon glyphicon-list"></i>Menu</a>
            <a href="<?=base_url('../admin/data.php')?>" class="navbar-brand" style="float: right;"><small>Hallo, <i><?=$_SESSION['username'];?></i><i class="glyphicon glyphicon-user"></i></small></a>
        </div>
    </nav>
    <div id="wrapper">
       <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>RSU BUNDA THAMRIN</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('../dashboard/index.php')?>">HOME</a>
                </li>
                <li>
                    <a href="<?=base_url('../dokter/data.php')?>">DATA DOKTER</a>
                </li>
                <li>
                    <a href="<?=base_url('../pasien/data.php')?>">DATA PASIEN</a>
                </li>
				<li>
                    <a href="<?=base_url('../poliklinik/data.php')?>">DATA POLIKLINIK</a>
                </li>
                <li>
                    <a href="<?=base_url('../appointment/index.html')?>">DATA APPOINTMENT</a>
                </li>
                <li>
                    <a href="<?=base_url('../admin/data.php')?>">DATA ADMIN</a>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">LAPORAN</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?=base_url('../laporan/lap_data_pasien.php')?>">Lap. Data Pasien</a>
                      <a class="dropdown-item" href="<?=base_url('../laporan/lap_data_appointment.php')?>">Lap. E-Appointment</a>
                    </div>

                </li> 
                <li>
                    <a href="<?=base_url('../auth/logout.php')?>" title="Keluar" onClick="return confirm('Apakah anda yakin ingin keluar ?')"><span class="text-danger">LOGOUT</span></a>
                </li>
             </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">