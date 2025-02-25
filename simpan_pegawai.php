<?php
include "koneksi.php";
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = trim($_POST["nip"]);
    $nama = trim($_POST["nama"]);
    $kode_jabatan = trim($_POST["kode_jabatan"]);
    $kode_golongan = trim($_POST["kode_golongan"]);

    if (empty($nip) || empty($nama) || empty($kode_jabatan) || empty($kode_golongan)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Semua kolom harus diisi!"]);
        exit();
    }

    // Cek apakah NIP sudah ada
    $query_check_nip = "SELECT nip FROM spt_pegawai WHERE nip = ?";
    $stmt_check_nip = $koneksi->prepare($query_check_nip);

    if ($stmt_check_nip) {
        $stmt_check_nip->bind_param("s", $nip);
        $stmt_check_nip->execute();
        $stmt_check_nip->store_result();

        if ($stmt_check_nip->num_rows > 0) {
            http_response_code(409);
            echo json_encode(["status" => "error", "message" => "NIP sudah terdaftar!"]);
            $stmt_check_nip->close();
            exit();
        }
        $stmt_check_nip->close();
    }

    // Insert ke spt_pegawai tanpa id_spt (akan diperbarui oleh simpan_kegiatan.php)
    $query_insert_pegawai = "INSERT INTO spt_pegawai (id_spt, nip, nama, kode_jabatan, kode_golongan) 
                             VALUES (NULL, ?, ?, ?, ?)";
    $stmt_insert_pegawai = $koneksi->prepare($query_insert_pegawai);

    if ($stmt_insert_pegawai) {
        $stmt_insert_pegawai->bind_param("ssss", $nip, $nama, $kode_jabatan, $kode_golongan);
        if ($stmt_insert_pegawai->execute()) {
            http_response_code(201);
            echo json_encode(["status" => "success", "message" => "Pegawai berhasil disimpan"]);
        } else {
            http_response_code(500);
            echo json_encode(["status" => "error", "message" => "Gagal menyimpan data pegawai: " . $stmt_insert_pegawai->error]);
        }
        $stmt_insert_pegawai->close();
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Query Error: " . $koneksi->error]);
    }

    $koneksi->close();
}
?>
