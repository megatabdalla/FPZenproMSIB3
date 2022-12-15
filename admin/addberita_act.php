<?php
	include "config.php";

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$gambar = $_POST['gambar'];
	$idKat = $_POST['idKat'];

	$sql = "INSERT INTO berita (judul, isi, gambar, idKat)
	 				VALUES ('$judul', '$isi', '$gambar', '$idKat')";
	$hasil = mysqli_query($config, $sql);

	if($hasil)
	{
		echo '<script type="text/javascript"> alert("Data berhasil ditambahkan")</script>';
		header("Location: crudberita.php");
	}

	else
	{
		echo '<script type="text/javascript"> alert("Data gagal disimpan")</script>';
		header("Location: crudberita.php");
	}
?>