<?php  
	$username = $_POST['username'];
	$password = $POST['password'];

	inclued "koneksidb.php";
	mysql_query("insert into table_users(username, password) values (
		'$username',
		'$password')") or die ("Menyimpan dtaa GAGAL <meta http-equiv=refresh content=2;url=index.php>");
	echo "Menyimpan data BERHASIL <meta http-equiv=refresh content=2;url=index.php>";
?>