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
          <li class="active"><a href="data_member.php">Data Member</a></li>
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
    
    <!-- <div class="container-fluid" style="background-color: lightgreen;">
    <div class="container" style="width: 1000px; background-color: white;">
    <div class="row">
      <div class="col-sm-12"> -->
        <br>
        <br>
        <h2 style="text-align: center;">Data Member</h2>
        <div class="container">
        <div class="table">
        <!-- <div class="body">
          <div class="table"> -->
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id Member</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Jenis User</th>
                </tr>
              </thead>
            <tbody>
              <?php 
                $no= 1;
                $sql = "select * from users";
                $result = mysqli_query($db,$sql);
                while ($data = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['hp'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                                            <?php
                                            $jabatan="";
                                            if ($data['jenisuser'] == 1) {
                                              $jabatan = "admin";
                                            } else if ($data['jenisuser'] == 2){
                                              $jabatan = "distributor";
                                            } else if ($data['jenisuser'] == 3){
                                              $jabatan = "pengecer";
                                            }
                                            ?>
                                            <td><?php echo $jabatan ?></td>
                                            <td>
                                              
                                                  <!-- <a href="barangubah.php?id=<?php echo $data['id']; ?>" class="btn btn-success" >Ubah</a>
                                                  <a href="">Hapus</a> -->

                                            </td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                  </table>
                                  <a href="register.php" class="btn btn-primary">Tambah Member</a>
                              </div>
                   </div>
          
  <br><br><br><br><br><br>

    
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
