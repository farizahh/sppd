<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kegiatan</title>
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
                        <a href="user.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                            <span class="text-sm ms-3 whitespace-nowrap">Buat SPT</span>
                        </a>
                    </li>
                    <li class="bg-[#D6F170] rounded-lg">
                        <button type="button" class="flex items-center p-2 pr-3 rounded-lg text-black group" aria-controls="dropdown-lp" data-collapse-toggle="dropdown-lp">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-24">Laporan</span>
                            <svg class="w-3 h-3 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-lp" class="py-2 space-y-2 text-sm">
                            <li>
                                <button type="button" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-[#D6F170] hover:text-black group" aria-controls="dropdown-uha" data-collapse-toggle="dropdown-uha">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-600 transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                    <span class="text-gray-600 group-hover:text-black text-sm ms-3 whitespace-nowrap pr-16">Uang Harian</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-gray-600 hover:text-black transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                </button>
                                <ul id="dropdown-uha" class="hidden py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="uh_rapat.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Kegiatan Rapat</a>
                                    </li>
                                    <li>
                                        <a href="uh_dinas.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Perjalanan Dinas</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-[#D6F170] hover:text-black group" aria-controls="dropdown-tr" data-collapse-toggle="dropdown-tr">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-600 transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                    <span class="text-gray-600 text-sm ms-3 whitespace-nowrap pr-5 group-hover:text-black">Biaya Transportasi</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-gray-600 transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                </button>
                                <ul id="dropdown-tr" class="hidden py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="tr_pesawat.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Pesawat</a>
                                    </li>
                                    <li>
                                        <a href="tr_taksi.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Taksi</a>
                                    </li>
                                    <li>
                                        <a href="tr_oneway.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">One Way</a>
                                    </li>
                                    <li>
                                        <a href="tr_sewa.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Sewa Kendaraan</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="by_penginapan.php" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-600 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Biaya Penginapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="by_representasi.php" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-6600 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Uang Representasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="cetak.php" class="flex items-center p-2 text-black rounded-lg bg-[#D6F170] hover:text-black group active">
                                    <i class="fa-solid fa-print w-5 h-5 text-black transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
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
                <h1 class="bg-gradient-to-r from-sky-900 to-sky-700 text-white font-medium text-md px-5 py-3 rounded-xl">Detail RPD</h1>
                <form action="" method="post">
                    <div class="mt-5 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">No. Surat Tugas </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" required />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-2/6">
                            <label for="nip" class="block text-sm font-medium text-[#102E48] mt-2">NIP Pegawai</label>
                        </div>
                        <div class="md:w-4/6">
                            <select id="nip" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                <option selected>- Pilih NIP -</option>
                                <option value="ER">21082010015</option>
                                <option value="KS">21082010169</option>
                                <option value="FF">21082010197</option>
                            </select>
                        </div>
                        <div class="md:w-2/6 pl-3">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Nama Pegawai</label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-2/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Pangkat / Gol Pegawai</label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                        <div class="md:w-2/6 pl-3">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Jabatan Pegawai</label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-2/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Berangkat</label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                        <div class="md:w-2/6 pl-3">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Kembali</label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Total Pengeluaran</label>
                        </div>
                        <div class="md:w-5/6">
                            <textarea id="message" rows="4" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled></textarea>
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-2/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Penanggung Jawab Cetak </label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                        </div>
                        <div class="md:w-2/6 pl-3">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Bukti </label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                        </div>
                    </div>
                    <div class="flex float-right mb-12">
                        <button type="button" onclick="window.location.href = 'kwitansi.php';" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2">Batal</button>
                        <button type="button" onclick="window.location.href = '#';" class="text-white bg-sky-600 hover:bg-sky-700 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <section id="footer">
        <?php include "footer.php"; ?>
    </section>
</body>

</html>