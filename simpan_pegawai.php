<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST["nip"];
    $name = $_POST["name"];
    $kode_jabatan = $_POST["kode_jabatan"];
    $kode_golongan = $_POST["kode_golongan"];

    // Query untuk menyimpan data
    $query = "INSERT INTO pegawai (nip, nama, kode_jabatan, kode_golongan) VALUES ('$nip', '$name', '$kode_jabatan', '$kode_golongan')";

    if ($koneksi->query($query) === TRUE) {
        echo "success";
    } else {
        echo "error: " . $query . "<br>" . $koneksi->error;
    }
}
?>
