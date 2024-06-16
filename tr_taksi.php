<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TR - Taksi</title>
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
                                <button type="button" class="flex items-center p-2 text-[#D6F170] rounded-lg hover:bg-[#D6F170] hover:text-black group" aria-controls="dropdown-tr" data-collapse-toggle="dropdown-tr">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-black transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                    <span class="text-black text-sm ms-3 whitespace-nowrap pr-5">Biaya Transportasi</span>
                                    <i class="fa-solid fa-angle-right w-3 h-3 text-black transition duration-75 group-hover:text-black dark:group-hover:text-white"></i>
                                </button>
                                <ul id="dropdown-tr" class="py-2 space-y-2 text-sm">
                                    <li>
                                        <a href="tr_pesawat.php" class="flex items-center w-full text-gray-600 transition duration-75 p-2 rounded-lg pl-14 hover:text-black">Pesawat</a>
                                    </li>
                                    <li>
                                        <a href="tr_taksi.php" class="flex items-center w-full text-black transition duration-75 p-2 rounded-lg pl-14">Taksi</a>
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
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-600 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Uang Representasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="cetak.php" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-print w-5 h-5 text-gray-600 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
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
                <h1 class="text-[#23212F] font-semibold text-2xl">Laporan</h1>
                <div class="border-solid">
                    <div class="bg-[#193D5E] rounded-t-xl mt-4 p-4">
                        <h1 class="text-white text-md font-semibold">Data Laporan : Biaya Transportasi : Taksi</h1>
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
                                <!-- Modal toggle -->
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="focus:outline-none text-white bg-[#388E60] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-2 me-2 mb-2" type="button">
                                    + Tambah
                                </button>

                                <!-- Main modal -->
                                <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-[#F3F3F3] rounded-2xl shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:py-2 md:px-4 rounded-t-xl bg-gradient-to-r from-sky-900 to-sky-700">
                                                <h3 class="text-md font-normal text-white">
                                                    Biaya Transportasi : Taksi
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form class="space-y-4" action="#">
                                                    <div class="mt-5 mb-6 flex">
                                                        <div class="md:w-1/6">
                                                            <label for="number" class="block text-sm font-medium text-[#102E48] mt-2">No. Surat Tugas </label>
                                                        </div>
                                                        <div class="md:w-5/6">
                                                            <input type="number" id="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" required />
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="number" class="block text-sm font-medium text-[#102E48] mt-2">NIP Pegawai </label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <input type="number" id="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                                                        </div>
                                                        <div class="md:w-2/6 ml-3">
                                                            <label for="name" class="block text-sm font-medium text-[#102E48] mt-2">Nama Pegawai </label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <input type="name" id="name" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="text" class="block text-sm font-medium text-[#102E48] mt-2">Pangkat/Gol Pegawai </label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <input type="number" id="number" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                                                        </div>
                                                        <div class="md:w-2/6 ml-3">
                                                            <label for="text" class="block text-sm font-medium text-[#102E48] mt-2">Jabatan Pegawai </label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <input type="number" id="number" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="date" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Awal </label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <input type="date" id="date" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                                                        </div>
                                                        <div class="md:w-2/6 ml-3">
                                                            <label for="date" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Akhir </label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <input type="date" id="date" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mb-6 flex">
                                                        <div class="md:w-2/6">
                                                            <label for="text" class="block text-sm font-medium text-[#102E48] mt-2">Provinsi</label>
                                                        </div>
                                                        <div class="md:w-4/6">
                                                            <select id="prv" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2 placeholder-gray-300">
                                                                <option selected>- Pilih Jenis Jabatan -</option>
                                                                <option value="US">United States</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="FR">France</option>
                                                                <option value="DE">Germany</option>
                                                            </select>
                                                        </div>
                                                        <div class="md:w-2/6 ml-3">
                                                            <label for="text" class="block text-sm font-medium text-[#102E48] mt-2">Satuan </label>
                                                        </div>
                                                        <div class="md:w-4/6 flex">
                                                            <input type="text" id="text" class="bg-hite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                                                            <p class="pl-1 pt-2 text-sm font-medium text-[#102E48]">orang/kali</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 mb-6 flex">
                                                        <div class="md:w-1/6">
                                                            <label for="number" class="block text-sm font-medium text-[#102E48] mt-2">Biaya</label>
                                                        </div>
                                                        <div class="md:w-5/6">
                                                            <input type="number" id="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                                <button data-modal-hide="default-modal" type="button" class="text-white bg-slate-500 hover:bg-slate-600 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Kembali</button>
                                                <button data-modal-hide="default-modal" type="button" class="text-white bg-sky-600 hover:bg-sky-700 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-x-auto shadow-lg sm:rounded-lg mt-3">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            No. SPT
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Pegawai
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Kategori
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Biaya
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                                        <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </th>
                                        <td class="px-3 py-4">
                                            2222.2/2161/333.45
                                        </td>
                                        <td class="px-3 py-4 text-left">
                                            Ersy Genius Nagari
                                        </td>
                                        <td class="px-3 py-4 ">
                                            Ekonomi
                                        </td>
                                        <td class="px-3 py-4">
                                            110.000
                                        </td>
                                        <td class="px-3 py-4 text-center">
                                            <a href="#" class="font-medium bg-amber-400 hover:bg-amber-500 text-black p-2 rounded-md text-xs mr-2 text-center">
                                                <i class="fa-solid fa-file-circle-check"></i>
                                            </a>
                                            <a href="#" class="font-medium bg-[#ff0000] hover:bg-red-800 text-[#ffdead] p-2 rounded-md text-xs">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b hover:bg-gray-50 text-center">
                                        <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            2
                                        </th>
                                        <td class="px-3 py-4">
                                            2222.2/2161/333.45
                                        </td>
                                        <td class="px-3 py-4 text-left">
                                            Farizah Farhana
                                        </td>
                                        <td class="px-3 py-4">
                                            Ekonomi
                                        </td>
                                        <td class="px-3 py-4">
                                            110.000
                                        </td>
                                        <td class="px-3 py-4 text-center">
                                            <a href="#" class="font-medium bg-amber-400 hover:bg-amber-500 text-black p-2 rounded-md text-xs mr-2">
                                                <i class="fa-solid fa-file-circle-check"></i>
                                            </a>
                                            <a href="#" class="font-medium bg-[#ff0000] hover:bg-red-800 text-[#ffdead] p-2 rounded-md text-xs">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b hover:bg-gray-50 text-center">
                                        <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            3
                                        </th>
                                        <td class="px-3 py-4">
                                            2222.2/2161/333.45
                                        </td>
                                        <td class="px-3 py-4 text-left">
                                            Kesya Sakha
                                        </td>
                                        <td class="px-3 py-4">
                                            Ekonomi
                                        </td>
                                        <td class="px-3 py-4">
                                            110.000
                                        </td>
                                        <td class="px-3 py-4 text-center">
                                            <a href="#" class="font-medium bg-amber-400 hover:bg-amber-500 text-black p-2 rounded-md text-xs mr-2">
                                                <i class="fa-solid fa-file-circle-check"></i>
                                            </a>
                                            <a href="#" class="font-medium bg-[#ff0000] hover:bg-red-800 text-[#ffdead] p-2 rounded-md text-xs">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                            <span class="text-xs font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span></span>
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
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800">3</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
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