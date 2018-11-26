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
        <a class="navbar-brand" href="distributor.php"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> SIPP-SUB</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile_distributor.php"><?=$_SESSION['nama']?></a></li>
          <li><a href="pemesanan_distributor.php">Pemesanan</a></li>
          <li><a href="penerimaan_distributor.php">Penerimaan</a></li>
          <li class="active"><a href="stok_pupukdistributor.php">Stok Pupuk</a></li>
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
    <br><br><br>
  <h2 style="text-align: center;">Stok Pupuk</h2>
  <div class="container">
  <div class="table">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr>
                  <th>Id Pupuk</th>
                  <th>Nama</th>
                  <th>Nama Pupuk</th>
                  <th>Jumlah Stok</th>
                </tr>
              </thead>
            <tbody>
              <?php 
                $sql = "select u.id as id, u.nama as nama, p.nama_pupuk as pupuk, s.stok as stok from pupuk p join stok s, users u where p.id=s.id_pupuk and u.id=s.id_user";
                $result = mysqli_query($db,$sql);
                while ($data = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['pupuk'] ?></td>
                <td><?php echo $data['stok'] ?></td>

                
                                              
                                                  <!-- <a href="barangubah.php?id=<?php echo $data['id']; ?>" class="btn btn-success" >Ubah</a>
                                                  <a href="">Hapus</a> -->

                                            </td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                  </table>
                                 
                              </div>
                              </div>
  <!-- <button href type="submit" class="btn btn-primary" name="editinfo" style="widows: 900px;">Edit Password dan Username</button> -->

    <!-- footer -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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