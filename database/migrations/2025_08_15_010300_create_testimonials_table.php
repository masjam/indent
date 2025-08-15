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
                // Skema untuk tabel `testimonials`
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name'); // Nama orang tua
            $table->text('testimonial_text'); // Isi testimoni
            $table->string('image_path')->nullable(); // Path foto orang tua, bisa kosong
            $table->timestamps();
        });

       
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
              Schema::dropIfExists('testimonials');
        
    }
};
