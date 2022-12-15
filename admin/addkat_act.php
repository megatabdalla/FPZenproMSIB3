<?php
	include "config.php";

	$namaKat = $_POST['namaKat'];

	$sql = "INSERT INTO kategori (namaKategori)
	 		VALUES ('$namaKat')";
	$hasil = mysqli_query($config, $sql);

	if($hasil)
	{
		echo '<script type="text/javascript"> alert("Data berhasil ditambahkan")</script>';
		header("Location: crudkat.php");
	}

	Else
	{
		echo '<script type="text/javascript"> alert("Data gagal disimpan")</script>';
		header("Location: crudkat.php");
	}
?>