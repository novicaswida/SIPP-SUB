<?php 

include 'koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$db = mysql_query("UPDATE users SET username='$username', password='$password' WHERE id='$id'");


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
          $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['jenisuser'] = $row['jenisuser'];

        header('location: profil_admin.php');
        exit();
        } else if ($row['jenisuser'] == 2) {
          $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['jenisuser'] = $row['jenisuser'];

        header('location: profil_distributor.php');
        exit();
        } else if ($row['jenisuser'] == 3) {
          $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['jenisuser'] = $row['jenisuser'];

        header('location: profil_pengecer.php');
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
      // header("location:profile_admin.php?pesan=update");
    ?>




<div class="form-group" style="margin-left: 140px;">
	<label for="username">Username</label>
    <input type="text" name="username" class="form-control" placeholder="masukkan username" style="width: 400px;" required>
</div>
<div class="form-group" style="margin-left: 140px;">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" placeholder="masukkan password" style="width: 400px;" required>
</div>