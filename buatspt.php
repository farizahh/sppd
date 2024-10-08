<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat SPT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    <section id="sidebar">
        <?php include "navbar.php"; ?>

        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-[#102E48]">
                <a href="user.php" class="flex ms-2 md:me-24 mb-5">
                    <img src="assets/img/logo.png" class="h-12 me-3" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">SPPD</span>
                </a>
                <div class="bg-[#276EAC4D] mb-2 py-2 px-5 text-center">
                    <p class="font-semibold text-xs text-white/50">MENU UTAMA</p>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="user.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="buatspt.php" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 group-hover:text-black "></i>
                            <span class="ms-3 whitespace-nowrap text-sm">Buat SPT</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 pr-3 rounded-lg hover:bg-[#D6F170] text-gray-500 hover:text-black group" aria-controls="dropdown-lp" data-collapse-toggle="dropdown-lp">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-28">Laporan</span>
                            <svg class="w-3 h-3 text-gray-500 group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-lp" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <button type="button" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group" aria-controls="dropdown-uha" data-collapse-toggle="dropdown-uha">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-gray-500 group-hover:text-black text-sm ms-3 whitespace-nowrap pr-20">Uang Harian</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-gray-500 hover:text-black transition duration-75 group-hover:text-black"></i>
                                </button>
                                <ul id="dropdown-uha" class="hidden py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="uh_rapat.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-[#D6F170]">Kegiatan Rapat</a>
                                    </li>
                                    <li>
                                        <a href="uh_dinas.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-[#D6F170]">Perjalanan Dinas</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group" aria-controls="dropdown-tr" data-collapse-toggle="dropdown-tr">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-gray-500 group-hover:text-black text-sm ms-3 whitespace-nowrap pr-9">Biaya Transportasi</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-gray-500 hover:text-black transition duration-75 group-hover:text-black"></i>
                                </button>
                                <ul id="dropdown-tr" class="hidden py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="tr_pesawat.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-[#D6F170]">Pesawat</a>
                                    </li>
                                    <li>
                                        <a href="tr_taksi.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-[#D6F170]">Taksi</a>
                                    </li>
                                    <li>
                                        <a href="tr_oneway.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-[#D6F170]">One Way</a>
                                    </li>
                                    <li>
                                        <a href="tr_sewa.php" class="flex items-center w-full text-gray-500 transition duration-75 p-2 rounded-lg pl-14 hover:text-[#D6F170]">Sewa Kendaraan</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="by_penginapan.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Biaya Penginapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="by_representasi.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Uang Representasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="cetak.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-print w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Cetak Data</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- <?php
                // // Jumlah entri per halaman
                // $batas = isset($_GET['batas']) ? (int)$_GET['batas'] : 10;

                // // Mendapatkan halaman saat ini dari parameter URL, default ke halaman 1 jika tidak ada
                // $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;

                // // Menghitung halaman awal dan kueri sesuai dengan halaman dan batas
                // $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                // // Kueri untuk mengambil jumlah total entri
                // $query_total = "SELECT COUNT(*) as total FROM spt";
                // $result_total = $koneksi->query($query_total);
                // $row_total = $result_total->fetch_assoc();
                // $total_entries = $row_total['total'];

                // // Menghitung total halaman
                // $total_halaman = ceil($total_entries / $batas);

                // // Menghitung entri awal dan akhir untuk tampilan
                // $start_entry = $halaman_awal + 1;
                // $end_entry = min($halaman_awal + $batas, $total_entries);
                ?> -->

        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-14">
                <h1 class="text-[#23212F] font-semibold text-2xl">Buat SPT</h1>
                <div class="border-solid">
                    <div class="bg-[#193D5E] rounded-t-xl mt-4 p-4">
                        <h1 class="text-white text-md font-semibold">Data SPT</h1>
                    </div>
                    <div class="shadow-lg px-5 py-3">
                        <div class="flex justify-between">
                            <div class="text-sm">
                                <label for="">Show : </label>
                                <select name="dynamic-table_length" aria-controls="dynamic-table" class="form-control input-sm px-2" fdprocessedid="m599me">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label for="">entries</label>
                            </div>
                            <div class=" flex float-right">
                                <button type="button" onclick="window.location.href = 'dt_pegawai.php';" class="focus:outline-none text-white bg-[#388E60] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-2 me-2 mb-2">+ Tambah</button>
                            </div>
                        </div>

                        <div class="relative overflow-x-auto shadow-lg sm:rounded-lg mt-3">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            No. SPT
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Memerintahkan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Kota Tujuan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tanggal Awal
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tanggal Akhir
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include 'koneksi.php';

                                    $query = "SELECT spt.kode_spt, pegawai.nama AS nama_pegawai, kota.nama_kota AS tujuan_kota, spt.tanggal_awal, spt.tanggal_akhir
                                            FROM spt
                                            JOIN pegawai ON spt.nip = pegawai.nip
                                            JOIN kota ON spt.tujuan_kota = kota.kode_kota";

                                    $result = $koneksi->query($query);

                                    if ($result) {
                                        if ($result->num_rows > 0) {
                                            // Hitung nomor urut awal untuk halaman saat ini
                                            $nomor = 1;

                                            // // Menghitung batas atas dan bawah entri yang ditampilkan
                                            // $start_entry = $halaman_awal + 1;
                                            // $end_entry = min($halaman_awal + $batas, $jumlah_data);

                                            // Loop through the result set and display data
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr class='bg-white border-b hover:bg-gray-50'>";
                                                echo "<td class='px-6 py-3 text-center'>" . $nomor++ . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['nama_pegawai'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['tujuan_kota'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['tanggal_awal'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>" . $row['tanggal_akhir'] . "</td>";
                                                echo "<td class='px-6 py-3 text-center'>
                                                        <a href='edit_spt.php?kode_spt=" . urlencode($row['kode_spt']) . "' class='font-medium bg-amber-400 hover:bg-amber-500 text-black p-2 rounded-md text-xs mr-2 text-center'>
                                                            <i class='fa-solid fa-file-circle-check'></i>
                                                        </a> 
                                                        <a href='proses_delete_spt.php?delete=" . $row['kode_spt'] . "' onclick='return confirmDelete()' type='button' class='font-medium bg-[#ff0000] hover:bg-red-800 text-[#ffdead] p-2 rounded-md text-xs text-center'>
                                                            <i class='fa-solid fa-trash'></i>   
                                                        </a>
                                                    </td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        } else {
                                            echo "<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6' class='text-center'>Error: " . $koneksi->error . "</td></tr>";
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
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                            <span class="text-xs font-normal text-gray-500 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900">1-10</span> of <span class="font-semibold text-gray-900">100</span></span>
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">1</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="footer">
        <?php include "footer.php"; ?>
    </section>
</body>

</html>