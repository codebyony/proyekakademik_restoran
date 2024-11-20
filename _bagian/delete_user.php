<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$query = "DELETE from user WHERE id_user='$id'";
	$result = mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil dihapus";
	}else{
		echo mysqli_error($connect);
	}

	header("Location: ../user_admin.php?id=0&edit=0");
	die();
?>