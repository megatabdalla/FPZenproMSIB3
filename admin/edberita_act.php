<?php
	include "config.php";

	$title = $_POST['judul'];
	$isi = $_POST['isi'];
	$img = $_POST['gambar'];
	$idKat = $_POST['idKat'];

	$sql = "UPDATE berita 
			SET judul = '$title',
				isi 	 = '$isi',
				gambar 	 = '$img',
				idKat 	 = '$idKat'
			WHERE judul = '$judul'";

	$hasil = mysqli_query($config, $sql);
	if ($hasil)
	{
		$message = "Data berhasil diubah";
		echo "<script type='text/javascript'>alert('$message');
			   window.location.href='login.php'</script>";
		header("Location: crudberita.php");
	}
	else
	{
		$message = "Data gagal diubah";
		echo "<script type='text/javascript'>alert('$message');
			   window.location.href='login.php'</script>";
		header("Location: crudberita.php");
	}
?>