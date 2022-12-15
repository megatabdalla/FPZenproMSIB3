<?php
include('config.php');
if(isset($_GET['gambar'])) 
{
    $query = mysqli_query($koneksi,"select * from gambar where gambar = '".$_GET['gambar']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["file_type"]);
    echo $row["gambar"];
}
else
{
    header('location:index.php');
}
?>