<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->string('kode_daftar')->primary();
            $table->string('nama');
            $table->string('nim');
            $table->string('prodi');
            $table->string('angkatan');
            $table->string('cabang_olahraga');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar');
    }
};
