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
        Schema::create('perpustakaan_buku', function (Blueprint $table) {
            $table->id('no_buku');
            $table->string('judul', 200)->nullable(false);
            $table->string('edisi', 50)->nullable(false);
            $table->integer('no_rak')->unsigned()->nullable(false);
            $table->foreign('no_rak')->references('kd_rak')->on('rak');
            $table->year('tahun')->nullable(false);
            $table->string('penerbit', 100)->nullable(false);
            $table->integer('kd_penuliss')->unsigned()->nullable(false);
            $table->foreign('kd_penuliss')->references('kd_penuliss')->on('penulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpustakaan_buku');
    }
};
