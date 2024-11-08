<?php 
// koneksi database
include 'koneksi.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input
    $nis = trim($_POST['nis']);
    $nm_siswa = trim($_POST['nm_siswa']);
    $jenis_kelamin = trim($_POST['jenis_kelamin']);
    $agama = trim($_POST['agama']);
    $tgl_lahir = trim($_POST['tgl_lahir']);
    $no_telp_siswa = trim($_POST['no_telp_siswa']);
    $no_telp_ortu = trim($_POST['no_telp_ortu']);
    $nm_ibu = trim($_POST['nm_ibu']);
    $pekerjaan_ibu = trim($_POST['pekerjaan_ibu']);
    $nm_ayah = trim($_POST['nm_ayah']);
    $pekerjaan_ayah = trim($_POST['pekerjaan_ayah']);
    $alamat = trim($_POST['alamat']);
    $asal_sekolah_smp = trim($_POST['asal_sekolah_smp']);
    $kd_siswa = intval($_POST['kd_siswa']); // Convert to integer for security

    // Basic validation
    if (empty($kd_siswa) || empty($nis) || empty($nm_siswa)) {
        echo "Error: Required fields are missing.";
        exit();
    }

    // Prepare the SQL update query
    $query = "UPDATE siswa SET 
                nis = ?, 
                nm_siswa = ?, 
                jenis_kelamin = ?, 
                agama = ?, 
                tgl_lahir = ?, 
                no_telp_siswa = ?, 
                no_telp_ortu = ?, 
                nm_ibu = ?, 
                pekerjaan_ibu = ?, 
                nm_ayah = ?, 
                pekerjaan_ayah = ?, 
                alamat = ?, 
                asal_sekolah_smp = ? 
              WHERE kd_siswa = ?";

    // Prepare the statement
    if ($stmt = mysqli_prepare($koneksi, $query)) {
        // Bind parameters to the statement, 'i' for integer kd_siswa
        mysqli_stmt_bind_param($stmt, "sssssssssssssi", 
            $nis, $nm_siswa, $jenis_kelamin, $agama, 
            $tgl_lahir, $no_telp_siswa, $no_telp_ortu, 
            $nm_ibu, $pekerjaan_ibu, $nm_ayah, $pekerjaan_ayah, 
            $alamat, $asal_sekolah_smp, $kd_siswa
        );

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to index.php on success
            header("Location: index.php");
            exit();
        } else {
            // Handle execution error
            echo "Error executing query: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($koneksi);
    }

    // Close the database connection
    mysqli_close($koneksi);

} else {
    // Redirect if accessed directly
    header("Location: index.php");
    exit();
}
?>
