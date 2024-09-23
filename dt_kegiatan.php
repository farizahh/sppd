<?php
include 'koneksi.php'
?>

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
                            <a href="dt_kegiatan.php" class="flex items-center p-2 text-black rounded-lg hover:bg-[#D6F170] hover:text-black group active">
                                <i class="fa-solid fa-file-circle-plus w-5 h-5 text-black transition duration-75 group-hover:text-black"></i>
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
                                <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" />
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
                                <label for="hotelNights" class="block text-sm font-medium text-[#102E48] mt-2">Lama Menginap</label>
                            </div>
                            <div class="md:w-5/6">
                                <input type="number" id="hotelNights" name="lamaMenginap" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan lama menginap" required oninput="calculateTotal()" />
                            </div>
                        </div>

                        <!-- Harga Hotel Per Malam -->
                        <div class="mt-3 mb-6 flex">
                            <div class="md:w-1/6">
                                <label for="hotelPrice" class="block text-sm font-medium text-[#102E48] mt-2">Harga Hotel Per Malam</label>
                            </div>
                            <div class="md:w-5/6">
                                <input type="number" id="hotelPrice" name="hargaHotel" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" placeholder="Masukkan harga hotel per malam" required oninput="calculateTotal()" />
                            </div>
                        </div>

                        <!-- Transportasi -->
                        <div class="mt-3 mb-6 flex">
                            <div class="md:w-1/6">
                                <label for="transportasi" class="block text-sm font-medium text-[#102E48] mt-2">Transportasi</label>
                            </div>
                            <div class="md:w-5/6">
                                <select id="transportasi" name="transportasi[]" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" onchange="showMainTransportFields()">
                                    <option value="">Pilih Transportasi</option>
                                    <option value="pesawat">Pesawat</option>
                                    <option value="taksi">Taksi</option>
                                    <option value="oneWay">One Way</option>
                                    <option value="sewaKendaraan">Sewa Kendaraan</option>
                                </select>
                            </div>
                        </div>

                        <div id="inputPesawat" class="hidden">
                            <div class="mt-3 mb-6 flex flex-wrap">
                                <div class="md:w-1/6">
                                    <label for="kelasPenerbangan" class="block text-sm font-medium text-[#102E48] mt-2">Kelas Penerbangan</label>
                                </div>
                                <div class="md:w-5/6">
                                    <select id="kelasPenerbangan" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="bisnis">Bisnis</option>
                                        <option value="first">First Class</option>
                                    </select>
                                </div>
                                <br><br>
                                <div class="md:w-1/6">
                                    <label for="hargaTiketPesawat" class="block text-sm font-medium text-[#102E48] mt-2">Harga Tiket</label>
                                </div>
                                <div class="md:w-5/6">
                                    <input type="number" id="hargaTiketPesawat" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                </div>
                            </div>
                        </div>

                        <div class="hidden" id="inputTaksi">
                            <div class="mt-3 mb-6 flex">
                                <div class="md:w-1/6">
                                    <label for="hargaTaksi" class="block text-sm font-medium text-[#102E48] mt-2">Harga Taksi:</label>
                                </div>
                                <div class="md:w-5/6">
                                    <input type="number" id="hargaTaksi" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                </div>
                            </div>
                        </div>

                        <div class="hidden" id="inputOneway">
                            <div class="mt-3 mb-6 flex">
                                <div class="md:w-1/6">
                                    <label for="hargaOneway" class="block text-sm font-medium text-[#102E48] mt-2">Harga One Way:</label>
                                </div>
                                <div class="md:w-5/6">
                                    <input type="number" id="hargaOneway" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                </div>
                            </div>
                        </div>

                        <div class="hidden" id="inputSewa">
                            <div class="mt-3 mb-6 flex">
                                <div class="md:w-1/6">
                                    <label for="hargaSewa" class="block text-sm font-medium text-[#102E48] mt-2">Harga Sewa Kendaraan</label>
                                </div>
                                <div class="md:w-5/6">
                                    <input type="number" id="hargaSewa" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2">
                                </div>
                            </div>
                        </div>

                        <div id="mainTransportDetails" class="details mb-4"></div>
                        <div id="transportContainer"></div>

                        <div class="mt-3 mb-6">
                            <button type="button" class="px-4 py-2 bg-blue-500 text-sm text-white rounded-lg" onclick="addTransportField()">Tambah Transportasi</button>
                        </div>

                        <!-- Total -->
                        <div class="mt-3 mb-6 flex">
                            <div class="md:w-1/6">
                                <label for="totalCost" class="block text-sm font-medium text-[#102E48] mt-2">Total Biaya</label>
                            </div>
                            <div class="md:w-5/6">
                                <input type="text" id="totalCost" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2" disabled />
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
                        <div class="mt-3 mb-14 flex float-right">
                            <button type="submit" class="px-8 py-2 bg-green-500 text-white text-sm rounded-lg mr-3">Submit</button>
                            <a href="dt_pegawai.php" class="inline-block px-8 py-2 font-semibold text-sm text-gray-800 transition duration-200 bg-white border border-gray-300 rounded-lg shadow-md hover:bg-gray-100 focus:ring focus:outline-none">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="footer">
            <?php include "footer.php"; ?>
        </section>

        <script>
            function calculateTotal() {
                // Ambil nilai dari input hotel
                const hotelPrice = parseFloat(document.getElementById("hotelPrice").value) || 0;
                const hotelNights = parseInt(document.getElementById("hotelNights").value) || 0;

                // Hitung total biaya hotel
                const totalHotel = hotelPrice * hotelNights;

                // Ambil harga transportasi
                const pilihanTransportasi = document.getElementById('transportasi').value;
                let totalTransport = 0;

                if (pilihanTransportasi === "pesawat") {
                    const hargaTiketPesawat = parseFloat(document.getElementById('hargaTiketPesawat').value) || 0;
                    totalTransport = hargaTiketPesawat;
                } else if (pilihanTransportasi === "taksi") {
                    const hargaTaksi = parseFloat(document.getElementById('hargaTaksi').value) || 0;
                    totalTransport = hargaTaksi;
                } else if (pilihanTransportasi === "oneWay") {
                    const hargaOneway = parseFloat(document.getElementById('hargaOneway').value) || 0;
                    totalTransport = hargaOneway;
                } else if (pilihanTransportasi === "sewaKendaraan") {
                    const hargaSewa = parseFloat(document.getElementById('hargaSewa').value) || 0;
                    totalTransport = hargaSewa;
                }

                // Total keseluruhan biaya hotel dan transport
                const total = totalHotel + totalTransport;

                // Tampilkan total dalam format IDR
                document.getElementById("totalCost").value = total.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });
            }

            // Tambahkan event listener untuk input
            document.getElementById('hotelNights').addEventListener('input', calculateTotal);
            document.getElementById('hotelPrice').addEventListener('input', calculateTotal);
            document.getElementById('transportasi').addEventListener('change', function() {
                const pilihanTransportasi = this.value;

                // Sembunyikan semua input transportasi
                document.getElementById('inputPesawat').style.display = 'none';
                document.getElementById('inputTaksi').style.display = 'none';
                document.getElementById('inputOneway').style.display = 'none';
                document.getElementById('inputSewa').style.display = 'none';

                // Tampilkan input yang sesuai
                if (pilihanTransportasi === "pesawat") {
                    document.getElementById('inputPesawat').style.display = 'block';
                } else if (pilihanTransportasi === "taksi") {
                    document.getElementById('inputTaksi').style.display = 'block';
                } else if (pilihanTransportasi === "oneWay") {
                    document.getElementById('inputOneway').style.display = 'block';
                } else if (pilihanTransportasi === "sewaKendaraan") {
                    document.getElementById('inputSewa').style.display = 'block';
                }

                calculateTotal(); // Hitung total saat transportasi berubah
            });

            // Tambahkan event listener untuk harga tiket, harga taksi, harga oneway, dan harga sewa
            document.getElementById('hargaTiketPesawat').addEventListener('input', calculateTotal);
            document.getElementById('hargaTaksi').addEventListener('input', calculateTotal);
            document.getElementById('hargaOneway').addEventListener('input', calculateTotal);
            document.getElementById('hargaSewa').addEventListener('input', calculateTotal);

            // Di dalam fungsi calculateTotal, setelah mendeklarasikan variabel hargaTiketPesawat
            const kelasPenerbangan = document.getElementById('kelasPenerbangan').value;

            const hargaTiketPesawat = (parseFloat(document.getElementById('hargaTiketPesawat').value) || 0) + adjustment;

            function addTransportField() {
                var transportContainer = document.getElementById("transportContainer");
                var transportWrapper = document.createElement("div");

                var transportSelectWrapper = document.createElement("div");
                transportSelectWrapper.className = "flex mb-2";

                var transportSelectLabel = document.createElement("div");
                transportSelectLabel.textContent = "Pilih Transportasi:";
                transportSelectLabel.className = "md:w-1/6 block text-sm font-medium text-[#102E48] mt-2";

                var transportSelect = document.createElement("select");
                transportSelect.name = "transportasi[]";
                transportSelect.className = "md:w-5/6 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2";

                // Options for transportation selection
                var options = [{
                        value: "",
                        text: "Pilih Transportasi"
                    },
                    {
                        value: "pesawat",
                        text: "Pesawat"
                    },
                    {
                        value: "taksi",
                        text: "Taksi"
                    },
                    {
                        value: "oneWay",
                        text: "One Way"
                    },
                    {
                        value: "sewaKendaraan",
                        text: "Sewa Kendaraan"
                    }
                ];

                options.forEach(function(option) {
                    var opt = document.createElement("option");
                    opt.value = option.value;
                    opt.textContent = option.text;
                    transportSelect.appendChild(opt);
                });

                // Div for transport details
                var detailsDiv = document.createElement("div");
                detailsDiv.className = "details";

                // Change event for transport selection
                transportSelect.addEventListener("change", function() {
                    // Clear previous details
                    while (transportWrapper.lastChild && transportWrapper.lastChild !== transportSelectWrapper) {
                        transportWrapper.removeChild(transportWrapper.lastChild);
                    }

                    transportWrapper.appendChild(detailsDiv);
                    showAdditionalFields(this, detailsDiv);
                });

                transportSelectWrapper.appendChild(transportSelectLabel);
                transportSelectWrapper.appendChild(transportSelect);
                transportWrapper.appendChild(transportSelectWrapper);
                transportContainer.appendChild(transportWrapper);
            }

            document.getElementById("tambahTransportasiButton").addEventListener("click", addTransportField);

            function showAdditionalFields(select, detailsDiv) {
                detailsDiv.innerHTML = ""; // Clear previous content

                if (select.value === "pesawat") {
                    createAirlineClassField(detailsDiv);
                    createInputField(detailsDiv, "Harga Tiket:", "hargaPesawat[]", "number", true);
                } else if (select.value === "taksi") {
                    createInputField(detailsDiv, "Tarif Taksi per KM:", "hargaTaksi[]", "number", true);
                } else if (select.value === "oneWay") {
                    createInputField(detailsDiv, "Harga One Way:", "hargaOneWay[]", "number", true);
                } else if (select.value === "sewaKendaraan") {
                    createInputField(detailsDiv, "Tipe Kendaraan:", "tipeKendaraan[]", "text");
                    createInputField(detailsDiv, "Harga Sewa:", "hargaSewa[]", "number", true);
                }

                // Recalculate total on input change
                detailsDiv.addEventListener('input', calculateTotal);
            }

            function showMainTransportFields() {
                const pilihanTransportasi = document.getElementById('transportasi').value;

                // Sembunyikan semua input transportasi
                document.getElementById('inputPesawat').classList.add('hidden');
                document.getElementById('inputPesawatHarga').classList.add('hidden');
                document.getElementById('inputTaksi').classList.add('hidden');
                document.getElementById('inputOneway').classList.add('hidden');
                document.getElementById('inputSewa').classList.add('hidden');

                // Tampilkan input yang sesuai
                if (pilihanTransportasi === "pesawat") {
                    document.getElementById('inputPesawat').classList.remove('hidden');
                    document.getElementById('inputPesawat').classList.add('flex'); // Pastikan flex ditambahkan
                    document.getElementById('inputPesawatHarga').classList.remove('hidden');
                    document.getElementById('inputPesawatHarga').classList.add('flex'); // Pastikan flex ditambahkan
                } else if (pilihanTransportasi === "taksi") {
                    document.getElementById('inputTaksi').classList.remove('hidden');
                    document.getElementById('inputTaksi').classList.add('flex');
                } else if (pilihanTransportasi === "oneWay") {
                    document.getElementById('inputOneway').classList.remove('hidden');
                    document.getElementById('inputOneway').classList.add('flex');
                } else if (pilihanTransportasi === "sewaKendaraan") {
                    document.getElementById('inputSewa').classList.remove('hidden');
                    document.getElementById('inputSewa').classList.add('flex');
                }
            }

            function createInputField(parentDiv, labelText, inputName, inputType, isRequired = false) {
                var inputWrapper = document.createElement("div");
                inputWrapper.className = "flex mb-2";

                var labelDiv = document.createElement("div");
                labelDiv.className = "md:w-1/6 block text-sm font-medium text-[#102E48] mt-2";
                labelDiv.textContent = labelText;

                var inputDiv = document.createElement("div");
                inputDiv.className = "md:w-5/6";

                var inputField = document.createElement("input");
                inputField.type = inputType;
                inputField.name = inputName;
                inputField.value = ""; // Set default value kosong
                inputField.className = "bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2";

                if (isRequired) {
                    inputField.required = true;
                }

                inputDiv.appendChild(inputField);
                inputWrapper.appendChild(labelDiv);
                inputWrapper.appendChild(inputDiv);
                parentDiv.appendChild(inputWrapper);
            }

            function createAirlineClassField(parentDiv) {
                var classLabelWrapper = document.createElement("div");
                classLabelWrapper.className = "flex mb-2";

                var classLabel = document.createElement("div");
                classLabel.textContent = "Kelas Penerbangan:";
                classLabel.className = "md:w-1/6 block text-sm font-medium text-[#102E48] mt-2";

                var classSelect = document.createElement("select");
                classSelect.name = "kelasPenerbangan[]";
                classSelect.className = "md:w-5/6 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2";

                var classOptions = [{
                        value: "bisnis",
                        text: "Bisnis"
                    },
                    {
                        value: "ekonomi",
                        text: "Ekonomi"
                    },
                    {
                        value: "firstClass",
                        text: "First Class"
                    }
                ];

                classOptions.forEach(function(option) {
                    var opt = document.createElement("option");
                    opt.value = option.value;
                    opt.textContent = option.text;
                    classSelect.appendChild(opt);
                });

                classLabelWrapper.appendChild(classLabel);
                classLabelWrapper.appendChild(classSelect);
                parentDiv.appendChild(classLabelWrapper);
            }
        </script>
</body>

</html>