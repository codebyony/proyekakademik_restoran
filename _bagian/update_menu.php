<?php
	include "koneksi.php";

	$id = $_POST['id_masakan'];
	$id_jenis = $_POST['id_jenis'];
	$nama_masakan = $_POST['nama_masakan'];
	$harga = $_POST['harga'];
	$status = $_POST['status'];

	$query = "UPDATE masakan SET id_jenis='$id_jenis', nama_masakan='$nama_masakan', harga='$harga', status='$status' WHERE id_masakan='$id'";
	$result = mysqli_query($connect, $query);

	if($result){
		echo "Data berhasil diedit";
	}else{
		echo mysqli_error($connect);
	}
?>