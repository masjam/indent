<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Indent Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #42e267ff; /* Warna latar belakang abu-abu muda */
            color: #333; /* Warna teks abu-abu gelap */
        }
        /* Sembunyikan konten tab secara default */
        .tab-content {
            display: none;
        }
        /* Tampilkan konten tab yang aktif */
        .tab-content.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Formulir Indent SPMB </h1>
            <h2 class="text-xl text-gray-600 mt-2">SD Al Mujahidin Wonosari</h2>
            <p class="text-gray-500">Silakan isi data di bawah ini dengan lengkap dan benar.</p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                <p class="font-bold">Sukses</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('indent.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-6 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px" id="myTab" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab1">1. Data Siswa</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab2">2. Alamat</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab3">3. Data Orang Tua</button>
                    </li>
                    <li role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab4">4. Data Wali</button>
                    </li>
                </ul>
            </div>

            <div id="tab-content-container">
                <div id="tab1" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tahun_ajaran" class="block text-sm font-medium text-gray-700">Tahun Ajaran</label>
                            <select id="tahun_ajaran" name="tahun_ajaran" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                                <option value="">Pilih Tahun Masuk</option>
                                <option value="2026/2027">2026/2027</option>
                                <option value="2027/2028">2027/2028</option>
                                <option value="2028/2029">2028/2029</option>
                                <option value="2029/2030">2029/2030</option>
                                <option value="2030/2031">2030/2031</option>
                            </select>
                        </div>
                        <div>
                            <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Lengkap Siswa</label>
                            <input type="text" id="nama_siswa" name="nama_siswa" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK Siswa</label>
                            <input type="text" id="nik" name="nik" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="no_kk" class="block text-sm font-medium text-gray-700">No. Kartu Keluarga (KK)</label>
                            <input type="text" id="no_kk" name="no_kk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="asal_tk" class="block text-sm font-medium text-gray-700">Asal TK/RA</label>
                            <input type="text" id="asal_tk" name="asal_tk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                            <select id="agama" name="agama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label for="foto" class="block text-sm font-medium text-gray-700">Upload Foto Siswa (3x4)</label>
                            <input type="file" id="foto" name="foto" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-end">
                        <button type="button" class="next-btn bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Selanjutnya &rarr;</button>
                    </div>
                </div>

                <div id="tab2" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap (Nama Jalan/Dusun)</label>
                            <textarea id="alamat" name="alamat" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required></textarea>
                        </div>
                        <div>
                            <label for="rt_rw" class="block text-sm font-medium text-gray-700">RT/RW</label>
                            <input type="text" id="rt_rw" name="rt_rw" placeholder="Contoh: 001/002" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="desa_kelurahan" class="block text-sm font-medium text-gray-700">Desa/Kelurahan</label>
                            <input type="text" id="desa_kelurahan" name="desa_kelurahan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="kabupaten" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                            <input type="text" id="kabupaten" name="kabupaten" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                            <input type="text" id="provinsi" name="provinsi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                         <div>
                            <label for="transportasi" class="block text-sm font-medium text-gray-700">Transportasi ke Sekolah</label>
                            <input type="text" id="transportasi" name="transportasi" placeholder="Contoh: Jalan Kaki, Sepeda, Diantar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="jarak_rumah_sekolah" class="block text-sm font-medium text-gray-700">Jarak Rumah ke Sekolah</label>
                            <input type="text" id="jarak_rumah_sekolah" name="jarak_rumah_sekolah" placeholder="Contoh: 1.5 km" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-between">
                        <button type="button" class="prev-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-6 rounded-lg">&larr; Sebelumnya</button>
                        <button type="button" class="next-btn bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Selanjutnya &rarr;</button>
                    </div>
                </div>

                <div id="tab3" class="tab-content">
                    <h3 class="text-lg font-medium text-gray-800 mb-4">Data Ayah</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                            <input type="text" id="nama_ayah" name="nama_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="nik_ayah" class="block text-sm font-medium text-gray-700">NIK Ayah</label>
                            <input type="text" id="nik_ayah" name="nik_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="tahun_lahir_ayah" class="block text-sm font-medium text-gray-700">Tahun Lahir Ayah</label>
                            <input type="number" id="tahun_lahir_ayah" name="tahun_lahir_ayah" placeholder="Contoh: 1985" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700">Pekerjaan Ayah</label>
                            <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="penghasilan_ayah" class="block text-sm font-medium text-gray-700">Penghasilan Ayah</label>
                            <input type="text" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Contoh: 3.000.000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="nohp_ayah" class="block text-sm font-medium text-gray-700">No. HP Ayah (Aktif)</label>
                            <input type="text" id="nohp_ayah" name="nohp_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 mt-8 mb-4">Data Ibu</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ibu" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                            <input type="text" id="nama_ibu" name="nama_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="nik_ibu" class="block text-sm font-medium text-gray-700">NIK Ibu</label>
                            <input type="text" id="nik_ibu" name="nik_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="tahun_lahir_ibu" class="block text-sm font-medium text-gray-700">Tahun Lahir Ibu</label>
                            <input type="number" id="tahun_lahir_ibu" name="tahun_lahir_ibu" placeholder="Contoh: 1987" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="pekerjaan_ibu" class="block text-sm font-medium text-gray-700">Pekerjaan Ibu</label>
                            <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="penghasilan_ibu" class="block text-sm font-medium text-gray-700">Penghasilan Ibu</label>
                            <input type="text" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Contoh: 1.500.000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                        <div>
                            <label for="nohp_ibu" class="block text-sm font-medium text-gray-700">No. HP Ibu (Aktif)</label>
                            <input type="text" id="nohp_ibu" name="nohp_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-between">
                        <button type="button" class="prev-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-6 rounded-lg">&larr; Sebelumnya</button>
                        <button type="button" class="next-btn bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Selanjutnya &rarr;</button>
                    </div>
                </div>

                <div id="tab4" class="tab-content">
                     <p class="text-sm text-gray-600 mb-4 bg-yellow-50 border border-yellow-200 p-3 rounded-md">Bagian ini bersifat opsional. Diisi hanya jika siswa tidak tinggal bersama orang tua kandung.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                       <div>
                            <label for="nama_wali" class="block text-sm font-medium text-gray-700">Nama Wali</label>
                            <input type="text" id="nama_wali" name="nama_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="nik_wali" class="block text-sm font-medium text-gray-700">NIK Wali</label>
                            <input type="text" id="nik_wali" name="nik_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="tahun_lahir_wali" class="block text-sm font-medium text-gray-700">Tahun Lahir Wali</label>
                            <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali" placeholder="Contoh: 1980" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="pekerjaan_wali" class="block text-sm font-medium text-gray-700">Pekerjaan Wali</label>
                            <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="penghasilan_wali" class="block text-sm font-medium text-gray-700">Penghasilan Wali</label>
                            <input type="text" id="penghasilan_wali" name="penghasilan_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div>
                            <label for="nohp_wali" class="block text-sm font-medium text-gray-700">No. HP Wali (Aktif)</label>
                            <input type="text" id="nohp_wali" name="nohp_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                        <div class="md:col-span-2">
                            <label for="hubungan_wali" class="block text-sm font-medium text-gray-700">Hubungan dengan Siswa</label>
                            <input type="text" id="hubungan_wali" name="hubungan_wali" placeholder="Contoh: Kakek, Nenek, Paman, dll." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-between items-center">
                        <button type="button" class="prev-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-6 rounded-lg">&larr; Sebelumnya</button>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg shadow-md transition duration-300 ease-in-out">
                            Kirim Formulir
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            const nextButtons = document.querySelectorAll('.next-btn');
            const prevButtons = document.querySelectorAll('.prev-btn');

            // Fungsi untuk beralih tab
            function switchTab(targetId) {
                // Sembunyikan semua konten tab
                tabContents.forEach(content => {
                    content.classList.remove('active');
                });
                
                // Non-aktifkan semua tombol tab
                tabs.forEach(tab => {
                    tab.classList.remove('border-blue-600', 'text-blue-600');
                    tab.classList.add('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                });

                // Aktifkan tab dan konten yang dituju
                const targetContent = document.getElementById(targetId);
                const targetButton = document.querySelector(`.tab-btn[data-target="${targetId}"]`);
                
                if (targetContent) {
                    targetContent.classList.add('active');
                }
                
                if (targetButton) {
                    targetButton.classList.add('border-blue-600', 'text-blue-600');
                    targetButton.classList.remove('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                }
            }

            // Atur tab pertama sebagai tab aktif saat halaman dimuat
            switchTab('tab1');

            // Tambahkan event listener untuk setiap tombol tab
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const targetId = tab.getAttribute('data-target');
                    switchTab(targetId);
                });
            });

            // Tambahkan event listener untuk tombol "Selanjutnya"
            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const currentContent = button.closest('.tab-content');
                    const currentId = parseInt(currentContent.id.replace('tab', ''));
                    const nextId = 'tab' + (currentId + 1);
                    switchTab(nextId);
                    window.scrollTo(0, 0); // Gulir ke atas halaman
                });
            });

            // Tambahkan event listener untuk tombol "Sebelumnya"
            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const currentContent = button.closest('.tab-content');
                    const currentId = parseInt(currentContent.id.replace('tab', ''));
                    const prevId = 'tab' + (currentId - 1);
                    switchTab(prevId);
                    window.scrollTo(0, 0); // Gulir ke atas halaman
                });
            });
        });
    </script>
</body>
</html>