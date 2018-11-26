<?php
require_once ('koneksi.php');
session_start();
ob_start();

if (isset($_POST["submit"])){
  $nama = $_POST['name'];
  $alamat = $_POST['alamat'];
  $hp = $_POST['hp'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $jenisuser = $_POST['jenisuser'];

  $sql = "INSERT INTO `users`(`nama`, `alamat`,`hp`,`username`, `password`, `jenisuser`) VALUES ('$nama','$alamat','$hp','$username','$password','$jenisuser')";
  $result = mysqli_query($db,$sql);

    }
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
        <a class="navbar-brand" href="admin.php"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> SIPP-SUB</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile_admin.php"><?=$_SESSION['nama']?></a></li>
          <li><a href="data_member.php">Data Member</a></li>
          <li><a href="stok_pupukadm.php">Stok Pupuk</a></li>
          <li><a href="penyaluran_adm.php">Penyaluran</a></li>
          <li><a href="pembayaran_adm.php">Pembayaran</a></li>
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
    
   
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <br>
        <br>
        <h1 style="text-align: center;">Tambah Member</h1>
        <form method="POST">
            <div class="form-group" style="margin-left: 350px;">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control" placeholder="masukkan nama" style="width: 400px; height: -20px;" required>
            </div>
            <div class="form-group" style="margin-left: 350px;">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" class="form-control" placeholder="masukkan alamat" style="width: 400px;" required>
            </div>
            <div class="form-group" style="margin-left: 350px;">
              <label for="hp">Nomor HP</label>
              <input type="number" name="hp" class="form-control" placeholder="masukkan nomor hp" style="width: 400px;" required>
            </div>
            <div class="form-group" style="margin-left: 350px;">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="masukkan username" style="width: 400px;" required>
            </div>
            <div class="form-group" style="margin-left: 350px;">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="masukkan password" style="width: 400px;" required>
            </div>

            <div class="form-group" style="margin-left: 350px;">
              <label for="jenisuser">Jenis Member</label>
              <select name="jenisuser">
                <option value="2">Distributor</option>
                <option value="3">Pengecer</option>
              </select>
            </div>
                <a style="margin-left: 500px;" class="btn btn-primary submit-button" name="submit" type="submit" href="register.php">Daftar</a>
                  
          </form>
      </div>
    </div>
   </div>
</div>


    <br><br>
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