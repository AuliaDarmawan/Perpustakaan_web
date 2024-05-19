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
        Schema::create('perpustakaan_penulis', function (Blueprint $table) {
            $table->id('kd_penulis');
            $table->string('nama_penulis', 150)->nullable(false);
            $table->string('tempat_lahir', 100)->nullable(false);
            $table->date('tgl_lahir')->nullable(false);
            $table->string('email', 150)->unique()->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpustakaan_penulis');
    }
};
