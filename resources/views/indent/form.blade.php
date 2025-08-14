<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4 text-center">Formulir Pendaftaran</h1>

    <form id="regForm">

        <!-- Tab 1: Tahun Ajaran -->
        <div class="tab">
            <h2 class="text-lg font-semibold mb-2">Tahun Ajaran</h2>
            <label class="block mb-1">Tahun Ajaran *</label>
            <select name="tahun_ajaran" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Tahun Ajaran --</option>
                {{-- <option class="disabled">2025/2026</option> --}}
                {{-- <option>2026/2027</option> --}}
                <option>2027/2028</option>
                <option>2028/2029</option>
                <option>2029/2030</option>
                <option>2030/2031</option>
                <option>2031/2032</option>

            </select>
        </div>

        <!-- Tab 2: Data Siswa -->
        <div class="tab hidden">
    <h2 class="text-lg font-semibold mb-2">Data Siswa</h2>

    <!-- Nama Lengkap (Full Width) -->
    <label class="block mt-3 mb-1">Nama Lengkap *</label>
    <input type="text" name="nama_siswa" class="w-full border rounded p-2" required>

    <!-- 2 Kolom -->
    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label class="block mb-1">Nama Panggilan *</label>
            <input type="text" name="nama_panggilan" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block mb-1">Jenis Kelamin *</label>
            <select name="jenis_kelamin" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div>
            <label class="block mb-1">Tempat Lahir *</label>
            <input type="text" name="tempat_lahir" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block mb-1">Tanggal Lahir *</label>
            <input type="date" name="tanggal_lahir" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block mb-1">NIK *</label>
            <input type="text" name="nik" pattern="\d{16}" maxlength="16" minlength="16"
                class="w-full border rounded p-2" required title="NIK harus 16 digit angka">
        </div>
        <div>
            <label class="block mb-1">No KK *</label>
            <input type="text" name="no_kk" pattern="\d{16}" maxlength="16" minlength="16"
                class="w-full border rounded p-2" required title="Nomor KK harus 16 digit angka">
        </div>
        <div>
            <label class="block mb-1">NISN</label>
            <input type="text" name="nisn" pattern="\d{10}" maxlength="10" minlength="10"
                class="w-full border rounded p-2" title="NISN harus 10 digit angka">
        </div>
        <div>
            <label class="block mb-1">Asal TK</label>
            <input type="text" name="asal_tk" class="w-full border rounded p-2">
        </div>
    </div>

    <!-- 3 Kolom Upload -->
    <div class="grid grid-cols-3 gap-4 mt-4">
        <div>
            <label class="block mb-1">Foto *</label>
            <input type="file" name="foto" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block mb-1">Kartu Keluarga *</label>
            <input type="file" name="kartu_keluarga" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block mb-1">Akte Kelahiran *</label>
            <input type="file" name="akte_kelahiran" class="w-full border rounded p-2" required>
        </div>
    </div>
