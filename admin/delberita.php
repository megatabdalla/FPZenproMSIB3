<?php
	include "config.php";
	$judul = $_GET['judul'];

	$sql = "DELETE FROM berita WHERE judul = '$judul'";
	$hasil = mysqli_query($config, $sql);

	echo "<script> alert ('Data berhasil dihapus')</script>";
	header("location: crudberita.php");
?>