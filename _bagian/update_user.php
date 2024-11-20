<?php
	include "koneksi.php";

	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_user = $_POST['nama_user'];

	$query = "UPDATE user SET username='$username', password=MD5('$password'), nama_user='$nama_user' WHERE id_user='$id'";
	$result = mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil diedit";
	}else{
		echo mysqli_error($connect);
	}
?>