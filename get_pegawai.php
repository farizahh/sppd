<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip = $_POST['nip'];

    // Debugging: Print NIP to check if it's received correctly
    error_log("Received NIP: " . $nip);

    // Adjust query to use JOIN to get jenis_golongan and jenis_jabatan
    $stmt = $koneksi->prepare("
        SELECT p.nama, g.jenis_golongan, j.jenis_jabatan 
        FROM pegawai p
        JOIN golongan g ON p.kode_golongan = g.kode_golongan
        JOIN jabatan j ON p.kode_jabatan = j.kode_jabatan
        WHERE p.nip = ?
    ");
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("s", $nip);

        // Execute statement
        if ($stmt->execute()) {
            // Bind result variables
            $stmt->bind_result($nama, $jenis_golongan, $jenis_jabatan);

            // Fetch the result
            if ($stmt->fetch()) {
                // Output result as JSON
                echo json_encode(['nama' => $nama, 'pangkat' => $jenis_golongan, 'jabatan' => $jenis_jabatan]);
            } else {
                echo json_encode(['error' => 'Data not found']);
            }
        } else {
            // Debugging: Print execute error
            error_log("Execute failed: " . $stmt->error);
            echo json_encode(['error' => 'Execute failed: ' . $stmt->error]);
        }

        // Close statement
        $stmt->close();
    } else {
        // Debugging: Print preparation error
        error_log("Query preparation failed: " . $koneksi->error);
        echo json_encode(['error' => 'Query preparation failed: ' . $koneksi->error]);
    }
}

// Close connection
$koneksi->close();
?>
