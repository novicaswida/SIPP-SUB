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
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <!-- <div class="container-fluid"> -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"data-target="#bs-example-navbar-collapse-1"aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> SIPP-SUB</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php">Masuk</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="develop.php">Develop</a></li>
                </ul>
          </li>
        </ul>
        <div class="navbar-header">        
    </nav>
    <!-- akhir navbar -->
    
    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Tentang</h2>
            <hr>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4 col-sm-offset-2" style="font-size: 20px;, font-family: arial,sans-serif">
          <p>Sistem Informasi Pendistribusian Pupuk Bersubsidi (SIPP SUB) Ini kami buat untuk mempermudah para pengecer dalam kegiatan penjualan. Di aplikasi SIPP SUB ini akan mengcover stock pupuk yang sudah diterima oleh pengecer, penyaluran pupuk serta harga pupuk terupdate. Pembayaran juga dapat dimudahkan dengan adanya aplikasi ini sehingga pengecer tidak ada kecurangan dalam pengambilan laba.</p>
        <div/>
        <div class="col-sm-12 col-sm-offset-12" style="font-size: 20px;, font-family: arial,sans-serif; margin-top: -290px;">
            <p>SIPP SUB ini pertama memudahkan pengawas dari pemerintah untuk mengontrol jalannya  penyaluran pupuk ke kecematan. Petugas pemerintah akan lebih mudah mengecek jumlah pengeluaran  pupuk subsidi setiap bulanya dan jumlah pupuk untuk setiap kecamatan. Kedua SIPP SUB ini memudahkan pendistributor dalam membagi bagian pupuk agar pembagianya rata pada setiap pengecer, nantinya setelah pendistributor menerima pupuk dari pemerintah, pendistributor langsung membagi pupuk yang didapat sesuai bagian-bagian pengecer setiap desa, sistem ini juga memudahkan pendistributor untuk melaporkan penyaluran pupuk pada pengawas dari pemerintahan serta pendistributor akan menerima laporan pengecer tiap harinya agara meminimalisir kesalahan. Ketiga SIPP SUB ini memudahkan bagi pengecer melakukan laporan tentang jumlah pupuk yang diterima. Pengecer akan menginputkan kebutuhan pupuk yang mereka butuhkan,  penerimaan pupuk yang sudah mereka terima, stock pupuk yang masih ada, penyaluran pupuk, hingga harga pupuk dapat di inputkan per harinya.</p>
        </div>
      </div>
      
    </section>
    <!-- akhir about -->

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





