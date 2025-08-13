<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Indent Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Sembunyikan konten tab secara default */
        .tab-content {
            display: none;
        }
        /* Tampilkan konten tab yang aktif */
        .tab-content.active {
            display: block;
        }
        /* Styling untuk input yang tidak valid */
        .invalid-input {
            border-color: #ef4444; /* red-500 */
            box-shadow: 0 0 0 2px #fecaca; /* red-200 */
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Formulir Indent SPMB</h1>
            <h2 class="text-xl text-gray-600 mt-2">SD Al Mujahidin Wonosari</h2>
            <p class="text-gray-500">Silakan isi data di bawah ini dengan lengkap dan benar.</p>
        </div>

        <div id="client-side-error" class="hidden bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
            <p class="font-bold">Gagal Mengirim</p>
            <p>Harap periksa kembali. Pastikan semua kolom yang wajib diisi telah Anda lengkapi.</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
                <p class="font-bold">Whoops! Ada beberapa masalah dengan input Anda.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="indentForm" action="{{ route('indent.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Navigasi Tab -->
            <div class="mb-6 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px" id="myTab" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab1">Data Siswa</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab2">Alamat</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab3">Data Ayah</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab4">Data Ibu</button>
                    </li>
                    <li role="presentation">
                        <button class="tab-btn inline-block p-4 border-b-2 rounded-t-lg" type="button" role="tab" data-target="tab5">Data Wali</button>
                    </li>
                </ul>
            </div>

            <!-- Konten Tab -->
            <div id="tab-content-container">
                <!-- Tab 1: Data Siswa -->
                <div id="tab1" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tahun_ajaran" class="block text-sm font-medium text-gray-700">Tahun Ajaran</label>
                            <select id="tahun_ajaran" name="tahun_ajaran" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
                                <option value="">Pilih Tahun Masuk</option>
                                <option value="2026-2027" @if(old('tahun_ajaran') == '2026-2027') selected @endif>2026/2027</option>
                                <option value="2027-2028" @if(old('tahun_ajaran') == '2027-2028') selected @endif>2027/2028</option>
                                <option value="2028-2029" @if(old('tahun_ajaran') == '2028-2029') selected @endif>2028/2029</option>
                                <option value="2029-2030" @if(old('tahun_ajaran') == '2029-2030') selected @endif>2029/2030</option>
                                <option value="2030-2031" @if(old('tahun_ajaran') == '2030-2031') selected @endif>2030/2031</option>
                            </select>
                        </div>
                        <div>
                            <label for="nama_siswa" class="block text-sm font-medium text-gray-700">Nama Lengkap Siswa</label>
                            <input type="text" id="nama_siswa" name="nama_siswa" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('nama_siswa') }}">
                        </div>
                        <div>
                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                            <input type="text" id="nisn" name="nisn" minlength="10" maxlength="10" pattern="\d{10}" title="NISN harus 10 digit angka" class="numeric-input mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nisn') }}">
                        </div>
                        <div>
                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK Siswa</label>
                            <input type="text" id="nik" name="nik" minlength="16" maxlength="16" pattern="\d{16}" title="NIK harus 16 digit angka" class="numeric-input mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('nik') }}">
                        </div>
                        <div>
                            <label for="no_kk" class="block text-sm font-medium text-gray-700">No. Kartu Keluarga (KK)</label>
                            <input type="text" id="no_kk" name="no_kk" minlength="16" maxlength="16" pattern="\d{16}" title="No. KK harus 16 digit angka" class="numeric-input mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('no_kk') }}">
                        </div>
                        <div>
                            <label for="asal_tk" class="block text-sm font-medium text-gray-700">Asal TK/RA</label>
                            <input type="text" id="asal_tk" name="asal_tk" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('asal_tk') }}">
                        </div>
                        <div>
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('tempat_lahir') }}">
                        </div>
                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('tanggal_lahir') }}">
                        </div>
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" @if(old('jenis_kelamin') == 'Laki-laki') selected @endif>Laki-laki</option>
                                <option value="Perempuan" @if(old('jenis_kelamin') == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                            <select id="agama" name="agama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>
                                <option value="">Pilih Agama</option>
                                <option value="Islam" @if(old('agama') == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if(old('agama') == 'Kristen') selected @endif>Kristen</option>
                                <option value="Katolik" @if(old('agama') == 'Katolik') selected @endif>Katolik</option>
                                <option value="Hindu" @if(old('agama') == 'Hindu') selected @endif>Hindu</option>
                                <option value="Buddha" @if(old('agama') == 'Buddha') selected @endif>Buddha</option>
                                <option value="Konghucu" @if(old('agama') == 'Konghucu') selected @endif>Konghucu</option>
                                <option value="Lainnya" @if(old('agama') == 'Lainnya') selected @endif>Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="anak_ke" class="block text-sm font-medium text-gray-700">Anak Ke</label>
                            <input type="number" id="anak_ke" name="anak_ke" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('anak_ke') }}">
                        </div>
                        <div>
                            <label for="jumlah_saudara" class="block text-sm font-medium text-gray-700">Jumlah Saudara Kandung</label>
                            <input type="number" id="jumlah_saudara" name="jumlah_saudara" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('jumlah_saudara') }}">
                        </div>
                        <div>
                            <label for="bahasa_sehari_hari" class="block text-sm font-medium text-gray-700">Bahasa Sehari-hari</label>
                            <input type="text" id="bahasa_sehari_hari" name="bahasa_sehari_hari" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('bahasa_sehari_hari') }}">
                        </div>
                        <div>
                            <label for="kebutuhan_khusus" class="block text-sm font-medium text-gray-700">Kebutuhan Khusus</label>
                            <input type="text" id="kebutuhan_khusus" name="kebutuhan_khusus" placeholder="(kosongi jika tidak ada)" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('kebutuhan_khusus') }}">
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

                <!-- Tab 2: Alamat -->
                <div id="tab2" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap (Nama Jalan/Dusun)</label>
                            <textarea id="alamat" name="alamat" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>{{ old('alamat') }}</textarea>
                        </div>
                        <div>
                            <label for="rt" class="block text-sm font-medium text-gray-700">RT</label>
                            <input type="text" id="rt" name="rt" placeholder="Contoh: 001" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('rt') }}">
                        </div>
                        <div>
                            <label for="rw" class="block text-sm font-medium text-gray-700">RW</label>
                            <input type="text" id="rw" name="rw" placeholder="Contoh: 002" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('rw') }}">
                        </div>
                        <div>
                            <label for="desa" class="block text-sm font-medium text-gray-700">Desa/Kelurahan</label>
                            <input type="text" id="desa" name="desa" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('desa') }}">
                        </div>
                        <div>
                            <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('kecamatan') }}">
                        </div>
                        <div>
                            <label for="kabupaten" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                            <input type="text" id="kabupaten" name="kabupaten" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('kabupaten') }}">
                        </div>
                        <div>
                            <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                            <input type="text" id="provinsi" name="provinsi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('provinsi') }}">
                        </div>
                        <div>
                            <label for="kode_pos" class="block text-sm font-medium text-gray-700">Kode Pos</label>
                            <input type="number" id="kode_pos" name="kode_pos" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('kode_pos') }}">
                        </div>
                         <div>
                            <label for="transportasi" class="block text-sm font-medium text-gray-700">Transportasi ke Sekolah</label>
                            <input type="text" id="transportasi" name="transportasi" placeholder="Contoh: Jalan Kaki, Sepeda, Diantar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('transportasi') }}">
                        </div>
                        <div>
                            <label for="jarak_rumah_sekolah" class="block text-sm font-medium text-gray-700">Jarak Rumah ke Sekolah</label>
                            <input type="text" id="jarak_rumah_sekolah" name="jarak_rumah_sekolah" placeholder="Contoh: 1.5 km" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('jarak_rumah_sekolah') }}">
                        </div>
                         <div>
                            <label for="waktu_tempuh_perjalanan" class="block text-sm font-medium text-gray-700">Waktu Tempuh</label>
                            <input type="text" id="waktu_tempuh_perjalanan" name="waktu_tempuh_perjalanan" placeholder="Contoh: 15 menit" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('waktu_tempuh_perjalanan') }}">
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-between">
                        <button type="button" class="prev-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-6 rounded-lg">&larr; Sebelumnya</button>
                        <button type="button" class="next-btn bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Selanjutnya &rarr;</button>
                    </div>
                </div>

                <!-- Tab 3: Data Ayah -->
                <div id="tab3" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                            <input type="text" id="nama_ayah" name="nama_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nama_ayah') }}">
                        </div>
                        <div>
                            <label for="nik_ayah" class="block text-sm font-medium text-gray-700">NIK Ayah</label>
                            <input type="text" id="nik_ayah" name="nik_ayah" minlength="16" maxlength="16" pattern="\d{16}" title="NIK harus 16 digit angka" class="numeric-input mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nik_ayah') }}">
                        </div>
                        <div>
                            <label for="tahun_lahir_ayah" class="block text-sm font-medium text-gray-700">Tahun Lahir Ayah</label>
                            <input type="number" id="tahun_lahir_ayah" name="tahun_lahir_ayah" placeholder="Contoh: 1985" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('tahun_lahir_ayah') }}">
                        </div>
                        <div>
                            <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700">Pekerjaan Ayah</label>
                            <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('pekerjaan_ayah') }}">
                        </div>
                        <div>
                            <label for="penghasilan_ayah" class="block text-sm font-medium text-gray-700">Penghasilan Ayah</label>
                            <input type="text" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Contoh: 3.000.000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('penghasilan_ayah') }}">
                        </div>
                        <div>
                            <label for="nohp_ayah" class="block text-sm font-medium text-gray-700">No. HP Ayah (Aktif)</label>
                            <input type="text" id="nohp_ayah" name="nohp_ayah" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nohp_ayah') }}">
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-between">
                        <button type="button" class="prev-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-6 rounded-lg">&larr; Sebelumnya</button>
                        <button type="button" class="next-btn bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Selanjutnya &rarr;</button>
                    </div>
                </div>

                <!-- Tab 4: Data Ibu -->
                <div id="tab4" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ibu" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                            <input type="text" id="nama_ibu" name="nama_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('nama_ibu') }}">
                        </div>
                        <div>
                            <label for="nik_ibu" class="block text-sm font-medium text-gray-700">NIK Ibu</label>
                            <input type="text" id="nik_ibu" name="nik_ibu" minlength="16" maxlength="16" pattern="\d{16}" title="NIK harus 16 digit angka" class="numeric-input mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nik_ibu') }}">
                        </div>
                        <div>
                            <label for="tahun_lahir_ibu" class="block text-sm font-medium text-gray-700">Tahun Lahir Ibu</label>
                            <input type="number" id="tahun_lahir_ibu" name="tahun_lahir_ibu" placeholder="Contoh: 1987" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required value="{{ old('tahun_lahir_ibu') }}">
                        </div>
                        <div>
                            <label for="pekerjaan_ibu" class="block text-sm font-medium text-gray-700">Pekerjaan Ibu</label>
                            <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('pekerjaan_ibu') }}">
                        </div>
                        <div>
                            <label for="penghasilan_ibu" class="block text-sm font-medium text-gray-700">Penghasilan Ibu</label>
                            <input type="text" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Contoh: 1.500.000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('penghasilan_ibu') }}">
                        </div>
                        <div>
                            <label for="nohp_ibu" class="block text-sm font-medium text-gray-700">No. HP Ibu (Aktif)</label>
                            <input type="text" id="nohp_ibu" name="nohp_ibu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nohp_ibu') }}">
                        </div>
                    </div>
                    <div class="mt-8 pt-5 border-t flex justify-between">
                        <button type="button" class="prev-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-6 rounded-lg">&larr; Sebelumnya</button>
                        <button type="button" class="next-btn bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Selanjutnya &rarr;</button>
                    </div>
                </div>

                <!-- Tab 5: Data Wali -->
                <div id="tab5" class="tab-content">
                     <p class="text-sm text-gray-600 mb-4 bg-yellow-50 border border-yellow-200 p-3 rounded-md">Bagian ini bersifat opsional. Diisi hanya jika siswa tidak tinggal bersama orang tua kandung.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                       <div>
                            <label for="nama_wali" class="block text-sm font-medium text-gray-700">Nama Wali</label>
                            <input type="text" id="nama_wali" name="nama_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nama_wali') }}">
                        </div>
                        <div>
                            <label for="nik_wali" class="block text-sm font-medium text-gray-700">NIK Wali</label>
                            <input type="text" id="nik_wali" name="nik_wali" minlength="16" maxlength="16" pattern="\d{16}" title="NIK harus 16 digit angka" class="numeric-input mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nik_wali') }}">
                        </div>
                        <div>
                            <label for="tahun_lahir_wali" class="block text-sm font-medium text-gray-700">Tahun Lahir Wali</label>
                            <input type="number" id="tahun_lahir_wali" name="tahun_lahir_wali" placeholder="Contoh: 1980" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('tahun_lahir_wali') }}">
                        </div>
                        <div>
                            <label for="pekerjaan_wali" class="block text-sm font-medium text-gray-700">Pekerjaan Wali</label>
                            <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('pekerjaan_wali') }}">
                        </div>
                        <div>
                            <label for="penghasilan_wali" class="block text-sm font-medium text-gray-700">Penghasilan Wali</label>
                            <input type="text" id="penghasilan_wali" name="penghasilan_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('penghasilan_wali') }}">
                        </div>
                        <div>
                            <label for="nohp_wali" class="block text-sm font-medium text-gray-700">No. HP Wali (Aktif)</label>
                            <input type="text" id="nohp_wali" name="nohp_wali" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('nohp_wali') }}">
                        </div>
                        <div class="md:col-span-2">
                            <label for="hubungan_wali" class="block text-sm font-medium text-gray-700">Hubungan dengan Siswa</label>
                            <input type="text" id="hubungan_wali" name="hubungan_wali" placeholder="Contoh: Kakek, Nenek, Paman, dll." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" value="{{ old('hubungan_wali') }}">
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

    <!-- Modal untuk notifikasi sukses -->
    <div id="successModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" @if(session('success')) data-show="true" @endif>
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                    <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="text-lg leading-6 font-medium text-gray-900 mt-2">Berhasil!</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">{{ session('success') }}</p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="closeModal" class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('indentForm');
            const tabs = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            const nextButtons = document.querySelectorAll('.next-btn');
            const prevButtons = document.querySelectorAll('.prev-btn');
            const successModal = document.getElementById('successModal');
            const closeModalBtn = document.getElementById('closeModal');
            const clientSideError = document.getElementById('client-side-error');

            function switchTab(targetId) {
                tabContents.forEach(content => content.classList.remove('active'));
                tabs.forEach(tab => {
                    tab.classList.remove('border-blue-600', 'text-blue-600');
                    tab.classList.add('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                });

                const targetContent = document.getElementById(targetId);
                const targetButton = document.querySelector(`.tab-btn[data-target="${targetId}"]`);
                
                if (targetContent) targetContent.classList.add('active');
                if (targetButton) {
                    targetButton.classList.add('border-blue-600', 'text-blue-600');
                    targetButton.classList.remove('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                }
            }

            switchTab('tab1');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => switchTab(tab.getAttribute('data-target')));
            });

            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const currentId = parseInt(button.closest('.tab-content').id.replace('tab', ''));
                    switchTab('tab' + (currentId + 1));
                    window.scrollTo(0, 0);
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const currentId = parseInt(button.closest('.tab-content').id.replace('tab', ''));
                    switchTab('tab' + (currentId - 1));
                    window.scrollTo(0, 0);
                });
            });

            document.querySelectorAll('.numeric-input').forEach(input => {
                input.addEventListener('input', function (e) {
                    e.target.value = e.target.value.replace(/[^0-9]/g, '');
                });
            });

            form.addEventListener('submit', function(event) {
                let firstInvalidField = null;
                clientSideError.classList.add('hidden');

                form.querySelectorAll('[required]').forEach(el => {
                    el.classList.remove('invalid-input');
                });

                for (const el of form.querySelectorAll('[required]')) {
                    if (!el.value.trim()) {
                        el.classList.add('invalid-input');
                        if (!firstInvalidField) {
                            firstInvalidField = el;
                        }
                    }
                }

                if (firstInvalidField) {
                    event.preventDefault(); 
                    clientSideError.classList.remove('hidden');
                    
                    const invalidTab = firstInvalidField.closest('.tab-content');
                    if (invalidTab) {
                        switchTab(invalidTab.id);
                    }
                    
                    clientSideError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    firstInvalidField.focus();
                }
            });

            // Tampilkan modal jika ada data-show="true"
            if (successModal && successModal.dataset.show === 'true') {
                successModal.classList.remove('hidden');
            }

            if(closeModalBtn) {
                closeModalBtn.addEventListener('click', function() {
                    successModal.classList.add('hidden');
                });
            }
        });
    </script>
</body>
</html>
