<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Daerah</title>
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
                            <span class="flex-1 ms-3 whitespace-nowrap pr-12 text-sm">D. Master Biaya</span>
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
                    <li>
                        <button type="button" class="flex items-center p-2 pr-4 rounded-lg hover:bg-[#D6F170] text-gray-500 hover:text-black group" aria-controls="dropdown-mt" data-collapse-toggle="dropdown-mt">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-5">D. Master Transport</span>
                            <svg class="w-3 h-3 text-gray-500 group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-mt" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="data_pesawat.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Pesawat</a>
                            </li>
                            <li>
                                <a href="data_taksi.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Taksi</a>
                            </li>
                            <li>
                                <a href="data_oneway.php" class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">One Way</a>
                            </li>
                            <li>
                                <button type="button" class="flex items-center p-2 pl-8 text-gray-500 rounded-lg group" aria-controls="dropdown-tr" data-collapse-toggle="dropdown-tr">
                                    <span class="text-sm ms-3 whitespace-nowrap pr-5">Sewa Kendaraan</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 hover:text-black transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                </button>
                                <ul id="dropdown-tr" class="hidden py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="sewa_dd.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Dalam Daerah</a>
                                    </li>
                                    <li>
                                        <a href="sewa_ldk.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Luar Daerah (Dari Kedudukan ke Tempat Tujuan)</a>
                                    </li>
                                    <li>
                                        <a href="sewa_ld.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Luar Daerah (Dari Tempat Tujuan)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="bg-[#D6F170] rounded-lg">
                        <button type="button" class="flex items-center p-2 pr-4 rounded-lg text-black hover:text-black group active" aria-controls="dropdown-md" data-collapse-toggle="dropdown-md">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-9">D. Master Daerah</span>
                            <svg class="w-3 h-3 text-black group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-md" class=" py-2 space-y-2 text-sm">
                            <li>
                                <a href="data_provinsi.php" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group">Provinsi</a>
                            </li>
                            <li>
                                <a href="data_kota.php" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg pl-11 group hover:bg-[#D6F170] hover:text-black">Kota/Kabupaten</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>

        <?php
        // Jumlah entri per halaman
        $batas = isset($_GET['batas']) ? (int)$_GET['batas'] : 10;

        // Mendapatkan halaman saat ini dari parameter URL, default ke halaman 1 jika tidak ada
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;

        // Menghitung halaman awal dan kueri sesuai dengan halaman dan batas
        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

        // Kueri untuk mengambil jumlah total entri
        $query_total = "SELECT COUNT(*) as total FROM provinsi";
        $result_total = $koneksi->query($query_total);
        $row_total = $result_total->fetch_assoc();
        $total_entries = $row_total['total'];

        // Menghitung total halaman
        $total_halaman = ceil($total_entries / $batas);

        // Menghitung entri awal dan akhir untuk tampilan
        $start_entry = $halaman_awal + 1;
        $end_entry = min($halaman_awal + $batas, $total_entries);
        ?>

        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-14">
                <h1 class="text-[#23212F] font-medium text-2xl">Data Daerah</h1>
                <div class="border-solid">
                    <div class="bg-[#193D5E] rounded-t-xl mt-4 p-4">
                        <h1 class="text-white text-md font-semibold">Data Daerah : Provinsi</h1>
                    </div>
                    <div class="shadow-lg px-5 py-3">
                        <div class="flex justify-between">
                            <div class="text-sm">
                                <form method="GET" action="">
                                    <label for="batas">Show :</label>
                                    <select name="batas" id="batas" class="form-control input-sm px-2" onchange="this.form.submit()">
                                        <option value="10" <?php if ($batas == 10) echo 'selected'; ?>>10</option>
                                        <option value="25" <?php if ($batas == 25) echo 'selected'; ?>>25</option>
                                        <option value="50" <?php if ($batas == 50) echo 'selected'; ?>>50</option>
                                        <option value="100" <?php if ($batas == 100) echo 'selected'; ?>>100</option>
                                    </select>
                                    <label for="batas">entries</label>
                                </form>
                            </div>
                            <div class=" flex float-right">
                                <!-- Modal toggle -->
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="focus:outline-none text-white bg-[#388E60] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-2 me-2 mb-2" type="button">
                                    + Tambah
                                </button>

                                <!-- Main modal -->
                                <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-[#F3F3F3] rounded-2xl shadow">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:py-2 md:px-4 rounded-t-xl bg-gradient-to-r from-sky-900 to-sky-700">
                                                <h3 class="text-md font-normal text-white">
                                                    Tambah Data Daerah : Provinsi
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form class="space-y-4" action="proses_insert_dtpr.php" method="POST">
                                                    <div class="mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Kode Provinsi </label>
                                                        </div>
                                                        <div class="md:w-5/6">
                                                            <input type="name" id="kode_provinsi" name="kode_provinsi" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required />
                                                        </div>
                                                    </div>
                                                    <div class="mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Provinsi</label>
                                                        </div>
                                                        <div class="md:w-5/6">
                                                            <input type="name" id="nama_provinsi" name="nama_provinsi" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required />
                                                        </div>
                                                    </div>
                                                    <div class="mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Ibu Kota Provinsi</label>
                                                        </div>
                                                        <div class="md:w-5/6">
                                                            <input type="name" id="ibukota_provinsi" name="ibukota_provinsi" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2" required />
                                                        </div>
                                                    </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                                <button data-modal-hide="default-modal" type="button" class="text-white bg-slate-500 hover:bg-slate-600 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Kembali</button>
                                                <button data-modal-hide="default-modal" type="submit" name="submit" class="text-white bg-sky-600 hover:bg-sky-700 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-x-auto shadow-lg sm:rounded-lg mt-3">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100 text-center">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Kode Provinsi
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Provinsi
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Ibu Kota Provinsi
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $query = "SELECT * FROM provinsi LIMIT $halaman_awal, $batas";
                                    $result = $koneksi->query($query);

                                    if ($result) {
                                        if ($result->num_rows > 0) {
                                            // Hitung nomor urut awal untuk halaman saat ini
                                            $nomor = $halaman_awal + 1;

                                            // Menghitung batas atas dan bawah entri yang ditampilkan
                                            // $start_entry = $halaman_awal + 1;
                                            // $end_entry = min($halaman_awal + $batas, $jumlah_data);

                                            // Loop through the result set and display data
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr class= 'bg-white border-b hover:bg-gray-50'>";
                                                echo "<td class='px-6 py-3 text-center'>" . $nomor++ . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['kode_provinsi'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['nama_provinsi'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['ibukota_provinsi'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>
                                                    <a href='edit_dtpr.php?edit=" . $row['kode_provinsi'] . "' class='font-medium bg-amber-400 hover:bg-amber-500 text-black p-2 rounded-md text-xs mr-2 text-center'>
                                                        <i class='fa-solid fa-file-circle-check'></i>
                                                    </a> 
                                                    
                                                    <a href='proses_delete_dtpr.php?delete=" . $row['kode_provinsi'] . "' onclick='return confirmDelete()' type='button' class='font-medium bg-[#ff0000] hover:bg-red-800 text-[#ffdead] p-2 rounded-md text-xs text-center'>
                                                        <i class='fa-solid fa-trash'></i>   
                                                    </a>
                                                  </td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4' class='text-center p-2'>Tidak ada data</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4' class='text-center'>Error: " . $koneksi->error . "</td></tr>";
                                    }

                                    $koneksi->close();
                                    ?>

                                    <script>
                                        function confirmDelete() {
                                            return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?');
                                        }
                                    </script>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex justify-between text-sm mx-auto">
                            <div class="pt-4">
                                <?php echo "Showing $start_entry to $end_entry of $total_entries entries"; ?>
                            </div>
                            <div>
                                <!-- Pagination navigation -->
                                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4 mb-10" aria-label="Table navigation">
                                    <ul class=" flex pagination justify-content-center">
                                        <!-- Tautan "Previous" -->
                                        <li class="page-item px-3">
                                            <a class="page-link" <?php if ($halaman > 1) {
                                                                        echo "href='?halaman=" . ($halaman - 1) . "&batas=$batas'";
                                                                    } ?>>Previous</a>
                                        </li>

                                        <!-- Tautan Nomor Halaman -->
                                        <?php
                                        for ($x = max(1, $halaman - 5); $x <= min($halaman + 5, $total_halaman); $x++) {
                                        ?>
                                            <li class="page-item px-3 <?php if ($x == $halaman) echo 'active'; ?>">
                                                <a class="page-link" href="?halaman=<?php echo $x ?>&batas=<?php echo $batas ?>"><?php echo $x; ?></a>
                                            </li>
                                        <?php
                                        }
                                        ?>

                                        <!-- Tautan "Next" -->
                                        <li class="page-item px-3">
                                            <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                        echo "href='?halaman=" . ($halaman + 1) . "&batas=$batas'";
                                                                    } ?>>Next</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="footer">
        <?php include "../footer.php"; ?>
    </section>
</body>

</html>