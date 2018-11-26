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
        <a class="navbar-brand" href="admin.php"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> SIPP-SUB</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="profile_admin.php"><?=$_SESSION['nama']?></a></li>
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


   <div style="text-align: left;" class="container">
    <div class="table">
        <br><br><br>
   			<h1 style="text-align: center; margin-top: -30px;">Profil</h1>
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

  <button style="margin-left: 50px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ganti Username/Password
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Masukkan Username/Password Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
    <form method="POST" action="profile_admin.php">
        <div class="form-group" style="width: 400px; color: black;">
          <label for="nama">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username baru" required="">
        </div>
        <div class="form-group" style="width: 400px; color: black;">
          <label for="password">Password</label>
          <input type="text" class="form-control" rows="5" name="password" placeholder="Password baru" required=""></input>
      </div>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
         <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </form>
      </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
   </div>
</div>
    
    <?php  
include 'koneksi.php';
$id = $_SESSION['id'];   
if (isset($_POST['simpan'])){
    var_dump($nama);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET `username`='$username',`password`='$password' WHERE id=$id";
      $query = mysqli_query($db,$sql);
   
      
    if($query){
        ?>
        <script type="text/javascript">
            alert("Username/Password anda berhasil diubah");
            window.location.href="profile_admin.php";
        
        </script>
        
        <?php  } else {
            ?>
            <script>
            alert("asd");
            </script><?php
        }
}

?>
</div>
</div>
</div>
</div>



 




  <!-- <button href type="submit" class="btn btn-primary" name="editinfo" style="widows: 900px;">Edit Password dan Username</button> -->

    <!-- footer -->
    
    <!-- akhir footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <br><br><br><br>
  <footer style="height: 80px; margin-top: -30px; padding-top: 30px;">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2018 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://instagram.com/novicaswida">SIPP-SUB</a>.</p>
          </div>
        </div>
    </footer>
</html>