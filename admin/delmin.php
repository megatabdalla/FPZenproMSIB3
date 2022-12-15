<?php
	include "config.php";
	$user = $_GET['username'];

	$sql = "DELETE FROM admin WHERE username = '$user'";
	$hasil = mysqli_query($config, $sql);

	echo "<script> alert ('Data berhasil dihapus')</script>";
	header("location: index.php");
?>