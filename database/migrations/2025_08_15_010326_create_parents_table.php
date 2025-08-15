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
        // Skema untuk tabel `students`
        
        // Skema untuk tabel `parents`
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->enum('relation', ['ayah', 'ibu', 'wali']);
            $table->string('name');
            $table->string('nik')->nullable();
            $table->string('birth_year')->nullable();
            $table->string('occupation')->nullable();
            $table->string('education')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamps();
        });

        // Skema untuk tabel `documents`
       
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        // Schema::dropIfExists('students');
        Schema::dropIfExists('parents');
        // Schema::dropIfExists('documents');
    }
};
