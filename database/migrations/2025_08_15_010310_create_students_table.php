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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('admission_year_id')->constrained('admission_years')->onDelete('cascade');
            $table->string('full_name');
            $table->string('nickname')->nullable();
            $table->string('gender'); // Laki-laki atau Perempuan
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('nik')->unique();
            $table->string('kk_number')->nullable();
            $table->string('nisn')->nullable()->unique();
            $table->string('kindergarten')->nullable();
            $table->enum('status', ['draft', 'submitted', 'verified'])->default('submitted');
            $table->timestamps();
        });

        // // Skema untuk tabel `parents`
        // Schema::create('parents', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
        //     $table->enum('relation', ['ayah', 'ibu', 'wali']);
        //     $table->string('name');
        //     $table->string('nik')->nullable();
        //     $table->string('birth_year')->nullable();
        //     $table->string('occupation')->nullable();
        //     $table->string('education')->nullable();
        //     $table->string('phone_number')->nullable();
        //     $table->timestamps();
        // });

        // // Skema untuk tabel `documents`
        // Schema::create('documents', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
        //     $table->enum('document_type', ['foto', 'kk', 'akte']);
        //     $table->string('file_path');
        //     $table->timestamps();
        // });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        // Schema::dropIfExists('parents');
        // Schema::dropIfExists('documents');
    }
};
