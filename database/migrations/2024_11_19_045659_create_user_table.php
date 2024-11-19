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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id('id_user');
            $table->unsignedBigInteger('id_level')->index();
            $table->string('nama');
            $table->string('username', 20)->unique();
            $table->string('password');
            $table->string('status')->default(0);
            $table->timestamps();

            $table->foreign('id_level')->references('id_level')->on('tb_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user');
    }
};
