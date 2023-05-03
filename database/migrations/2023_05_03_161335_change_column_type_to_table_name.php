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
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['foto1', 'foto2', 'foto3', 'foto_mhs']);
        });

        // Tambahkan kolom baru dengan tipe data string
        Schema::table('students', function (Blueprint $table) {
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto_mhs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus kolom yang baru ditambahkan
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['foto1', 'foto2', 'foto3', 'foto_mhs']);
        });

        // Tambahkan kembali kolom dengan tipe data binary
        Schema::table('students', function (Blueprint $table) {
            $table->binary('foto1');
            $table->binary('foto2');
            $table->binary('foto3');
            $table->binary('foto_mhs');
        });
    }
};
