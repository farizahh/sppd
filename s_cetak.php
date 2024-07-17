<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
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
                    <p class="font-semibold text-xs text-white/50">MENU TAMBAH SPT</p>
                </div>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="dt_pegawai.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Data Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="dt_kegiatan.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Data Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="s_cetak.php" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                            <i class="fa-solid fa-print w-5 h-5 text-black transition duration-75 group-hover:text-black"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Cetak Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-14">
                <h1 class="bg-gradient-to-r from-sky-900 to-sky-700 text-white font-medium text-md px-5 py-3 rounded-xl">Detail Dokumen</h1>
                <form action="" method="post">
                    <div class="mt-5 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">No. Surat Tugas </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" require />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">NIP Pegawai </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Nama Pegawai </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Lokasi </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-2/6">
                            <label for="date" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Berangkat </label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="date" id="date" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                        <div class="md:w-2/6 pl-5">
                            <label for="date" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Kembali </label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="date" id="date" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Kategori Dinas </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Transportasi </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Keterangan </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Penanggung Jawab Cetak </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                        </div>
                    </div>
                    <div class="flex float-right mb-10">
                        <button type="button" onclick="window.location.href = '#';" class="text-white bg-slate-500 hover:bg-slate-600 font-medium rounded-lg text-xs px-10 py-3 me-2 mb-2">Kembali</button>
                        <button type="button" onclick="window.location.href = 'buatspt.php';" class="text-white bg-emerald-600 hover:bg-emerald-700 font-medium rounded-lg text-sm w-full px-20 py-3 me-2 mb-2">Cetak Dokumen</button>
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