</div>


        <!-- Tab 3: Alamat -->
        <div class="tab hidden">
            <h2 class="text-lg font-semibold mb-2">Alamat</h2>
            <label class="block mb-1">Alamat Lengkap *</label>
            <textarea name="alamat" class="w-full border rounded p-2" required></textarea>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block mt-3 mb-1">Kelurahan *</label>
                    <input type="text" name="kelurahan" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block mt-3 mb-1">Kecamatan *</label>
                    <input type="text" name="kecamatan" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block mt-3 mb-1">Kota/Kabupaten *</label>
                    <input type="text" name="kota" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block mt-3 mb-1">Provinsi *</label>
                    <input type="text" name="provinsi" class="w-full border rounded p-2" required>
                </div>
            </div>
        </div>


        <!-- Tab 4: Data Orang Tua -->
        <div class="tab hidden">
            <h2 class="text-lg font-semibold mb-2">Data Ayah</h2>
            <label class="block mb-1">Nama Ayah *</label>
            <input type="text" name="nama_ayah" class="w-full border rounded p-2" >
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block mt-3 mb-1">NIK Ayah*</label>
                    <input type="text" name="nik_ayah" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Tahun Lahir *</label>
                    <input type="text" name="pekerjaan_ayah" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">No HP Ayah *</label>
                    <input type="text" name="no_hp_ayah" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Pendidikan Ayah *</label>
                    <input type="text" name="pendidikan_ayah" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Pekerjaan Ayah *</label>
                    <input type="text" name="pekerjaan_ayah" class="w-full border rounded p-2" >
                </div>
            </div>
        </div>
        {{-- Data Ibu  --}}
        <div class="tab hidden">
           <h2 class="text-lg font-semibold mb-2">Data Ibu</h2>
            <label class="block mb-1">Nama Ibu *</label>
            <input type="text" name="nama_ibu" class="w-full border rounded p-2" required>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block mt-3 mb-1">NIK Ibu*</label>
                    <input type="text" name="nik_ibu" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Tahun Lahir *</label>
                    <input type="text" name="tahun_lahir_ibu" class="w-full border rounded p-2" required >
                </div>
                <div>
                    <label class="block mt-3 mb-1">No HP Ibu *</label>
                    <input type="text" name="no_hp_ibu" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Pendidikan Ibu *</label>
                    <input type="text" name="pendidikan_ibu" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Pekerjaan Ibu *</label>
                    <input type="text" name="pekerjaan_ibu" class="w-full border rounded p-2" >
                </div>
            </div>
        </div>
        <!-- Tab 5: Data Wali -->
        <div class="tab hidden">
            <h2 class="text-lg font-semibold mb-2">Data Wali</h2>
            <label class="block mb-1">Nama Wali *</label>
            <input type="text" name="nama_wali" class="w-full border rounded p-2" >
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block mt-3 mb-1">NIK Wali *</label>
                    <input type="text" name="nik_wali" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Tahun Lahir Wali *</label>
                    <input type="text" name="tahun_lahir_wali" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">No HP Wali *</label>
                    <input type="text" name="no_hp_wali" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Pendidikan Wali *</label>
                    <input type="text" name="pendidikan_wali" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Pekerjaan Wali *</label>
                    <input type="text" name="pekerjaan_wali" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Hubungan Wali *</label>
                    <input type="text" name="hubungan_wali" class="w-full border rounded p-2" >
                </div>
                <div>
                    <label class="block mt-3 mb-1">Alamat Wali *</label>
                    <textarea name="alamat_wali" class="w-full border rounded p-2" >
                    </textarea>
                </div>
            </div>
        </div>

        <!-- Tab 6: Konfirmasi -->
        <div class="tab hidden">
            <h2 class="text-lg font-semibold mb-2">Konfirmasi</h2>
            <p>Periksa kembali data yang telah Anda masukkan sebelum mengirimkan formulir.</p>
        </div>

        <!-- Navigation Buttons -->
        <div class="mt-6 flex justify-between">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="bg-gray-500 text-white px-4 py-2 rounded hidden">Sebelumnya</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="bg-blue-500 text-white px-4 py-2 rounded">Berikutnya</button>
        </div>
    </form>
</div>

<script>
let currentTab = 0;
const tabs = document.querySelectorAll(".tab");
showTab(currentTab);

function showTab(n) {
    tabs.forEach((tab, index) => {
        tab.classList.toggle("hidden", index !== n);
    });
    document.getElementById("prevBtn").classList.toggle("hidden", n === 0);
    document.getElementById("nextBtn").innerText = (n === tabs.length - 1) ? "Kirim" : "Berikutnya";
}

function nextPrev(n) {
    if (n === 1 && !validateForm()) return false;
    currentTab += n;
    if (currentTab >= tabs.length) {
        document.getElementById("regForm").submit();
        return false;
    }
    showTab(currentTab);
}

function validateForm() {
    let valid = true;
    const inputs = tabs[currentTab].querySelectorAll("input[required], textarea[required], select[required]");
    inputs.forEach(input => {
        let value = input.value.trim();
        if (input.name === "nik" || input.name === "no_kk") {
            if (!/^\d{16}$/.test(value)) { valid = false; input.classList.add("border-red-500"); }
            else { input.classList.remove("border-red-500"); }
        } else if (input.name === "nisn") {
            if (!/^\d{10}$/.test(value)) { valid = false; input.classList.add("border-red-500"); }
            else { input.classList.remove("border-red-500"); }
        } else {
            if (!value) { valid = false; input.classList.add("border-red-500"); }
            else { input.classList.remove("border-red-500"); }
        }
    });
    return valid;
}
</script>

</body>
</html>
