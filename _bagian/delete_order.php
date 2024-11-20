<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$query = "DELETE FROM `order` WHERE `order`.`id_order` = '$id'";
	$result = mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil dihapus";
	}else{
		echo mysqli_error($connect);
	}

	header("Location: ../order_admin.php?id=0&edit=0");
	die();
?>