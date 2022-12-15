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

	</style>
</head>
<body>

	<?php

		include('admin/config.php');
		$query = "SELECT * FROM berita ORDER BY id DESC LIMIT 3";
		$selects = mysqli_query($config, $query);

	?>

	<div class="container">
		<?php if ($selects->num_rows > 0) { ?>
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					
						<?php while ($select = mysqli_fetch_assoc($selects)) { ?>
							<div class="carousel-item active">
								<!-- <img src="<?= $select['gambar'] ?>" class="d-block w-100" alt="img"> -->
								<img src="assets/img/kor.jpg" class="d-block w-100" alt="img">
								<div class="carousel-caption">
									<a href="berita/kor.php"><b><?= $select['judul'] ?></b></a>
								</div>
							</div>
						<?php } ?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		<?php } else { ?>
			<p class="fw-normal text-white">Belum ada berita</p>
		<?php } ?>

		<h2 class="text-white">Postingan Terbaru</h2>
		<div class="sidebar">
		<?php

			include('admin/config.php');
			// memberi limit pada berita di latest news dengan urutan desc
			$sql = "SELECT * FROM berita ORDER BY id DESC LIMIT 4";
			$sidebars = mysqli_query($config, $sql);

			// fungsi excerpt
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
			<!-- memastikan memiliki nilai -->
			<?php if ($sidebars->num_rows > 0) { ?>
			<?php while ($sidebar = mysqli_fetch_assoc($sidebars)) { ?>
				<div class="berita">
					<!-- <img src="<?= $sidebar['gambar'] ?>"> -->
					<img src="assets/img/cr.jpg">
					<a class="fw-bold" href=""><?= $sidebar['judul'] ?></a>
					<!-- ubah variable angka untuk merubah jumlah excerpt yang akan ditampilkan -->
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
