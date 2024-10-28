<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama lengkap
            $table->string('tempat_lahir'); // Tempat lahir
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->string('jenis_kelamin'); // Jenis kelamin
            $table->string('alamat'); // Alamat
            $table->string('program_studi'); // Program studi
            $table->string('email'); // Email
            $table->string('no_telp'); // Nomor telepon
            $table->string('nama_orang_tua'); // Nama orang tua
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
