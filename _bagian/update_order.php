<?php
	include "koneksi.php";

	$id = $_POST['id_order'];
	$no_meja = $_POST['no_meja'];
	$tanggal = $_POST['tanggal'];
	$id_user = $_POST['id_user'];
	$keterangan = $_POST['keterangan'];
	$status_order = $_POST['status_order'];

	$query = "UPDATE `order` SET `no_meja` = '$no_meja',`tanggal` = '$tanggal',`id_user` = '$id_user',`keterangan` = '$keterangan',`status_order` = '$status_order' WHERE `order`.`id_order` = '$id'";
	$result = mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil diedit";
	}else{
		echo mysqli_error($connect);
	}
?>