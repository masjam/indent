<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('indents', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }
// database/migrations/xxxx_xx_xx_create_indents_table.php

    public function up()
    {
        Schema::create('indents', function (Blueprint $table) {
            $table->id();
            // $table->enum('tahun_ajaran', ['2026/2027', '2027/2028', '2028/2029', '2029/2030', '2030/2031']);
            $table->enum('tahun_ajaran', ['2026-2027', '2027-2028', '2028-2029', '2029-2030', '2030-2031']);
            $table->string('nama_siswa');
            $table->string('nisn')->nullable();
            $table->string('nik');
            $table->string('no_kk');
            $table->string('asal_tk');
            $table->text('alamat');
            $table->text('provinsi');
            $table->text('kabupaten');
            $table->text('kecamatan');
            $table->text('desa');
            $table->string('rt');
            $table->string('rw');
            $table->integer('kode_pos');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya']);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('bahasa_sehari_hari')->nullable();
            $table->string('jarak_rumah_sekolah')->nullable();
            $table->string('waktu_tempuh_perjalanan')->nullable();
            $table->string('transportasi')->nullable();
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('foto')->nullable();

            // Ayah
            $table->string('nama_ayah')->nullable();
            $table->year('tahun_lahir_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nohp_ayah')->nullable();

            // Ibu
            $table->string('nama_ibu');
            $table->year('tahun_lahir_ibu');
            $table->string('nik_ibu')->nullable();;
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('nohp_ibu')->nullable();

            // Wali
            $table->string('nama_wali')->nullable();
            $table->year('tahun_lahir_wali')->nullable();       
            $table->string('nik_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('nohp_wali')->nullable();
            $table->string('hubungan_wali')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indents');
    }
};
