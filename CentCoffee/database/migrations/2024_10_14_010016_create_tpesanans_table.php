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
        Schema::create('tpesanans', function (Blueprint $table) {
            $table->char('kode_pesanan', 15)->primary();
            $table->date('tanggal_pesanan');
            $table->time('waktu_pesanan');
            $table->char('pembeli_pesanan', 50);
            $table->text('catatan_pesanan');
            $table->integer('harga_pesanan');
            $table->integer('tunai_pesananan');
            $table->enum('status_pesanan', ['P','D']);
            $table->char('kode_pegawai', 15);
            $table->char('kode_perangkat', 15);

            $table->foreign('kode_pegawai')->references('kode_pegawai')->on('tpegawais');
            $table->foreign('kode_perangkat')->references('kode_perangkat')->on('tperangkats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpesanans');
    }
};
