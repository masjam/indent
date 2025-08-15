<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        
        Schema::create('admission_years', function (Blueprint $table) {
            $table->id();
            $table->string('year_name'); // Contoh: 2027-2028
            $table->boolean('is_active')->default(true); // Status aktif tahun pendaftaran
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('admission_years');
    }
};
