<!DOCTYPE html>
<html>
<head>
	<?php
		include "header.php";
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berita</title>
	<style type="text/css">
		body{
			background-color: #262626;
			font-family: Montserrat;
			margin: 0;
		}
		
		.container {
			width: 2000px;
			margin : 50px 50px 800px 50px;
			justify-content: center;
		}

		#carouselExampleIndicators{
			width: 65%;
			float: left;
			padding-right: 30px;
		}

		#carouselExampleIndicators h2 {
			color: white;
		}

		.carousel-content {
		  position: absolute;
		  bottom: 10%;
		  left: 5%;
		  z-index: 20;
		  color: white;
		  text-shadow: 0 1px 2px rgba(0,0,0,.6);
		}

		.carousel-caption{
			width: 102%;
			text-align: left;
			font-size: 28px;
			margin-left: -115px;
			background-color: #262626;
			background: rgba(0,0,0,0.5);
		}

		a{
			text-decoration: none;
			color: white;
		}

		a:hover{
			color: white;
		}

		.sidebar {
			width: 35%;
			display: flex;
  			flex-direction: column;
			gap: 40px 30px;
			padding: 10px 0;
			border-top: 2px solid white !important;
			border-bottom: 2px solid white !important;
		}

		.sidebar img {
			width: 130px;
			float: left;
			margin-right: 10px;
		}

		.sidebar p {
			color: white;
			font-weight: bold;
		}
		
		.main-content {
			width: 100%;
			display: flex;
  			flex-direction: column;
			gap: 20px 10px;
			padding: 10px 0;
			border-top: 2px solid white !important;
			border-bottom: 2px solid white !important;
		}

		.main-content img {
			width: 100%;
			float: left;
			margin-right: 10px;
		}

		.main-content p {
			color: white;
			font-weight: bold;
		}

	</style>
</head>
<body>

	<?php

		include('admin/config.php');
		$kategori = $_GET['kategori'];
		$query = "SELECT * FROM berita WHERE idKat = '$kategori'";
		$selects = mysqli_query($config, $query);

		function excerpt($content, $cutOffLength) {

			$charAtPosition = "";
			$contentLength = strlen($content);
				
			do {
				$cutOffLength++;
				$charAtPosition = substr($content, $cutOffLength, 1);
			} while ($cutOffLength < $contentLength && $charAtPosition != " ");
				
			return substr($content, 0, $cutOffLength) . '...';
				
		}

	?>

	<div class="container">
		<div id="carouselExampleIndicators">
			<?php 

				if ($kategori == 1) {
					echo '<h2>Kategori: Sport</h2>';
				} elseif ($kategori == 2) {
					echo '<h2>Kategori: E-Sport</h2>';
				} elseif ($kategori == 3) {
					echo '<h2>Kategori: Sosial</h2>';
				} else {

				}

			?>
			<?php if ($selects->num_rows > 0) { ?>
				<div class="main-content">
					<?php while ($select = mysqli_fetch_assoc($selects)) { ?>
						<div class="row">
							<div class="col">
								<img src="assets/img/cr.jpg">
							</div>
							<div class="col">
								<a class="fw-bold" href=""><?= $select['judul'] ?></a>
								<p class="fw-normal mt-1"><?= excerpt($select['isi'], 150) ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } else { ?>
				<p class="fw-normal text-white">Kategori Masih Kosong</p>
			<?php } ?>
		</div>

		<h2 class="text-white">Postingan Terbaru</h2>
		<div class="sidebar">
			<?php

				include('admin/config.php');
				$sql = "SELECT * FROM berita ORDER BY id DESC LIMIT 6";
				$sidebars = mysqli_query($config, $sql);

			?>
			<?php if ($sidebars->num_rows > 0) { ?>
                <?php while ($sidebar = mysqli_fetch_assoc($sidebars)) { ?>
                    <div class="berita">
						<!-- <img src="<?= $sidebar['gambar'] ?>"> -->
						<img src="assets/img/cr.jpg">
						<a class="fw-bold" href=""><?= $sidebar['judul'] ?></a>
						<p class="fw-normal"><?= excerpt($sidebar['isi'], 30) ?></p>
					</div>
                <?php } } else { ?>
					<div class="berita">
						<p class="fw-normal">Belum ada berita</p>
					</div>
			<?php } ?>
		</div>
	</div>
  <?php
  	include "footer.php";
  ?>
</body>
</html>
