<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<style type="text/css">
		    body{
            font-family: Montserrat;
            background-color: #262626;
            color: white;
        }

        a{
            color: white;
            text-decoration:none
        }

        .navbar-brand {
            color: #25AAE2;
        }

        .tombol1 {
          background-color: transparent;
          color: white;
          border: 2px solid #348898;
          border-radius: 6px;
          padding: 5px;
          margin-right: 5px;
        }

        .tombol2 {
          background-color: transparent;
          color: white;
          border: 2px solid #348898;
          border-radius: 6px;
          padding: 5px;
        }

        .container-fluid{
          margin-left: 20px;
        }

        footer {
          bottom: 0;
        }
	</style>
</head>
<body>
  <?php 
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
      header("Location: login.php");
      die();
    }
    
    $judul = isset($_GET['judul']) ? $_GET['judul'] : false;
    $isi = isset($_GET['isi']) ? $_GET['isi'] : false;
    $gambar = isset($_GET['gambar']) ? $_GET['gambar'] : false;
    
    ?>
  <header>
    <?php
    include "header.php";
    ?>
  </header>


	<div class="container-fluid">
    <br>
  	<h3>Menambah Data Admin</h3>
  	<br>
  	<form method="POST" action="addberita_act.php" enctype="multipart/form-data">
  		<table>
  			<tr>
  				<td>Judul</td>
  				<td>:</td>
  				<td><input class="form-control" type="text" name="judul"></td>
  			</tr>
  			<tr>
  				<td>Isi</td>
  				<td>:</td>
  				<td><input class="form-control" type="text" name="isi" style="height:200px; font-size:14pt;"></td>
  			</tr>
  			<tr>
  				<td>Gambar</td>
  				<td>:</td>
  				<td><input class="form-control" type="file" name="gambar" value="<?php echo $gambar ?>"></td>
  			</tr>
  			<tr>
  				<td>Kategori</td>
  				<td>:</td>
  				<td>
          <select name="idKat" class="form-select" aria-label="Default select example">
            <option selected disabled>Open this select menu</option>
            <?php 

              include('config.php');
              $query = "SELECT * FROM kategori";
              $selects = mysqli_query($config, $query);

            ?>
            <?php while ($select = mysqli_fetch_assoc($selects)) { ?>
              <option value="<?= $select['id'] ?>"><?= $select['namaKategori'] ?></option>
            <?php } ?>
          </select>
          </td>
  			</tr>
  			<tr>
  				<td colspan=2>
  				<br>
  				<input type="submit" name="simpan" value="Simpan" class="tombol1">
  				<input type="reset" name="Batal" class="tombol2">
  				</td>
  			</tr>
  		</table>
  	</form>
  </div>
	<br>

  <footer>
    <?php include "footer.php";?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>