<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
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
                <a href="#" class="flex ms-2 md:me-24 mb-5">
                    <img src="assets/img/logo.png" class="h-12 me-3" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">SPPD</span>
                </a>
                <div class="bg-[#276EAC4D] mb-2 py-2 px-5 text-center">
                    <p class="font-semibold text-xs text-white/50">MENU UTAMA</p>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="user.php" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                            <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap">Buat SPT</span>
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

        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-14">
                <h1 class="text-[#23212F] font-semibold text-2xl">Dashboard</h1>
                <div class="flex gap-10 my-5 ">
                    <div class="mb-10 w-64">
                        <div class="h-36 flex justify-center rounded-t-xl bg-[#B4B7E9] flex py-8">
                            <div class="text-white mt-8">
                                <h1 class="text-4xl font-semibold">10</h1>
                                <p>Laporan</p>
                            </div>
                            <div class="ml-4">
                                <i class="fa-solid fa-file-invoice text-[#8083a6]/50 text-8xl"></i>
                            </div>
                        </div>
                        <div class="bg-[#8083a6] text-center p-2 text-white rounded-b-xl">
                            <a href="laporan.php">
                                <p>Info lebih lanjut > </p>
                            </a>
                        </div>
                    </div>
                    <div class="mb-10 w-64">
                        <div class="h-36 flex justify-center rounded-t-xl bg-[#DEAF78] flex py-8">
                            <div class="text-white mt-8">
                                <h1 class="text-4xl font-semibold">4</h1>
                                <p>Data SPT</p>
                            </div>
                            <div class="ml-4">
                                <i class="fa-solid fa-pen-to-square text-[#9a7f61]/50 text-8xl"></i>
                            </div>
                        </div>
                        <div class="bg-[#9a7f61] text-center p-2 text-white rounded-b-xl">
                            <a href="buatspt.php">
                                <p>Info lebih lanjut > </p>
                            </a>
                        </div>
                    </div>
                    <?php
                    // Query untuk menghitung jumlah pegawai
                    $query_total = "SELECT COUNT(*) AS total FROM pegawai";
                    $result_total = mysqli_query($koneksi, $query_total);

                    // Ambil hasil dari query
                    $total_pegawai = 0;
                    if ($result_total) {
                        $row_total = mysqli_fetch_assoc($result_total);
                        $total_pegawai = $row_total['total'];
                    }

                    mysqli_close($koneksi);
                    ?>
                    <div class="mb-10 w-64">
                        <div class="h-36 flex justify-center rounded-t-xl bg-[#93DB87] flex py-8">
                            <div class="text-white mt-8">
                                <h1 class="text-4xl font-semibold"><?php echo $total_pegawai; ?></h1>
                                <p> Pegawai</p>
                            </div>
                            <div class="ml-4">
                                <i class="fa-solid fa-users text-[#6d986a]/50 text-8xl"></i>
                            </div>
                        </div>
                        <div class="bg-[#6d986a] text-center p-2 text-white rounded-b-xl">
                            <a href="pegawai.php">
                                <p>Info lebih lanjut > </p>
                            </a>
                        </div>
                    </div>
                </div>
                <h1 class="text-[#23212F] font-medium text-lg">Grafik SPPD Per-Bulan</h1>
                <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50">
                    ini buat grafik
                </div>
            </div>
        </div>

    </section>
    <section id="footer">
        <?php include "footer.php"; ?>
    </section>
</body>

</html>