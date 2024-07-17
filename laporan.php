<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
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
                        <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black "></i>
                            <span class="ms-3 whitespace-nowrap text-sm">Buat SPT</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 group-hover:text-black"></i>
                            <span class="text-sm ms-3 whitespace-nowrap pr-28">Laporan</span>
                            <svg class="w-3 h-3 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-lp" class="hidden py-2 space-y-2 text-sm">
                            <li>
                                <a href="uh_dinas.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Uang Harian</span>
                                </a>
                            </li>
                            <li>
                                <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Biaya Transportasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Biaya Penginapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                                    <i class="fa-solid fa-file-pen w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                                    <span class="text-sm ms-3 whitespace-nowrap">Uang Representasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="buatspt.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
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
                <h1 class="text-[#23212F] font-semibold text-2xl">Laporan</h1>
                <div class="border-solid">
                    <div class="bg-[#193D5E] rounded-t-xl mt-4 p-4">
                        <h1 class="text-white text-md font-semibold">Data Laporan</h1>
                    </div>
                    <div class="shadow-lg px-5 py-3">
                        <div class="flex justify-between">
                            <div>
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
                                <button type="button" onclick="window.location.href = 'uh_rapat.php';" class="focus:outline-none text-white bg-[#388E60] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-2 me-2 mb-2">+ Tambah</button>
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
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            2222.2/2161/333.45
                                        </td>
                                        <td class="px-6 py-4">
                                            1. Ersy Genius Nagari </br>
                                            2. Farizah Farhana
                                        </td>
                                        <td class="px-6 py-4">
                                            Malang
                                        </td>
                                        <td class="px-6 py-4">
                                            05/07/2024
                                        </td>
                                        <td class="px-6 py-4">
                                            05/07/2024
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#" class="font-medium bg-[#295AA3] hover:bg-sky-900 text-white px-3 py-1 rounded-md text-xs">Lihat</a>
                                            <a href="#" class="font-medium bg-red-600 hover:bg-red-800 text-white px-3 py-1 rounded-md text-xs">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            2222.2/2161/333.45
                                        </td>
                                        <td class="px-6 py-4">
                                            1. Farizah Farhana </br>
                                            2. Kesya Sakha
                                        </td>
                                        <td class="px-6 py-4">
                                            Jakarta
                                        </td>
                                        <td class="px-6 py-4">
                                            05/07/2024
                                        </td>
                                        <td class="px-6 py-4">
                                            05/07/2024
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#" class="font-medium bg-[#295AA3] hover:bg-sky-900 text-white px-3 py-1 rounded-md text-xs">Lihat</a>
                                            <a href="#" class="font-medium bg-red-600 hover:bg-red-800 text-white px-3 py-1 rounded-md text-xs">Hapus</a>
                                        </td>
                                    </tr>
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