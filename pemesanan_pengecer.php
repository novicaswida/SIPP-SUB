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
        <a class="navbar-brand" href="pengecer.php"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> SIPP-SUB</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile_pengecer.php"><?=$_SESSION['nama']?></a></li>
          <li class="active"><a href="pemesanan_pengecer.php">Pemesanan</a></li>
          <li><a href="penerimaan_pengecer.php">Penerimaan</a></li>
          <li><a href="stok_pupukpengecer.php">Stok Pupuk</a></li>
          <li><a href="penyaluran_pengecer.php">Penyaluran</a></li>
          <li><a href="pembayaran_pengecer.php">Pembayaran</a></li>
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
    
   <!--  -->
<br><br>
 <h2 style="text-align: center;">Daftar Pupuk</h2>
    <div class="row">
      <div class="col-md-4">
    <div class="thumbnail">
      <img src="img/pupuk_za.png" alt="...">
      <div class="caption">
        <h3>ZA</h3>
        <p><a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#exampleModal">Pesan</a></p>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Masukkan jumlah pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
    <form method="POST" action="profile_admin.php">
        <div class="form-group" style="width: 400px; color: black;">
          <label for="pesan">Jumlah</label>
          <input type="number" name="pesen" class="form-control" placeholder="Jumlah pesanan" required>
        </div>
      </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">OK</button>
      </div>
      </form>
      </div>
      </div>
      
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="img/pupuk_npk.png" alt="...">
      <div class="caption">
        <h3>NPK</h3>
        <p><a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#exampleModal">Pesan</a></p>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Masukkan jumlah pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
    <form method="POST" action="profile_admin.php">
        <div class="form-group" style="width: 400px; color: black;">
          <label for="pesan">Jumlah</label>
          <input type="number" name="pesen" class="form-control" placeholder="Jumlah pesanan" required>
        </div>
      </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">OK</button>
      </div>
      </form>
      </div>
      </div>
      
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="img/pupuk_urea.png" alt="...">
      <div class="caption">
        <h3>UREA</h3>
        <p><a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#exampleModal">Pesan</a></p>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Masukkan jumlah pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
    <form method="POST" action="profile_admin.php">
        <div class="form-group" style="width: 400px; color: black;">
          <label for="pesan">Jumlah</label>
          <input type="number" name="pesen" class="form-control" placeholder="Jumlah pesanan" required>
        </div>
      </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">OK</button>
      </div>
      </form>
      </div>
      </div>
      
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/pupuk_organik.png">
      <div class="caption">
        <h3>ORGANIK</h3>
        <p><a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#exampleModal">Pesan</a></p>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Masukkan jumlah pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
    <form method="POST" action="profile_admin.php">
        <div class="form-group" style="width: 400px; color: black;">
          <label for="pesan">Jumlah</label>
          <input type="number" name="pesen" class="form-control" placeholder="Jumlah pesanan" required>
        </div>
      </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">OK</button>
      </div>
      </form>
      </div>
      </div>
      
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
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
    <br><br><br>
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