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
        Schema::create('tpengadaanbahanbakus', function (Blueprint $table) {
            $table->char('kode_pengadaan_bahan_baku')->primary();
            $table->char('subjek_pengadaan_bahan_baku', 50);
            $table->date('tanggal_pengadaan_bahan_baku');
            $table->time('waktu_pengadaan_bahan_baku');
            $table->text('catatan_pengadaan_bahan_baku');
            $table->enum('status_pengadaan_bahan_baku', ['Pending', 'Selesai']);
            $table->char('kode_prioritas', 15);
            $table->char('kode_pegawai', 15);

            $table->foreign('kode_prioritas')->references('kode_prioritas')->on('tprioritas');
            $table->foreign('kode_pegawai')->references('kode_pegawai')->on('tpegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpengadaanbahanbakus');
    }
};
