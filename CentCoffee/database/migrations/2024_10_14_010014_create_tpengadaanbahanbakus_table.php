<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tpengadaanbahanbakus', function (Blueprint $table) {
            $table->char('kode_pengadaan_bahan_baku', 15)->primary();
            $table->char('subjek_pengadaan_bahan_baku', 50);
            $table->date('tanggal_pengadaan_bahan_baku');
            $table->time('waktu_pengadaan_bahan_baku');
            $table->text('catatan_pengadaan_bahan_baku');
            $table->enum('status_pengadaan_bahan_baku', ['Pending', 'Selesai']);
            $table->char('kode_pegawai', 15); // Foreign key ke tpegawais
            $table->char('kode_bahan_baku', 15); // Foreign key ke tbahanbakus
            $table->integer('jumlah_pengadaan');

           
            $table->foreign('kode_pegawai')
                ->references('kode_pegawai')
                ->on('tpegawais')
                ->onDelete('cascade');
            
            $table->foreign('kode_bahan_baku')
                ->references('kode_bahan_baku')
                ->on('tbahanbakus')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tpengadaanbahanbakus');
    }
};
