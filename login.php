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
    body {
      background-image: url(img/m.jpg);

      background-repeat: no-repeat;
    }
  </style>
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
          <li><a href="login.php" style="color: white;">Masuk</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"><span class="caret"></span></a>
          
          </li>
        </ul>
        <div class="navbar-header">        
    </nav>
    <!-- akhir navbar -->
  
   
    </section>

    <div class="row">
      <br><br><br>
  <div class="col-sm-8 col-sm-offset-2">
    <h1 style="text-align: center; padding-top: 20px; margin-left: 600px;">Masuk</h1>
    <br>
    <form method="POST">
      <div class="form-group" style="margin-left: 600px;">
        <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="masukkan username" style="width: 300px;" required>
      </div>
      <div class="form-group" style="margin-left: 600px;">
        <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="masukkan password" style="width: 300px;" required>
      </div>
        <input type="submit" class="btn btn-primary" name="submit" 
        value="Masuk"style="margin-left: 600px;">
        <br><br><br><br><br><br><br>
    </form>
  </div>
</div>

<?php
      if (isset($_POST['submit'])) {
        // alert("a");
        $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "select * from users where username = '$username' and
      password = '$password'";
      $result = mysqli_query($db,$sql);
      if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['jenisuser'];
        if ($row['jenisuser'] == 1) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['jenisuser'] = $row['jenisuser'];

        header('location: admin.php');
        exit();
        } else if ($row['jenisuser'] == 2) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['jenisuser'] = $row['jenisuser'];

        header('location: distributor.php');
        exit();
        } else if ($row['jenisuser'] == 3) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['jenisuser'] = $row['jenisuser'];

        header('location: pengecer.php');
        exit();        
      }else {
        ?>
        <script type="text/javascript">
          alert("Username/Password anda salah");
        </script>
        <?php
      }
    }
  }
      
    ?>

    

    <!-- footer -->
    <br><br>
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


