<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>

<?php 

  include "nav.php"

    ?>

   <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Nama</th>
        <th>kelas</th>
        <th>Alamat</th>
        <th>AKSI</th>     
        </tr>
    </thead>

   <?php 
    include "koneksi.php";
    $no=1;
    $data=mysqli_query($koneksi,"select * from siswa");
    while($d=mysqli_fetch_array($data)){
  ?>
    <tbody>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['kelas']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>"> Hapus</a>
        </td>
        
    </tr>


    </tbody>
    <?php } ?>
</body>
</html>