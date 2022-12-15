<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sunting Berita</title>
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

        footer{
            background-color: #348898;
            color: white;
            font-family: Montserrat;
        }

        .container-form{
          margin-left: 20px;
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
    include "header.php";
  ?>
    <div class="container-form">
      <br>
      <center><h2>Edit Data Berita</h2></center>
      <br>
      <?php
  		include "config.php";
  		$judul = $_GET['judul'];
  		$sql = "SELECT berita.*, kategori.namaKategori FROM berita JOIN kategori ON berita.idKat = kategori.id WHERE judul='$judul'";
  		$hasil = mysqli_query($config, $sql);
  		$data = mysqli_fetch_assoc($hasil);
  	?>
  	<form method="POST" action="edberita_act.php">
  	<table>
  		<tr>
  			<td>Judul</td>
  			<td> : </td>
  			<td>
  				<input class="form-control" type="text" value="<?php echo 
  				$data['judul']?>" name="judul"> 
  			</td>
  		</tr>
      <tr>
      <td>Kategori</td>
      <td> : </td>
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
  		<td>Isi</td>
  		<td> : </td>
  		<td>
  			<input type="text" name="isi" value="<?php 
  			echo $data['isi']?>" style="height:200px; font-size:14pt;">
  		</td>
  	</tr>
    <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input class="form-control" type="file" name="gambar" value="<?php echo $gambar ?>"></td>
    </tr>
  	<tr>
  		<td colspan=2>
  			<br>
  			<input type="submit" name="ubah" value="Simpan" class="tombol1">
  			<input type="reset" value="Batal" class="tombol2">
  		</td>
  	</tr>
  	</table>
  	</form>
  	<br>
  </div>
	<?php include "footer.php";?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>