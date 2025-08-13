<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indent;

class IndentController extends Controller
{
    public function index() {
        return view('indent.form');
    }

    public function store(Request $request) {
        $validated = $request->validate([
    'tahun_ajaran' => 'required|in:2027-2028,2028-2029,2029-2030,2030-2031,2031-2032',
    'nama_siswa' => 'required|string|max:255',
    'nisn' => 'nullable|string|digits:10',
    'nik' => 'required|string|digits:16',
    'no_kk' => 'nullable|string|digits:16',
    'asal_tk' => 'nullable|string',
    'alamat' => 'required|string',
    'provinsi' => 'required|string',
    'kabupaten' => 'required|string',
    'kecamatan' => 'required|string',
    'desa' => 'required|string',
    'rt' => 'required|string|max:5',
    'rw' => 'required|string|max:5',
    'kode_pos' => 'required|integer',
    'tempat_lahir' => 'required|string',
    'tanggal_lahir' => 'required|date',
    'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
    'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu,Lainnya',
    'anak_ke' => 'required|integer',
    'jumlah_saudara' => 'required|integer',
    'bahasa_sehari_hari' => 'nullable|string',
    'jarak_rumah_sekolah' => 'nullable|string',
    'waktu_tempuh_perjalanan' => 'nullable|string',
    'transportasi' => 'nullable|string',
    'kebutuhan_khusus' => 'nullable|string',
    'foto' => 'nullable|image|max:2048',
    // Data Ayah
    'nama_ayah' => 'nullable|string',
    'tahun_lahir_ayah' => 'nullable|integer',
    'nik_ayah' => 'nullable|string|digits:16',
    'pekerjaan_ayah' => 'nullable|string',
    'penghasilan_ayah' => 'nullable|string',
    'nohp_ayah' => 'nullable|string',
    // Data Ibu
    'nama_ibu' => 'required|string',
    'tahun_lahir_ibu' => 'required|integer',
    'nik_ibu' => 'nullable|string|digits:16',
    'pekerjaan_ibu' => 'nullable|string',
    'penghasilan_ibu' => 'nullable|string',
    'nohp_ibu' => 'nullable|string',
    // Data Wali
    'nama_wali' => 'nullable|string',
    'tahun_lahir_wali' => 'nullable|integer',
    'nik_wali' => 'nullable|string|digits:16',
    'pekerjaan_wali' => 'nullable|string',
    'penghasilan_wali' => 'nullable|string',
    'nohp_wali' => 'nullable|string',
    'hubungan_wali' => 'nullable|string',
]);

    // Logika untuk menyimpan file foto jika ada
    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('photos', 'public');
        $validated['foto'] = $path;
    }

    Indent::create($validated);
    return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
