<?php
	$config = mysqli_connect("localhost", "root", "", "anews");
	if (!$config)
	{
		die('Gagal terhubung ke MySQL: '.mysqli_connect_error());
	}
?>