<?php
	include "config.php";

	$kat = $_POST['namaKat'];
	$idKat = $_GET['idKat'];

	$sql = "UPDATE kategori 
			SET namaKategori = '$kat'
			WHERE id = '$idKat'";

	$hasil = mysqli_query($config, $sql);
	if ($hasil)
	{
		echo "Data berhasil diubah";
	}
	else
	{
		echo "Data gagal diubah";
	}
	header("Location: crudkat.php");
?>