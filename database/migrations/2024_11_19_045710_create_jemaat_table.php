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
        Schema::create('tb_jemaat', function (Blueprint $table) {
            $table->id('id_jemaat');
            $table->string('nama_lengkap', 255);
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']); // Jenis kelamin
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('no_telepon', 30);
            $table->string('email', 255)->unique();
            $table->enum('status_perkawinan', ['Belum Menikah', 'Menikah', 'Janda', 'Duda'])->nullable(); // Status perkawinan
            $table->string('pekerjaan', 100); // Pekerjaan jemaat
            $table->date('tanggal_baptisan')->nullable(); // Tanggal baptisan jemaat
            $table->date('tanggal_pernikahan')->nullable(); // Tanggal pernikahan jemaat
            $table->enum('status_keanggotaan', ['Aktif', 'Non Aktif', 'Tidak Terdefinisi'])->default('Tidak Terdefinisi'); // Status keanggotaan jemaat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jemaat');
    }
};
