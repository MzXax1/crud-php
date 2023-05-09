<?php 
include_once "koneksi.php";
$id=$_GET['id'];

$result = mysqli_query($koneksi,"DELETE FROM siswa where id=$id");

header("location:index.php");
 ?>