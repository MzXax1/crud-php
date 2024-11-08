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
        include 'include/nav.php';
        include 'koneksi.php';
        $kd_siswa = $_GET['kd_siswa'];
        $data = mysqli_query($koneksi,"select * from siswa where kd_siswa='$kd_siswa'");
        while($d = mysqli_fetch_array($data)){
            ?>

        <div class="container mt-3">
            <div>
                <h2>
                Formulir edit
                </h2>
            </div>
            <form method="post" action="update.php">
            <div class="row">
            <div class="col-sm-6">
            <div class="mb-3 mt-3">
                <input type="hidden" name="kd_siswa" value="<?php echo $kd_siswa; ?>">
                <label class="form_label">Nis:</label>
                <input type="number" class="form-control" name="nis" value="<?php echo $d['nis']; ?>">
                </div>
                <div class="mb-3 mt-3">
                <label class="form_label">Nama:</label>
                <input type="text" class="form-control" name="nm_siswa" value="<?php echo $d['nm_siswa']; ?>">
                </div>
                <div class="mb-3 mt-3">
                <label class="form_label">Jenis Kelamin:</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
                </div>
                <div class="mb-3 mt-3">
                <label class="form_label">Agama:</label>
                <input type="text" class="form-control" name="agama" value="<?php echo $d['agama']; ?>">
                </div>
                <div class="mb-3 mt-3">
                <label class="form_label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">No telepon siswa:</label>
                <input type="text" class="form-control" name="no_telp_siswa" value="<?php echo $d['no_telp_siswa']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">No telepon ortu:</label>
                <input type="text" class="form-control" name="no_telp_ortu" value="<?php echo $d['no_telp_ortu']; ?>">
                </div>
            </div>
            <div class="col-sm-6"><div class="mb-3">
                <label class="form_label">Nama Ibu:</label>
                <input type="text" class="form-control" name="nm_ibu" value="<?php echo $d['nm_ibu']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">Pekerjaan Ibu:</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $d['pekerjaan_ibu']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">Nama ayah:</label>
                <input type="text" class="form-control" name="nm_ayah" value="<?php echo $d['nm_ayah']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">Pekerjaan Ayah:</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $d['pekerjaan_ayah']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">Alamat:</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
                </div>
                <div class="mb-3">
                <label class="form_label">Asal sekolah SMP:</label>
                <input type="text" class="form-control" name="asal_sekolah_smp" value="<?php echo $d['asal_sekolah_smp']; ?>">
                </div></div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    <?php 
        } 
    ?>
    </body>
</html>
