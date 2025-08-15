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
        // Skema untuk tabel `announcements`
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul pengumuman
            $table->string('image_path')->nullable(); // Path gambar slider, bisa kosong
            $table->text('content'); // Konten pengumuman
            $table->timestamps();
        });

        
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
        
    }
};
