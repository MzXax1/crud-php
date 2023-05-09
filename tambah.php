<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 

  include "nav.php"

?>


<div class="container mt-3">
  <div>
    <h2>
      Formulir pendataan
    </h2>
  </div>
  <form method="post" action="tambah_aksi.php">
    <div class="mb-3 mt-3">
      <label class="form_label">Nama:</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="mb-3">
      <label class="form_label">Kelas:</label>
      <input type="text" class="form-control" name="kelas">
    </div>
    <div class="mb-3">
      <label class="form_label">Alamat:</label>
      <input type="text" class="form-control" name="alamat">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>