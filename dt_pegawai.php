
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
                        <a href="dt_pegawai.php" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 group-hover:text-black"></i>
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
                        <a href="s_cetak.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-print w-5 h-5 text-gray-500 transition duration-75 group-hover:text-black"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Cetak Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <h1 class="bg-gradient-to-r from-sky-900 to-sky-700 text-white font-medium text-md px-5 py-3 rounded-xl">Data Anggota</h1>
        <form action="" method="post">
            <div class="mt-5 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="nip" class="block text-sm font-medium text-[#102E48] mt-2">NIP Pegawai </label>
                </div>
                <div class="md:w-5/6">
                    <select id="nip" name="nip" class="bg-white border border-gray-400 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2 placeholder-gray-300" required>
                        <option value="" selected disabled>- Pilih NIP -</option>
                        <?php include "koneksi.php";
                        $query = "SELECT * FROM pegawai";
                        $result = $koneksi->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["nip"] . "'>" . $row["nip"] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="nama" class="block text-sm font-medium text-[#102E48] mt-2">Nama Pegawai </label>
                </div>
                <div class="md:w-5/6">
                    <input type="text" id="nama" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                </div>
            </div>
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="pangkat" class="block text-sm font-medium text-[#102E48] mt-2">Pangkat / Gol Pegawai </label>
                </div>
                <div class="md:w-5/6">
                    <input type="text" id="pangkat" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                </div>
            </div>
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="jabatan" class="block text-sm font-medium text-[#102E48] mt-2">Jabatan Pegawai </label>
                </div>
                <div class="md:w-5/6">
                    <input type="text" id="jabatan" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
                </div>
            </div>
            <div class="flex float-right mb-10">
                        <button type="button" onclick="window.location.href = 'buatspt.php';" class="text-white bg-slate-500 hover:bg-slate-600 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Kembali</button>
                        <button type="button" id="saveButton" class="text-white bg-sky-600 hover:bg-sky-700 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Simpan</button>
            </div>
        </form>
    </div>
</div>

                    <div class="mb-10">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        NIP Pegawai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Pegawai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pangkat/Golongan Pegawai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jabatan Pegawai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="pegawaiTableBody">
                    <!-- Table rows will be appended here -->
                </tbody>
                        </table>
                    </div>
                    <div class="mb-10">
                        <button type="button" onclick="window.location.href = 'dt_kegiatan.php';" class="text-white bg-emerald-600 hover:bg-emerald-700 font-medium rounded-lg text-sm w-full px-20 py-2 me-2 mb-2">Tahap Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>



    </section>
    <section id="footer">
        <?php include "footer.php"; ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function () {
    $('#nip').change(function () {
        var nip = $(this).val();
        if (nip) {
            $.ajax({
                url: 'get_pegawai.php',
                type: 'POST',
                data: { nip: nip },
                success: function (response) {
                    var data = JSON.parse(response);
                    $('#nama').val(data.nama);
                    $('#pangkat').val(data.pangkat);
                    $('#jabatan').val(data.jabatan);
                }
            });
        } else {
            $('#nama').val('');
            $('#pangkat').val('');
            $('#jabatan').val('');
        }
    });

    $('#saveButton').click(function () {
        var nip = $('#nip').val();
        var nama = $('#nama').val(); // Changed from '#name' to '#nama'
        var pangkat = $('#pangkat').val();
        var jabatan = $('#jabatan').val();

        if (nip && nama && pangkat && jabatan) {
            var newRow = '<tr>' +
                '<td class="px-6 py-3 text-center"></td>' +
                '<td class="px-6 py-3 text-center">' + nip + '</td>' +
                '<td class="px-6 py-3 text-center">' + nama + '</td>' + // Changed from 'name' to 'nama'
                '<td class="px-6 py-3 text-center">' + pangkat + '</td>' +
                '<td class="px-6 py-3 text-center">' + jabatan + '</td>' +
                '<td class="px-6 py-3 text-center">' +
                '<button class="text-red-600 hover:text-red-900" onclick="deleteRow(this)">Delete</button>' +
                '</td>' +
                '</tr>';
            $('#pegawaiTableBody').append(newRow);
            updateRowNumbers();
        } else {
            alert("Lengkapi semua data sebelum menyimpan.");
        }
    });
});

function deleteRow(button) {
    $(button).closest('tr').remove();
    updateRowNumbers();
}

function updateRowNumbers() {
    $('#pegawaiTableBody tr').each(function (index) {
        $(this).find('td:first').text(index + 1);
    });
}
    </script>
</body>

</html>