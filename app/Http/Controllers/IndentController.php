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
            'tahun_ajaran' => 'required',
            'nama_siswa' => 'required',
            'nik' => 'required',
            'no_kk' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kode_pos' => 'required|integer',
            'tempat_lahir' => 'required',
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
            'nama_ayah' => 'nullable|string',
            'tahun_lahir_ayah' => 'nullable|integer',
            'nik_ayah' => 'nullable|string',
            'pekerjaan_ayah' => 'nullable|string',
            'penghasilan_ayah' => 'nullable|integer',
            'nohp_ayah' => 'nullable|string',
            'nama_ibu' => 'required',
            'tahun_lahir_ibu' => 'required',
            'nik_ibu' => 'nullable|string',
            'pekerjaan_ibu' => 'nullable|string',
            'penghasilan_ibu' => 'nullable|integer',
            'nohp_ibu' => 'nullable|string',
            'nama_wali' => 'nullable|string',
            'tahun_lahir_wali' => 'nullable|integer',
            'nik_wali' => 'nullable|string',
            'pekerjaan_wali' => 'nullable|string',
            'penghasilan_wali' => 'nullable|integer',
            'nohp_wali' => 'nullable|string',
            'hubungan_wali' => 'nullable|string',
            
        ]);

        Indent::create($validated);
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
