<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('npm')->unique();
            $table->string('nama_mahasiswa',35)->nullable();
            $table->enum('jk',['L','P']);
            $table->date('tgl_lahir')->nullable();   // ← diperbaiki di sini
            $table->text('alamat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};