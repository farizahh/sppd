<?php
include '../koneksi.php';

// Check if the parameters are provided in the URL
if (isset($_GET['asal_kota']) && isset($_GET['tujuan_kota'])) {
    $asal_kota = urldecode($_GET['asal_kota']);
    $tujuan_kota = urldecode($_GET['tujuan_kota']);
    // Fetch the data from the database based on the provided parameters
    $query = "SELECT * FROM pesawat 
              JOIN kota AS kota_asal ON pesawat.asal_kota = kota_asal.kode_kota
              JOIN kota AS kota_tujuan ON pesawat.tujuan_kota = kota_tujuan.kode_kota
              WHERE kota_asal.nama_kota = ? AND kota_tujuan.nama_kota = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ss", $asal_kota, $tujuan_kota);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $kode_pesawat = $row['kode_pesawat'];
        $bisnis = $row['bisnis'];
        $ekonomi = $row['ekonomi'];
    } else {
        echo "Data not found!";
        exit();
    }
} else {
    echo "Parameters not provided!";
    exit();
}

// Fetch all kota from the database
$kota_query = "SELECT * FROM kota";
$kota_result = $koneksi->query($kota_query);

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $asal_kota_new = $_POST['asal_kota'];
    $tujuan_kota_new = $_POST['tujuan_kota'];
    $bisnis_new = $_POST['bisnis'];
    $ekonomi_new = $_POST['ekonomi'];

    // Update the data in the database
    $query = "UPDATE pesawat SET asal_kota = ?, tujuan_kota = ?, bisnis = ?, ekonomi = ? WHERE kode_pesawat = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssiii", $asal_kota_new, $tujuan_kota_new, $bisnis_new, $ekonomi_new, $kode_pesawat);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href='data_pesawat.php';</script>";
        exit();
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Transportasi: Pesawat</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    <section id="sidebar">
        <?php include "../navbar.php"; ?>
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-[#102E48]">
                <a href="index.php" class="flex ms-2 md:me-24 mb-5">
                    <img src="../assets/img/logo.png" class="h-12 me-3" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">SPPD</span>
                </a>
                <div class="bg-[#276EAC4D] mb-2 py-2 px-5 text-center">
                    <p class="font-semibold text-xs text-white/50">MENU UTAMA</p>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="index.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="data_pegawai.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap">D. Master Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="data_jabatan.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap">D. Master Jabatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="data_golongan.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap">D. Master Golongan</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 rounded-lg hover:bg-[#D6F170] text-gray-500 hover:text-black group" aria-controls="dropdown-mb" data-collapse-toggle="dropdown-mb">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap pr-9 text-sm">D. Master Biaya</span>
                            <i class="fa-solid fa-angle-down w-3 h-3 black group-hover:text-black"></i>
                        </button>
                        <ul id="dropdown-mb" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <button type="button" class="flex items-center p-2 pl-5 rounded-lg hover:bg-[#D6F170] text-gray-500 hover:text-black group" aria-controls="dropdown-uha" data-collapse-toggle="dropdown-uha">
                                    <span class="flex-1 ms-3 whitespace-nowrap pr-5 text-sm px-4">Uang Harian</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-gray-500 group-hover:text-black"></i>
                                </button>
                                <ul id="dropdown-uha" class="hidden py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="data_uhpddn.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-20 group hover:bg-[#D6F170]">PDDN</a>
                                    </li>
                                    <li>
                                        <a href="data_uhrapat.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-20 group hover:bg-[#D6F170]">Kegiatan Rapat</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="data_penginapan.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Biaya Penginapan</a>
                            </li>
                            <li>
                                <a href="data_ur.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Uang Representasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="bg-[#D6F170] rounded-lg">
                        <button type="button" class="flex items-center p-2 pr-4 rounded-lg bg-[#D6F170] text-black hover:text-black group active" aria-controls="dropdown-mt" data-collapse-toggle="dropdown-mt">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-2">D. Master Transport</span>
                            <svg class="w-3 h-3 text-black group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-mt" class="py-2 space-y-2 text-sm">
                            <li>
                                <a href="data_pesawat.php" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Pesawat</a>
                            </li>
                            <li>
                                <a href="data_taksi.php" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Taksi</a>
                            </li>
                            <li>
                                <a href="data_oneway.php" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">One Way</a>
                            </li>
                            <li>
                                <button type="button" class="flex items-center p-2 pl-8 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group" aria-controls="dropdown-tr" data-collapse-toggle="dropdown-tr">
                                    <span class="text-gray-600 group-hover:text-black text-sm ms-3 whitespace-nowrap pr-5">Sewa Kendaraan</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-gray-500 hover:text-black transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                </button>
                                <ul id="dropdown-tr" class="hidden py-2 space-y-2 text-sm pl-5">
                                    <li>
                                        <a href="sewa_dd.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:bg-[#D6F170] hover:text-black">Dalam Daerah</a>
                                    </li>
                                    <li>
                                        <a href="sewa_ldk.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:bg-[#D6F170] hover:text-black">Luar Daerah (Dari Kedudukan ke Tempat Tujuan)</a>
                                    </li>
                                    <li>
                                        <a href="sewa_ld.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:bg-[#D6F170] hover:text-black">Luar Daerah (Dari Tempat Tujuan)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 pr-4 rounded-lg hover:bg-[#D6F170] text-gray-500 hover:text-black group" aria-controls="dropdown-md" data-collapse-toggle="dropdown-md">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-6">D. Master Daerah</span>
                            <svg class="w-3 h-3 text-gray-500 group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-md" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="data_provinsi.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Provinsi</a>
                            </li>
                            <li>
                                <a href="data_kota.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Kota/Kabupaten</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </section>

    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h1 class="text-[#23212F] font-medium text-2xl">Edit Data Pesawat</h1>
            <div class="border-solid">
                <div class="bg-[#193D5E] rounded-t-xl mt-4 p-4">
                    <h1 class="text-white text-md font-semibold">Edit Data Pesawat</h1>
                </div>
                <div class="shadow-lg px-5 py-3">
                    <form action="" method="POST">
                        <div class="mb-6 flex">
                            <div class="md:w-2/6">
                                <label for="asal_kota" class="block text-sm font-medium text-[#102E48] mt-2">Asal Kota</label>
                            </div>
                            <div class="md:w-5/6">
                                <select id="asal_kota" name="asal_kota" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                    <option value="" disabled>Pilih Asal Kota</option>
                                    <!-- Loop through each kota data -->
                                    <?php while ($kota_row = $kota_result->fetch_assoc()) : ?>
                                        <option value="<?php echo $kota_row['kode_kota']; ?>" <?php if ($asal_kota == $kota_row['kode_kota']) echo 'selected'; ?>><?php echo $kota_row['nama_kota']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6 flex">
                            <div class="md:w-2/6">
                                <label for="tujuan_kota" class="block text-sm font-medium text-[#102E48] mt-2">Tujuan Kota</label>
                            </div>
                            <div class="md:w-5/6">
                                <select id="tujuan_kota" name="tujuan_kota" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                    <option value="" disabled>Pilih Tujuan Kota</option>
                                    <!-- Loop through each kota data -->
                                    <?php $kota_result->data_seek(0); ?>
                                    <?php while ($kota_row = $kota_result->fetch_assoc()) : ?>
                                        <?php if ($tujuan_kota != $kota_row['kode_kota']) : ?>
                                            <option value="<?php echo $kota_row['kode_kota']; ?>"><?php echo $kota_row['nama_kota']; ?></option>
                                        <?php else : ?>
                                            <option value="<?php echo $kota_row['kode_kota']; ?>" selected><?php echo $kota_row['nama_kota']; ?></option>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6 flex">
                            <div class="md:w-2/6">
                                <label for="bisnis" class="block text-sm font-medium text-[#102E48] mt-2">Harga Bisnis</label>
                            </div>
                            <div class="md:w-5/6">
                                <input type="text" id="bisnis" name="bisnis" value="<?php echo $bisnis; ?>" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2 placeholder-gray-300" placeholder="Masukkan harga bisnis..." required />
                            </div>
                        </div>
                        <div class="mb-6 flex">
                            <div class="md:w-2/6">
                                <label for="ekonomi" class="block text-sm font-medium text-[#102E48] mt-2">Harga Ekonomi</label>
                            </div>
                            <div class="md:w-5/6">
                                <input type="text" id="ekonomi" name="ekonomi" value="<?php echo $ekonomi; ?>" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2 placeholder-gray-300" placeholder="Masukkan harga ekonomi..." required />
                            </div>
                        </div>
                        <div class="flex items-center">
                            <button type="submit" name="submit" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Submit</button>
                            <a href="data_pesawat.php" class="text-blue-500 hover:text-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>