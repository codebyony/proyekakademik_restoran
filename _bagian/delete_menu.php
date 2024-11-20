<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$query = "DELETE from masakan WHERE id_masakan='$id'";
	$result = mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil dihapus";
	}else{
		echo mysqli_error($connect);
	}

	header("Location: ../menu_admin.php?id=0&edit=0");
	die();
?>