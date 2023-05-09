<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	
</head>
<body>
	

	<?php
	include 'nav.php';
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

	<form method="post" action="update.php">
	<div class="container-fluid">
	<div class="mb-3 mt-3">
	  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <label class="form_label">Nama:</label>
      <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
    </div>
    <div class="mb-3">
      <label class="form_label">Kelas:</label>
      <input type="text" class="form-control" name="kelas" value="<?php echo $d['kelas']; ?>">
    </div>
    <div class="mb-3">
      <label class="form_label">Alamat:</label>
      <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<?php 
	} 
?>

</body>
</html>