<?php
	include "config.php";

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$nama = $_POST['namalengkap'];

	$sql = "INSERT INTO admin (username, password, nama)
	 		VALUES ('$user', '$pass', '$nama')";
	$hasil = mysqli_query($config, $sql);

	if($hasil)
	{
		echo '<script type="text/javascript"> alert("Data berhasil ditambahkan")</script>';
		header("Location: index.php");
	}

	Else
	{
		echo '<script type="text/javascript"> alert("Data gagal disimpan")</script>';
		header("Location: index.php");
	}
?>