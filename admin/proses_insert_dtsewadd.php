<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $besaran = $_POST['besaran'];
    $minimal_personil = $_POST['minimal_personil'];

    // Periksa apakah nilai untuk jenis_kendaraan, besaran, dan minimal_personil telah diberikan
    if (!empty($jenis_kendaraan) && !empty($besaran) && !empty($minimal_personil)) {
        // Query untuk insert data ke database menggunakan prepared statements
        $sql = $koneksi->prepare("INSERT INTO sewa_dd (jenis_kendaraan, besaran, minimal_personil) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $jenis_kendaraan, $besaran, $minimal_personil);

        // Jalankan query
        if ($sql->execute()) {
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>window.location.href='sewa_dd.php';</script>";
            exit();
        } else {
            echo "Error: " . $sql->error;
        }

        // Tutup statement
        $sql->close();
    } else {
        echo "Error: Harap isi semua kolom.";
    }
}

// Tutup koneksi
$koneksi->close();
?>
