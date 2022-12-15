<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Data Berita</title>
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
            text-decoration:none;
            color: white;
        }

        .navbar-brand {
            color: #25AAE2;
        }

        .center{
            margin-left: auto;
            margin-right: auto;
        }

        th{
            text-align: center;
        }

        button {
          background-color: transparent;
          color: blue;
          border: 2px solid #348898;
          border-radius: 6px;
          padding: 5px;
        }

        table{
            border: 2px solid white;
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
    <br>
    <center><h1>Data Berita</h1></center>
    <br>
    <div class="container">
        <p style="margin-left: 105px;"><a href="addberita.php" style="color: #348898;"><button type="button">Tambah Berita</a></button></p>
        <table width="900" cellpadding="5" cellspacing="0" class="center">
            <tr>
                <th width="30"> No. </th>
                <th width="30"> Judul </th>
                <th width="30"> Kategori </th>
                <th width="50"> Gambar </th>
                <th width="150"> Kelola </th>
                <th width="50"> Print Berita </th>
            </tr>
            <?php 
                include "config.php";
                $sql = "SELECT berita.judul, kategori.namaKategori, berita.gambar FROM berita JOIN kategori ON berita.idKat = kategori.id ORDER BY berita.id";
                $hasil = mysqli_query($config, $sql);
                $no = 1; 
                while ($data = mysqli_fetch_array($hasil))
            {
                ?>
                <tr>
                    <td style="text-align: center"><?php echo $no ; ?></td>
                    <td><?php echo $data['judul'] ; ?></td>
                    <td style="text-align: center"><?php echo $data['namaKategori'] ; ?></td>
                    <td><?php echo $data['gambar'] ; ?></td>
                    <td align="center">
                        <a href="edberita.php?judul=<?php echo $data['judul'];?>" class="button" style="color: #348898;"><button type="button" style="margin-right: 15px;">Edit</a></button>
                        <a href="delberita.php?judul=<?php echo $data['judul'];?>" class="button" style="color: #348898;"><button type="button">Delete</a></button>
                    </td>
                    <td>
                        <a href="print.php" class="button" style="color: #348898;"><button type="button" style="margin-right: 15px;">Print</a></button>
                    </td>
                </tr>
                <?php 
                $no++;
            }
          echo "</table>";    
        ?>
        </div>
        <br>

            <?php include "footer.php";?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>