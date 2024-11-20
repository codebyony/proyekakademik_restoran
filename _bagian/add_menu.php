<?php
	include 'koneksi.php';

	$id_jenis = $_POST['id_jenis'];
	$nama_masakan = $_POST['nama_masakan'];
	$harga = $_POST['harga'];
	$status = $_POST['status'];


	$sql = "INSERT INTO masakan(id_jenis, nama_masakan, harga, status) VALUES ('$id_jenis','$nama_masakan','$harga','$status')";

	
	if(mysqli_query($connect, $sql)){
		echo "Data berhasil terkirim";
	}else{
		echo mysqli_error($connect);
	}
?>