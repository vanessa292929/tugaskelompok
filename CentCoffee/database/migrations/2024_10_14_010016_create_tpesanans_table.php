<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tpesanans', function (Blueprint $table) {
            $table->char('kode_pesanan', 15)->primary();
            $table->char('nama_menu', 50); // Kolom untuk nama menu
            $table->date('tanggal_pesanan');
            $table->time('waktu_pesanan');
            $table->char('pembeli_pesanan', 50);
            $table->text('catatan_pesanan')->nullable();
            $table->integer('harga_pesanan');
            $table->integer('tunai_pesananan')->default(0);
            $table->enum('status_pesanan', ['P', 'D']);
            $table->char('kode_pegawai', 15);

            // Foreign key constraint
            $table->foreign('kode_pegawai')
                  ->references('kode_pegawai')
                  ->on('tpegawais')
                  ->onDelete('cascade'); // Tambahkan onDelete jika diperlukan

            $table->timestamps(); // Menambahkan timestamps untuk created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tpesanans');
    }
};
