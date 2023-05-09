<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$kelas','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>