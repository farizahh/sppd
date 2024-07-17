

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
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Data Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="dt_kegiatan.php" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                            <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Data Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="s_cetak.php" class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-[#D6F170] hover:text-black group">
                            <i class="fa-solid fa-print w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap text-sm">Cetak Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

          <div class="p-4 sm:ml-64">
            <div class="p-4 mt-14">
                <h1 class="bg-gradient-to-r from-sky-900 to-sky-700 text-white font-medium text-md px-5 py-3 rounded-xl">Data Kegiatan</h1>
                <form action="" method="post">
                    <div class="mt-5 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="kode_provinsi" class="block text-sm font-medium text-[#102E48] mt-2">Provinsi </label>
                        </div>
                        <div class="md:w-5/6">
                            <select id="kode_provinsi" name="kode_provinsi" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2 placeholder-gray-900" required>
                                <option selected disabled>- Pilih Provinsi -</option>
                                <?php
                                include "koneksi.php";
                                $query = "SELECT * FROM provinsi";
                                $result = $koneksi->query($query);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row["kode_provinsi"] . "'>" . $row["nama_provinsi"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="kota" class="block text-sm font-medium text-[#102E48] mt-2">Kota/Kabupaten</label>
                        </div>
                        <div class="md:w-5/6">
                        <select id="kota" name="kota" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2 placeholder-gray-900" required>
                                <option selected disabled>- Pilih Kota/Kabupaten -</option>
                                <?php
                                include "koneksi.php";
                                $query = "SELECT * FROM kota";
                                $result = $koneksi->query($query);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                         echo "<option value='" .
                                            $row["kode_kota"] .
                                            "'>" .
                                            $row["nama_kota"] .
                                            "</option>";
                                    }
                                }
                                ?>
                            </select>
                            </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="lokasi" class="block text-sm font-medium text-[#102E48] mt-2">Lokasi </label>
                        </div>
                        <div class="md:w-5/6">
                            <input type="text" id="lokasi" name="lokasi" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-2/6">
                            <label for="tanggal_berangkat" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Berangkat </label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="date" id="tanggal_berangkat" name="tanggal_berangkat" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                        </div>
                        <div class="md:w-2/6 ml-3">
                            <label for="tanggal_kembali" class="block text-sm font-medium text-[#102E48] mt-2">Tanggal Kembali </label>
                        </div>
                        <div class="md:w-4/6">
                            <input type="date" id="tanggal_kembali" name="tanggal_kembali" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                        <div class="md:w-1/6">
                            <label for="kategori_dinas" class="block text-sm font-medium text-[#102E48] mt-2">Kategori Dinas </label>
                        </div>
                        <div class="md:w-5/6">
                        <select id="kategori_dinas" name="kategori_dinas" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                <option selected disabled>- Pilih Kategori Dinas -</option>
                                <option value="Perjalanan dinas dalam negeri">Perjalanan Dinas Dalam Negeri</option>
                                <option value="Kegiatan rapat">Kegiatan Rapat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="hotel_name" class="block text-sm font-medium text-[#102E48] mt-2">Nama Hotel</label>
                </div>
                <div class="md:w-5/6">
                    <input type="text" id="hotel_name" name="hotel_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan nama hotel" />
                </div>
            </div>

            <!-- Lama Menginap -->
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="hotel_days" class="block text-sm font-medium text-[#102E48] mt-2">Lama Menginap</label>
                </div>
                <div class="md:w-5/6">
                    <input type="number" id="hotel_days" name="hotel_days" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan lama menginap" onchange="calculateTotal()" />
                </div>
            </div>

            <!-- Harga Hotel Per Malam -->
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="hotel_price" class="block text-sm font-medium text-[#102E48] mt-2">Harga Hotel Per Malam</label>
                </div>
                <div class="md:w-5/6">
                    <input type="number" id="hotel_price" name="hotel_price" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan harga hotel per malam" onchange="calculateTotal()" />
                </div>
            </div>

            <!-- Transportasi -->
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="transportasi" class="block text-sm font-medium text-[#102E48] mt-2">Transportasi</label>
                </div>
                <div class="md:w-5/6">
                    <select id="transportasi" name="transportasi" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" onchange="showTransportOptions(this)">
                        <option value="">Pilih Transportasi</option>
                        <option value="pesawat">Pesawat</option>
                        <option value="taksi">Taksi</option>
                        <option value="oneway">Oneway</option>
                        <option value="sewa_kendaraan">Sewa Kendaraan</option>
                    </select>
                </div>
            </div>

            <!-- Opsi Pesawat -->
            <div id="pesawat_options" class="hidden">
                <div class="mt-3 mb-6 flex">
                    <div class="md:w-1/6">
                        <label for="pesawat_kelas" class="block text-sm font-medium text-[#102E48] mt-2">Kelas Pesawat</label>
                    </div>
                    <div class="md:w-5/6">
                        <select id="pesawat_kelas" name="pesawat_kelas" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                            <option value="">Pilih Kelas</option>
                            <option value="ekonomi">Ekonomi</option>
                            <option value="bisnis">Bisnis</option>
                            <option value="first_class">First Class</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3 mb-6 flex">
                    <div class="md:w-1/6">
                        <label for="pesawat_harga" class="block text-sm font-medium text-[#102E48] mt-2">Harga Tiket Pesawat</label>
                    </div>
                    <div class="md:w-5/6">
                        <input type="number" id="pesawat_harga" name="pesawat_harga" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan harga tiket pesawat" onchange="calculateTotal()" />
                    </div>
                </div>
            </div>

            <!-- Opsi Taksi -->
            <div id="taksi_options" class="hidden">
                <div class="mt-3 mb-6 flex">
                    <div class="md:w-1/6">
                        <label for="taksi_harga" class="block text-sm font-medium text-[#102E48] mt-2">Biaya Taksi</label>
                    </div>
                    <div class="md:w-5/6">
                        <input type="number" id="taksi_harga" name="taksi_harga" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan biaya taksi" onchange="calculateTotal()" />
                    </div>
                </div>
            </div>

            <!-- Opsi Oneway -->
            <div id="oneway_options" class="hidden">
                <div class="mt-3 mb-6 flex">
                    <div class="md:w-1/6">
                        <label for="oneway_harga" class="block text-sm font-medium text-[#102E48] mt-2">Biaya Oneway</label>
                    </div>
                    <div class="md:w-5/6">
                        <input type="number" id="oneway_harga" name="oneway_harga" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan biaya oneway" onchange="calculateTotal()" />
                    </div>
                </div>
            </div>

            <!-- Opsi Sewa Kendaraan -->
            <div id="sewa_kendaraan_options" class="hidden">
                <div class="mt-3 mb-6 flex">
                    <div class="md:w-1/6">
                        <label for="sewa_kendaraan_harga" class="block text-sm font-medium text-[#102E48] mt-2">Biaya Sewa Kendaraan</label>
                    </div>
                    <div class="md:w-5/6">
                        <input type="number" id="sewa_kendaraan_harga" name="sewa_kendaraan_harga" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan biaya sewa kendaraan" onchange="calculateTotal()" />
                    </div>
                </div>
            </div>

            <!-- Transportasi Tambahan -->
            <div id="additional_transportation"></div>

            <!-- Tambah Transportasi -->
            <div class="mt-3 mb-6">
                <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg" onclick="addTransportasi()">Tambah Transportasi</button>
            </div>

            <!-- Total -->
            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="total" class="block text-sm font-medium text-[#102E48] mt-2">Total</label>
                </div>
                <div class="md:w-5/6">
                    <input type="text" id="total_display" name="total_display" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" readonly />
                    <input type="hidden" id="total" name="total" />
                </div>
            </div>


            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="keterangan" class="block text-sm font-medium text-[#102E48] mt-2">Keterangan </label>
                </div>
                <div class="md:w-5/6">
                    <input type="text" id="keterangan" name="keterangan" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
                </div>
            </div>

            <div class="mt-3 mb-6 flex">
                <div class="md:w-1/6">
                    <label for="penanggung_jawab" class="block text-sm font-medium text-[#102E48] mt-2">Penanggung Jawab </label>
                </div>
                <div class="md:w-5/6">
                    <select id="penanggung_jawab" name="penanggung_jawab" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                        <option selected disabled>- Pilih Penanggung Jawab -</option>
                        <option value="kesya_sakha">Farizah Farhana</option>
                        <option value="ersy_genius">Ersy Genius</option>
                    </select>
                </div>
            </div>

            <!-- Submit -->
            <div class="mt-3 mb-6">
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg">Submit</button>
                <a href="index.html" class="inline-block px-6 py-3 font-semibold text-gray-800 transition duration-200 bg-white border border-gray-300 rounded-lg shadow-md hover:bg-gray-100 focus:ring focus:outline-none">Kembali</a>
            </div>
        </form>
    </div>
    <script>
 function calculateTotal() {
    const hotelDays = parseFloat(document.getElementById('hotel_days').value) || 0;
    const hotelPrice = parseFloat(document.getElementById('hotel_price').value) || 0;

    const pesawatPrice = parseFloat(document.getElementById('pesawat_harga').value) || 0;
    const taksiPrice = parseFloat(document.getElementById('taksi_harga').value) || 0;
    const onewayPrice = parseFloat(document.getElementById('oneway_harga').value) || 0;
    const sewaKendaraanPrice = parseFloat(document.getElementById('sewa_kendaraan_harga').value) || 0;

    const additionalTransportations = document.querySelectorAll('[name^="additional_transport_price_"]');
    let additionalTotal = 0;
    additionalTransportations.forEach(input => {
        additionalTotal += parseFloat(input.value) || 0;
    });

    const total = (hotelDays * hotelPrice) + pesawatPrice + taksiPrice + onewayPrice + sewaKendaraanPrice + additionalTotal;
    document.getElementById('total').value = total;
    document.getElementById('total_display').value = total.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
}

function showTransportOptions(select) {
    const transportasi = select.value;
    const options = {
        pesawat: 'pesawat_options',
        taksi: 'taksi_options',
        oneway: 'oneway_options',
        sewa_kendaraan: 'sewa_kendaraan_options'
    };

    for (let key in options) {
        document.getElementById(options[key]).classList.add('hidden');
    }

    if (options[transportasi]) {
        document.getElementById(options[transportasi]).classList.remove('hidden');
    }
}

function addTransportasi() {
    const container = document.getElementById('additional_transportation');

    const div = document.createElement('div');
    div.classList.add('mt-3', 'mb-6', 'flex');

    const label = document.createElement('div');
    label.classList.add('md:w-1/6');
    const labelElement = document.createElement('label');
    labelElement.classList.add('block', 'text-sm', 'font-medium', 'text-[#102E48]', 'mt-2');
    labelElement.innerText = 'Pilih Transportasi';
    label.appendChild(labelElement);

    const inputContainer = document.createElement('div');
    inputContainer.classList.add('md:w-5/6');

    const select = document.createElement('select');
    select.name = 'additional_transport';
    select.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-900', 'text-sm', 'rounded-lg', 'focus:ring-blue-500', 'focus:border-blue-500', 'w-full', 'p-2');
    select.onchange = function() {
        showAdditionalTransportOptions(select, div);
    };
    const optionDefault = document.createElement('option');
    optionDefault.value = '';
    optionDefault.innerText = 'Pilih Transportasi';
    select.appendChild(optionDefault);

    const optionPesawat = document.createElement('option');
    optionPesawat.value = 'pesawat';
    optionPesawat.innerText = 'Pesawat';
    select.appendChild(optionPesawat);

    const optionTaksi = document.createElement('option');
    optionTaksi.value = 'taksi';
    optionTaksi.innerText = 'Taksi';
    select.appendChild(optionTaksi);

    const optionOneway = document.createElement('option');
    optionOneway.value = 'oneway';
    optionOneway.innerText = 'Oneway';
    select.appendChild(optionOneway);

    const optionSewaKendaraan = document.createElement('option');
    optionSewaKendaraan.value = 'sewa_kendaraan';
    optionSewaKendaraan.innerText = 'Sewa Kendaraan';
    select.appendChild(optionSewaKendaraan);

    inputContainer.appendChild(select);
    div.appendChild(label);
    div.appendChild(inputContainer);
    container.appendChild(div);
}

function showAdditionalTransportOptions(select, containerDiv) {
    const selectedValue = select.value;

    const labelClass = document.createElement('div');
    labelClass.classList.add('md:w-1/6', 'mt-3');
    const labelElement = document.createElement('label');
    labelElement.classList.add('block', 'text-sm', 'font-medium', 'text-[#102E48]', 'mt-2');
    labelElement.innerText = 'Kelas ' + selectedValue.charAt(0).toUpperCase() + selectedValue.slice(1);
    labelClass.appendChild(labelElement);

    const classContainer = document.createElement('div');
    classContainer.classList.add('md:w-5/6', 'mt-3');

    const selectClass = document.createElement('select');
    selectClass.name = `additional_transport_class_${selectedValue}`;
    selectClass.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-900', 'text-sm', 'rounded-lg', 'focus:ring-blue-500', 'focus:border-blue-500', 'w-full', 'p-2');
    const optionDefaultClass = document.createElement('option');
    optionDefaultClass.value = '';
    optionDefaultClass.innerText = 'Pilih Kelas';
    selectClass.appendChild(optionDefaultClass);

    const optionEkonomi = document.createElement('option');
    optionEkonomi.value = 'ekonomi';
    optionEkonomi.innerText = 'Ekonomi';
    selectClass.appendChild(optionEkonomi);

    const optionBisnis = document.createElement('option');
    optionBisnis.value = 'bisnis';
    optionBisnis.innerText = 'Bisnis';
    selectClass.appendChild(optionBisnis);

    const optionFirstClass = document.createElement('option');
    optionFirstClass.value = 'first_class';
    optionFirstClass.innerText = 'First Class';
    selectClass.appendChild(optionFirstClass);

    classContainer.appendChild(selectClass);
    containerDiv.appendChild(labelClass);
    containerDiv.appendChild(classContainer);

    const inputPrice = document.createElement('input');
    inputPrice.type = 'number';
    inputPrice.name = `additional_transport_price_${selectedValue}`;
    inputPrice.placeholder = `Masukkan harga ${selectedValue}`;
    inputPrice.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-900', 'text-sm', 'rounded-lg', 'focus:ring-blue-500', 'focus:border-blue-500', 'w-full', 'p-2', 'mt-3');
    inputPrice.onchange = calculateTotal;

    containerDiv.appendChild(inputPrice);
}
    </script>
</body>
</html>