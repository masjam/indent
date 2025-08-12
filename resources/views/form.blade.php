<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Indent Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Formulir Indent Siswa Baru</h1>
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
        @endif
        <form action="{{ route('indent.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label>Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>NISN</label>
                    <input type="text" name="nisn" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>NIK</label>
                    <input type="text" name="nik" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>No KK</label>
                    <input type="text" name="no_kk" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Asal TK/RA</label>
                    <input type="text" name="asal_tk" class="w-full border rounded p-2">
                </div>
                <div class="col-span-2">
                    <label>Alamat</label>
                    <textarea name="alamat" class="w-full border rounded p-2" required></textarea>
                </div>
                <div>
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Kabupaten/Kota</label>
                    <input type="text" name="kabupaten" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Desa/Kelurahan</label>
                    <input type="text" name="desa_kelurahan" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>RT/RW</label>
                    <input type="text" name="rt_rw" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="w-full border rounded p-2" required>
                        <option value="">Pilih</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label>Agama</label>
                    <select name="agama" class="w-full border rounded p-2" required>
                        <option value="">Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div>
                    <label>Anak Ke</label>
                    <input type="number" name="anak_ke" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Jumlah Saudara</label>
                    <input type="number" name="jumlah_saudara" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Bahasa Sehari-hari</label>
                    <input type="text" name="bahasa_sehari_hari" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Jarak Rumah ke Sekolah</label>
                    <input type="text" name="jarak_rumah_sekolah" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Waktu Tempuh Perjalanan</label>
                    <input type="text" name="waktu_tempuh_perjalanan" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Transportasi</label>
                    <input type="text" name="transportasi" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Kebutuhan Khusus</label>
                    <input type="text" name="kebutuhan_khusus" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Foto Siswa</label>
                    <input type="file" name="foto" class="w-full border rounded p-2" accept="image/*">
                </div>

                <!-- Data Ayah -->
                <div class="col-span-2 font-semibold text-lg">Data Ayah</div>
                <div>
                    <label>Nama Ayah</label>
                    <input type="text" name="nama_ayah" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Tahun Lahir Ayah</label>
                    <input type="number" name="tahun_lahir_ayah" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>NIK Ayah</label>
                    <input type="text" name="nik_ayah" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Penghasilan Ayah</label>
                    <input type="text" name="penghasilan_ayah" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>No HP Ayah</label>
                    <input type="text" name="nohp_ayah" class="w-full border rounded p-2" required>
                </div>

                <!-- Data Ibu -->
                <div class="col-span-2 font-semibold text-lg">Data Ibu</div>
                <div>
                    <label>Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Tahun Lahir Ibu</label>
                    <input type="number" name="tahun_lahir_ibu" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>NIK Ibu</label>
                    <input type="text" name="nik_ibu" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Penghasilan Ibu</label>
                    <input type="text" name="penghasilan_ibu" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>No HP Ibu</label>
                    <input type="text" name="nohp_ibu" class="w-full border rounded p-2" required>
                </div>
                <!-- Data Wali -->
                <div class="col-span-2 font-semibold text-lg">Data Wali (Jika Ada)</div>
                <div>
                    <label>Nama Wali</label>
                    <input type="text" name="nama_wali" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Tahun Lahir Wali</label>
                    <input type="number" name="tahun_lahir_wali" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>NIK Wali</label>
                    <input type="text" name="nik_wali" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Pekerjaan Wali</label>
                    <input type="text" name="pekerjaan_wali" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Penghasilan Wali</label>
                    <input type="text" name="penghasilan_wali" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>No HP Wali</label>
                    <input type="text" name="nohp_wali" class="w-full border rounded p-2">
                </div>
                <div>
                    <label>Hubungan Wali</label>
                    <input type="text" name="hubungan_wali" class="w-full border rounded p-2">
                </div>
            </div>
            <div class="mt-6">
                <button class="bg-blue-500 text-white px-6 py-2 rounded">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
