<?php
// Sertakan file koneksi
include '../koneksi.php';

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai input
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $kode_jabatan = $_POST['jabatan']; // Ubah kolom 'jabatan' menjadi 'kode_jabatan'
    $kode_golongan = $_POST['golongan']; // Ubah kolom 'golongan' menjadi 'kode_golongan'

    // Query untuk insert data ke database
    $sql = "INSERT INTO pegawai (nip, nama, kode_jabatan, kode_golongan) VALUES ('$nip', '$nama', '$kode_jabatan', '$kode_golongan')";

    // Jalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='data_pegawai.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
?>
