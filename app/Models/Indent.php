<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Indent extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahun_ajaran',
        'nama_siswa',
        'nik',
        'no_kk',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'rt',
        'rw',
        'kode_pos',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'anak_ke',
        'jumlah_saudara',
        'bahasa_sehari_hari',
        'jarak_rumah_sekolah',
        'waktu_tempuh_perjalanan',
        'transportasi',
        'kebutuhan_khusus',
        'foto',
        'nama_ayah',
        'tahun_lahir_ayah',
        'nik_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nohp_ayah',
        'nama_ibu',
        'tahun_lahir_ibu',
        'nik_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nohp_ibu',
        'nama_wali',
        'tahun_lahir_wali',
        'nik_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'nohp_wali',
        'hubungan_wali',
    ];
}
// 
