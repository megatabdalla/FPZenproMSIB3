<?php
	include "config.php";

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$nama = $_POST['namalengkap'];

	$sql = "UPDATE admin 
			SET password = '$pass',
				nama 	 = '$nama'
			WHERE username = '$user'";

	$hasil = mysqli_query($config, $sql);
	if ($hasil)
	{
		echo "Data berhasil diubah";
	}
	else
	{
		echo "Data gagal diubah";
	}
	header("Location: index.php");
?>