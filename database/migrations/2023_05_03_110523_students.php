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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->string('judul');
            $table->longText('deskripsi');
            $table->string('dospem_1');
            $table->string('dospem_2');
            $table->string('bidang_minat');
            $table->binary('foto_mhs');
            $table->binary('foto1');
            $table->binary('foto2');
            $table->binary('foto3');
            $table->string('link_demo')->default('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
