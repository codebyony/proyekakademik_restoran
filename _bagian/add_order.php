<?php
	include 'koneksi.php';

	$no_meja = $_POST['no_meja'];
	$tanggal = $_POST['tanggal'];
	$id_user = $_POST['id_user'];
	$keterangan = $_POST['keterangan'];
	$status_order = $_POST['status_order'];

	$sql = "INSERT INTO `order` (`id_order`, `no_meja`, `tanggal`, `id_user`, `keterangan`, `status_order`) VALUES (NULL, '$no_meja', '$tanggal', '$id_user', '$keterangan', '$status_order');";
	
	if(mysqli_query($connect, $sql)){
		echo "Data berhasil terkirim";
	}else{
		echo mysqli_error($connect);
	}
?>