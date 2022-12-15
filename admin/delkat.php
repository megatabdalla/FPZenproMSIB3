<?php
	include "config.php";
	$kat = $_GET['namaKategori'];

	$sql = "DELETE FROM kategori WHERE namaKategori = '$kat'";
	$hasil = mysqli_query($config, $sql);

	echo "<script> alert ('Data berhasil dihapus')</script>";
	header("location: crudkat.php");
?>