<?php
require_once ('koneksi.php');
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIPP-SUB</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    .jumbotron {
      background-image: url(img/bg.jpg);
      height: auto; width: 100%;
    }
  </style>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"data-target="#bs-example-navbar-collapse-1"aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="distributor.php"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> SIPP-SUB</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="profile_distributor.php"><?=$_SESSION['nama']?></a></li>
          <li><a href="pemesanan_distributor.php">Pemesanan</a></li>
          <li><a href="penerimaan_distributor.php">Penerimaan</a></li>
          <li><a href="stok_pupukdistributor.php">Stok Pupuk</a></li>
          <li><a href="penyaluran_distributor.php">Penyaluran</a></li>
          <li><a href="pembayaran_distributor.php">Pembayaran</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
          </li>
        </ul>
        <div class="navbar-header">        
    
    </nav>
    <!-- akhir navbar -->
    

    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/foto.png" class="img/circle" style="border-radius: 50%">
      <h1 style="font-family: arial, sans-serif; padding-bottom: 160px; font-size: 50px; color: white;">Sistem Informasi Pendistribusian Pupuk Bersubsidi</h1>
      <hr style="margin-top: -140px; border-color: white;"><p style="font-family: arial, sans-serif; font-weight: bold; font-size: 30px; color: white; margin-top: 30px;">Urea | ZA | NPK | Organik</p>
    </div>
    <!-- akhir jumbotron -->


    <!-- footer -->
     <footer style="height: 80px; margin-top: -30px; padding-top: 30px;">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2018 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://instagram.com/novicaswida">SIPP-SUB</a>.</p>
          </div>
        </div>
    </footer>
    <!-- akhir footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>