<?php
require_once ('koneksi.php');
session_start();
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
          <li class="active"><a href="profile.php">Profile</a></li>
          <li><a href="pemesanan.php">Pemesanan</a></li>
          <li><a href="penerimaan.php">Penerimaan</a></li>
          <li><a href="stok_pupuk.php">Stok Pupuk</a></li>
          <li><a href="penyaluran.php">Penyaluran</a></li>
          <li><a href="pembayaran.php">Pembayaran</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#portofolio">Develop</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
          </li>
        </ul>
        <div class="navbar-header">        
    
    </nav>
    <!-- akhir navbar -->
    

   <div class="container-fluid" style="background-color: lightgreen;">
   	<div class="container" style="width: 500px; background-color: white;">
   	<div class="row">
   		<div class="col-sm-12">
        <br><br><br>
   			<h1 style="margin-left: 150px;">Profile User</h1>
   			<ul>
   				<li>
   					Nama: <?=$_SESSION['nama']?>
   				</li><br>
   				<li>
   					Alamat: <?=$_SESSION['alamat']?>
   				</li><br>
   				<li>
   					Username: <?=$_SESSION['username']?>
   				</li><br>
   				<li>
   					Password: <?=$_SESSION['password']?>
   				</li><br>
   				<li>
   					Level: <?=$_SESSION['jenisuser']?>
   				</li><br>
   			</ul>
        <br><br><br><br><br>

        
   			
   		</div>
   	</div>
   </div>
</div>
    
    <?php
      if (isset($_POST['submit'])) {
        // alert("a");
        $username = $_POST['email'];
      $password = $_POST['password'];
      $sql = "select * from users where username = '$username' and
      password = '$password'";
      $result = mysqli_query($db,$sql);
      if (mysqli_num_rows($result)>0) {
        // header("Location: admin.php");
        echo "a";
      } else {
        echo "maaaa";
      }
      }

    ?>
  <!-- <button href type="submit" class="btn btn-primary" name="editinfo" style="widows: 900px;">Edit Password dan Username</button> -->

    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2018 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://instagram.com/novicaswida">SIPP-SUB</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://youtube.com/Novica Sinta Wida" class="btn btn-danger">Subcribe for YouTube
            </a>
          </div>
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