<?php  

$db = mysqli_connect("localhost","root","","sipp-sub"); 

// function query ($query){
// 	global $db;
// 	$result = mysqli_query($db, $query);
// 	$rows = [];
// 	while ($row = mysqli_fetch_assoc($result)){
// 		$rows[] = $row;
// 	}
// 	return $rows;
// }
// function tambahpm ($data){
// 	global $conn;
// 	$namapm = htmlspecialchars($data["namapm"]);
// 	$userpm = htmlspecialchars($data["userpm"]);
// 	$passpm = htmlspecialchars($data["passpm"]);
// 	$alamatpm = htmlspecialchars($data["alamatpm"]);
// 	$norekpm = htmlspecialchars($data["norekpm"]);
// 	$nopm = htmlspecialchars($data["nopm"]);
	
// 		$query ="INSERT INTO user
// 			VALUES 
// 			('','2','$namapm', '$userpm', '$passpm', '','','$alamatpm', '$norekpm','$nopm','')
// 	";
// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);
// }

// function verif($data){
// 	global $conn;
// 	$id = $data["id"];
// 	mysqli_query($conn,"UPDATE user SET 
// 			 status = 'berhasil verifikasi'
// 			 WHERE id = $id");
// 	return mysqli_affected_rows($conn);
// }

// function tolak($data){
// 	global $conn;
// 	$id = $data["id"];
// 	mysqli_query($conn,"UPDATE user SET 
// 			 status = 'verifikasi ditolak'
// 			 WHERE id = $id");
// 	return mysqli_affected_rows($conn);
// }

// function tambahpk ($data){
// 	global $conn;
// 	$namapk = htmlspecialchars($data["namapk"]);
// 	$userpk = htmlspecialchars($data["userpk"]);
// 	$passpk = htmlspecialchars($data["passpk"]);
// 	$alamatpk = htmlspecialchars($data["alamatpk"]);
// 	$naper = htmlspecialchars($data["naper"]);
// 	$noper = htmlspecialchars($data["noper"]);
// 	$norekpk = htmlspecialchars($data["norekpk"]);
// 	$nopk = htmlspecialchars($data["nopk"]);
	
// 		$query ="INSERT INTO user
// 			VALUES 
// 			('','3','$namapk', '$userpk', '$passpk','$alamatpk', '$naper','$noper', '$norekpk','$nopk','')
// 	";
// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);
// }


// function tambah($data){
// 	global $conn;
// 	$namaproduk = htmlspecialchars($data["namaproduk"]);
// 	$hargaproduk = htmlspecialchars($data["hargaproduk"]);
// 	$stok = htmlspecialchars($data["stok"]);
// 	// upload gambar
// 	$gambarproduk = upload();
// 	if(! $gambarproduk){
// 		return false;
// 	}
// 	$query ="INSERT INTO product
// 			VALUES 
// 			('','', '$namaproduk', '$hargaproduk', '$stok', '$gambarproduk')
// 	";
// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);
// }
// function upload(){

// 	$namaFile = $_FILES['gambarproduk']['name'];
// 	$ukuranFile = $_FILES['gambarproduk']['size'];
// 	$error =$_FILES['gambarproduk']['error'];
// 	$tmpName = $_FILES['gambarproduk']['tmp_name'];

// 	//cek upload ada apa nggak
// 	if ($error === 4){
// 		echo "<script>
// 		alert('pilih gambar terlebih dahulu');
// 		</script>";
// 		return false;
// 	}
// 	//hanya gambar
// 	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
// 	$ekstensiGambar = explode('.', $namaFile);
// 	$ekstensiGambar =strtolower(end($ekstensiGambar));
// 	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

// 		echo "<script>
// 		alert('yang anda upload bukan gambar!');
// 		</script>";
// 		return false;
// 	}

// 	//cek jika ukurannya terlalu besar
// 	if ($ukuranFile > 1000000){

// 		echo "<script>
// 		alert('ukuran gambar terlalu besar');
// 		</script>";
// 		return false;
// 	}

// 	//jika lolos gambar berhasil di upload
// 	// generate nama baru

// 	$namaFileBaru = uniqid();
// 	$namaFileBaru .= '.';
// 	$namaFileBaru .= $ekstensiGambar;


// 	move_uploaded_file($tmpName, 'catalog/'. $namaFileBaru);
// 	return $namaFileBaru;
// }



?>
