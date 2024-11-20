<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_user = $_POST['nama_user'];

	$sql = "INSERT INTO user(username, password, nama_user, id_level) VALUES ('$username',MD5('$password'),'$nama_user','5')";

	
	if(mysqli_query($connect, $sql)){
		echo "Data berhasil terkirim";
	}else{
		echo mysqli_error($connect);
	}
?>